@extends('auth.tema.app')

@section('title', "Listado de Usuarios")

@section('contenido')
    <h3>Listado de Usuarios</h3>
    
    <div class="col-sm-12">
    <a href="{{ route('usuario.create') }}" class="btn btn-link">Crear Usuario</a>
    <a href="{{ route('usuario.index') }}" class="btn btn-link">Listar Usuarios</a>
    <a href="" class="btn btn-link">Volver</a>
    </div>
    <table class="table table-stripped table-hover">
        <thead>
            <tr>
                <th>
                    Id
                </th>
                <th>
                    Usuario
                </th>
                <th>
                    Contraseña
                </th>
                <th>
                    Acciones
                </th>
            </tr>
        </thead>

        <tbody>
            @foreach ($usuario as $usuario)
            <tr>
                <td>
                    {{ $usuario->id }}
                </td>
                <td>
                    {{ $usuario->user }}
                </td>
                <td>
                    {{ $usuario->password }}
                </td>
                <td>
                    <form action="{{ route('usuario.destroy', $usuario) }}" method="post">
                        @csrf
                        @method('delete')
                        <button type="submit" class="btn btn-danger btn-sm" onclick="Toast()">Borrar</button>
                    </form>
                    <a href="{{ route('usuario.edit', $usuario) }}">Editar</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection