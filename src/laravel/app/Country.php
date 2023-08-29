<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Country extends Model{
    public function getUsers(){
        return $this->hasMany('App\User');
    }
}
