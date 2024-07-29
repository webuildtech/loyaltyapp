@extends('adminlte::page')

@section('title', 'Customer Dashboard')

@section('content_header')
    <h1>Customer Dashboard</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Gift Cards</h3>
        </div>
        <div class="card-body">
            @foreach ($giftCards as $giftCard)
                <p><strong>Gift Card ID:</strong> {{ $giftCard->id }}</p>
                <p><strong>Value:</strong> {{ $giftCard->value }}</p>
                <hr>
            @endforeach
        </div>
    </div>

    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Loyalty Programs</h3>
        </div>
        <div class="card-body">
            @foreach ($loyaltyPrograms as $loyaltyProgram)
                <p><strong>Loyalty Program ID:</strong> {{ $loyaltyProgram->id }}</p>
                <p><strong>Points:</strong> {{ $loyaltyProgram->value }}</p>
                <hr>
            @endforeach
        </div>
    </div>
@stop
