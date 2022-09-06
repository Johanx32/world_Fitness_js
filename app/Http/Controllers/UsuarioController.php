<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
 
    public function index()
    {
        $usuario = User::get();
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
                'name' => 'required',
                'email' => 'required|max:50| email',
                'role',
                'password' => 'required|max:60'
            ]
        );

        $usuario = User::create($datos);
        return view('auth.usuario.creado');
    }

    public function show(User $usuario)
    {
        //
    }

    public function edit(User $usuario)
    {
        return view('auth.usuario.edit', compact('usuario'));
    }

    public function update(Request $request, User $usuario)
    {
        $datos = $request->validate(
            [
                'name' => 'required',
                'email' => 'required|max:50| email',
                'role',
                'password' => 'required|max:60'
            ]
        );
            $usuario->update($datos);
            return redirect()->route('usuario.index');
    }

    public function destroy(User $usuario)
    {
        $usuario->delete();
        return redirect()->route('usuario.index');
    }
}
