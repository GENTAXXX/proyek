<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class lowongan extends Model
{
    //
    protected $table = 'lowongan';
    protected $fillable = [
        'nama_pekerjaan','jns_pekerjaan','lokasi','deskripsi','kriteria','syarat','email','no_telp','gaji','batas','image'
    ];
}
