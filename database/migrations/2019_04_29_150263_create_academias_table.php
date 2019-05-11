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
           $table->bigIncrements('id');


        /*$table->bigInteger('id_direccion')->unsigned();
           $table->foreign('id_direccion')->references('id')->on('direccions');
           $table->bigInteger('id_maestro')->unsigned();
           $table->foreign('id_maestro')->references('id')->on('maestros');
        */




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
