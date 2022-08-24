<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gerente;

class GerenteController extends Controller
{

  public function index()
    {
        $gerente = Gerente::orderByDesc('id')->get();
        return view('auth.gerente.index', compact('gerente'));
    }

    public function create()
    {
        return view('auth.gerente.crear');
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
        return redirect()->route('auth.gerente.index');
    }

    public function show(Gerente $gerente)
    {
        //
    }

    public function edit(Gerente $gerente)
    {
        return view('auth.gerente.edit', compact('gerente'));
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
                'identificacion_Usuario_FK' => 'required'
            ]
        );

            $gerente->update($datos);
            return redirect()->route('auth.gerente.index');
    }

    public function destroy(Gerente $gerente)
    {
        $gerente->delete();
        return redirect()->route('auth.gerente.index');
    }
}
