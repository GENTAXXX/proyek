<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class profile extends Model
{
    protected $table = 'profile';
    protected $fillable = [
        'id_users','nama_perusahaan','alamat','no_telp','image'
    ];
}
