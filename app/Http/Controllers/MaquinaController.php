<?php

namespace App\Http\Controllers;

use App\Models\Maquina;
use Illuminate\Http\Request;

class MaquinaController extends Controller
{
    public function index()
    {
        $maquina = Maquina::get();
        return view('auth.maquina.index', compact('maquina'));
    }

    public function create()
    {
        return view('auth.maquina.create');
    }

    public function store(Request $request)
    {
        $datos = $request->validate(
            [
                'nombre_Maquina' => ' required| max:50',
                'proveedor' => 'required| max:50',
                'cantidad' => 'required',
                'lugar_Maquina' => 'required| max:50',
                'foto_Maquina' => 'required',
                'id_Mantenimiento_FK' => 'required',
                'identificacion_Gerente_FK' => 'required',
                'estado_Maquina' => 'required'
            ]
        );

        $maquina = Maquina::create($datos);
        return redirect()->route('maquina.index');
    }

    public function show(Maquina $maquina)
    {
        //
    }

    public function edit(Maquina $maquina)
    {
        return view('auth.maquina.edit', compact('maquina'));
    }

    public function update(Request $request, Maquina $maquina)
    {
        $datos = $request->validate(
            [
                'nombre_Maquina' => ' required| max:50',
                'proveedor' => 'required| max:50',
                'cantidad' => 'required',
                'lugar_Maquina' => 'required| max:50',
                'foto_Maquina' => 'required',
                'id_Mantenimiento_FK' => 'required',
                'identificacion_Gerente_FK' => 'required',
                'estado_Maquina' => 'required'
            ]
        );

            $maquina->update($datos);
            return redirect()->route('maquina.index');
    }

    public function destroy(Maquina $maquina)
    {
        $maquina->delete();
        return redirect()->route('maquina.index');
    }
}
