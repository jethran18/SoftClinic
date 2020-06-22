<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEspecialistaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('especialista', function (Blueprint $table) {
            $table->engine = 'InnoDB';

            $table->increments('id');	

            $table->string('cedulaProfesional',25)->unique();
            $table->string('especialidad',50);

            $table->integer('consultorio_id')->unsigned();
            $table->foreign('consultorio_id')->references('id')->on('consultorio');

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
        Schema::dropIfExists('especialista');
    }
}
