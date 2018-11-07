<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CreateClientRequest;
use App\Client;
use App\Sector;
use App\Branch;
use App\Origin;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clients = Client::orderBy('id', 'ASC')
                    ->paginate();         

        return view('clients.index', compact('clients'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $sectors    = Sector::orderBy('id', 'ASC')->pluck('name', 'id');
        $branches   = Branch::orderBy('id', 'ASC')->pluck('name', 'id');
        $origins    = Origin::orderBy('id', 'ASC')->pluck('name', 'id');

        return view('clients.create', compact('sectors', 'branches', 'origins'))->with('info', 'El Cliente fue registrado con éxito');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateClientRequest $request)
    {
        $client = Client::create($request->all());
        
        return redirect()->route('addresses.create', compact('client'))
            ->with('info', 'El cliente fue registrado con éxito..!!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $client = Client::findOrFail($id);
        
        return view('clients.show', compact('client'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $client     = Client::findOrFail($id);
        $sectors    = Sector::orderBy('id', 'ASC')->pluck('name', 'id');
        $branches   = Branch::orderBy('id', 'ASC')->pluck('name', 'id');
        $origins    = Origin::orderBy('id', 'ASC')->pluck('name', 'id');   

        return view('clients.edit', compact('client', 'sectors', 'branches', 'origins'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $client = Client::findOrFail($id);

        $client->fill($request->all())->save();

        return redirect()->route('clients.edit', $client->id)->with('info', 'El registro fue actualizado con éxito..!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
