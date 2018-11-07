<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Origin extends Model
{
    protected $fillable = [
    	'name'
    ];

    public function client()
    {
    	return $this->hasMany('App\Client');
    }
}
