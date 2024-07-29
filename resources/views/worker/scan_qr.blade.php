@extends('layouts.app')

@section('title', 'Scan QR Code')

@section('content')
    <div class="container">
        <h1>Scan QR Code</h1>
        <form action="{{ route('worker.scan_qr') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="qr_code">QR Code</label>
                <input type="text" name="qr_code" id="qr_code" class="form-control">
            </div>
            <button type="submit" class="btn btn-primary">Scan</button>
        </form>
    </div>
@stop
