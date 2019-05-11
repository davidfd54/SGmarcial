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
            $table->bigIncrements('idAcademiaDeportista');

            $table->bigInteger('idAcademia')->unsigned();
            $table->bigInteger('idDeportista')->unsigned();

            $table->foreign('idAcademia')->references('idAcademia')->on('academias');
            $table->foreign('idDeportista')->references('idDeportista')->on('deportistas');

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
