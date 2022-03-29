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
        Schema::create('road_info', function (Blueprint $table) {
            $table->id();
            $table->string('nama_jalan')->nullable();
            $table->string('kaedah')->nullable();
            $table->integer('jarak')->nullable();
            
            $table->unsignedInteger('daerah_id')->nullable();
            $table->foreign('daerah_id')->references('id')->on('daerah');

            $table->string('unique_id')->references('unique_id')->on('ro_table');

            // $table->string('unique_id')->nullable();
            // $table->foreign('unique_id')->references('unique_id')->on('ro_table');

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
        Schema::dropIfExists('road_info');
    }
};
