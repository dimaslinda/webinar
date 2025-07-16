<?php

namespace App\Filament\Resources\WebinarRegistrantResource\Pages;

use App\Filament\Resources\WebinarRegistrantResource;
use Filament\Resources\Pages\ViewRecord;

class ViewWebinarRegistrant extends ViewRecord
{
    protected static string $resource = WebinarRegistrantResource::class;

    // Tidak ada pemanggilan DownlineTableWidget, widget downline table dihapus total
}
