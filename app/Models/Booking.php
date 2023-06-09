<?php

namespace App\Models;

use App\Models\User;
use App\Models\Villa;
use App\Models\Booking;
use App\Models\Payment;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Booking extends Model
{
    use HasFactory;

    protected $fillable = [
        'villa_id',
        'user_id',
        'bookingCode',
        'bookDateEnd',
        'bookDateStart',
        'bookCreateDate',
        'payment_id',
        'totalPrice',
        'paidStatus',
        'dueDate',
        'paidDate'
    ];

    public function villa()
    {
        return $this->belongsTo(Villa::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function payment()
    {
        return $this->belongsTo(Payment::class);
    }

    public function review()
    {
        return $this->hasOne(Booking::class);
    }   
}
