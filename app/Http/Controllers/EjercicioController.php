<?php

namespace App\Http\Controllers;

use App\Models\Ejercicio;
use Illuminate\Http\Request;

class EjercicioController extends Controller
{

    public function index()
    {
        $ejercicio = Ejercicio::orderByDesc('id')->get();
        return view('ejercicio.index', compact('ejercicio'));
    }

    public function create()
    {
        return view('ejercicio.crear');
    }

    public function store(Request $request)
    {
        $datos = $request->validate(
            [
                'nombre_Ejercicio' => ' required| max:50',
                'tiempo_Ejercicio' => 'required| max:50',
                'series_Ejercicio' => 'required',
                'musculos_Involucrados' => 'required| max:255',
                'ejemplo_Ejercicio' => 'required',
                'estado_Ejercicio' => 'required'
            ]
        );

        $ejercicio = Ejercicio::create($datos);
        return redirect()->route('ejercicio.index');
    }

    public function show(Ejercicio $ejercicio)
    {
        //
    }

    public function edit(Ejercicio $ejercicio)
    {
        return view('ejercicio.edit', compact('ejercicio'));
    }

    public function update(Request $request, Ejercicio $ejercicio)
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

            $ejercicio->update($datos);
            return redirect()->route('ejercicio.index');
    }

    public function destroy(Ejercicio $ejercicio)
    {
        $ejercicio->delete();
        return redirect()->route('ejercicio.index');
    }
}
