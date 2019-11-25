<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class lowongan extends Model
{
    //
    protected $table = 'lowongan';
    protected $fillable = [
        'nama_perusahaan','deskripsi','nama_pekerjaan'
    ];
}
