<?php

namespace App\Filament\Customer\Resources\BookingResource\Widgets;

use Filament\Widgets\Widget;
use Filament\Widgets\Concerns\InteractsWithPageTable;
use App\Filament\Customer\Resources\BookingResource\Pages\ListBookings;

class BookingOverview extends Widget
{
    use InteractsWithPageTable;

    protected static string $view = 'filament.customer.resources.booking-resource.widgets.booking-overview';

    protected function getTablePage(): string
    {
        return ListBookings::class;
    }
}
