<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Rapots extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rapots', function (Blueprint $table) {
            $table->id();
            $table->string('nama',50);
            $table->string('nis',15);
            $table->string('sakit',10);
            $table->string('izin',10);
            $table->string('alpha',10);
            $table->string('total',10);
            $table->string('ns1',10);
            $table->string('ns2',10);
            $table->string('ns3',10);
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
        Schema::dropIfExists('rapots');
    }
}
