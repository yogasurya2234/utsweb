@extends('layout.master')

@section('title', 'Ubah pelanggan')

@section('breadcrumb')
    <li class="breadcrumb-item"><a href="{{ url('/pelanggan') }}">Pelanggan</a></li>
    <li class="breadcrumb-item active">Show</li>
@endsection

@section('content')
    <div class="card">
        <div class="card-header">
            <div class="card-header">Show</div>
            <div class="card-body">
             
           
                  <div class="card-body">
                  <p class="card-text">ID pelanggan :{{ $data->idpelanggan }}</p>
                  <p class="card-text">Nama : {{ $data->nama }}</p>
                  <p class="card-text">No Telephone: {{ $data->notelp }}</p>
                  <a class="btn btn-sm btn-info" href="{{ url('/pelanggan/') }}">Back</a>
              
            </div>
          </div>
@endsection