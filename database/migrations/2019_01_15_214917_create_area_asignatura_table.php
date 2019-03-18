<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAreaAsignaturaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('area_asignatura', function (Blueprint $table) {
            $table->increments('id');
            $table->foreign('area_id')->references('area_id')->on('areas')->onDelete('cascade');
            $table->integer('area_id')->unsigned()->index();
            $table->foreign('asignatura_fk')->references('id')->on('asignaturas')->onDelete('cascade');
            $table->integer('asignatura_fk')->unsigned()->index();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('area_asignatura');
    }
}
