{{ Form::hidden('user_id', auth()->user()->id) }}

<div class="row">
	<div class="col-4">
	<div class="row">{{ Form::label('type', 'Tipo de Cliente', ['class' => 'col-6']) }}</div>
		<label>{{ Form::radio('type', 'CORPORATIVO') }} Corportipo</label>
		<label>{{ Form::radio('type', 'REGULAR') }} Regular</label>
	</div>
	<div class="col-4">
	<div class="row">{{ Form::label('nacionality', 'Nacionalidad', ['class' => 'col-6']) }}</div>
		<label>{{ Form::radio('nacionality', 'NACIONAL') }} Nacional</label>
		<label>{{ Form::radio('nacionality', 'EXTRANJERO') }} Extranjero</label>
	</div>
	<div class="col-4">
	<div class="row">{{ Form::label('exempt_ob', 'Exento OB/BBO', ['class' => 'col-6']) }}</div>
		<label>{{ Form::radio('exempt_ob', 'SI') }} SI</label>
		<label>{{ Form::radio('exempt_ob', 'NO') }} NO</label>
	</div>
</div>
<hr>

<div class="row form-group">
	<div class="col-8">
		{{ Form::label('name', 'Razón Social') }}
		{{ Form::text('name', null, ['class' => 'form-control', 'id' => 'name']) }}
	</div>
	<div class="col-4">
		{{ Form::label('cod_rif', 'N Rif') }}
		{{ Form::text('cod_rif', null, ['class' => 'form-control']) }}
	</div>
</div>
<div class="row">
	<div class="col-12 form-group">
		{{ Form::label('comercial_name', 'Nombre Comercial') }}
		{{ Form::text('comercial_name', null, ['class' => 'form-control']) }}
	</div>
</div>
<div class="row">
	<div class="col-12 form-group">
		{{ Form::label('business_group', 'Grupo Empresarial') }}
		{{ Form::text('business_group', null, ['class' => 'form-control']) }}
	</div>
</div>

<div class="row">
	<div class="col-md-6 form-group">
		{{ Form::label('sector_id', 'Sector Económico') }}
		{{ Form::select('sector_id', $sectors, null, ['class' => 'form-control', 'placeholder' => 'Seleccione un Sector Económico']) }}
	</div>
	<div class="col-md-6 form-group">
		{{ Form::label('branch_id', 'Ramo Económico') }}
		{{ Form::select('branch_id', $branches, null, ['class' => 'form-control', 'placeholder' => 'Seleccione un Ramo Económico']) }}
	</div>
</div>

<div class="row">
	<div class="col-md-6 form-group">
		{{ Form::label('origin_id', 'Procedencia del Cliente') }}
		{{ Form::select('origin_id',$origins ,null, ['class' => 'form-control', 'placeholder' => 'Ingrese Procedencia del Cliente']) }}
	</div>
	<div class="col-md-6 form-group">
		{{ Form::label('years_op', 'Años de Operación') }}
		{{ Form::text('years_op', null, ['class' => 'form-control']) }}
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