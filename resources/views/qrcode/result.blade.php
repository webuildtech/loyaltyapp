@extends('adminlte::page')

@section('title', 'QR Codes')

@section('content_header')
    <h1>QR Codes</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>User</th>
                                <th>Restaurant</th>
                                <th>Type</th>
                                <th>Value</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($qrCodes as $qrCode)
                                <tr>
                                    <td>{{ $qrCode->user->name }}</td>
                                    <td>{{ $qrCode->restaurant->name }}</td>
                                    <td>{{ $qrCode->type }}</td>
                                    <td>{{ $qrCode->value }}</td>
                                    <td>
                                        <form action="{{ route('qrcode.destroy', $qrCode->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
@stop

@section('js')
    <script src="{{ asset('js/app.js') }}"></script>
@stop
