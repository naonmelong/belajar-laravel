<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLatihanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('latihan', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('jenis_bus');
            $table->string('nama_bus');
            $table->string('merk_bus');
            $table->integer('no_mesin');
            $table->date('tahun_dibuat');
            $table->string('deskripsi');
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
        Schema::dropIfExists('latihan');
    }
}
