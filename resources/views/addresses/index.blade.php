@extends('layouts.app')

@section('content')

<div class="card shadow-sm table-responsive">
    <div class="card-header">Listado de Clientes
        <a href="{{ route('addresses.create') }}" class="btn btn-primary btn-sm float-md-right">Crear Registro</a>
    </div>
    
    <div class="card-body">
        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif
        <div>
            <table class="table table-striped table-bordered table-sm">
               <thead class="thead">
                   <tr>
                       <th width="80"># Cliente</th>
                       <th width="400">Nombre</th>
                       <th>Rif</th>
                       <th>Tipo</th>
                       <th colspan="3">&nbsp;</th>
                   </tr>
               </thead>
               <tbody>
                   @foreach($addresses as $addresses) 
                   <tr>
                       <td align="">{{ $addresses->id }}</td>
                       <td>{{ $addresses->name }}</td>
                       <td>{{ $addresses->cod_rif }}</td>
                       <td>{{ $addresses->type }}</td>
                       <td width="30" align="center">
                          <a href="{{ route('addresses.edit', $addresses->id) }}" title="Editar">
                             <h5 class="text-success"><i class="far fa-edit"></i></h5>
                         </a>
                       </td>
                       <td width="30" align="center">
                          <a href="{{ route('addresses.show', $addresses->id) }}" title="Mostrar">
                           <h5 class="text-primary"><i class="far fa-eye"></i></h5>
                          </a>
                       </td>  
                       </td>
                       <td width="30" align="center">
                          <a href="#" class="text-danger" title="Eliminar">
                           <h5 class="text-danger"><i class="far fa-trash-alt"></i></h5>
                          </a>
                       </td>
                   </tr>
                   @endforeach
               </tbody>
            </table>
        </div>
    </div>
</div>

@endsection