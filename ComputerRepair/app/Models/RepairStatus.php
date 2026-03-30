<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;

class RepairStatus extends Model
{
    use HasFactory;

    protected $fillable = [
        'status_name'
    ];

    /**
     * One repair status can apply to many bookings
     */
    public function bookings(): HasMany
    {
        return $this->hasMany(Booking::class);
    }
}