<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
 
    public function index()
    {
        $usuario = Usuario::get();
        return view('auth.usuario.index', compact('usuario'));
    }

    public function create()
    {
        return view('auth.usuario.create');
    }

    public function store(Request $request)
    {
        $datos = $request->validate(
            [
                'user' => ' required|max:50',
                'password' => 'required|max:60'
            ]
        );

        $usuario = Usuario::create($datos);
        return view('auth.usuario.creado');
    }

    public function show(Usuario $usuario)
    {
        //
    }

    public function edit(Usuario $usuario)
    {
        return view('auth.usuario.edit', compact('usuario'));
    }

    public function update(Request $request, Usuario $usuario)
    {
        $datos = $request->validate(
            [
                'user' => ' required|max:50',
                'password' => 'required|max:60'
            ]
        );
            $usuario->update($datos);
            return redirect()->route('usuario.index');
    }

    public function destroy(Usuario $usuario)
    {
        $usuario->delete();
        return redirect()->route('usuario.index');
    }
}
