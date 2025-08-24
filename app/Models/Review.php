<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;

    protected $table = 'review';
    protected $fillable = [
        'booking_id',
        'user_id',
        'rating',
        'comment',
    ];

    // Review belongs to a booking
    public function booking()
    {
        return $this->belongsTo(Booking::class);
    }

    // Review belongs to a user
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
