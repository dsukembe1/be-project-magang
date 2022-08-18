<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Tartibs extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tartibs', function (Blueprint $table) {
            $table->id();
            $table->string('nis',15);
            $table->string('nama',50);
            $table->string('kelas',15);
            $table->string('tanggal',25);
            $table->string('jenis',25);
            $table->string('keterangan',255);
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
        Schema::dropIfExists('tartibs');
    }
}
