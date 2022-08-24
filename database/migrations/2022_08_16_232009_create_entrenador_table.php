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
        Schema::create('entrenador', function (Blueprint $table) {
            $table->id();
            $table->string('nombre_Entre');
            $table->string('apellido_Entre');
            $table->date('fecha_Nac_Entre');
            $table->string('telefono_Entre');
            $table->string('direccion_Entre');
            $table->boolean('estado_Entre');
            $table->integer('identificacion_Usuario_FK');
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
        Schema::dropIfExists('entrenador');
    }
};
