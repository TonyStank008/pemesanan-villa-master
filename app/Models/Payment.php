<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;

    protected $fillable = [
        'paymentLabel',
        'paymentAmount',
    ];

    public function booking()
    {
        return $this->hasMany(Booking::class, 'payment_id', 'id');
    }
}
