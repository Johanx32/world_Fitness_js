<?php

namespace App\Http\Controllers;

use App\Models\Reporte;
use Illuminate\Http\Request;

class ReporteController extends Controller
{
    public function index()
    {
        $reporte = Reporte::get();
        return view('auth.reporte.index', compact('reporte'));
    }

    public function create()
    {
        return view('auth.reporte.create');
    }

    public function store(Request $request)
    {
        $datos = $request->validate(
            [
                'fecha_Reporte' => ' required| max:50',
                'descripcion' => 'required| max:50',
                'estado_Reporte' => 'required',
                'id_Maquina_FK' => 'required',
                'identificacion_Usuario_FK' => 'required'
            ]
        );

        $reporte = Reporte::create($datos);
        return redirect()->route('reporte.index');
    }

    public function show(Reporte $reporte)
    {
        //
    }

    public function edit(Reporte $reporte)
    {
        return view('auth.reporte.edit', compact('reporte'));
    }

    public function update(Request $request, Reporte $reporte)
    {
        $datos = $request->validate(
            [
                'fecha_Reporte' => ' required| max:50',
                'descripcion' => 'required| max:50',
                'estado_Reporte' => 'required',
                'id_Maquina_FK' => 'required',
                'identificacion_Usuario_FK' => 'required'
            ]
        );

            $reporte->update($datos);
            return redirect()->route('reporte.index');
    }

    public function destroy(Reporte $reporte)
    {
        $reporte->delete();
        return redirect()->route('reporte.index');
    }
}
