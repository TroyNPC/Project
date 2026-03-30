<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Prerequisuites extends Model
{
    protected $table = 'preqrequisuites';
    public function Programs()
    {
        return $this->hasMany(Prerequisuites::class, 'preqrequisuites_id', 'id');
    }
}
