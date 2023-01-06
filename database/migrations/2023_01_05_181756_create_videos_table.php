<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVideosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('videos', function (Blueprint $table) {
            $table->bigIncrements('codigo_video');
            $table->unsignedBigInteger('codigo_usuario'); 
            $table->foreign('codigo_usuario')->references('codigo_usuario')->on('usuarios');
            $table->string('titulo', 100);
            $table->text('descripcion');
            $table->text('url');
            $table->boolean('estado');
            $table->dateTime('fecha_creacion');
            $table->integer('visualizacion');
            $table->integer('me_gusta');
            $table->integer('no_me_gusta');
            $table->string('contenido_multimedia', 250);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('videos');
    }
}
