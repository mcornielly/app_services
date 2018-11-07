@extends('layouts.app')

@section('content')
    <div class="row mb-5 justify-content-center">
        <div class="col-md-12">
            <div class="card shadow-sm">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    You are logged in!
                </div>
            </div>
        </div>
    </div>
@endsection
