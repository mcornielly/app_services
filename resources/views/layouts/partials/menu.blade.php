<div class="card shadow-sm">
	<div class="card-header">
		Menú
	</div>	
	<div class="list-group">
		<a href="{{ route('home') }}" 
			@if(request()->is('home')) class="list-group-item list-group-item-action active" 
			@else class="list-group-item list-group-item-action" 
			@endif>
			Inicio
		</a>
 
		<div class="list-group-item">
			<a class="list-group-item-action dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-expanded="false">
				Clientes
				<span class="caret"></span>
			</a>
			<div class="dropdown-menu">
		      	<a class="dropdown-item" href="{{ route('clients.index') }}">Listado de Clientes</a>
		      	<a class="dropdown-item" href="{{ route('clients') }}">Registro de Cliente</a>
		      	<a class="dropdown-item" href="{{ route('addresses.index') }}">Direcciones</a>
		      	<a class="dropdown-item" href="{{ route('contacts.index') }}">Contactos</a>
			</div>	
		</div>

{{--   		<a href="{{ route('clients.index') }}" 
  			@if(request()->is('clients')) class="list-group-item list-group-item-action active"
  			@else class="list-group-item list-group-item-action" 
 			@endif>
  			Clientes
  		</a> --}}
  		<a href="{{ route('addresses.index') }}"
  			@if(request()->is('')) class="list-group-item list-group-item-action active" 
  			@else class="list-group-item list-group-item-action"
  			@endif>
  			Servicios
  		</a>
  		<div class="list-group-item">
			<a id="navbarDropdown" class="list-group-item-action dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false" >
				Mantenimiento
				<span class="caret"></span>
			</a>
		    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
		      	<a class="dropdown-item" href="{{ route('sectors.index') }}">Sectores Económicos</a>
		      	<a class="dropdown-item" href="{{ route('branches.index') }}">Ramo Económico</a>
		      	<a class="dropdown-item" href="{{ route('origins.index') }}">Procendencia del Cliente</a>
		      	<a class="dropdown-item" href="{{ route('countries.index') }}">Paises</a>
		      	<a class="dropdown-item" href="{{ route('cities.index') }}">Ciudades</a>
		    </div>
  		</div>
	</div>
</div>

<div>&nbsp;</div>
