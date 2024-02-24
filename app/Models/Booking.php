<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    protected $casts = [
        'booking_date' => 'datetime',
        'booking_times' => 'array'
    ];

    public function customer(){
        return $this->belongsTo(Customer::class);
    }

    public function sport(){
        return $this->belongsTo(Sport::class);
    }

    public function bookingPayment(){
        return $this->hasOne(BookingPayment::class);
    }

    public function bookingTimes(){
        return $this->hasMany(BookingTime::class);
    }
}
