<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Kelas6s extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kelas6s', function (Blueprint $table) {
            $table->id();
            $table->string('nis',25);
            $table->string('nama',50);
            $table->string('nama_mapel',50);
            $table->string('nh1',5);
            $table->string('nh2',5);
            $table->string('uts',5);
            $table->string('uas',5);
            $table->string('na',5);
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
        Schema::dropIfExists('kelas6s');
    }
}
