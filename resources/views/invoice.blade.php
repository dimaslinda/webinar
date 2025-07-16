<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Invoice Pembayaran Webinar</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 min-h-screen flex items-center justify-center">
    <div class="w-full max-w-xl mx-auto p-4">
        <div class="bg-white rounded-2xl shadow-lg p-6 md:p-8 border-t-8" style="border-color: #084e49;">
            <div class="flex justify-center mb-4">
                <img src="/img/general/logo.png" alt="Logo" class="h-16">
            </div>
            <h2 class="text-2xl font-bold mb-2 text-[#084e49] text-center">Invoice Pembayaran Webinar</h2>
            <div class="w-16 h-1 mx-auto mb-4 rounded-full" style="background:#f46619;"></div>
            <p class="mb-6 text-center text-[#f46619]">Berikut adalah detail pembayaran Anda.</p>
            <table class="mb-6 w-full">
                <tr>
                    <td class="py-1 font-semibold text-gray-700">Tanggal</td>
                    <td>: {{ $registrant->created_at->format('d-m-Y H:i') }}</td>
                </tr>
                <tr>
                    <td class="py-1 font-semibold text-gray-700">No Invoice</td>
                    <td>: {{ $registrant->order_id }}</td>
                </tr>
                <tr>
                    <td class="py-1 font-semibold text-gray-700">Nama Produk</td>
                    <td>: {{ $registrant->product_name ?? 'Webinar Bisnis' }}</td>
                </tr>
                <tr>
                    <td class="py-1 font-semibold text-gray-700">Harga</td>
                    <td>: Rp{{ number_format($registrant->product_price ?? 50000, 0, ',', '.') }}</td>
                </tr>
                <tr>
                    <td class="py-1 font-semibold text-gray-700">Kode Referral</td>
                    <td>: {{ $registrant->referred_by ?? '-' }}</td>
                </tr>
                <tr>
                    <td class="py-1 font-semibold text-gray-700">Kode Referral Anda</td>
                    <td>
                        <span id="referralCode" class="font-bold text-[#f46619]">{{ $registrant->referral_code }}</span>
                        <button id="copyBtn"
                            class="ml-2 px-2 py-1 bg-[#f46619] hover:bg-[#e05a13] text-white text-xs rounded">Copy</button>
                        <span id="copySuccess" class="ml-2 text-green-600 text-xs"
                            style="display:none;">Tersalin!</span>
                    </td>
                </tr>
                <tr>
                    <td class="py-1 font-semibold text-gray-700">Status Pembayaran</td>
                    <td>:
                        @if ($registrant->is_paid == 1)
                            <span class="text-green-600 font-bold">Lunas</span>
                        @elseif ($registrant->is_paid == 9)
                            <span class="text-red-600 font-bold">Gagal</span>
                        @else
                            <span class="text-yellow-600 font-bold">Belum</span>
                        @endif
                    </td>
                </tr>
            </table>

            @php
                $midtransUrl = config('services.midtrans.is_production')
                    ? 'https://app.midtrans.com/snap/v2/vtweb/'
                    : 'https://app.sandbox.midtrans.com/snap/v2/vtweb/';
            @endphp
            @if ($registrant->is_paid != 1 && $registrant->snap_token)
                <div class="flex flex-col items-center gap-3 mb-4">
                    <a href="{{ $midtransUrl . $registrant->snap_token }}" target="_blank"
                        class="inline-block px-6 py-2 bg-yellow-500 hover:bg-yellow-600 text-white font-semibold rounded-lg shadow transition">Bayar
                        Sekarang</a>
                </div>
            @endif

            <div class="flex flex-col items-center gap-3">
                <a href="{{ route('invoice.download', $registrant->id) }}"
                    class="inline-block px-6 py-2 bg-[#f46619] hover:bg-[#e05a13] text-white font-semibold rounded-lg shadow transition">Download
                    PDF Invoice</a>
                <a href="/"
                    class="inline-block px-6 py-2 bg-[#084e49] hover:bg-[#063c36] text-white font-semibold rounded-lg shadow transition">Kembali
                    ke Beranda</a>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const copyButton = document.getElementById('copyBtn');
            const referralCodeSpan = document.getElementById('referralCode');
            const successMessage = document.getElementById('copySuccess');

            if (copyButton && referralCodeSpan && successMessage) {
                copyButton.addEventListener('click', function() {
                    const codeToCopy = referralCodeSpan.innerText;

                    // Fungsi untuk menampilkan notifikasi
                    const showSuccessMessage = () => {
                        successMessage.style.display = 'inline';
                        setTimeout(() => {
                            successMessage.style.display = 'none';
                        }, 1500);
                    };

                    // Coba cara modern (aman) dulu
                    if (navigator.clipboard && window.isSecureContext) {
                        navigator.clipboard.writeText(codeToCopy).then(showSuccessMessage);
                    } else {
                        // Cara lama (fallback) untuk halaman non-HTTPS
                        const textArea = document.createElement('textarea');
                        textArea.value = codeToCopy;

                        // Buat textarea tidak terlihat
                        textArea.style.position = 'fixed';
                        textArea.style.top = '-9999px';
                        textArea.style.left = '-9999px';

                        document.body.appendChild(textArea);
                        textArea.select();
                        try {
                            document.execCommand('copy');
                            showSuccessMessage();
                        } catch (err) {
                            console.error('Gagal menyalin teks: ', err);
                        }
                        document.body.removeChild(textArea);
                    }
                });
            }
        });
    </script>
</body>

</html>
