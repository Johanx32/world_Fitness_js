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
        Schema::create('gerente', function (Blueprint $table) {
            $table->id();
            $table->string('nombre_Geren');
            $table->string('apellido_Geren');
            $table->date('fecha_Nac_Geren');
            $table->integer('telefono_Geren');
            $table->string('direccion_Geren');
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
        Schema::dropIfExists('gerente');
    }
};
