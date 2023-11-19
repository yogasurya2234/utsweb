<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class pelangganController extends Controller
{

    public function index()
    {
        $pelanggan = DB::table('pelanggan')
        ->select("pelanggan.id","idpelanggan","pelanggan.nama","pelanggan.notelp","jenisbarang_id","jenisbarang.nama AS jenisbarang_nama")
        ->join("jenisbarang","jenisbarang.id","=","pelanggan.jenisbarang_id")
        ->get();

        $jenisbarang = DB::table('jenisbarang')->get();
        return view('pelanggan.index', ['data' => $pelanggan]);

    }

    public function create()
    {
        $jenisbarang = DB::table('jenisbarang')->get();
        return view('pelanggan.create', ['jenisbarang' => $jenisbarang]);
    }
    public function store(Request $request)
    {
        DB::table('pelanggan')->insert([
            'idpelanggan' => $request->idpelanggan,
            'nama' => $request->nama,
            'notelp' => $request->notelp,
            'jenisbarang_id' => $request->jenisbarang
        ]);
  
        return redirect(url('/pelanggan'));
    }
    public function update(Request $request, $id)
    {
        DB::table('pelanggan')
        ->where('id', $id)
        ->update([
            'idpelanggan' => $request->idpelanggan,
            'nama' => $request->nama,
            'notelp' => $request->notelp,
            'jenisbarang_id' => $request->jenisbarang
        ]);

        return redirect(url('/pelanggan'));
    }

    public function edit($id)
    {
        $pelanggan = DB::table('pelanggan')
        ->select("pelanggan.id","idpelanggan","pelanggan.nama","pelanggan.notelp","jenisbarang_id","jenisbarang.nama AS jenisbarang_nama")
        ->join("jenisbarang","jenisbarang.id","=","pelanggan.jenisbarang_id")
        ->where("pelanggan.id",$id)
        ->first();
        $jenisbarang = DB::table('jenisbarang')->get();

        return view('pelanggan.edit', ['data' => $pelanggan, 'id' => $id, 'jenisbarang' => $jenisbarang]);
    }

    public function show($id)
    {
        $pelanggan = DB::table('pelanggan')
        ->select("pelanggan.id","idpelanggan","pelanggan.nama","pelanggan.notelp","jenisbarang_id","jenisbarang.nama AS jenisbarang_nama")
        ->join("jenisbarang","jenisbarang.id","=","pelanggan.jenisbarang_id")
        ->where("pelanggan.id",$id)
        ->first();
        $jenisbarang = DB::table('jenisbarang')->get();


        return view('pelanggan.show', ['data' => $pelanggan, 'id' => $id, 'jenisbarang' => $jenisbarang]);
    }
    public function destroy($id)
    {
        DB::table('pelanggan')
        ->where('id', $id)
        ->delete();

        return redirect(url('/pelanggan'));
    }
}
   