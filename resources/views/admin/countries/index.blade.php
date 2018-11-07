@extends('layouts.app')

@section('content')

<div class="card">
	<div class="card-header">
		<strong>País</strong>
	</div>
	<div class="card-body table-responsive">
		<div class="form-group">
			{!! Form::open(['route' => 'countries.store', 'method' => 'POST', 'class' => ' input-group']) !!}
			{{ csrf_field() }}

	      	<div class="input-group">
	        {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Ingrese Nombre del País' ]) !!}	

	        	<div class="input-group-append">
	          	{!! Form::submit('Agregar', ['class' => 'btn btn-outline-secondary']) !!}
	        	</div>
	     	</div>
			{!! Form::close() !!}  
		</div>
	<hr>
	   	<div>
	   	<table class="table table-striped table-bordered table-sm">
			<thead>
				<tr>
				<th width="20">#</th>
				<th>País</th>
				<th colspan="2">&nbsp;</th>
			</tr>
			</thead>
			<tbody>
	    	@foreach($countries as $country)
				<tr>
				<td>{{ $country->id }}</td>
				<td>{{ $country->name }}</td>
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
	  	{!! $countries->render() !!}	
	   </div>	
	</div>
</div>
@endsection