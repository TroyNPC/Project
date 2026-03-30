<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Subjects_enrolled extends Model
{
    protected $table = 'subjects_enrolled';
    protected $fillable = [
        'GPA',
        'Grade',
        'schoolyear',
        'semester',
        'grade_status',
        'Retake',
    ];

    public function Subjects_enrolled()
    {
        return $this->hasMany(Subjects_enrolled::class, 'subjects_enrolled_id', 'id');
    }
}
