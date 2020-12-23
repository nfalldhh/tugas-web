@extends('adminlte::page')
@section('title', 'Laporan')
@section('content_header')
<h1 class="m-0 text-dark">Generate Laporan</h1>
@stop
@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Download Laporan Format PDF</h3>
            </div>
            <div class="card-body">
                <a class="btn btn-app" href="/laporan/kelas">
                    <i class="fas fa-building"></i> Kelas PDF
                </a>
                <a class="btn btn-app" href="/laporan/spp">
                    <i class="fas fa-money-bill-alt"></i> SPP PDF
                </a>
                <a class="btn btn-app" href="/laporan/siswa">
                    <i class="fas fa-users"></i> Siswa PDF
                </a>
                <a class="btn btn-app" href="/laporan/petugas">
                    <i class="fas fa-user-tie"></i> Petugas PDF
                </a>
                <a class="btn btn-app" href="/laporan/pembayaran">
                    <i class="fas fa-cash-register"></i> Pembayaran PDF
                </a>
            </div>
        </div>
    </div>
</div>
@stop