<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    protected $primaryKey = "nisn";

    protected $fillable = [
        "nisn",
        "nis",
        "nama",
        "alamat",
        "no_telp",
        "id_kelas",
        "id_spp",
        "id_user",
    ];
}