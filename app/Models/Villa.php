<?php

namespace App\Models;

use App\Models\Review;
use App\Models\Facility;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Villa extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'summary',
        'description',
        'price',
        'path',
    ];

    public function facility()
    {
        return $this->hasMany(Facility::class, 'villa_id', 'id');
    }

    public function booking()
    {
        return $this->hasMany(Booking::class, 'villa_id', 'id');
    }
    
    public function review()
    {
        return $this->hasMany(Review::class, 'villa_id', 'id');
    }

}
