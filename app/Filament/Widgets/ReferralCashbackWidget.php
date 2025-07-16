<?php

namespace App\Filament\Widgets;

use Filament\Widgets\TableWidget;
use Filament\Tables\Table;
use Filament\Tables\Columns\TextColumn;
use App\Models\WebinarRegistrant;

class ReferralCashbackWidget extends TableWidget
{
    protected static ?int $sort = 2;
    public function table(Table $table): Table
    {
        // Widget tabel laporan referral & cashback
        return $table
            ->query(WebinarRegistrant::query())
            ->columns([
                // Nama peserta
                TextColumn::make('name')->label('Nama Peserta'),
                // Kode referral milik peserta
                TextColumn::make('referral_code')->label('Kode Referral'),
                // Jumlah downline (peserta yang mendaftar dengan kode referral ini)
                TextColumn::make('downline_count')
                    ->label('Jumlah Downline')
                    ->getStateUsing(fn($record) => $record && $record->referral_code ? WebinarRegistrant::where('referred_by', $record->referral_code)->count() : 0),
                // Total cashback yang didapatkan peserta
                TextColumn::make('cashback')->label('Total Cashback')->money('IDR', true),
            ]);
    }

    public function getColumnSpan(): int|string|array
    {
        return 'full';
    }
}
