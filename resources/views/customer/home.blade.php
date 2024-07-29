@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    <h3>Gift Cards</h3>
                    @if($giftCards->isEmpty())
                        <p>You have no gift cards.</p>
                    @else
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Restaurant</th>
                                    <th>Balance</th>
                                    <th>Expiry Date</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($giftCards as $giftCard)
                                    <tr>
                                        <td>{{ $giftCard->restaurant->name }}</td>
                                        <td>{{ $giftCard->balance }}</td>
                                        <td>{{ $giftCard->expiry_date }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    @endif

                    <h3>Loyalty Points</h3>
                    <p>You have {{ $loyaltyPoints }} loyalty points.</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
