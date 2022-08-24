<?php

namespace App\Http\Controllers;

use App\Models\Rutina;
use Illuminate\Http\Request;

class RutinaController extends Controller
{
    public function index()
    {
        $rutina = Rutina::orderByDesc('id')->get();
        return view('auth.rutina.index', compact('rutina'));
    }

    public function create()
    {
        return view('auth.rutina.create');
    }

    public function store(Request $request)
    {
        $datos = $request->validate(
            [
                'nombre_Rutina' => ' required| max:50',
                'objetivo' => 'required| max:50',
                'estado_Rutina' => 'required',
                'id_Ejercicio_FK' => 'required',
                'identificacion_Entrenador_FK' => 'required',
                'identificacion_Cliente_FK' => 'required'
            ]
        );

        $rutina = Rutina::create($datos);
        return redirect()->route('rutina.index');
    }

    public function show(Rutina $rutina)
    {
        //
    }

    public function edit(Rutina $rutina)
    {
        return view('rutina.edit', compact('rutina'));
    }

    public function update(Request $request, Rutina $rutina)
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

            $rutina->update($datos);
            return redirect()->route('rutina.index');
    }

    public function destroy(Rutina $rutina)
    {
        $rutina->delete();
        return redirect()->route('rutina.index');
    }
}
