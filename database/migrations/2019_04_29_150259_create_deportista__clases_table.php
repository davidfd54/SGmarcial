<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDeportistaClasesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('deportista__clases', function (Blueprint $table) {
            $table->engine = "InnoDB";
            $table->bigIncrements('idDeportistaClase');

            $table->bigInteger('idDeportista')->unsigned();
            $table->bigInteger('idClase')->unsigned();

            $table->foreign('idClase')->references('idClase')->on('clases');
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
        Schema::dropIfExists('deportista__clases');
    }
}
