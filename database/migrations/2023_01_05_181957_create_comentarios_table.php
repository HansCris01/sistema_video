<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComentariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comentarios', function (Blueprint $table) {
            $table->bigIncrements('codigo_comentario');
            $table->unsignedBigInteger('codigo_usuario'); 
            $table->foreign('codigo_usuario')->references('codigo_usuario')->on('usuarios');
            $table->unsignedBigInteger('codigo_video'); 
            $table->foreign('codigo_video')->references('codigo_video')->on('videos');
            $table->text('comentario');
            $table->dateTime('fecha_creacion');
            $table->boolean('estado');
            $table->integer('me_gusta');
            $table->integer('no_me_gusta');
            $table->string('foto_video', 250);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('comentarios');
    }
}
