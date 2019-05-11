<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDeportistasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('deportistas', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->bigIncrements('id');



            $table->bigInteger('id_user')->unsigned();
            $table->bigInteger('id_disciplina')->unsigned();


           /* $table->foreign('id_user')->references('id')->on('users');
            $table->foreign('id_disciplina')->references('id')->on('disciplinas');
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
        Schema::dropIfExists('deportistas');
    }
}
