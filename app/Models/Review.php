<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{

    protected $fillable = [
        'booking_id',
        'reviewContent',
        'villa_id',
        'reviewDate',
        'reviewRate',
    ];

    public function villa()
    {
        return $this->belongsTo(Villa::class);
    }

    public function booking()
    {
        return $this->hasOne(Review::class);
    }   

    use HasFactory;
}
