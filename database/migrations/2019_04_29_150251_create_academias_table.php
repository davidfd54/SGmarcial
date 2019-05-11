<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAcademiasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('academias', function (Blueprint $table) {
           $table->engine = 'InnoDB';
           $table->bigIncrements('idAcademia');
           $table->string('nombreAcademia');
           $table->char('federada');
           $table->text('DescripcionAcademia');
           $table->integer('telefonoAcademia');
           /*$table->big_image('imagen1Academia');
           $table->big_image('imagen2Academia');
           $table->big_image('imagen3Academia');
            */
           $table->bigInteger('idDireccion')->unsigned();
           $table->bigInteger('idUsuario')->unsigned();
           $table->bigInteger('idMaestro')->unsigned();
           $table->foreign('idDireccion')->references('idDireccion')->on('direccions');
           $table->foreign('idMaestro')->references('idMaestro')->on('maestros');
           $table->foreign('idUsuario')->references('idUsuario')->on('users');
        
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
        Schema::dropIfExists('academias');
    }
}
