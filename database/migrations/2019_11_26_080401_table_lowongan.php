<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TableLowongan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lowongan', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama_pekerjaan');
            $table->enum('jns_pekerjaan', ['Full Time', 'Part Time', 'Freelancer']);
            $table->text('lokasi');
            $table->text('deskripsi');
            $table->string('email')->unique();
            $table->string('no_telp');
            $table->integer('gaji');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('lowongan');
    }
}
