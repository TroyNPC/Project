<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Rooms extends Model
{
    protected $table = 'rooms';
    protected $fillable = [
        'room_code',
        'building',
        'capacity',
        'room_type',
        'is_active',
    ];

    public function Rooms()
    {
        return $this->hasMany(Rooms::class, 'rooms_id', 'id');
    }
}
