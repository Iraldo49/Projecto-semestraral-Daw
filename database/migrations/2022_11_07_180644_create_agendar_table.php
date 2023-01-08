<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAgendarTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('agendar', function (Blueprint $table) {
            $table->id();
            $table->string("nome");
            $table->string("apelido");
            $table->string("email");
            $table->string("evento");
            $table->string("pacote");
            $table->date("data");
            $table->string("estado");
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
        Schema::dropIfExists('agendar');
    }
}
