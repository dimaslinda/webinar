<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\WebinarRegistrant;
use App\Services\FonnteService;
use Illuminate\Support\Facades\Log;

class MidtransCallbackController extends Controller
{
    // Handle callback notifikasi pembayaran dari Midtrans
    public function handle(Request $request)
    {
        // Ambil data penting dari request
        $serverKey = config('services.midtrans.server_key');
        $signatureKey = $request->signature_key;
        $orderId = $request->order_id;
        $statusCode = $request->status_code;
        $grossAmount = $request->gross_amount;

        // Verifikasi signature
        $expectedSignature = hash('sha512', $orderId . $statusCode . $grossAmount . $serverKey);
        if ($signatureKey !== $expectedSignature) {
            return response(['message' => 'Invalid signature'], 403);
        }

        // Update status pembayaran
        $registrant = WebinarRegistrant::where('order_id', $request->order_id)->first();
        if ($registrant) {
            if (in_array($request->transaction_status, ['settlement', 'capture'])) {
                $registrant->is_paid = 1;
                // Berikan cashback ke pemilik kode referral jika ada
                if (!empty($registrant->referred_by)) {
                    $referrer = WebinarRegistrant::where('referral_code', $registrant->referred_by)->first();
                    if ($referrer && $referrer->cashback < 50000) {
                        $increment = min(5000, 50000 - $referrer->cashback);
                        if ($increment > 0) {
                            $referrer->increment('cashback', $increment);
                        }
                    }
                }
                // Kirim pesan WhatsApp via Fonnte
                try {
                    $fonnte = new FonnteService();
                    $pesan = "Terima kasih, pembayaran Anda telah berhasil!\n\n"
                        . "Nama: {$registrant->name}\n"
                        . "Email: {$registrant->email}\n"
                        . "Status: Lunas\n"
                        . "Produk: Webinar gak pakai AI sama dengan jemput bangkrut\n"
                        . "Kode Referral Anda: {$registrant->referral_code}";
                    $fonnte->sendMessage($registrant->phone, $pesan);
                } catch (\Exception $e) {
                    // Log error jika gagal kirim pesan
                    Log::error('Gagal kirim WA Fonnte: ' . $e->getMessage());
                }
            } elseif (in_array($request->transaction_status, ['deny', 'cancel', 'expire'])) {
                $registrant->is_paid = 9;
            } else {
                $registrant->is_paid = 0;
            }
            $registrant->save();
        }
        return response(['message' => 'OK']);
    }
}
