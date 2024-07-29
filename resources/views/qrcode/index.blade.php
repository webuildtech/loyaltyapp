@extends('adminlte::page')

@section('title', 'Gift Cards')

@section('content_header')
    <h1>Gift Cards</h1>
@stop

@section('content')
    <div class="container">
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
                        <td>{{ $giftCard->user->name }}</td>
                        <td>{{ $giftCard->restaurant->name }}</td>
                        <td>{{ $giftCard->balance }}</td>
                        <td>{{ $giftCard->expiry_date }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@stop
