<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Attraction extends Model
{
    protected $fillable = [
        'destination_id',
        'name',
        'description'
    ];

    public function destination()
    {
        return $this->belongsTo(Destination::class);
    }

    public function reviews()
    {
        return $this->hasMany(Review::class);
    }
}
