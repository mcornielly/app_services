<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    protected $fillable = [
    	'name'
	];

	public function city()
	{
		return $this->hasMany('App\City');
	}

	public function address()
	{
		return $this->hasMany('App\Address');
	}
}
