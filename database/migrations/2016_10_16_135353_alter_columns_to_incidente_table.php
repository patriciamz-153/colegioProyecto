<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterColumnsToIncidenteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('incidente', function(Blueprint $table) {
            $table->string('pais_nombre')->nullable()->change();
            $table->string('pais_code')->nullable()->change();
            $table->string('region_nombre')->nullable()->change();
            $table->string('region_code')->nullable()->change();
            $table->string('ciudad')->nullable()->change();
            $table->string('isp')->nullable()->change();
            $table->string('org')->nullable()->change();
            $table->string('as')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('incidente', function(Blueprint $table) {
            $table->string('pais_nombre')->change();
            $table->string('pais_code')->change();
            $table->string('region_nombre')->change();
            $table->string('region_code')->change();
            $table->string('ciudad')->change();
            $table->string('isp')->change();
            $table->string('org')->change();
            $table->string('as')->change();
        });
    }
}
