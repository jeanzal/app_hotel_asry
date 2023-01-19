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
        Schema::create('fo', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->enum('role', ['FO', 'BO']);
            $table->string('email')->unique();
            $table->string('password');
            $table->string('token')->nullable();
            $table->dateTime('expired')->nullable();
            $table->boolean('status')->default(1);
            $table->string('image')->nullable();
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
        Schema::dropIfExists('fo');
    }
};
