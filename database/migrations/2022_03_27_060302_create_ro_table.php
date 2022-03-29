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
        Schema::create('ro_table', function (Blueprint $table) {
            $table->id();
            $table->string('tajuk_permohonan')->nullable();
            $table->string('jarak_BKIL')->nullable();
            $table->dateTime('DT_mula')->nullable();
            $table->dateTime('DT_akhir')->nullable();
            $table->string('tempoh')->nullable();
            $table->string('kos')->nullable();
            $table->string('kod_kerja')->nullable();
            $table->string('no_rujukan')->nullable();
            $table->string('unique_id')->nullable();
            $table->string('ID_PIC')->nullable();
            $table->string('status_kecil')->nullable();
            $table->string('status_besar')->nullable();
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
        Schema::dropIfExists('ro_table');
    }
};
