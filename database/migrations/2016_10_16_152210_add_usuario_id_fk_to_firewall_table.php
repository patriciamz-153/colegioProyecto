<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddUsuarioIdFkToFirewallTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('firewall', function(Blueprint $table) {
            $table->foreign('usuario_id')
                  ->on('usuario')
                  ->references('id')
                  ->onDelete('cascade')
                  ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('firewall', function(Blueprint $table) {
            $table->dropForeign('firewall_usuario_id_foreign');
        });
    }
}
