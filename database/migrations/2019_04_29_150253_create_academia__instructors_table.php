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
            $table->engine = 'InnoDB';
            $table->bigIncrements('idAcademiaInstructor');

            $table->bigInteger('idInstructor')->unsigned();
            $table->bigInteger('idAcademia')->unsigned();

            $table->foreign('idAcademia')->references('idAcademia')->on('academias');
            $table->foreign('idInstructor')->references('idInstructor')->on('instructors');
            
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
        Schema::dropIfExists('academia__instructors');
    }
}
