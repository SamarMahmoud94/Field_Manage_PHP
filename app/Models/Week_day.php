<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WeekDay extends Model
{
    use HasFactory;

    protected $table = 'week_day';
    protected $fillable = [
        'name',
    ];

    public $timestamps = false; // because your table does NOT have created_at / updated_at

    // Each weekday can have many field slots
    public function fieldSlots()
    {
        return $this->hasMany(FieldSlot::class, 'week_day_id');
    }
}
