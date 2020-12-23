<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Hash;

class PetugasController extends Controller
{

    public function index()
    {
        //ambil data max 10
        $data = User::where("hak_akses", "petugas")->paginate(10);
        $tampil['data'] = $data;
        //tampilkan resources/views/siswa/index.blade.php beserta variabel tampil
        return view("petugas.index", $tampil);
    }

    public function create()
    {
        //tampilkan resources/views/petugas/create.blade.php
        return view("petugas.create");
    }
    public function store(Request $request)
    {
        //validasi inputan
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required',
        ]);
        //enkripsi password
        $enkripsi = Hash::make($request->password);
        $request->merge(['password' => $enkripsi]);
        //isi hak_akses dengan 'petugas'
        $request->merge(['hak_akses' => "petugas"]);
        $dataUser = User::create($request->all());
        return redirect()->route("petugas.index")->with(
            "success",
            "Data berhasil disimpan."
        );
    }

    public function show($petuga)
    {
        //
    }
    public function edit($petuga)
    {
        $data = User::findOrFail($petuga);
        //tampilkan resources/views/petugas/edit.blade.php
        return view("petugas.edit", $data);
    }
    public function update(Request $request, $petuga)
    {
        //validasi inputan
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
        ]);
        $data = User::findOrFail($petuga);
        $data->name = $request->name;
        $data->email = $request->email;

        //jika password tidak kosong
        if ($request->password != "") {
            $enkripsi = Hash::make($request->password);
            $data->password = $enkripsi;
        }
        $data->save();

        return redirect()->route("petugas.index")->with(
            "success",
            "Data berhasil diubah."
        );
    }

    public function destroy($petuga)
    {
        $data = User::findOrFail($petuga);
        $data->delete();
    }
}