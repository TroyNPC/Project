<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Subject_schedules extends Model
{
    protected $table = 'subject_schedules';
    protected $fillable = [
        'section',
        'schedule_day',
    ];

    public function Subject_schedules()
    {
        return $this->hasMany(Subject_schedules::class, 'subject_schedule_id', 'id');
    }
}

