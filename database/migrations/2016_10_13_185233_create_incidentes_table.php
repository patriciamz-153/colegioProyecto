<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIncidentesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('incidente', function(Blueprint $table) {
            $table->increments('id');
            $table->string('direccion_ip');
            $table->string('pais_nombre');
            $table->string('pais_code');
            $table->string('region_nombre');
            $table->string('region_code');
            $table->string('ciudad');
            $table->string('isp');
            $table->string('org');
            $table->string('as');
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
        Schema::drop('incidente');
    }
}
