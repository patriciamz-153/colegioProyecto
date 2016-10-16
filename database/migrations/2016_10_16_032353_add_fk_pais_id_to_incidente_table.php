<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddFkPaisIdToIncidenteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('incidente', function(Blueprint $table) {
            $table->integer('pais_id')->unsigned();
        });

        Schema::table('incidente', function(Blueprint $table) {
            $table->foreign('pais_id')
                  ->on('pais')
                  ->references('id')
                  ->onDelete('cascade')
                  ->onUpdate('cascade');
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
            $table->dropForeign('incidente_pais_id_foreign');
        });

        Schema::table('incidente', function(Blueprint $table) {
            $table->dropColumn('pais_id');
        });
    }
}
