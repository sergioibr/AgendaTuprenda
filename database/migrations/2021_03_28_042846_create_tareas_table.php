<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTareasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tareas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('descripcion');
            $table->string('duracionEstimada');
            $table->string('duracionReal');
            $table->string('prioridad');
            $table->string('estado');
            $table->date('fecha_tarea');
            $table->string('tipo_tarea');
            $table->unsignedBigInteger('id_persona');
            $table->unsignedBigInteger('id_item');
            $table->timestamps();

            $table->softDeletes();
            $table->foreign('id_persona')->references('id')->on('personas');
            $table->foreign('id_item')->references('id')->on('items');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tareas');
    }
}
