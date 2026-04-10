<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Destination extends Model
{
    // protected $table = 'destination';
    protected $fillable = [
        'name',
        'description',
        'location',
        'working_days',
        'working_hours',
        'ticket_price',
    ];
}
