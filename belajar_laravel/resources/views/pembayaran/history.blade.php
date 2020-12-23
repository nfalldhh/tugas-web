@extends('adminlte::page')
@section('title', 'History Pembayaran')
@section('content_header')
<h1 class="m-0 text-dark">History Pembayaran</h1>
@stop
@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th style="width: 20px">#</th>
                            <th>Tgl Bayar</th>
                            <th>Siswa</th>
                            <th>SPP</th>
                            <th>Jumlah</th>
                            <th>Petugas</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1;?>
                        @forelse($data as $item)
                        <tr>
                            <td>
                                {{ $no }}
                            </td>
                            <td>
                                {{ $item->tgl_bayar }}
                            </td>
                            <td>
                                {{ $item->nisn }} - {{ $item->siswa->nama }}
                            </td>
                            <td>
                                {{ $item->spp->tahun }} - {{ $item->spp->nominal }}
                            </td>
                            <td>
                                {{ $item->jumlah_bayar }}
                            </td>
                            <td>
                                {{ $item->user->name }}
                            </td>
                        </tr>
                        <?php $no++;?>
                        @empty
                        <tr>
                            <td colspan="6">
                                Tidak ada data.
                            </td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
            <div class="card-footer clearfix text-right">
                {{ $data->links() }}
            </div>
        </div>
    </div>
</div>
@stop
@section('plugins.Pace', true)