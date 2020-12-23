@extends('adminlte::page')
@section('title', 'Kelas')
@section('content_header')
<h1 class="m-0 text-dark">Manajemen Kelas</h1>
@stop @section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <a class="btn btn-primary btn-md" href="{{ route('kelas.create') }}">
                    <i class="fa fa-plus"></i> Tambah
                </a>
            </div>
            <div class="card-body">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th style="width: 20px">#</th>
                            <th>Nama Kelas</th>
                            <th>Kompetensi Keahlian</th>
                            <th style="width: 10%">Aksi</th>
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
                                {{ $item->nama_kelas }}
                            </td>
                            <td>
                                {{ $item->kompetensi_keahlian }}
                            </td>
                            <td>
                                <div class="btn-group">
                                    <a class="btn btn-success" href="{{ route('kelas.edit', ['kela' => $item->id]) }}">
                                        <i class="fas fa-pencil-alt"></i>
                                    </a>
                                    <a class="btn btn-primary" onclick="hapus('{{ $item->id }}')" href="#">
                                        <i class="fas fa-trash"></i>
                                    </a>
                                </div>
                            </td>
                        </tr>
                        <?php $no++;?>
                        @empty
                        <tr>
                            <td colspan="4">
                                Tidak ada data.
                            </td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div <div class="card-footer clearfix text-right">
            {{ $data->links() }}
        </div>
    </div>
</div>
</div>
@stop
@section('plugins.Sweetalert2', true)
@section('plugins.Pace', true)
@section('js')
@if (session('success'))
<script type="text/javascript">
Swal.fire(
    'Sukses!',
    '{{ session('
    success ') }}',
    'success'
)
</script>
@endif
<script type="text/javascript">
function hapus(id) {
    Swal.fire({
        title: 'Konfirmasi',
        text: "Yakin menghapus data ini?",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#dd3333',
        confirmButtonText: 'Hapus',
        cancelButtonText: 'Batal',
    }).then((result) => {
        if (result.value) {
            $.ajax({
                url: "/kelas/" + id,
                type: 'DELETE',
                data: {
                    '_token': $('meta[name=csrf-token]').attr("content"),
                },
                success: function(result) {
                    Swal.fire(
                        'Sukses!',
                        'Berhasil Hapus',
                        'success'
                    );
                    location.reload();
                }
            });
        }
    })
}
</script>
@stop