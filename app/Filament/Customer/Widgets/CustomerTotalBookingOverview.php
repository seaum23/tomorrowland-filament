<?php

namespace App\Filament\Customer\Widgets;

use App\Models\Booking;
use Filament\Widgets\StatsOverviewWidget\Stat;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;

class CustomerTotalBookingOverview extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Total booking last 7 days', Booking::whereBetween('booking_date', [now()->subDays(7), now()])->count())
            ->chart(Booking::where('customer_id', auth()->id())->selectRaw("count(*) as count")->whereBetween('booking_date', [now()->subDays(7), now()])->groupBy('booking_date')->pluck('count')->toArray()),
            Stat::make('Total spent last 7 days', "Tk: " . number_format(Booking::where('customer_id', auth()->id())->selectRaw("sum(total_amount) as total_amount")->whereBetween('booking_date', [now()->subDays(7), now()])->first()->total_amount)),
        ];
    }
}
