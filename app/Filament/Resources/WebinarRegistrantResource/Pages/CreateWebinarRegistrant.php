<?php

namespace App\Filament\Resources\WebinarRegistrantResource\Pages;

use App\Filament\Resources\WebinarRegistrantResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;
use App\Models\WebinarRegistrant;
use App\Services\MidtransService;
use Filament\Notifications\Notification;

class CreateWebinarRegistrant extends CreateRecord
{
    protected static string $resource = WebinarRegistrantResource::class;

    // Override proses sebelum data disimpan
    protected function mutateFormDataBeforeCreate(array $data): array
    {
        // Generate kode referral unik untuk user baru
        $data['referral_code'] = $this->generateReferralCode();
        
        // Set product details
        $data['product_name'] = 'Bootcamp Market Hacking with AI';
        $data['product_price'] = config('services.midtrans.price', 2500000);
        $data['order_id'] = 'Bootcamp-' . uniqid();
        $data['invoice_token'] = \Illuminate\Support\Str::uuid();

        // Logika referral: validasi kode referral saja, tanpa pemberian cashback di sini
        if (!empty($data['referred_by'])) {
            $referrer = WebinarRegistrant::where('referral_code', $data['referred_by'])->first();
            if (!$referrer) {
                // Jika kode referral tidak valid, kosongkan
                $data['referred_by'] = null;
            }
        }
        return $data;
    }

    // Fungsi untuk generate kode referral unik
    private function generateReferralCode(): string
    {
        do {
            $code = strtoupper(substr(md5(uniqid(rand(), true)), 0, 8));
        } while (WebinarRegistrant::where('referral_code', $code)->exists());
        return $code;
    }

    // Setelah registrasi, generate Snap Token dan redirect ke pembayaran Midtrans
    protected function afterCreate(): void
    {
        $registrant = $this->record;
        $midtrans = new MidtransService();
        // Simpan dulu agar id pasti ada
        $registrant->save();
        // Siapkan parameter pembayaran
        $params = [
            'transaction_details' => [
                'order_id' => $registrant->order_id,
                'gross_amount' => $registrant->product_price, // Nominal pembayaran
            ],
            'customer_details' => [
                'first_name' => $registrant->name,
                'email' => $registrant->email,
                'phone' => $registrant->phone,
            ],
            'callbacks' => [
                'finish' => url('/invoice/' . $registrant->id . '/' . $registrant->invoice_token),
                'unfinish' => url('/invoice/' . $registrant->id . '/' . $registrant->invoice_token),
                'error' => url('/invoice/' . $registrant->id . '/' . $registrant->invoice_token),
            ],
        ];
        // Generate Snap Token
        $snapToken = $midtrans->createSnapToken($params);
        // Simpan Snap Token ke database
        $registrant->snap_token = $snapToken;
        $registrant->save();
        $midtransUrl = config('services.midtrans.is_production')
            ? 'https://app.midtrans.com/snap/v2/vtweb/'
            : 'https://app.sandbox.midtrans.com/snap/v2/vtweb/';
        // Tampilkan notifikasi sukses dengan link pembayaran
        Notification::make()
            ->title('Registrasi Berhasil')
            ->body('Klik <a href="' . $midtransUrl . $snapToken . '" target="_blank">di sini</a> untuk melakukan pembayaran.')
            ->success()
            ->send();
    }
}
