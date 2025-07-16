<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pendaftaran Webinar</title>
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Flowbite -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.js"></script>
</head>

<body class="bg-gray-100 min-h-screen flex items-center justify-center">
    <div class="w-full max-w-lg mx-auto p-4">
        <div class="bg-white rounded-2xl shadow-lg p-6 md:p-8 border-t-8" style="border-color: #084e49;">
            <h2 class="text-2xl font-bold mb-1 text-center text-[#084e49]">Pendaftaran Webinar</h2>
            <p class="mb-6 text-center text-[#f46619]">Isi data di bawah untuk mengikuti webinar eksklusif kami.</p>
            @if ($errors->any())
                <div class="mb-4">
                    <div class="p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-100" role="alert">
                        <ul class="mb-0">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            @endif
            <form method="POST" action="{{ url('/daftar') }}" class="space-y-4">
                @csrf
                <!-- Nama Lengkap -->
                <div>
                    <label for="name" class="block mb-1 font-medium text-gray-700">Nama Lengkap *</label>
                    <input type="text" id="name" name="name" required value="{{ old('name') }}"
                        placeholder="Masukkan nama lengkap Anda"
                        class="block w-full rounded-lg border-gray-300 focus:border-blue-500 focus:ring-blue-500 shadow-sm">
                </div>
                <!-- Email -->
                <div>
                    <label for="email" class="block mb-1 font-medium text-gray-700">Email *</label>
                    <input type="email" id="email" name="email" required value="{{ old('email') }}"
                        placeholder="nama@email.com"
                        class="block w-full rounded-lg border-gray-300 focus:border-blue-500 focus:ring-blue-500 shadow-sm">
                </div>
                <!-- No HP -->
                <div>
                    <label for="phone" class="block mb-1 font-medium text-gray-700">No. HP *</label>
                    <input type="text" id="phone" name="phone" required value="{{ old('phone') }}"
                        placeholder="08xxxxxxxxxx"
                        class="block w-full rounded-lg border-gray-300 focus:border-blue-500 focus:ring-blue-500 shadow-sm">
                </div>
                <!-- Domisili -->
                <div>
                    <label for="domicile" class="block mb-1 font-medium text-gray-700">Domisili *</label>
                    <input type="text" id="domicile" name="domicile" required value="{{ old('domicile') }}"
                        placeholder="Kota domisili Anda"
                        class="block w-full rounded-lg border-gray-300 focus:border-blue-500 focus:ring-blue-500 shadow-sm">
                </div>
                <!-- Nama Perusahaan -->
                <div>
                    <label for="company_name" class="block mb-1 font-medium text-gray-700">Nama Perusahaan</label>
                    <input type="text" id="company_name" name="company_name" value="{{ old('company_name') }}"
                        placeholder="(Opsional)"
                        class="block w-full rounded-lg border-gray-300 focus:border-blue-500 focus:ring-blue-500 shadow-sm">
                </div>
                <!-- Bidang Bisnis -->
                <div>
                    <label for="business_field" class="block mb-1 font-medium text-gray-700">Bidang Bisnis *</label>
                    <input type="text" id="business_field" name="business_field" required
                        value="{{ old('business_field') }}" placeholder="Contoh: Kuliner, Fashion, dll"
                        class="block w-full rounded-lg border-gray-300 focus:border-blue-500 focus:ring-blue-500 shadow-sm">
                </div>
                <!-- Sumber Info -->
                <div>
                    <label for="info_source" class="block mb-1 font-medium text-gray-700">Dapat Info Pelatihan Ini Dari
                        Mana? *</label>
                    <select id="info_source" name="info_source" required
                        class="block w-full rounded-lg border-gray-300 focus:border-blue-500 focus:ring-blue-500 shadow-sm">
                        <option value="">Pilih Sumber</option>
                        <option value="Instagram" @if (old('info_source') == 'Instagram') selected @endif>Instagram</option>
                        <option value="Website" @if (old('info_source') == 'Website') selected @endif>Website</option>
                        <option value="WhatsApp" @if (old('info_source') == 'WhatsApp') selected @endif>WhatsApp</option>
                        <option value="Iklan" @if (old('info_source') == 'Iklan') selected @endif>Iklan</option>
                        <option value="Lain" @if (old('info_source') == 'Lain') selected @endif>Lainnya</option>
                    </select>
                </div>
                <!-- Range Omzet Bulanan -->
                <div>
                    <label for="income_range" class="block mb-1 font-medium text-gray-700">Range Omzet Bulanan *</label>
                    <select id="income_range" name="income_range" required
                        class="block w-full rounded-lg border-gray-300 focus:border-blue-500 focus:ring-blue-500 shadow-sm">
                        <option value="">Pilih Range</option>
                        <option value="Rp. 0 - Rp. 5.000.000" @if (old('income_range') == 'Rp. 0 - Rp. 5.000.000') selected @endif>Rp. 0 -
                            Rp. 5.000.000</option>
                        <option value="Rp. 5.000.000 - Rp. 10.000.000"
                            @if (old('income_range') == 'Rp. 5.000.000 - Rp. 10.000.000') selected @endif>Rp. 5.000.000 - Rp. 10.000.000</option>
                        <option value="Rp. 10.000.000 - Rp. 15.000.000"
                            @if (old('income_range') == 'Rp. 10.000.000 - Rp. 15.000.000') selected @endif>Rp. 10.000.000 - Rp. 15.000.000</option>
                        <option value="Rp. 15.000.000 - Rp. 20.000.000"
                            @if (old('income_range') == 'Rp. 15.000.000 - Rp. 20.000.000') selected @endif>Rp. 15.000.000 - Rp. 20.000.000</option>
                        <option value="Rp. 20.000.000 - Rp. 50.000.000"
                            @if (old('income_range') == 'Rp. 20.000.000 - Rp. 50.000.000') selected @endif>Rp. 20.000.000 - Rp. 50.000.000</option>
                        <option value="Rp. 50.000.000 - Rp. 100.000.000"
                            @if (old('income_range') == 'Rp. 50.000.000 - Rp. 100.000.000') selected @endif>Rp. 50.000.000 - Rp. 100.000.000
                        </option>
                        <option value="Lain" @if (old('income_range') == 'Lain') selected @endif>Lainnya</option>
                    </select>
                </div>
                <!-- Kode Referral (Opsional) -->
                <div>
                    <label for="referred_by" class="block mb-1 font-medium text-gray-700">Kode Referral
                        (Opsional)</label>
                    <input type="text" id="referred_by" name="referred_by" value="{{ old('referred_by') }}"
                        placeholder="Masukkan kode referral jika ada"
                        class="block w-full rounded-lg border-gray-300 focus:border-blue-500 focus:ring-blue-500 shadow-sm">
                </div>
                <div>
                    <button type="submit"
                        class="w-full py-3 px-4 font-semibold rounded-lg shadow-sm transition text-white bg-[#f46619] hover:bg-[#e05a13]">Daftar
                        &amp; Bayar</button>
                </div>
            </form>
        </div>
    </div>
</body>

</html>
