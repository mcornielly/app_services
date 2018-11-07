<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Branch extends Model
{
    protected $fillable = [
    	'name'
	];

	public function branch()
	{
		return $this->hasMany('App\Branch');
	}

}
