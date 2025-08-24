<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Field extends Model
{
    use HasFactory;

    protected $table = 'field';

    protected $fillable = [
        'name',
        'images',
        'players_capacity',
    ];

    // Example: relation with slots
    public function slots()
    {
        return $this->hasMany(FieldSlot::class);
    }

    // Example: if fields can be booked
    public function bookings()
    {
        return $this->hasMany(Booking::class);
    }
}
