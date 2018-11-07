<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $fillable = [
		'name', 'type', 'nacionality', 'exempt_ob', 'comercial_name', 'business_group', 'cod_rif','sector_id','branch_id', 'origin_id','years_op'
	];

	public function sector()
	{
		return $this->belongsTo('App\Sector');
	}

	public function branch()
	{
		return $this->belongsTo('App\Branch');
	}

	public function origin()
	{
		return $this->belongsTo('App\Origin');
	}

	public function address()
	{
		return $this->hasMany('App\Address');
	}
}
