<?php

namespace App\Observers;

use App\Models\Booking;
use App\Models\BookingTime;

class BookingObserver
{
    /**
     * Handle the Booking "created" event.
     */
    public function created(Booking $booking): void
    {
        if($booking->bookingTimes->isEmpty()){
            foreach($booking->booking_times as $time){
                BookingTime::create([
                    'booking_id' => $booking->id,
                    'time' => $time,
                    'status' => 1,
                ]);
            }
        }
    }

    /**
     * Handle the Booking "updated" event.
     */
    public function updated(Booking $booking): void
    {
        //
    }

    /**
     * Handle the Booking "deleted" event.
     */
    public function deleted(Booking $booking): void
    {
        //
    }

    /**
     * Handle the Booking "restored" event.
     */
    public function restored(Booking $booking): void
    {
        //
    }

    /**
     * Handle the Booking "force deleted" event.
     */
    public function forceDeleted(Booking $booking): void
    {
        //
    }
}
