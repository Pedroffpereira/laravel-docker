<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Country extends Model{
    use SoftDeletes;
    protected $fillable = ['name'];
    public static $validate = [
        'name' => 'required',
    ];
    public function getUsers(){
        return $this->hasMany('App\User');
    }
}
