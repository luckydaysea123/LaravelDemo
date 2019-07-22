<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    public $timestamps = false;

    public function employee()
    {
        return $this->hasMany('App\Model\Employee');
    }

    public function getNameAttribute($value)
    {
        $result = mb_strtoupper($value, "utf8");
        return $result;
    }
    public function setNameAttribute($value)
    {
        $this->attributes['name'] = mb_strtolower($value, "utf8");
    }
}
