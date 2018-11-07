@extends('layouts.app')

@section('content')

<div class="card">
	<div class="card-header">
		<strong>Ciudades</strong>
	</div>
	<div class="card-body table-responsive">
			{!! Form::open(['route' => 'cities.store', 'method' => 'POST']) !!}
			{{ csrf_field() }}

			
			<div class="form-group">
				{{ Form::label('country_id', 'País') }}
				{{ Form::select('country_id', $countries, null, ['class' => 'form-control', 'placeholder' => 'Seleccione un País']) }}
			</div>
		
	      	<div class="input-group">
	        {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Ingrese Ciudad' ]) !!}	

	        	<div class="input-group-append">
	          	{!! Form::submit('Agregar', ['class' => 'btn btn-outline-secondary']) !!}
	        	</div>
			{!! Form::close() !!}  
		</div>
	<hr>
	   	<div>
	   	<table class="table table-striped table-bordered table-sm">
			<thead>
				<tr>
				<th width="20">#</th>
				<th>Ciudad</th>
				<th>País</th>
				<th colspan="2">&nbsp;</th>
			</tr>
			</thead>
			<tbody>
	    	@foreach($cities as $city)
				<tr>
				<td>{{ $city->id }}</td>
				<td>{{ $city->name }}</td>
				<td>{{ $city->country->name }}</td>
				<td width="30" align="center">
					<a href="#">
						<h5 class="text-success"><i class="far fa-edit success"></i></h5>
					</a>
				</td>
				<td width="30" align="center">
					<a href="#">
						<h5 class="text-danger"><i class="far fa-trash-alt"></i></h5>
					</a>
				</td>
			</tr>
	    	@endforeach 
			</tbody>
			</table>
	  	{!! $cities->render() !!}	
	   </div>	
	</div>
</div>
@endsection