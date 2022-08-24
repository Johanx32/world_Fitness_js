<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Maquina extends Model
{
    use HasFactory;
     //Representa una tabla en especifico
     protected $table = 'maquina';
     protected $fillable = [
         'nombre_Maquina',
         'proveedor',
         'cantidad',
         'lugar_Maquina',
         'foto_Maquina',
         'estado_Maquina',
         'id_Mantenimiento_FK',
         'identificacion_Usuario_FK'
     ];
 
     protected $timestamp = false;
 
     public const Estado = ['Inactivo','Activo'];
 
     public function estado_Maquina(){
         return self::Estado[$this->estado_Maquina];
     }
}
