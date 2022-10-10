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
        Schema::create('inventaries', function (Blueprint $table) {
            $table->id();
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
        Schema::dropIfExists('inventaries');
    }
};
