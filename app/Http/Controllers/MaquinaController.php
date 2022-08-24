<?php

namespace App\Http\Controllers;

use App\Models\Maquina;
use Illuminate\Http\Request;

class MaquinaController extends Controller
{
    public function index()
    {
        $maquina = Maquina::orderByDesc('id')->get();
        return view('auth.maquina.index', compact('maquina'));
    }

    public function create()
    {
        return view('auth.maquina.crear');
    }

    public function store(Request $request)
    {
        $datos = $request->validate(
            [
                'fecha_Reporte' => ' required| max:50',
                'descripcion' => 'required| max:50',
                'estado_Mantenimiento' => 'required',
                'id_Maquina_FK' => 'required',
                'identificacion_Usuario_FK' => 'required'
            ]
        );

        $maquina = Maquina::create($datos);
        return redirect()->route('auth.maquina.index');
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
                'fecha_Reporte' => ' required| max:50',
                'descripcion' => 'required| max:50',
                'estado_Mantenimiento' => 'required',
                'id_Maquina_FK' => 'required',
                'identificacion_Usuario_FK' => 'required'
            ]
        );

            $maquina->update($datos);
            return redirect()->route('auth.maquina.index');
    }

    public function destroy(Maquina $maquina)
    {
        $maquina->delete();
        return redirect()->route('auth.maquina.index');
    }
}
