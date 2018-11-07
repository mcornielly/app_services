@extends('layouts.app')

@section('content')

<div class="card">
    <div class="card-header text-white bg-primary mb-3">
        <h5>
            <i class="far fa-address-book">&nbsp;</i><strong>Editar del Cliente</strong>
        </h5>
    </div>
      <div class="card-body">
      	{!! Form::model($client, ['route' => ['clients.update', $client->id], 'method' => 'PUT']) !!}

        @include('clients.partials.form', ['btnText' => 'Editar'])

        {!! Form::close() !!}
      </div>
    </div>
</div>

@endsection