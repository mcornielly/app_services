<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Client;
use App\Sector;
use App\Branch;
use App\Origin;

class RegisterController extends Controller
{
    public function clients()
    {

    	$sectors    = Sector::orderBy('id', 'ASC')->pluck('name', 'id');
        $branches   = Branch::orderBy('id', 'ASC')->pluck('name', 'id');
        $origins    = Origin::orderBy('id', 'ASC')->pluck('name', 'id');

        return view('clients.create', compact('sectors', 'branches', 'origins'))->with('info', 'El Cliente fue registrado con éxito');
    }

    public function address()
    {

    	return 'hola';
    }
}
