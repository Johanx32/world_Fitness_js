<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Entrenador extends Model
{
    use HasFactory;
    //Representa una tabla en especifico
    protected $table = 'entrenador';
    protected $fillable = [
        'nombre_Entre',
        'apellido_Entre',
        'fecha_Nac_Entre',
        'telefono_Entre',
        'direccion_Entre',
        'estado_Entre',
        'identificacion_Usuario_FK'
    ];

    protected $timestamp = false;

    public const Estado = ['Inactivo','Activo'];

    public function estado_Entre(){
        return self::Estado[$this->estado_Entre];
    }
}
