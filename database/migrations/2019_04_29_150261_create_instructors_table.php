<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInstructorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('instructors', function (Blueprint $table) {
          $table->engine = 'InnoDB';
          $table->bigIncrements('id');

          $table->bigInteger('id_user')->unsigned();
          $table->bigInteger('id_diciplina')->unsigned();


          $table->foreign('id_user')->references('id')->on('users');
          $table->foreign('id_diciplina')->references('id')->on('diciplinas');

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
        Schema::dropIfExists('instructors');
    }
}
