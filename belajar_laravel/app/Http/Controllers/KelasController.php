<?php

namespace App\Http\Controllers;

use App\Kelas;
use Illuminate\Http\Request;

class KelasController extends Controller
{
    public function index()
    {
        //ambil data max 10
        $data = Kelas::paginate(10);
        //membuat variabel tampil yang diisi dengan data
        $tampil['data'] = $data;
        //tampilkan resources/views/kelas/index.blade.php beserta variabel tampil
        return view("kelas.index", $tampil);
    }
    public function create()
    {
        //tampilkan resources/views/kelas/create.blade.php
        return view("kelas.create");
    }

    public function store(Request $request)
    {
        //validasi inputan
        $this->validate($request, [
            'nama_kelas' => 'required|unique:kelas',
            'kompetensi_keahlian' => 'required',
        ]);
        $data = Kelas::create($request->all());
        return redirect()->route("kelas.index")->with(
            "success",
            "Data berhasil disimpan."
        );
    }

    public function show($kela)
    {
        //
    }

    public function edit($kela)
    {
        $data = Kelas::findOrFail($kela);
        //tampilkan resources/views/kelas/edit.blade.php
        return view("kelas.edit", $data);
    }
    public function update(Request $request, $kela)
    {
        //validasi inputan
        $this->validate($request, [
            'nama_kelas' => 'required',
            'kompetensi_keahlian' => 'required',
        ]);
        $data = Kelas::findOrFail($kela);
        $data->nama_kelas = $request->nama_kelas;
        $data->kompetensi_keahlian = $request->kompetensi_keahlian;
        $data->save();

        return redirect()->route("kelas.index")->with(
            "success",
            "Data berhasil diubah."
        );
    }

    public function destroy($kela)
    {
        $data = Kelas::findOrFail($kela);
        $data->delete();
    }
}