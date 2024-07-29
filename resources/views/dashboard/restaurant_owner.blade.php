@extends('adminlte::page')

@section('title', 'Restaurant Dashboard')

@section('content_header')
    <h1>Restaurant Dashboard</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-lg-6 col-6">
            <div class="small-box bg-info">
                <div class="inner">
                    <h3>{{ $totalGiftCards }}</h3>
                    <p>Total Gift Cards</p>
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-6">
            <div class="small-box bg-success">
                <div class="inner">
                    <h3>{{ $totalLoyaltyPrograms }}</h3>
                    <p>Total Loyalty Programs</p>
                </div>
            </div>
        </div>
    </div>
@stop
