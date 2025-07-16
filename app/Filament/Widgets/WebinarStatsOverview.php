<?php

namespace App\Filament\Widgets;

use App\Models\WebinarRegistrant;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Card;

class WebinarStatsOverview extends BaseWidget
{
    protected function getCards(): array
    {
        $totalPeserta = WebinarRegistrant::count();
        $totalLunas = WebinarRegistrant::where('is_paid', true)->count();
        $totalCashback = WebinarRegistrant::sum('cashback');
        // Asumsikan relasi downlines sudah ada di model WebinarRegistrant
        $totalReferral = WebinarRegistrant::whereHas('downlines', function ($q) {
            $q->where('is_paid', true);
        })->count();
        $totalOmzet = WebinarRegistrant::where('is_paid', true)->count() * 50000;

        return [
            Card::make('Total Peserta', $totalPeserta),
            Card::make('Peserta Sudah Bayar', $totalLunas)
                ->description('Lunas')
                ->color('success'),
            Card::make('Total Cashback', 'Rp ' . number_format($totalCashback, 0, ',', '.')),
            Card::make('Referral Sukses', $totalReferral),
            Card::make('Total Omzet Masuk', 'Rp ' . number_format($totalOmzet, 0, ',', '.')),
        ];
    }
}
