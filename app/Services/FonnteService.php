<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class FonnteService
{
    protected $apiKey;
    protected $baseUrl = 'https://api.fonnte.com/send';

    public function __construct()
    {
        $this->apiKey = config('services.fonnte.api_key');
    }

    /**
     * Konversi nomor lokal (08...) ke format internasional (628...)
     * @param string $phone
     * @return string
     */
    protected function normalizePhone($phone)
    {
        $phone = preg_replace('/[^0-9]/', '', $phone); // Hanya angka
        if (strpos($phone, '08') === 0) {
            return '62' . substr($phone, 1);
        }
        return $phone;
    }

    /**
     * Mengirim pesan WhatsApp via Fonnte
     * @param string $to Nomor tujuan (format internasional, tanpa +)
     * @param string $message Isi pesan
     * @return array|null
     */
    public function sendMessage($to, $message)
    {
        $to = $this->normalizePhone($to); // Pastikan format internasional
        $response = Http::withHeaders([
            'Authorization' => $this->apiKey,
        ])->asForm()->post($this->baseUrl, [
            'target' => $to,
            'message' => $message,
        ]);

        if ($response->successful()) {
            return $response->json();
        }
        return null;
    }
}
