@extends('adminlte::page')

@section('title', 'QR Code')

@section('content_header')
    <h1>QR Code</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">QR Code Details</h3>
        </div>
        <div class="card-body">
            <p><strong>User:</strong> {{ $qrCode->user->name }}</p>
            <p><strong>Restaurant:</strong> {{ $qrCode->restaurant->name }}</p>
            <p><strong>Type:</strong> {{ $qrCode->type }}</p>
            <p><strong>Value:</strong> {{ $qrCode->value }}</p>
            <p><img src="data:image/png;base64,{{ $qrCode->data }}" alt="QR Code" style="width: 300px; height: 300px;"></p>
        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
@stop

@section('js')
    <script src="{{ mix('js/app.js') }}"></script>
@stop
