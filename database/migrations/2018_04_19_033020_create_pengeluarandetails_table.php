<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePengeluarandetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pengeluaran_detail', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('pengeluaran_id')->default(0);
            $table->integer('jenis_pengeluaran_id')->default(0);
            $table->integer('mustahik_id')->default(0);
            $table->double('jumlah')->nullable();
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
        Schema::dropIfExists('pengeluaran_detail');
    }
}
