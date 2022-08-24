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
        Schema::create('cliente', function (Blueprint $table) {
            $table->id();
            $table->string('nombre_Clie');
            $table->string('apellido_Clie');
            $table->date('fecha_Nac_Clie');
            $table->string('telefono_Clie');
            $table->string('direccion_Clie');
            $table->boolean('estado_Clie');
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
        Schema::dropIfExists('cliente');
    }
};
