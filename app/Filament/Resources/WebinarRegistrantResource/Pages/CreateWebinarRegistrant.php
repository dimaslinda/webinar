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
        // Siapkan parameter pembayaran
        $params = [
            'transaction_details' => [
                'order_id' => 'WEBINAR-' . $registrant->id . '-' . time(),
                'gross_amount' => 50000, // Nominal pembayaran
            ],
            'customer_details' => [
                'first_name' => $registrant->name,
                'email' => $registrant->email,
                'phone' => $registrant->phone,
            ],
        ];
        // Generate Snap Token
        $snapToken = $midtrans->createSnapToken($params);
        // Simpan Snap Token ke database
        $registrant->snap_token = $snapToken;
        $registrant->save();
        // Tampilkan notifikasi sukses dengan link pembayaran
        Notification::make()
            ->title('Registrasi Berhasil')
            ->body('Klik <a href="https://app.sandbox.midtrans.com/snap/v2/vtweb/' . $snapToken . '" target="_blank">di sini</a> untuk melakukan pembayaran.')
            ->success()
            ->send();
    }
}
