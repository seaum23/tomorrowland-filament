<?php

namespace App\Filament\Widgets;

use App\Models\Booking;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class TotalBookingOverview extends BaseWidget
{
    protected static ?int $sort = 1;
    protected function getStats(): array
    {
        return [
            Stat::make('Total booking today', Booking::where('booking_date', now())->count())
            ->color('success'),
            Stat::make('Total booking last 7 days', Booking::whereBetween('booking_date', [now()->subDays(7), now()])->count())
            ->chart(Booking::selectRaw("count(*) as count")->whereBetween('booking_date', [now()->subDays(7), now()])->groupBy('booking_date')->pluck('count')->toArray()),
        ];
    }
}
