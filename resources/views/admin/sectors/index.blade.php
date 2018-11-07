@extends('layouts.app')

@section('content')

<div class="card">
	<div class="card-header">
		<strong>Sectores Económicos</strong>
	</div>
	<div class="card-body table-responsive">
		<div class="form-group">
			{!! Form::open(['route' => 'sectors.store', 'method' => 'POST', 'class' => ' input-group']) !!}
			{{ csrf_field() }}

	      	<div class="input-group">
	        {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Ingrese Sector Económico' ]) !!}	

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
				<th>Nombre de Sector</th>
				<th colspan="2">&nbsp;</th>
			</tr>
			</thead>
			<tbody>
	    	@foreach($sectors as $sector)
				<tr>
				<td>{{ $sector->id }}</td>
				<td>{{ $sector->name }}</td>
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
	  	{!! $sectors->render() !!}	
	   </div>	
	</div>
</div>
@endsection