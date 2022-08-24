<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rutina extends Model
{
   use HasFactory;
   protected $table = 'rutina';
   protected $fillable = [
       'nombre_Rutina',
       'objetivo',
       'estado_Rutina',
       'id_Ejercicio_FK',
       'identificacion_Entrenador_FK',
       'identificacion_Cliente_FK'
   ];

   protected $timestamp = false;

   public const Estado = ['Inactivo','Activo'];

   public function estado_Rutina(){
       return self::Estado[$this->estado_Rutina];
   }
}
