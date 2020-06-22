<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRecetadoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recetado', function (Blueprint $table) {
            $table->engine = 'InnoDB';
           

            $table->increments('id');
            $table->string('dosis',50);
            $table->string('folio',20)->unique();
            $table->integer('intervaloDias');
            $table->integer('inrervaloHoras');
            $table->string('medicamento',50);
            $table->string('tipoAplicacion',50);
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
        Schema::dropIfExists('recetado');
    }
}
