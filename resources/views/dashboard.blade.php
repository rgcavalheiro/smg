@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ ('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ ('You are logged in!') }}

                    <div class="mt-4">
                        <a href="{{ route('games') }}" class="btn btn-primary">View Available Games</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection