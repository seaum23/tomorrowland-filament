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
}
