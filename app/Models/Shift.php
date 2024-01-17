<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shift extends Model
{
    use HasFactory;

    protected $casts = [
        'start_time' => 'datetime',
        'end_time' => 'datetime',
    ];

    protected $fillable = ['turf_id', 'name', 'description', 'start_time', 'end_time', 'hourly_rate'];

    public function turf(){
        return $this->belongsTo(Turf::class);
    }
}
