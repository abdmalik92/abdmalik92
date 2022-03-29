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
        Schema::create('user_details', function (Blueprint $table) {
            $table->id();
            $table->string('nama')->nullable();
            $table->string('nama_pengguna');
            $table->string('alamat')->nullable();
            $table->string('poskod')->nullable();
            $table->string('no_ic')->nullable();
            $table->string('no_telefon')->nullable();
            $table->string('emel')->nullable();
            $table->string('roles')->nullable();
            $table->string('user_pic')->nullable();
            $table->timestamps();

            $table->unsignedInteger('login_id')->nullable();
            $table->foreign('login_id')->references('id')->on('users');

            $table->unsignedInteger('daerah_id')->nullable();
            $table->foreign('daerah_id')->references('id')->on('daerah');

            $table->unsignedInteger('negeri_id')->nullable();
            $table->foreign('negeri_id')->references('id')->on('negeri');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_details');
    }
};
