<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDireccionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('direccions', function (Blueprint $table) {
              $table->engine = 'InnoDB';
              $table->bigIncrements('id');
              $table->string('Calle', 45)->nullable();

              $table->bigInteger('id_Comuna')->unsigned();
              $table->bigInteger('id_Region')->unsigned();
              $table->bigInteger('id_provincias')->unsigned();



              /*$table->foreign('id_Region')->references('id')->on('regions');
              $table->foreign('id_Comuna')->references('id')->on('comunas');

              $table->foreign('id_provincias')->references('id')->on('provincias');

              $table->timestamps();
            */ 


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('direccions');
    }
}
