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
        Schema::create('inventarist', function (Blueprint $table) {
            $table->increments('id');
            $table->string('kodeInventaris');
            $table->string('kategori');
            $table->string('merk');
            $table->string('tipe');
            $table->string('nomorSeri');
            $table->string('tahunPembelian');
            $table->string('kondisi');
            $table->string('lokasiFisik');
            $table->string('bidang');
            $table->string('pengguna');
            $table->string('keterangan');
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
        Schema::dropIfExists('inventarist');
    }
};
