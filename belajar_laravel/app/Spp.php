<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Spp extends Model 
{
    protected $fillable = [
        "tahun",
        "nominal"
    ];
}