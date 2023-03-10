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
        Schema::create('transaksi', function (Blueprint $table) {
            $table->id();
            $table->string('nama_tamu');
            $table->bigInteger('noHp');
            $table->string('alamat');
            $table->string('lama_sewa');
            $table->dateTime('ci');
            $table->dateTime('co');
            $table->bigInteger('price');
            $table->bigInteger('deposit');
            $table->bigInteger('sisa');
            $table->integer('status');
            $table->unsignedBigInteger('kamar_no');
            $table->unsignedBigInteger('user_id');
            $table->foreign('kamar_no')->references('id')->on('kamar');
            $table->foreign('user_id')->references('id')->on('FO');
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
        Schema::dropIfExists('transaksi');
    }
};
