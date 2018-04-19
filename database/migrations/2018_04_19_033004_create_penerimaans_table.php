<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePenerimaansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('penerimaan', function (Blueprint $table) {
            $table->increments('id');
            $table->string('kode_trans')->nullable();
            $table->date('tanggal_transaksi')->nullable();
            $table->integer('muzzaki_id')->default(0);
            $table->integer('amilin_id')->default(0);
            $table->double('total')->nullable();
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
        Schema::dropIfExists('penerimaan');
    }
}
