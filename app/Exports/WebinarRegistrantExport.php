<?php

namespace App\Exports;

use App\Models\WebinarRegistrant;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class WebinarRegistrantExport implements FromCollection, WithHeadings
{
    protected $records;

    // Terima collection records dari Filament
    public function __construct($records)
    {
        $this->records = $records;
    }

    // Data yang akan diexport
    public function collection()
    {
        // Map data peserta ke array
        return collect($this->records)->map(function ($item) {
            return [
                'Nama' => $item->name,
                'Email' => $item->email,
                'No HP' => $item->phone,
                'Domisili' => $item->domicile,
                'Nama Perusahaan' => $item->company_name,
                'Bidang Bisnis' => $item->business_field,
                'Sumber Info' => $item->info_source,
                'Range Omzet' => $item->income_range,
                'Kode Referral' => $item->referral_code,
                'Kode Referral Digunakan' => $item->referred_by,
                'Status Pembayaran' => $item->is_paid ? 'Lunas' : 'Belum',
                'Total Cashback' => $item->cashback,
            ];
        });
    }

    // Judul kolom
    public function headings(): array
    {
        return [
            'Nama',
            'Email',
            'No HP',
            'Domisili',
            'Nama Perusahaan',
            'Bidang Bisnis',
            'Sumber Info',
            'Range Omzet',
            'Kode Referral',
            'Kode Referral Digunakan',
            'Status Pembayaran',
            'Total Cashback'
        ];
    }
}
