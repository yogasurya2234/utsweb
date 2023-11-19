@extends('layout.master')

@section('title', 'Tambah pelanggan')

@section('breadcrumb')
    <li class="breadcrumb-item"><a href="{{ url('/pelanggan') }}">pelanggan</a></li>
    <li class="breadcrumb-item active">Tambah</li>
@endsection

@section('content')
    <div class="card">
        <div class="card-header">
            <div class="row">
                <h4 class="card-title">Form Tambah pelanggan</h4>
            </div>
        </div>
        <form action="{{ url('/pelanggan') }}" method="POST">
            <div class="card-body">
                @csrf
                <div>
                    <label class="form-label">ID</label>
                    <input class="form-control" type="text" name="idpelanggan">
                </div>
                <div>
                    <label class="form-label">Nama</label>
                    <input class="form-control" type="text" name="nama">
                </div>
                <div>
            
                    <label class="form-label">Nomer Telp</label>
                    <input class="form-control" type="text" name="notelp">
                </div>
                <div>
                    <label class="form-label">Jenis Barang</label>
                    <select class="form-select" name="jenisbarang">
                        @foreach ($jenisbarang as $j)
                            <option value="{{ $j->id }}">{{ $j->nama }}</option>
                        @endforeach
                    </select>
                </div>

            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
        </form>
    </div>
@endsection