<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transaksikas', function (Blueprint $table) {
            $table->id();
            $table->dateTime('tgl_trs');
            $table->string('ket');
            $table->bigInteger('kas_masuk');
            $table->bigInteger('kas_keluar');
            $table->bigInteger('setoran_agh_to_sgh');
            $table->bigInteger('saldo');
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
        Schema::dropIfExists('transaksikas');
    }
};
