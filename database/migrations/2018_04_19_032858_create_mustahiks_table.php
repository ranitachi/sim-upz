<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMustahiksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mustahik', function (Blueprint $table) {
            $table->increments('id');
            $table->string('kode')->nullable();
            $table->string('nama')->nullable();
            $table->string('alamat')->nullable();
            $table->integer('provinsi_id')->default(0);
            $table->integer('kabupaten_kota_id')->default(0);
            $table->integer('kecamatan_id')->default(0);
            $table->integer('kelurahan_id')->default(0);
            $table->integer('kodepos')->default(0);
            $table->string('gender')->nullable();
            $table->string('no_indentitas')->nullable();
            $table->string('jenis_identitas')->nullable();
            $table->string('tempat_lahir')->nullable();
            $table->date('tanggal_lahir')->nullable();
            $table->integer('asnaf_id')->default(0);
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
        Schema::dropIfExists('mustahik');
    }
}
