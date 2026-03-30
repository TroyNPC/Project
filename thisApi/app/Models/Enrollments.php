<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Enrollments extends Model
{
    protected $table = 'enrollments';
        protected $fillable = [
        'schoolyear',
        'semester',
        'status',
    ];
    public function Programs()
    {
        return $this->hasMany(Enrollments::class, 'enrollments_id', 'id');
    }
}

