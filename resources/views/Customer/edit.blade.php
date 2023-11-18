@extends('layout.master')

@section('title', 'Ubah Customer')

@section('breadcrumb')
    <li class="breadcrumb-item"><a href="{{ url('/Customer') }}">Customer</a></li>
    <li class="breadcrumb-item active">Ubah</li>
@endsection

@section('content')
    <div class="card">
        <div class="card-header">
            <div class="row">
                <h4 class="card-title">Form Ubah Costomer</h4>
            </div>
        </div>
        <form action="{{ url('/Costomer/' . $id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="card-body">
                <div>
                    <label class="form-label">ID</label>
                    <input class="form-control" type="text" name="ID" value="{{ $data->ID }}">
                </div>
                <div>
                    <label class="form-label">Nama</label>
                    <input class="form-control" type="text" name="nama" value="{{ $data->nama }}">
                </div>
                <div>
                    <label class="form-label">Nomer_Telpon</label>
                    <select class="form-select" name="Nomer">
                    @foreach ($jurusan as $j)
                        <option {{ $data->jurusan_id == $j->id ? 'selected' : '' }} value="{{ $j->id }}">{{ $j->nama }} </option>
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