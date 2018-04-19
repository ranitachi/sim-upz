<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePenerimaandetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('penerimaan_detail', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('penerimaan_id')->default(0);
            $table->integer('jeniszakat_id')->default(0);
            $table->double('jumlah')->default(0);
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
        Schema::dropIfExists('penerimaan_detail');
    }
}
