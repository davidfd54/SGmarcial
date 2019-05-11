<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDeportistasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('deportistas', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->bigIncrements('idDeportista');
            $table->string('nombreDeportista'); 
            $table->string('apellidoDeportista');
            $table->string('rutDeportista');
            $table->date('fechaNacimientoDeportista');
            $table->string('sexoDeportista');
            $table->integer('telefonoDeportista');
            $table->string('correoDeportista');

            $table->bigInteger('idUsuario')->unsigned();
            $table->bigInteger('idDisciplina')->unsigned();
            $table->bigInteger('idDireccion')->unsigned();

            $table->foreign('idUsuario')->references('idUsuario')->on('users');
            $table->foreign('idDisciplina')->references('idDisciplina')->on('disciplinas');
            $table->foreign('idDireccion')->references('idDireccion')->on('direccions');
            
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
        Schema::dropIfExists('deportistas');
    }
}
