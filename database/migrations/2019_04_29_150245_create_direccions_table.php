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
              $table->bigIncrements('idDireccion');
              $table->integer('numero');
              $table->string('Calle', 45)->nullable();
              $table->String('comuna');
              $table->string('provincia');
              $table->string('region');
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
