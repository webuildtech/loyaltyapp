@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Generate QR Code</h2>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <form action="{{ route('qrcode.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="user_id" class="form-label">Select User</label>
            <select id="user_id" name="user_id" class="form-select">
                @foreach($users as $user)
                    <option value="{{ $user->id }}">{{ $user->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="restaurant_id" class="form-label">Select Restaurant</label>
            <select id="restaurant_id" name="restaurant_id" class="form-select">
                @foreach($restaurants as $restaurant)
                    <option value="{{ $restaurant->id }}">{{ $restaurant->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="balance" class="form-label">Balance</label>
            <input type="number" id="balance" name="balance" class="form-control" value="{{ old('balance') }}">
        </div>
        <div class="mb-3">
            <label for="expiry_date" class="form-label">Expiry Date</label>
            <input type="date" id="expiry_date" name="expiry_date" class="form-control" value="{{ old('expiry_date') }}">
        </div>
        <button type="submit" class="btn btn-primary">Generate</button>
    </form>
</div>
@endsection
