<?php

namespace App\Models;

use App\Models\Villa;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Facility extends Model
{
    use HasFactory;

    protected $fillable = [
        'path',
        'villa_id',
    ];

    /**
     * Get the villa that owns the Facility
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function villa()
    {
        return $this->belongsTo(Villa::class);
    }
}
