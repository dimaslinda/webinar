<?php

namespace App\Filament\Resources\WebinarRegistrantResource\Pages;

use App\Filament\Resources\WebinarRegistrantResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;
use Filament\Infolists\Components\TextEntry;
use Filament\Infolists\Components\RepeatableEntry;

class EditWebinarRegistrant extends EditRecord
{
    protected static string $resource = WebinarRegistrantResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }

    // Tampilkan info cashback dan daftar downline di header halaman edit/detail peserta
    // (Dihapus, logic dipindah ke infolist di resource)
}
