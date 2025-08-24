<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FieldSlot extends Model
{
    use HasFactory;

    protected $table = 'fieldslots';
    protected $fillable = [
        'field_id',
        'week_day_id',
        'from_time',
        'to_time',
        'price_per_hour',
    ];

    // Each slot belongs to a field
    public function field()
    {
        return $this->belongsTo(Field::class);
    }

    // Each slot belongs to a week_day
    public function weekDay()
    {
        return $this->belongsTo(WeekDay::class);
    }

    // A slot can have many bookings
    public function bookings()
    {
        return $this->hasMany(Booking::class);
    }
}
