<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAcademiaDeportistasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('academia__deportistas', function (Blueprint $table) {
              $table->engine = 'InnoDB';
            $table->bigIncrements('id');


            $table->bigInteger('id_Academia')->unsigned();
            $table->foreign('id_Academia')->references('id')->on('academias');
            $table->bigInteger('id_deportista')->unsigned();
            $table->foreign('id_deportista')->references('id')->on('deportistas');






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
        Schema::dropIfExists('academia__deportistas');
    }
}
