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
        Schema::create('maquina', function (Blueprint $table) {
            $table->id();
            $table->string('nombre_Maquina');
            $table->string('proveedor');
            $table->integer('cantidad');
            $table->string('lugar_Maquina');
            $table->string('foto_Maquina');
            $table->boolean('estado_Maquina');
            $table->unsignedBigInteger('id_Mantenimiento_FK');
            $table->unsignedBigInteger('identificacion_Gerente_FK');
            $table->timestamps();

            $table->foreign('id_Mantenimiento_FK')->references('id')->on('mantenimiento');
            $table->foreign('identificacion_Gerente_FK')->references('id')->on('gerente');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('maquina');
    }
};
