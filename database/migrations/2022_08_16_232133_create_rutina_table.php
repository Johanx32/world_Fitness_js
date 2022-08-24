<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rutina', function (Blueprint $table) {
            $table->id();
            $table->string('nombre_Rutina');
            $table->string('objetivo');
            $table->boolean('estado_Rutina');
            $table->integer('id_Ejercicio_FK');
            $table->integer('identificacion_Entrenador_FK');
            $table->integer('identificacion_Cliente_FK');
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
        Schema::dropIfExists('rutina');
    }
};
