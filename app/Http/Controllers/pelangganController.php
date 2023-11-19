<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class pelangganController extends Controller
{

    public function index()
    {
        $pelanggan = DB::table('pelanggan')
        ->select("pelanggan.id","idpelanggan","pelanggan.nama","pelanggan.notelp")
        ->get();

        return view('pelanggan.index', ['data' => $pelanggan]);

    }

    public function create()
    {
        return view('pelanggan.create');
    }
    public function store(Request $request)
    {
        DB::table('pelanggan')->insert([
            'idpelanggan' => $request->idpelanggan,
            'nama' => $request->nama,
            'notelp' => $request->notelp
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
            'notelp' => $request->notelp
        ]);

        return redirect(url('/pelanggan'));
    }

    public function edit($id)
    {
        $pelanggan = DB::table('pelanggan')
        ->select("pelanggan.id","idpelanggan","pelanggan.nama","pelanggan.notelp")
        ->first();

        return view('pelanggan.edit', ['data' => $pelanggan, 'id' => $id]);
    }

    public function show($id)
    {
        $pelanggan = DB::table('pelanggan')
        ->select("pelanggan.id","idpelanggan","pelanggan.nama","pelanggan.notelp")
        ->first();

        return view('pelanggan.show', ['data' => $pelanggan, 'id' => $id]);
    }
    public function destroy($id)
    {
        DB::table('pelanggan')
        ->where('id', $id)
        ->delete();

        return redirect(url('/pelanggan'));
    }
}
   