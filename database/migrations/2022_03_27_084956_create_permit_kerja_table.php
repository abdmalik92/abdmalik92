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
        Schema::create('permit_kerja', function (Blueprint $table) {
            $table->id();
            $table->string('DT_mohon_PK')->nullable();
            $table->string('DT_kelulusan_PK')->nullable();
            $table->string('no_perakaun')->nullable();
            $table->string('tempoh_valid')->nullable();
            $table->string('DT_mula_permit')->nullable();
            $table->string('DT_akhir_permit')->nullable();
            $table->string('status_kecil')->nullable();
            $table->string('status_besar')->nullable();
            
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
        Schema::dropIfExists('permit_kerja');
    }
};
