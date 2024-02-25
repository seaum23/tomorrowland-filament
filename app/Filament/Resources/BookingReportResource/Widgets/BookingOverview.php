<?php

namespace App\Filament\Resources\BookingReportResource\Widgets;

use Filament\Widgets\Widget;
use Livewire\Attributes\Reactive;
use Filament\Widgets\Concerns\InteractsWithPageTable;
use App\Filament\Resources\BookingReportResource\Pages\ListBookings;

class BookingOverview extends Widget
{
    use InteractsWithPageTable;

    public array $times;
    protected int | string | array $columnSpan = 'full';

    protected static string $view = 'filament.resources.booking-resource.widgets.booking-overview';

    public function __construct()
    {
        //
    }

    public function boot()
    {
        $start_time = now()->startOfDay();
        $end_time = now()->endOfDay();
        $times = [];
        while($start_time < $end_time){
            $times[$start_time->format('h:i a')] = [
                'time' => $start_time->format('h:i a'),
                'booked' => false
            ];
            // dd($this->getPageTableRecords());
            foreach($this->getPageTableRecords() as $booking){
                foreach($booking->bookingTimes as $time){
                    // dd($time);
                    if($start_time->format('H:i:s') == $time->time){
                        $times[$start_time->format('h:i a')] = [
                            'time' => $start_time->format('h:i a'),
                            'booked' => true
                        ];
                    }
                }
            }
            $start_time = $start_time->addHour();
        }
        $this->times = $times;
    }

    protected function getTablePage(): string
    {
        return ListBookings::class;
    }
}
