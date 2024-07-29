<!-- resources/views/dashboard/index.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Dashboard</div>
                    <div class="card-body">
                        <h4>Total Restaurants: {{ $totalRestaurants }}</h4>
                        <h4>Total Gift Cards Created: {{ $totalGiftCards }}</h4>
                        <h4>Total Loyalty Programs Created: {{ $totalLoyaltyPrograms }}</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
