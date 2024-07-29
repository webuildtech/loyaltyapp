<!-- resources/views/qrcode/create.blade.php -->
@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Generate QR Code</h1>
        <form action="{{ route('qrcode.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="user_id">Select User</label>
                <select class="form-control" id="user_id" name="user_id">
                    @foreach($users as $user)
                        <option value="{{ $user->id }}">{{ $user->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="restaurant_id">Select Restaurant</label>
                <select class="form-control" id="restaurant_id" name="restaurant_id">
                    @foreach($restaurants as $restaurant)
                        <option value="{{ $restaurant->id }}">{{ $restaurant->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="balance">Balance</label>
                <input type="number" name="balance" id="balance" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="expiry_date">Expiry Date</label>
                <input type="date" name="expiry_date" id="expiry_date" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary">Create Gift Card</button>
        </form>
    </div>
@endsection