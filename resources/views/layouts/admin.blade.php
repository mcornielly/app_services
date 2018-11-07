@extends('layouts.app')

@section('content')

<div class="container">
	<div class="row">
		<div class="col-md-3">
			@include('layouts.partials.menu')
		</div>
		<div class="col-md-8">
			@yield('content-admin')
		</div>
	</div>
</div>

@endsection