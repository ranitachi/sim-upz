<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUpzsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('upz', function (Blueprint $table) {
            $table->increments('id');
            $table->string('kode')->nullable();
            $table->string('nama_upz')->nullable();
            $table->string('alamat')->nullable();
            $table->integer('provinsi_id')->default(0);
            $table->integer('kabupaten_kota_id')->default(0);
            $table->integer('kecamatan_id')->default(0);
            $table->integer('kelurahan_id')->default(0);
            $table->integer('kodepos')->default(0);
            $table->string('pimpinan')->nullable();
            $table->string('no_telp')->nullable();
            $table->string('email')->nullable();
            $table->string('longitude')->nullable();
            $table->string('lattitude')->nullable();
            $table->string('website')->nullable();
            $table->integer('flag')->default(1);
            $table->string('desc')->nullable();
            $table->timestamps();
            $table->softdeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('upz');
    }
}
