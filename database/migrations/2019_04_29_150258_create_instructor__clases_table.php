<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInstructorClasesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('instructor__clases', function (Blueprint $table) {
            $table->engine = "InnoDB";
            $table->bigIncrements('idInstructorClase');

            $table->bigInteger('idClase')->unsigned();
            $table->bigInteger('idInstructor')->unsigned();

            $table->foreign('idClase')->references('idClase')->on('clases');
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
        Schema::dropIfExists('instructor__clases');
    }
}
