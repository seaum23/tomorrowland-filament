<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Customer extends Authenticatable
{
    use HasFactory;

    public function initials(){
        $initials = "C";
        $names = explode(" ", $this->name);
        if(isset($names[0])){
            $initials = substr($names[0], 0, 1);
        }

        if(isset($names[1])){
            $initials .= "+" . substr($names[1], 0, 1);
        }

        return $initials;
    }
}
