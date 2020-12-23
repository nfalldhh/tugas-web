<?php

namespace App\Http\Controllers;

use App\Kelas;
use App\Pembayaran;
use App\Siswa;
use App\Spp;
use App\User;
use Illuminate\Http\Request;
use PDF;

class LaporanController extends Controller
{
    public function kelas(Request $request)
    {
        $data = Kelas::get();
        $tampil['data'] = $data;

//ambil tampilan resources/views/kelas/pdf.blade.php
        $pdf = PDF::loadView("kelas.pdf", $tampil);
        return $pdf->download('Laporan_Kelas.pdf');
    }
    public function spp(Request $request)
    {
        $data = Spp::get();
        $tampil['data'] = $data;
        //ambil tampilan resources/views/spp/pdf.blade.php
        $pdf = PDF::loadView("spp.pdf", $tampil);
        return $pdf->download('Laporan_SPP.pdf');
    }
    public function siswa(Request $request)
    {
        $data = Siswa::get();
        foreach ($data as $item) {
            $item->kelas = Kelas::find($item->id_kelas);
            $item->spp = Spp::find($item->id_spp);
            $item->user = Siswa::find($item->id_user);
        }
        $tampil['data'] = $data;
        //ambil tampilan resources/views/siswa/pdf.blade.php
        $pdf = PDF::loadView("siswa.pdf", $tampil);
        return $pdf->download('Laporan_Siswa.pdf');
    }
    public function petugas(Request $request)
    {
        $data = User::where("hak_akses", "petugas")->get();
        $tampil['data'] = $data;
        //ambil tampilan resources/views/petugas/pdf.blade.php
        $pdf = PDF::loadView("petugas.pdf", $tampil);
        return $pdf->download('Laporan_Petugas.pdf');
    }
    public function pembayaran(Request $request)
    {
        $data = Pembayaran::get();
        foreach ($data as $item) {
            $item->siswa = Siswa::find($item->nisn);
            $item->spp = Spp::find($item->id_spp);
            $item->user = User::find($item->id_user);
        }
        $tampil['data'] = $data;
        //ambil tampilan resources/views/pembayaran/pdf.blade.php
        $pdf = PDF::loadView("pembayaran.pdf", $tampil);
        return $pdf->download('Laporan_Pembayaran.pdf');
    }
}