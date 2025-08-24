<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Enquiry extends Model
{
    use HasFactory;

    protected $table = 'enquiry'; // Or 'enquiries' if you pluralize
    protected $fillable = [
        'user_id',
        'content',
    ];

    // Each enquiry belongs to a user
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
