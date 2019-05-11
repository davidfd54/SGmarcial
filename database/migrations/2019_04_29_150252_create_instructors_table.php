<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInstructorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('instructors', function (Blueprint $table) {
          $table->engine = 'InnoDB';
          $table->bigIncrements('idInstructor');
          $table->string('nombreInstructor');
          $table->string('apellidoInstructor');
          $table->string('rutInstructor');
          $table->date('fechaNacimientoInstructor');
          $table->integer('telefonoInstructor');
          $table->string('correoInstructor');


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
        Schema::dropIfExists('instructors');
    }
}
