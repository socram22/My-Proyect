<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePosicionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posicion', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('empresa');
            $table->string('titulo');
            $table->string('descripcion');
            $table->integer('cantidad_depersonas');
            $table->integer('limite_de_aplicantes');
            $table->boolean('activa');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posicion');
    }
}
