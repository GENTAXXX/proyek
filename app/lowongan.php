<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class lowongan extends Model
{
    //
    protected $table = 'lowongan';
    protected $fillable = [
        'nama_pekerjaan','jns_pekerjaan','lokasi','deskripsi','email','no_telp','gaji'
    ];
}
