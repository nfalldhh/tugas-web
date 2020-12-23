@extends('adminlte::page')
@section('title', 'Petugas')
@section('content_header')
<h1 class="m-0 text-dark">Manajemen Petugas</h1>
@stop
@section('content')
<div class="row">
    <div class="col-12">
        @if ($errors->any())
        <div class="alert alert-warning alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            <h4><i class="icon fa fa-warning"></i> Perhatian!</h4>
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
        <div class="card">
            <div class="card-header">
                Ubah Petugas
            </div>
            <div class="card-body">
                <form class="form-horizontal" action="{{ route('petugas.update', ['petuga' => $id]) }}" method="post">
                    @method('PUT')
                    @include('petugas.form')
                </form>
            </div>
        </div>
    </div>
</div>
@stop
@section('plugins.Pace', true)
@section('js')
<script type="text/javascript">
$("#nisn").prop('disabled', true);
</script>
@stop