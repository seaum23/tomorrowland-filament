<?php

namespace App\Filament\Resources\BookingResource\Pages;

use Filament\Actions;
use Filament\Resources\Pages\ListRecords;
use App\Filament\Resources\BookingResource;
use Filament\Pages\Concerns\ExposesTableToWidgets;
use App\Filament\Resources\BookingResource\Widgets\BookingOverview;

class ListBookings extends ListRecords
{
    use ExposesTableToWidgets;
    
    protected static string $resource = BookingResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }

    protected function getHeaderWidgets(): array
    {
        return [
            BookingOverview::class,
        ];
    }
}
