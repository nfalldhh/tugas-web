<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kelas extends Model 
{
    protected $fillable = [
        "nama_kelas",
        "kompetensi_keahlian"
    ];
}