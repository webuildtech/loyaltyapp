@extends('adminlte::page')

@section('title', 'Scan QR Code')

@section('content_header')
    <h1>Scan QR Code</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Scan QR Code</h3>
        </div>
        <div class="card-body">
            <form action="{{ route('worker.useFull') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="qrcode_id">QR Code ID</label>
                    <input type="text" name="qrcode_id" class="form-control" required>
                </div>
                <button type="submit" class="btn btn-danger">Use in Full</button>
            </form>
            <form action="{{ route('worker.usePartial') }}" method="POST" class="mt-3">
                @csrf
                <div class="form-group">
                    <label for="qrcode_id">QR Code ID</label>
                    <input type="text" name="qrcode_id" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="amount">Amount to Use</label>
                    <input type="number" name="amount" class="form-control" required>
                </div>
                <button type="submit" class="btn btn-warning">Use in Part</button>
            </form>
        </div>
    </div>
@stop
