@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Available Games') }}</div>

                <div class="card-body">
                    @foreach($games as $game)
                        <div class="card mb-3">
                            <div class="card-body">
                                <h5 class="card-title">{{ $game['title'] }}</h5>
                                <p class="card-text">{{ $game['description'] }}</p>
                                <a href="#" class="btn btn-primary">Play Now</a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection