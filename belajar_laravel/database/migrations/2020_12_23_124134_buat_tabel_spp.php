<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class BuatTabelSpp extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('spps', function (Blueprint $table) {
            $table->id();
            $table->integer('tahun');
            $table->integer('nominal');
            $table->timestamps();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('spps');
    } 
}