<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bicycle extends Model
{
    public function User()
    {
        return $this->belongsTo('App\User');
    }
}
