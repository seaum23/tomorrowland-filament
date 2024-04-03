<?php

namespace App\Filament\Widgets;

use App\Models\Booking;
use Filament\Widgets\ChartWidget;

class LastWeekBookingChart extends ChartWidget
{
    protected static ?int $sort = 2;
    protected int | string | array $columnSpan = 'full';
    protected static ?string $heading = 'Number of booking in the last 7 days';
    protected static ?string $maxHeight = '200px';

    protected static ?array $options = [
        'plugins' => [
            'legend' => [
                'labels' => [
                    'color' => 'white',
                    'font' => [
                        'color' => 'white'
                    ]
                ],
            ],
        ],
        'scales' => [
            'x' => [
                'ticks' => [
                    'color' => 'white',
                    'font' => [
                        'size' => 14,
                    ]
                ]
            ],                    
            'y' => [
                'ticks' => [
                    'color' => 'white',
                    'font' => [
                        'size' => 14
                    ]
                ]
            ]
        ]
    ];

    protected function getData(): array
    {
        $last_days = 15;
        $start_day = now()->subDays($last_days);
        $end_day = now();
        $bookings = Booking::selectRaw("count(*) as count, booking_date")->whereBetween('booking_date', [now()->subDays($last_days), now()])->groupBy('booking_date')->get();
        $labels = [];
        $dataset = [];
        while($start_day < $end_day){
            $labels[] = $start_day->format('d/M');
            $iterating = null;
            foreach($bookings as $booking){
                if($booking->booking_date->format('Y-m-d') == $start_day->format('Y-m-d')){
                    $iterating = $booking;
                    break;
                }
            }
            $dataset[] = $iterating ? $iterating->count : 0;
            $start_day = $start_day->addDay();
        }
        return [
            'datasets' => [
                [
                    'label' => 'Number of Booking',
                    'data' => $dataset,
                    // 'backgroundColor' => '#000000',
                ],
            ],
            'labels' => $labels,
        ];
    }

    protected function getType(): string
    {
        return 'line';
    }
}
