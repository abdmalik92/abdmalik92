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
        Schema::create('staff_incharge', function (Blueprint $table) {
            $table->id();
            $table->string('status_kecil')->nullable();
            
            $table->unsignedInteger('user_id')->nullable();
            $table->foreign('user_id')->references('id')->on('user_details');

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
        Schema::dropIfExists('staff_incharge');
    }
};
