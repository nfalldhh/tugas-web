<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class BuatTabelSiswa extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('siswas', function (Blueprint $table) {
            $table->string("nisn");
            $table->string("nis");
            $table->string("nama");
            $table->string("alamat");
            $table->string("no_telp");
            $table->bigInteger('id_kelas')->unsigned();
            $table->bigInteger('id_spp')->unsigned();
            $table->bigInteger('id_user')->unsigned();
            $table->timestamps();
            //menambahkan primary dan field unik
            $table->primary('nisn');
            $table->unique('id_user');
            
            //menambahkan relasi
            $table->foreign('id_kelas')->references('id')->on('kelas');
            $table->foreign('id_spp')->references('id')->on('spps');
            $table->foreign('id_user')->references('id')->on('users');
        });
    }

    public function down()
    {
        Schema::dropIfExists('siswas');
    }
}