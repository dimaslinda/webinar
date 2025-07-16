<?php

namespace App\Filament\Resources\WebinarRegistrantResource\Pages;

use App\Filament\Resources\WebinarRegistrantResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;
use App\Filament\Widgets\WebinarStatsOverview;
use App\Filament\Widgets\ReferralCashbackWidget;

class ListWebinarRegistrants extends ListRecords
{
    protected static string $resource = WebinarRegistrantResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }

    protected function getWidgets(): array
    {
        return [
            WebinarStatsOverview::class, // Stats overview di atas
            ReferralCashbackWidget::class, // Referral cashback di bawah, full span
        ];
    }
}
