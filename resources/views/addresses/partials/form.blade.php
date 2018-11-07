{{ Form::hidden('user_id', auth()->user()->id) }}
{{ Form::hidden('name', $client->name) }}

<div class="row">
	<div class="col-md-12 form-group">
		{{ Form::label('address_1', 'Urbanización / Sector') }}
		{{ Form::text('address_1', null, ['class' => 'form-control']) }}
	</div>
	<div class="col-md-12 form-group">
		{{ Form::label('address_2', 'Av / Calle') }}
		{{ Form::text('address_2', null, ['class' => 'form-control']) }}
	</div>
</div>

<div class="row">
	<div class="col-md-4 form-group">
		{{ Form::label('edifice', 'Edificio') }}
		{{ Form::text('edifice', null, ['class' => 'form-control']) }}
	</div>
	<div class="col-md-2 form-group">
		{{ Form::label('floor', 'Piso') }}
		{{ Form::text('floor', null, ['class' => 'form-control']) }}
	</div>
	<div class="col-md-6 form-group">
		{{ Form::label('office', 'Oficina') }}
		{{ Form::text('office', null, ['class' => 'form-control']) }}
	</div>
</div>

<div class="row">
	<div class="col-md-12 form-group">
		{{ Form::label('pto_reference', 'Punto de Referencia') }}
		{{ Form::text('pto_reference', null, ['class' => 'form-control']) }}
	</div>
</div>

<div class="row">
	<div class="col-md-6 form-group">
		{{ Form::label('country_id', 'País') }}
		{{ Form::select('country_id', $countries, null, ['class' => 'form-control', 'placeholder' => 'Seleccione un País']) }}
	</div>
	<div class="col-md-6 form-group">
		{{ Form::label('city_id', 'Ramo Económico') }}
		{{ Form::select('city_id', $cities, null, ['class' => 'form-control', 'placeholder' => 'Seleccione un Ramo Económico']) }}
	</div>
</div>

<div class="row">
	<div class="col-md-6 form-group">
		{{ Form::label('number_phone', 'Número de Telefono') }}
		{{ Form::text('number_phone', null, ['class' => 'form-control']) }}
	</div>
	<div class="col-md-6 form-group">
		{{ Form::label('number_fax', 'Número de Fax') }}
		{{ Form::text('number_fax', null, ['class' => 'form-control']) }}
	</div>
</div>

<hr>

<div class="form-group">
	{{-- {{ Form::submit('Registrar', ['class' => 'btn btn-primary float-right']) }} --}}

	{{-- dd({{ $btnName }}); --}}
	<button type="submit" class="btn btn-primary float-lg-right">
		{{ $btnText ?? 'Registrar' }}
	</button>
</div>