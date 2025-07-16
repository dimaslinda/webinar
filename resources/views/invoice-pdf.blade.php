<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Invoice Pembayaran Webinar</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            font-size: 14px;
            color: #222;
        }

        .header {
            text-align: center;
            margin-bottom: 24px;
        }

        .title {
            font-size: 22px;
            font-weight: bold;
            color: #084e49;
        }

        .subtitle {
            color: #f46619;
            margin-bottom: 16px;
        }

        .divider {
            width: 80px;
            height: 4px;
            background: #f46619;
            margin: 0 auto 18px auto;
            border-radius: 2px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 24px;
        }

        td {
            padding: 6px 0;
        }

        .label {
            font-weight: bold;
            width: 180px;
        }

        .status-lunas {
            color: #198754;
            font-weight: bold;
        }

        .status-belum {
            color: #dc2626;
            font-weight: bold;
        }

        .footer {
            text-align: center;
            font-size: 12px;
            color: #888;
            margin-top: 32px;
        }
    </style>
</head>

<body>
    <div class="header">
        <img src="{{ public_path('img/general/logo.png') }}" alt="Logo" style="height:60px; margin-bottom:12px;">
        <div class="title">Invoice Pembayaran Webinar</div>
        <div class="divider"></div>
        <div class="subtitle">Bukti pembayaran peserta webinar</div>
    </div>
    <table>
        <tr>
            <td class="label">Nama</td>
            <td>: {{ $registrant->name }}</td>
        </tr>
        <tr>
            <td class="label">Email</td>
            <td>: {{ $registrant->email }}</td>
        </tr>
        <tr>
            <td class="label">No. HP</td>
            <td>: {{ $registrant->phone }}</td>
        </tr>
        <tr>
            <td class="label">Domisili</td>
            <td>: {{ $registrant->domicile }}</td>
        </tr>
        <tr>
            <td class="label">Nama Perusahaan</td>
            <td>: {{ $registrant->company_name }}</td>
        </tr>
        <tr>
            <td class="label">Bidang Bisnis</td>
            <td>: {{ $registrant->business_field }}</td>
        </tr>
        <tr>
            <td class="label">Sumber Info</td>
            <td>: {{ $registrant->info_source }}</td>
        </tr>
        <tr>
            <td class="label">Range Omzet</td>
            <td>: {{ $registrant->income_range }}</td>
        </tr>
        <tr>
            <td class="label">Kode Referral</td>
            <td>: {{ $registrant->referral_code }}</td>
        </tr>
        <tr>
            <td class="label">Status Pembayaran</td>
            <td>:
                @if ($registrant->is_paid)
                    <span class="status-lunas">Lunas</span>
                @else
                    <span class="status-belum">Belum Lunas</span>
                @endif
            </td>
        </tr>
    </table>
    <div class="footer">
        Invoice ini di-generate otomatis oleh sistem webinar.<br>
        Tanggal: {{ date('d-m-Y H:i') }}
    </div>
</body>

</html>
