@extends('layouts.app')

@section('content')

<div class="card">
    <div class="card-header text-white bg-primary mb-3">
        <h5>
            <i class="far fa-address-book">&nbsp;</i><strong>Datos de Dirección del Cliente</strong>
        </h5>
    </div>
      <div class="card-body">
        {!! Form::open(['route' => 'addresses.store']) !!}
        @csrf

        @include('addresses.partials.form')

        {!! Form::close() !!}
      </div>
    </div>
</div>

@endsection