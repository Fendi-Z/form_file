@extends('layouts.app')

@section('content')
    <div class="container d-flex justify-content-center mt-5 bg-light rounded shadow">
        <div class="row">
            <h1 class="text-center">WELCOME</h1>
            <a href="{{ url('cetak_pdf') }}" target="_blank" class="btn btn-primary btn-lg">Cetak PDF</a>
        </div>
    </div>
@endsection