<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Programs extends Model
{
    protected $table = 'programs';
    protected $fillable = [
        'code',
        'program_name',
        'duration_years',
        'is_active',
    ];

    public function Programs()
    {
        return $this->hasMany(Programs::class, 'programs_id', 'id');
    }
}