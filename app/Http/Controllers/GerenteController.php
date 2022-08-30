<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gerente;
use App\Models\Usuario;

class GerenteController extends Controller
{

  public function index()
    {
        $gerente = Gerente::get();
        return view('auth.gerente.index', compact('gerente'));
    }

    public function create()
    {
        $usuario = Usuario::All();
        return view('auth.gerente.create')->with('usuario',$usuario);
    }

    public function store(Request $request)
    {
        $datos = $request->validate(
            [
              'nombre_Geren' => ' required| max:50',
              'apellido_Geren' => 'required| max:50',
              'fecha_Nac_Geren' => 'required',
              'telefono_Geren' => 'required',
              'direccion_Geren' => 'required| max:50',
              'identificacion_Usuario_FK' => 'required'
            ]
        );

        $gerente = Gerente::create($datos);
        return view('auth.gerente.creado');
    }

    public function show(Gerente $gerente)
    {
        //
    }

    public function edit(Gerente $gerente)
    {
        $usuario = Usuario::All();
        return view('auth.gerente.edit', compact('gerente'))->with('usuario',$usuario);
    }

    public function update(Request $request, Gerente $gerente)
    {
        $datos = $request->validate(
            [
                'nombre_Geren' => ' required| max:50',
                'apellido_Geren' => 'required| max:50',
                'fecha_Nac_Geren' => 'required',
                'telefono_Geren' => 'required',
                'direccion_Geren' => 'required| max:50',
                'identificacion_Usuario_FK'
            ]
        );

            $gerente->update($datos);
            return redirect()->route('gerente.index');
    }

    public function destroy(Gerente $gerente)
    {
        $gerente->delete();
        return redirect()->route('gerente.index');
    }
}
