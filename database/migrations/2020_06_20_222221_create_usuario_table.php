<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsuarioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuario', function (Blueprint $table) {
            $table->engine = 'InnoDB';

            $table->increments('id');
            $table->string('nombre',50);
            $table->string('apellidos',100);
            $table->string('direccionVivienda',100);
            $table->string('email',50)->unique();
            $table->date('fechaNacimiento');
            $table->string('genero',20);
            $table->string('numCelular',10);
            $table->string('numTelefonoCasa',10);
            $table->string('password',50);

            $table->integer('especialista_id')->unsigned();
            $table->foreign('especialista_id')->references('id')->on('especialista');

            $table->integer('paciente_id')->unsigned();
            $table->foreign('paciente_id')->references('id')->on('paciente');

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
        Schema::dropIfExists('usuario');
    }
}
