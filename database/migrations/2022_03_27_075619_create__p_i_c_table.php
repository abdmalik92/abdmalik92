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
        Schema::create('PIC', function (Blueprint $table) {
            $table->id();
            $table->string('nama_syarikat')->nullable();
            $table->string('alamat')->nullable();
            $table->string('nama_pengawai')->nullable();
            $table->string('jawatan')->nullable();
            $table->string('tel_pejabat')->nullable();
            $table->string('tel_bimbit')->nullable();
            $table->string('no_faks')->nullable();
            $table->string('emel')->nullable();
            $table->integer('type')->nullable();

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
        Schema::dropIfExists('PIC');
    }
};
