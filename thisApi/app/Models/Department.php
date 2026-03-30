<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    protected $table = 'department';
        protected $fillable = [
        'department_code',
        'department_name',
        'is_active',
    ];
    public function Programs()
    {
        return $this->hasMany(Department::class, 'department_id', 'id');
    }
}
