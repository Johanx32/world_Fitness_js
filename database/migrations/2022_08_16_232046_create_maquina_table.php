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
            $table->integer('id_Mantenimiento');
            $table->integer('identificacion_Gerente_FK');
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
        Schema::dropIfExists('maquina');
    }
};
