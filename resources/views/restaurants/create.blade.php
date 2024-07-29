@extends('adminlte::page')

@section('title', 'Add New Restaurant')

@section('content_header')
    <h1>Add New Restaurant</h1>
@stop

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <form action="{{ route('restaurants.store') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="name">Restaurant Name</label>
                        <input type="text" name="name" class="form-control" id="name" placeholder="Enter Restaurant Name">
                    </div>
                    <div class="form-group">
                        <label for="address">Address</label>
                        <input type="text" name="address" class="form-control" id="address" placeholder="Enter Address">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
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
