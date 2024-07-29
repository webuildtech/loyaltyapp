@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>{{ $user->name }}</h1>
                <p>Email: {{ $user->email }}</p>
                <p>Restaurant: {{ $user->restaurant->name ?? 'N/A' }}</p>
            </div>
        </div>
    </div>
@endsection
