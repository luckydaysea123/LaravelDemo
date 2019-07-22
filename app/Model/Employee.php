<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    public $timestamps = false;

    public function department()
    {
        return $this->belongsTo('App\Model\Department');
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
    public function getAddressAttribute($value)
    {
        $result = mb_strtoupper($value, "utf8");
        return $result;
    }
    public function setAddressAttribute($value)
    {
        $this->attributes['address'] = mb_strtolower($value, "utf8");
    }
}
