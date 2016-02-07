<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Guest extends Model
{
    protected $fillable = [
        'name',
        'email',
        'phone',
        'alcohol',
        'food',
        'food_extra',
        'song',
        'friday',
        'sunday',
    ];
}
