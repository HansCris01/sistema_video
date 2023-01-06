<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Crypt;
use Carbon\Carbon;
class CreateUsuariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuarios', function (Blueprint $table) {
            $table->bigIncrements('codigo_usuario');
            $table->string('nombre', 100);
            $table->string('apellido', 100);
            $table->string('correo', 100);
            $table->text('password');
            $table->boolean('estado');
            $table->dateTime('fecha_creacion');
            $table->integer('subscriptores');
            $table->string('foto', 250); 
            $table->string('tipo_usuario', 100);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        /* 
        $nombre = "root";
        $apellido = "-";
        $correo = "root@no-reply.com";
        $password = Crypt::encryptString("1234");
        $estado = "1";
        $fecha = Carbon::now();
        $subs = "0";
        $foto = "user.jpg";
        $tip_usuario = "administrador";
        */
        Schema::dropIfExists('usuarios');
        //Schema::insert($nombre, $apellido, $correo, $password, $estado, $fecha, $subs, $foto,  $tip_usuario);
    }
}
