<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKeluhanTable extends Migration
{
    public function up()
    {
        Schema::create('keluhan', function (Blueprint $table) {
            $table->increments('id_keluhan');
            $table->string('nama_keluhan'); // Menggunakan increments untuk ID dengan nama id_keluhan
            $table->unsignedInteger('ongkos');
            $table->string('no_pol', 10);
            $table->foreign('no_pol')->references('no_pol')->on('kendaraan');
            $table->uuid('customer_id'); // Menggunakan uuid sesuai dengan yang ada di tabel customers
            $table->foreign('customer_id')->references('customer_id')->on('customers'); // Mengubah referensi kolom primary key sesuai dengan yang ada di tabel customers
            $table->unsignedBigInteger('pegawai_id'); // Menggunakan unsignedBigInteger untuk id pegawai
            $table->foreign('pegawai_id')->references('id_pegawai')->on('pegawai'); // Mengubah referensi kolom primary key sesuai dengan yang ada di tabel pegawai
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('keluhan');
    }
}
