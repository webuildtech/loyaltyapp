@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Customer Dashboard</h1>
    <div class="card">
        <div class="card-header">Gift Cards</div>
        <div class="card-body">
            @if ($giftCards->isEmpty())
                <p>You have no gift cards.</p>
            @else
                <ul>
                    @foreach ($giftCards as $giftCard)
                        <li>
                            Restaurant: {{ $giftCard->restaurant->name }}<br>
                            Type: {{ $giftCard->type }}<br>
                            Value: {{ $giftCard->value }}
                        </li>
                    @endforeach
                </ul>
            @endif
        </div>
    </div>
    <div class="card mt-4">
        <div class="card-header">Loyalty Points</div>
        <div class="card-body">
            <p>You have {{ $loyaltyPoints->sum('points') }} loyalty points.</p>
        </div>
    </div>
</div>
@endsection
