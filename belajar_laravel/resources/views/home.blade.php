@extends('adminlte::page')
@section('title', 'Welcome')
@section('content')
<div class="row">
    <div class="col-6">
        <div class="card">
            <div class="card card-widget widget-user">
                <div class="widget-user-header text-white"
                    style="background: url('gambar/bg.jpg') center center; background-size:cover;">
                    <h3 class="widget-user-username text-center">Sopingi</h3>
                    <h5 class="widget-user-desc text-center">Universitas Duta Bangsa Surakarta</h5>
                </div>
                <div class="widget-user-image">
                    <img class="img-circle" src="gambar/avatar.jpg">
                </div>
                <div class="card-footer">
                    <center><img src="gambar/sopingi.jpg" width="90%"></center>
                </div>
            </div>
        </div>
    </div>
    <div class="col-6">
        <div class="card">
            <div class="card card-widget widget-user">
                <div class="widget-user-header text-white"
                    style="background: url('gambar/bg.jpg') center center; background-size:cover;">
                    <h3 class="widget-user-username text-center">Sri Sumarlinda</h3>
                    <h5 class="widget-user-desc text-center">Universitas Duta Bangsa Surakarta</h5>
                </div>
                <div class="widget-user-image">
                    <img class="img-circle" src="gambar/avatar_linda.jpg">
                </div>
                <div class="card-footer">
                    <center><img src="gambar/linda.jpg" width="90%"></center>
                </div>
            </div>
        </div>
    </div>
</div>
@stop