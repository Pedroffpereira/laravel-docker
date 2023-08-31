<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class User extends Model
{
    use SoftDeletes;
    protected $fillable = ['first_name', 'last_name', 'birth_date', 'country_id'];
    public static $validate = [
        'first_name' => 'required',
        'last_name' => 'required',
        'birth_date' => 'date|required',
        'country_id' => 'required'
    ];

    public function country()
    {
        return $this->belongsTo('App\Country');
    }
    public function bicycles()
    {
        return $this->hasMany('App\Bicycle');
    }
}
