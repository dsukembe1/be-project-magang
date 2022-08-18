<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Extrakulikulers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('extrakulikulers', function (Blueprint $table) {
            $table->id();
            $table->string('nama',50);
            $table->string('nis',15);
            $table->string('kelas',15);
            $table->string('jabatan',15);
            $table->string('nilai',5);
            $table->string('catatan',50);
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
        Schema::dropIfExists('extrakulikulers');
    }
}
