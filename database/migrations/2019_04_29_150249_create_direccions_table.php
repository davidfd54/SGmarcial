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

              $table->bigInteger('idComuna')->unsigned();
              $table->bigInteger('idRegion')->unsigned();
              $table->bigInteger('idprovincias')->unsigned();



              $table->foreign('idRegion')->references('idRegion')->on('regions');
              $table->foreign('idComuna')->references('idComuna')->on('comunas');
              $table->foreign('idProvincias')->references('idProvincia')->on('provincias');

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
        Schema::dropIfExists('direccions');
    }
}
