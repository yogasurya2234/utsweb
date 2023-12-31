@extends('layout.master')

@section('title', 'pelanggan')

@section('breadcrumb')
    <li class="breadcrumb-item active">pelanggan</li>
@endsection

@section('content')
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-10">
                    <h4 class="card-title">Tabel Data pelanggan</h4>
                </div>
                <div class="col-2">
                    <a class="btn btn-sm btn-primary float-end" href="{{ url('/pelanggan/create') }}">Tambah</a>
                </div>
            </div>
        </div>
        <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Nomer</th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $d)
                        <tr>
                            <td>{{ $d->idpelanggan }}</td>
                            <td>{{ $d->nama }}</td>
                            <td>{{ $d->notelp }}</td>\
                            <td>{{ $d->jenisbarang_nama }}</td>
                            <td class="float-end">
                                <a class="btn btn-sm btn-warning"
                                    href="{{ url('/pelanggan/' . $d->id . '/edit') }}">Ubah</a>
                                    <a class="btn btn-sm btn-info"
                                    href="{{ url('/pelanggan/' . $d->id) }}">View</a>
                                    <form style="display: inline;"action="{{ url('/pelanggan/' . $d->id ) }}" method = "POST">
                                    @csrf
                                    @method('DELETE')
                                <button class="btn btn-sm btn-danger">Hapus</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection