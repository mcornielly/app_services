@extends('layouts.app')

@section('content')

<div class="card shadow-sm table-responsive">
    <div class="card-header">
    	<strong class="float-md-right">N° 0000{{ $client->id }}</strong>
		<strong>Cliente</strong>		
    </div>
    
    <div class="card-body">
    	<table class="table table-bordered table-sm">
    			<tr>
    				<th colspan="6" class="badge-secondary text-center">Datos Del Cliente</th>
    			</tr>
    			<tr>
    				<th class="badge-light">Razón Social: </th>
    				<td colspan="5">{{ $client->name }}</td>
    			</tr>
    			<tr>
    				<th class="badge-light">N° CRIB: </th>
    				<td>{{ $client->cod_rif }}</td>
    				<th class="badge-light">COD COMERCIO: </th>
    				<td >00000</td>
    				<th class="badge-light">COD Cliente: </th>
    				<td colspan="2">00000</td>
    			</tr>
    			<tr>
    				<th class="badge-light">Tipo de Cliente: </th>
    				<td>{{ $client->type }}</td>
    				<th class="badge-light">Nacionalidad del Cliente: </th>
    				<td>{{ $client->nacionality }}</td>
    				<th class="badge-light">Nacionalidad del Cliente: </th>
    				<td>{{ $client->exempt_ob }}</td>
    			</tr>
    			<tr>
    				<th class="badge-light">Nombre Comercial: </th>
    				<td colspan="5">{{ $client->comercial_name }}</td>
    			</tr>
    			<tr>
    				<th class="badge-light">Grupo Financiero: </th>
    				<td colspan="2">{{ $client->business_group }}</td>
    				<th class="badge-light">Cobertura Geografica: </th>
    				<td colspan="2">{{ $client->coverag_id }}</td>
    			</tr>
    			<tr>
    				<th class="badge-light">Sector Económico: </th>
    				<td colspan="2">{{ $client->sector->name }}</td>
    				<th class="badge-light">Ramo Económico: </th>
    				<td colspan="2">{{ $client->branch->name }}</td>
    			</tr>
    			<tr>
    				<th class="badge-light">Procedencia del Cliente: </th>
    				<td colspan="2">{{ $client->origin->name }}</td>
    				<th class="badge-light">Años de Operación: </th>
    				<td colspan="2">{{ $client->years_op }}</td>
    			</tr>	
    	</table>
    </div>
    <div class="card-footer">
    	<button class="btn btn-primary float-md-right">Generar Solcitud</button>
    </div>
</div>

@endsection