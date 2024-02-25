<?php

namespace App\Filament\Resources\BookingReportResource\Pages;

use Filament\Actions;
use Filament\Resources\Pages\ListRecords;
use App\Filament\Resources\BookingReportResource;
use Filament\Pages\Concerns\ExposesTableToWidgets;
use App\Filament\Resources\BookingReportResource\Widgets\BookingOverview;

class ListBookings extends ListRecords
{
    use ExposesTableToWidgets;
    
    protected static string $resource = BookingReportResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }

    protected function getHeaderWidgets(): array
    {
        return [
            //
        ];
    }
}
