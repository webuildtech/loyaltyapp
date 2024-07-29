@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Customer Dashboard') }}</div>

                <div class="card-body">
                    <h4>{{ __('Hello, ') . $user->name }}</h4>
                    <p>{{ __('Here are your gift cards and loyalty points:') }}</p>

                    @foreach ($giftCards as $giftCard)
                        <div class="card mt-3">
                            <div class="card-body">
                                <h5>{{ __('Gift Card: ') . $giftCard->card_number }}</h5>
                                <p>{{ __('Balance: ') . $giftCard->balance }}</p>
                                <p>{{ __('Loyalty Points: ') . $user->loyalty_points }}</p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
