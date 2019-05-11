<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClasesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clases', function (Blueprint $table) {
            $table->bigIncrements('idClase');

            $table->bigInteger('idDisciplina')->unsigned();
            $table->bigInteger('idHorarioClase')->unsigned();

            $table->foreign('idDisciplina')->references('idDisciplina')->on('disciplinas');
            $table->foreign('idHorarioClase')->references('idHorarioClase')->on('Horario_Clases');
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
        Schema::dropIfExists('clases');
    }
}
