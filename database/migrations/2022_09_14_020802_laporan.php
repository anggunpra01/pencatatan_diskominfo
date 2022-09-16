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
        Schema::create('laporans', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nippencatat');
            $table->string('namapencatat');
            $table->string('tanggalmencatat');
            $table->string('namapelapor');
            $table->string('namabidang');
            $table->string('nomorhp');
            $table->string('permasalahan');
            $table->string('nipeksekutor');
            $table->string('namaeksekutor');
            $table->string('kategori');
            $table->string('status');
            $table->string('tanggalselesai');
            $table->string('solusi');
            $table->string('namavendor');
            $table->string('mulaiservice');
            $table->string('selesaiservice');
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
        Schema::dropIfExists('laporans');
    }
};
