<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAuditoriaSistemasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('auditoria_sistemas', function (Blueprint $table) {
            $table->bigIncrements('codigo_auditoria');
            $table->unsignedBigInteger('codigo_usuario'); 
            $table->foreign('codigo_usuario')->references('codigo_usuario')->on('usuarios');
            $table->string('modulo', 100);
            $table->string('accion', 100);
            $table->dateTime('fecha_creacion');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('auditoria_sistemas');
    }
}
