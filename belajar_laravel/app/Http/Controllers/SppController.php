<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Spp;

class SppController extends Controller
{

    public function index()
    {
        //ambil data max 10
        $data = Spp::paginate(10);
        //membuat variabel tampil yang diisi dengan data
        $tampil['data'] = $data;
        //tampilkan resources/views/spp/index.blade.php beserta variabel tampil
        return view("spp.index", $tampil);
    }
    public function create()
    {
        //tampilkan resources/views/spp/create.blade.php
        return view("spp.create");
    }
    public function store(Request $request)
    {
        //validasi inputan
        $this->validate($request, [
            'tahun' => 'required|numeric|digits:4',
            'nominal' => 'required|numeric'
        ]);
        $data = Spp::create($request->all());
        return redirect()->route("spp.index")->with(
            "success",
            "Data berhasil disimpan."
        );
    }

    public function show($spp)
    {
        //
    }
    public function edit($spp)
    {
        $data = Spp::findOrFail($spp);
        //tampilkan resources/views/spp/edit.blade.php
        return view("spp.edit", $data);
    }
    public function update(Request $request, $spp)
    {
        //validasi inputan
        $this->validate($request, [
            'tahun' => 'required|numeric|digits:4',
            'nominal' => 'required|numeric'
        ]);

        $data = Spp::findOrFail($spp);
        $data->tahun = $request->tahun;
        $data->nominal = $request->nominal;
        $data->save();

        return redirect()->route("spp.index")->with(
            "success",
            "Data berhasil diubah."
        );
    }

    public function destroy($spp)
    {
        $data = Spp::findOrFail($spp);
        $data->delete();
    }
}