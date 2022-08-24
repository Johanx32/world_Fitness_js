<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;
    protected $table = 'cliente';
    protected $fillable = [
    'nombre_Clie',
    'apellido_Clie',
    'fecha_Nac_Clie',
    'telefono_Clie',
    'direccion_Clie',
    'estado_Clie',
    'identificacion_Usuario_FK'];

    protected $timestamp = false;

    public const Estado = ['Inactivo','Activo'];

    public function estado_Clie(){
        return self::Estado[$this->estado_Clie];
    }
}
