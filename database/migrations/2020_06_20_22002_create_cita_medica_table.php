<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCitaMedicaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cita_medica', function (Blueprint $table) {
            $table->engine = 'InnoDB';

            $table->increments('id');	
            $table->string('folio',10)->unique();
            $table->string('diagnostico', 250);
            $table->text('observaciones');
            $table->date('fechaProgramada');
            $table->time('horaProgramada', 0);	
            
            $table->integer('recetado_id')->unsigned();
            $table->foreign('recetado_id')->references('id')->on('recetado');

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
        Schema::dropIfExists('cita_medica');
    }
}
