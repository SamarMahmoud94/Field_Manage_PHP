<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;
    protected $table = 'booking';
    
    protected $fillable =[
       'player_id',
        'team_id',
        'field_slot_id',
        'date',
        'status',
        'price', 
    ];
    public function team()
    {
        return $this->belongsTo(Team::class, 'team_id');
    }
}
