@extends('layout.master')

@section('title', 'Ubah pelanggan')

@section('breadcrumb')
    <li class="breadcrumb-item"><a href="{{ url('/pelanggan') }}">pelanggan</a></li>
    <li class="breadcrumb-item active">Ubah</li>
@endsection

@section('content')
    <div class="card">
        <div class="card-header">
            <div class="row">
                <h4 class="card-title">Form Ubah pelanggan</h4>
            </div>
        </div>
        <form action="{{ url('/pelanggan/' . $id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="card-body">
                <div>
                    <label class="form-label">ID</label>
                    <input class="form-control" type="text" name="idpelanggan" value="{{ $data->idpelanggan }}">
                </div>
                <div>
                    <label class="form-label">Nama</label>
                    <input class="form-control" type="text" name="nama" value="{{ $data->nama }}">
                </div>
                <div>
                <label class="form-label">nomer</label>
                    <input class="form-control" type="text" name="notelp" value="{{ $data->notelp }}">
                </div>
                <div>
                 
                    </select>
                </div>

            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
        </form>
    </div>
@endsection