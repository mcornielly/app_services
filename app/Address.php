<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
        protected $fillable = [
    	'name', 'client_id', 'country_id', 'city_id', 'address_1', 'address_2', 'edifice', 'floor', 'office', 'pto_reference', 'number_phone', 'number_fax'
	];

	public function client()
	{
		return $this->belongsTo('App\Client');
	}

	public function country()
	{
		return $this->belongsTo('App\Country');
	}

	public function city()
	{
		return $this->belongsTo('App\City');
	}


}
