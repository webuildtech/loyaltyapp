@extends('adminlte::page')

@section('title', 'QR Scanner')

@section('content_header')
    <h1>QR Scanner</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div id="reader" width="600px"></div>
        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
@stop

@section('js')
    <script src="{{ mix('js/app.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/html5-qrcode/minified/html5-qrcode.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            console.log("Document loaded. Checking Html5QrcodeScanner...");

            if (typeof Html5QrcodeScanner !== 'undefined') {
                console.log("Html5QrcodeScanner is defined");

                function onScanSuccess(decodedText, decodedResult) {
                    console.log(`Code scanned = ${decodedText}`, decodedResult);
                }

                function onScanFailure(error) {
                    console.warn(`Code scan error = ${error}`);
                }

                let html5QrcodeScanner = new Html5QrcodeScanner(
                    "reader", { fps: 10, qrbox: 250 });

                html5QrcodeScanner.render(onScanSuccess, onScanFailure);
            } else {
                console.error("Html5QrcodeScanner is not defined");
            }
        });
    </script>
@stop
