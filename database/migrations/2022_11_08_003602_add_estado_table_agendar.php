<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddEstadoTableAgendar extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('agendar', function (Blueprint $table) {
            $table->string('estado') // Nome da coluna
                    // ->nullable() // Preenchimento não obrigatório
                    ->after('data'); // Ordenado após a coluna "password"
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('agendar', function (Blueprint $table) {
            //
        });
    }
}
