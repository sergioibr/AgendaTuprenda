<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmpleadosTareasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empleados_tareas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('id_empleados');
            $table->unsignedBigInteger('id_tareas');
            $table->timestamps();

            $table->softDeletes();
            $table->foreign('id_tareas')->references('id')->on('tareas');
            $table->foreign('id_empleados')->references('id')->on('empleados');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('empleados_tareas');
    }
}
