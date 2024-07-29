@extends('layouts.app')

@section('title', 'Gift Card Usage')

@section('content')
    <div class="container">
        <h1>Gift Card Usage</h1>
        <p><strong>User:</strong> {{ $giftCard->user->name }}</p>
        <p><strong>Restaurant:</strong> {{ $giftCard->restaurant->name }}</p>
        <p><strong>Type:</strong> {{ $giftCard->type }}</p>
        <p><strong>Value:</strong> {{ $giftCard->value }}</p>
        <p><strong>Remaining Value:</strong> {{ $giftCard->remaining_value }}</p>
        <form action="{{ route('worker.use_gift_card_part', $giftCard->id) }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="amount">Amount to Use</label>
                <input type="number" name="amount" id="amount" class="form-control" min="0" max="{{ $giftCard->remaining_value }}">
            </div>
            <button type="submit" class="btn btn-warning">Use in Part</button>
        </form>
        <form action="{{ route('worker.use_gift_card_full', $giftCard->id) }}" method="POST">
            @csrf
            <button type="submit" class="btn btn-danger">Use in Full</button>
        </form>
    </div>
@stop
