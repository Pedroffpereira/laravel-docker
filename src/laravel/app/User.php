<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
class User extends Model
{
    public function Country()
    {
        return $this->belongsTo('App\Country');
    }
    public function Bicycles()
    {
        return $this->hasMany('App\Bicycle');
    }
}
