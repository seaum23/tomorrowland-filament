<?php

namespace App\Filament\Resources\BookingResource\Widgets;

use App\Models\Shift;
use Filament\Widgets\Widget;
use Livewire\Attributes\Reactive;
use Filament\Widgets\Concerns\InteractsWithPageTable;
use App\Filament\Resources\BookingResource\Pages\ListBookings;

class BookingOverview extends Widget
{
    use InteractsWithPageTable;

    public array $shift_time;
    protected int | string | array $columnSpan = 'full';

    protected static string $view = 'filament.resources.booking-resource.widgets.booking-overview';

    public function __construct()
    {
        //
    }

    public function boot()
    {
        // $start_time = now()->startOfDay();
        // $end_time = now()->endOfDay();
        // while($start_time < $end_time){
        //     $times[$start_time->format('h:i a')] = [
        //         'time' => $start_time->format('h:i a'),
        //         'booked' => false
        //     ];
        //     // dd($this->getPageTableRecords());
        //     foreach($this->getPageTableRecords() as $booking){
        //         foreach($booking->bookingTimes as $time){
        //             // dd($time);
        //             if($start_time->format('H:i:s') == $time->time){
        //                 $times[$start_time->format('h:i a')] = [
        //                     'time' => $start_time->format('h:i a'),
        //                     'booked' => true
        //                 ];
        //             }
        //         }
        //     }
        //     $start_time = $start_time->addHour();
        // }

        $shifts = Shift::get();
        $shift_time = [];
        foreach ($shifts as $shift){
            $times = [];
            $start_time = $shift->start_time;
            $end_time = $shift->end_time;
            if($start_time < $end_time){
                while ($start_time < $end_time) {
                    $times[$start_time->format('h:i a')] = [
                        'time' => $start_time->format('h:i a'),
                        'booked' => false
                    ];
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
                    $start_time->addHour();
                }
            }else if($start_time > $end_time){
                while ($start_time->format('H:i:s') != $end_time->format('H:i:s')) {
                    $times[$start_time->format('h:i a')] = [
                        'time' => $start_time->format('h:i a'),
                        'booked' => false
                    ];
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
                    $start_time->addHour();
                    // {$start_time->format('h:i a')} - {$start_time->addHour()->format('h:i a')}
                }
            }
            $shift_time[$shift->name] = $times;
        }

        $this->shift_time = $shift_time;
    }

    protected function getTablePage(): string
    {
        return ListBookings::class;
    }
}
