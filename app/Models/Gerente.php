<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gerente extends Model
{
    use HasFactory;

    protected $table = 'gerente';
    protected $fillable = [
                            'nombre_Geren',
                            'apellido_Geren',
                            'fecha_Nac_Geren',
                            'telefono_Geren',
                            'direccion_Geren',
                            'identificacion_Usuario_FK'];

}
