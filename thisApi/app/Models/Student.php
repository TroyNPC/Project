<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $table = 'student';
    protected $fillable = [
        'fname',
        'mname',
        'lname',
        'gender',
        'bdate',
        'email',
        'contact_no',
    ];

    public function Student()
    {
        return $this->hasMany(Student::class, 'student_id', 'id');
    }
}
