<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Technician extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'phone',
        'specialization'
    ];

    /**
     * Technician can handle many bookings
     */
    public function bookings(): HasMany
    {
        return $this->hasMany(Booking::class);
    }
}