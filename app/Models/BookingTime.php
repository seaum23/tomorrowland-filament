<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BookingTime extends Model
{
    /**
     * 0 => Pending
     * 1 => Approved
     * 2 => Rejected
     */
    
    use HasFactory;
}
