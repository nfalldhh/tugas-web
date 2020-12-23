<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class BuatTabelPembayaran extends Migration
{
    public function up()
    {
        Schema::create('pembayarans', function (Blueprint $table) {
            $table->id();
            $table->dateTime('tgl_bayar', 0);
            $table->string('nisn');
            $table->bigInteger('id_spp')->unsigned();
            $table->bigInteger('id_user')->unsigned();
            $table->integer('jumlah_bayar');
            $table->timestamps();
            //menambahkan relasi
            $table->foreign('nisn')->references('nisn')->on('siswas');
            $table->foreign('id_spp')->references('id')->on('spps');
            $table->foreign('id_user')->references('id')->on('users');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('pembayarans');
    }
}