@extends('layouts.app')

@section('content')

<div class="card">
    <div class="card-header text-white bg-primary mb-3">
        <h5>
            <i class="far fa-address-book">&nbsp;</i><strong>Datos del Cliente</strong>
        </h5>
    </div>
      <div class="card-body">
        {!! Form::open(['route' => 'clients.store']) !!}
        @csrf

        @include('clients.partials.form')

        {!! Form::close() !!}
      </div>
    </div>
</div>

@endsection