@extends('layout.master')

@section('title', 'Tambah Customer')

@section('breadcrumb')
    <li class="breadcrumb-item"><a href="{{ url('/Customer') }}">Customer</a></li>
    <li class="breadcrumb-item active">Tambah</li>
@endsection

@section('content')
    <div class="card">
        <div class="card-header">
            <div class="row">
                <h4 class="card-title">Form Tambah Customer</h4>
            </div>
        </div>
        <form action="{{ url('/Customer') }}" method="POST">
            <div class="card-body">
                @csrf
                <div>
                    <label class="form-label">ID</label>
                    <input class="form-control" type="text" name="ID">
                </div>
                <div>
                    <label class="form-label">Nama</label>
                    <input class="form-control" type="text" name="nama">
                </div>
                <div>
                    <label class="form-label">Nomer_Telpon</label>
                    <select class="form-select" name="Nomer">
                    @foreach ($jurusan as $j)
                        <option  value="{{ $j->id }}">{{ $j->nama }} </option>
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