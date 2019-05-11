<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAcademiaInstructorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('academia__instructors', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();

            /*
            $table->bigInteger('id_Academia')->unsigned();
            $table->foreign('id_Academia')->references('id')->on('academias');
            $table->bigInteger('id_instructor')->unsigned();
            $table->foreign('id_instructor')->references('id')->on('instructors');
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
        Schema::dropIfExists('academia__instructors');
    }
}
