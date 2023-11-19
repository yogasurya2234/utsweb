<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class barangController extends Controller
{

    public function index()
    {
        $barang = DB::table('barang')
        ->select("barang.id","idbarang","barang.nama","barang.harga")
        ->get();

        return view('barang.index', ['databarang' => $barang]);

    }

    public function create()
    {
        return view('barang.create');
    }
    public function store(Request $request)
    {
        DB::table('barang')->insert([
            'idbarang' => $request->idbarang,
            'nama' => $request->nama,
            'harga' => $request->harga
            
        ]);
  
        return redirect(url('/barang'));
    }
    public function update(Request $request, $id)
    {
        DB::table('barang')
        ->where('id', $id)
        ->update([
            'idbarang' => $request->idbarang,
            'nama' => $request->nama,
            'harga' => $request->harga
          
        ]);

        return redirect(url('/barang'));
    }

    public function edit($id)
    {
        $barang = DB::table('barang')
        ->select("barang.id","idbarang","barang.nama","barang.harga")
        ->first();

        return view('barang.edit', ['databarang' => $barang, 'id' => $id]);
    }

    public function show($id)
    {
        $barang = DB::table('barang')
        ->select("barang.id","barang.idbarang","barang.nama","barang.harga")
        ->first();

        return view('barang.show', ['databarang' => $barang, 'id' => $id]);
    }
    public function destroy($id)
    {
        DB::table('barang')
        ->where('id', $id)
        ->delete();

        return redirect(url('/barang'));
    }
}
   