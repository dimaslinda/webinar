<?php

namespace App\Filament\Resources;

use App\Filament\Resources\WebinarRegistrantResource\Pages;
use App\Filament\Resources\WebinarRegistrantResource\RelationManagers;
use App\Models\WebinarRegistrant;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Select;
use Filament\Tables\Actions\Action;
use Filament\Infolists\Infolist;
use Filament\Infolists\Components\TextEntry;
use Filament\Infolists\Components\RepeatableEntry;

class WebinarRegistrantResource extends Resource
{
    protected static ?string $model = WebinarRegistrant::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        // Form registrasi peserta webinar
        return $form
            ->schema([
                // Nama lengkap peserta
                TextInput::make('name')->label('Nama Lengkap')->required(),
                // Email peserta
                TextInput::make('email')->label('Email')->email()->required(),
                // Nomor HP peserta
                TextInput::make('phone')->label('No. HP')->required(),
                // Domisili peserta
                TextInput::make('domicile')->label('Domisili')->required(),
                // Nama perusahaan (opsional)
                TextInput::make('company_name')->label('Nama Perusahaan')->nullable(),
                // Bidang bisnis
                TextInput::make('business_field')->label('Bidang Bisnis')->required(),
                // Sumber info
                Select::make('info_source')->label('Dapat Info Pelatihan Ini Dari Mana?')
                    ->options([
                        'Instagram' => 'Instagram',
                        'Website' => 'Website',
                        'WhatsApp' => 'WhatsApp',
                        'Iklan' => 'Iklan',
                        'Lain' => 'Lainnya',
                    ])->required(),
                // Range omzet bulanan
                Select::make('income_range')->label('Range Omzet Bulanan')
                    ->options([
                        'Rp. 0 - Rp. 5.000.000' => 'Rp. 0 - Rp. 5.000.000',
                        'Rp. 5.000.000 - Rp. 10.000.000' => 'Rp. 5.000.000 - Rp. 10.000.000',
                        'Rp. 10.000.000 - Rp. 15.000.000' => 'Rp. 10.000.000 - Rp. 15.000.000',
                        'Rp. 15.000.000 - Rp. 20.000.000' => 'Rp. 15.000.000 - Rp. 20.000.000',
                        'Rp. 20.000.000 - Rp. 50.000.000' => 'Rp. 20.000.000 - Rp. 50.000.000',
                        'Rp. 50.000.000 - Rp. 100.000.000' => 'Rp. 50.000.000 - Rp. 100.000.000',
                        'Lain' => 'Lainnya',
                    ])->required(),
                // Kode referral (opsional)
                TextInput::make('referred_by')->label('Kode Referral (Opsional)')->nullable(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')->label('Nama'),
                Tables\Columns\TextColumn::make('referral_code')->label('Kode Referral'),
                Tables\Columns\TextColumn::make('referred_by')->label('Kode Referral Digunakan'),
                Tables\Columns\BadgeColumn::make('is_paid')
                    ->label('Status Pembayaran')
                    ->formatStateUsing(function ($state) {
                        if ($state === 1 || $state === '1') return 'Lunas';
                        if ($state === 9 || $state === '9') return 'Gagal';
                        return 'Belum';
                    })
                    ->colors([
                        'success' => 'Lunas',
                        'warning' => 'Belum',
                        'danger' => 'Gagal',
                    ]),
                Tables\Columns\TextColumn::make('cashback')->label('Cashback')->money('IDR', true),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ViewAction::make(), // Tambahkan ViewAction agar icon mata muncul
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                    // Action export ke Excel/CSV
                    Action::make('export')
                        ->label('Export ke Excel')
                        ->action(function ($records) {
                            // Export data peserta yang dipilih ke Excel
                            return \Maatwebsite\Excel\Facades\Excel::download(new \App\Exports\WebinarRegistrantExport($records), 'peserta-webinar.xlsx');
                        })
                        ->requiresConfirmation()
                        ->icon('heroicon-o-arrow-down-tray'),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListWebinarRegistrants::route('/'),
            'create' => Pages\CreateWebinarRegistrant::route('/create'),
            'edit' => Pages\EditWebinarRegistrant::route('/{record}/edit'),
            'view' => Pages\ViewWebinarRegistrant::route('/{record}'), // Tambahkan halaman show/detail
        ];
    }

    // Tambahkan method infolist untuk detail peserta
    public static function infolist(Infolist $infolist): Infolist
    {
        return $infolist
            ->schema([
                TextEntry::make('cashback')
                    ->label('Total Cashback')
                    ->money('IDR', true),
                RepeatableEntry::make('downlines')
                    ->label('Downline (Peserta yang menggunakan kode referral ini)')
                    ->schema([
                        TextEntry::make('name')->label('Nama'),
                        TextEntry::make('email')->label('Email'),
                        TextEntry::make('is_paid')->label('Status Pembayaran')->formatStateUsing(fn($state) => $state ? 'Lunas' : 'Belum'),
                    ])
                    ->state(fn($record) => $record?->downlines ?? []),
            ]);
    }
}
