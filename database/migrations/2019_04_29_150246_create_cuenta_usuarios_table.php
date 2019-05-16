<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCuentaUsuariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cuenta_usuarios', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->bigIncrements('idCuenta');
            $table->string('rut',10)->unique();
            $table->string('nombre1');
            $table->string('nombre2');
            $table->string('apellidoM');
            $table->string('apellidoP');
            $table->string('genero');
            $table->date('fechaNacimiento');
            $table->integer('telefono');
            $table->integer('peso');
            $table->bigInteger('idDireccion')->unsigned()->nullable();
            $table->bigInteger('idDisciplina')->unsigned()->nullable();


            $table->foreign('idDireccion')->references('idDireccion')->on('direccions');


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
        Schema::dropIfExists('cuenta_usuarios');
    }
}
