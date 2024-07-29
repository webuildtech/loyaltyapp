@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Restaurant Admin Dashboard</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Overview</h3>
        </div>
        <div class="card-body">
            <p><strong>Total Gift Cards:</strong> {{ $totalGiftCards }}</p>
            <p><strong>Total Loyalty Programs:</strong> {{ $totalLoyaltyPrograms }}</p>
        </div>
    </div>
@stop
