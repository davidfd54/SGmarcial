<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMaestrosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('maestros', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->bigIncrements('idMaestro');
            $table->string('nombreMaestro');
            $table->string('apellidoMaestro');
            $table->date('fechaNacimiento');

            $table->bigInteger('idUsuario')->unsigned();
            $table->bigInteger('idDisciplina')->unsigned();
 

            $table->foreign('idUsuario')->references('idUsuario')->on('users');
            $table->foreign('idDisciplina')->references('idDisciplina')->on('disciplinas');
            
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
        Schema::dropIfExists('maestros');
    }
}
