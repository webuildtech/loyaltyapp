<!-- resources/views/restaurants/show.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>{{ $restaurant->name }}</h1>
                <p>{{ $restaurant->address }}</p>
            </div>
        </div>
    </div>
@endsection
