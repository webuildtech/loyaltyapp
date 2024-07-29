@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Gift Cards</h2>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>User</th>
                <th>Restaurant</th>
                <th>Balance</th>
                <th>Expiry Date</th>
            </tr>
        </thead>
        <tbody>
            @foreach($giftCards as $giftCard)
                <tr>
                    <td>{{ $giftCard->id }}</td>
                    <td>{{ $giftCard->user ? $giftCard->user->name : 'N/A' }}</td>
                    <td>{{ $giftCard->restaurant ? $giftCard->restaurant->name : 'N/A' }}</td>
                    <td>{{ $giftCard->balance }}</td>
                    <td>{{ $giftCard->expiry_date }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
