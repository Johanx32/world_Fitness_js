<?php

namespace App\Http\Controllers;
use App\Models\Cliente;
use App\Models\ValoracionFisica;
use App\Models\Usuario;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    public function index()
    {
        $cliente = Cliente::get();
        return view('auth.cliente.index', compact('cliente'));
    }

    public function create()
    {
        $usuario = Usuario::All();
        $valofisica = ValoracionFisica::All();
        return view('auth.cliente.create')->with('usuario', $usuario)->with('valofisica',$valofisica);
    }

    public function store(Request $request)
    {
        $datos = $request->validate(
            [
                'nombre_Clie' => ' required| max:50',
                'apellido_Clie' => 'required| max:50',
                'fecha_Nac_Clie' => 'required',
                'telefono_Clie' => 'required| max:11',
                'direccion_Clie' => 'required| max:50',
                'estado_Clie' => 'required',
                'id_valoracionFisica_FK' => 'required',
                'identificacion_Usuario_FK' => 'required'
            ]
        );

        $cliente = Cliente::create($datos);
        return view('auth.cliente.creado');    
    
    }

    public function show(Cliente $cliente)
    {
        //
    }

    public function edit(Cliente $cliente)
    {
        return view('auth.cliente.edit', compact('cliente'));
    }

    public function update(Request $request, Cliente $cliente)
    {
        $datos = $request->validate(
            [
                'nombre_Clie' => ' required| max:50',
                'apellido_Clie' => 'required| max:50',
                'fecha_Nac_Clie' => 'required',
                'telefono_Clie' => 'required',
                'direccion_Clie' => 'required| max:50',
                'estado_Clie' => 'required',
                'id_valoracionFisica_FK',
                'identificacion_Usuario_FK'
            ]
        );

            $cliente->update($datos);
            return redirect()->route('cliente.index');
    }

    public function destroy(Cliente $cliente)
    {
        $cliente->delete();
        return redirect()->route('cliente.index');
    }
}
