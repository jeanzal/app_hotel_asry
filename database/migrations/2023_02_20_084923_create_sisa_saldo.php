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
        Schema::create('sisa_saldo', function (Blueprint $table) {
            $table->id();
            $table->dateTime('tgl_trs');
            $table->bigInteger('sisa_saldo');
            $table->bigInteger('total_kas_masuk');
            $table->bigInteger('total_kas_keluar');
            $table->bigInteger('total_setor_ke_sgh');
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
        Schema::dropIfExists('sisa_saldo');
    }
};
