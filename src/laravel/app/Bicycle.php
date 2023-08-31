<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\SoftDeletes;

class Bicycle extends Model
{
    use SoftDeletes;
    protected $fillable = ['brand', 'model', 'color', 'price', 'user_id'];
    public static $validate = [
        'brand' => 'required',
        'model' => 'required',
        'color' => 'required',
        'price' => 'required',
        'user_id' => 'required'
    ];
    public function User()
    {
        return $this->belongsTo('App\User');
    }
}
