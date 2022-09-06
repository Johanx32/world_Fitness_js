@extends('auth.tema.app')

@section('title', "Listado de Usuarios")

@section('contenido')
    <h3>Listado de Usuarios</h3>
    
    <div class="col-sm-12">
    <a href="{{ route('usuario.create') }}" class="btn btn-outline-secondary">Crear Usuario</a>
    <a href="{{ route('usuario.index') }}" class="btn btn-outline-secondary">Listar Usuarios</a>
    <a href="{{ route('gerente.indexadmin') }}"class="btn btn-outline-secondary">Volver</a>
    </div>
    <br>
    <table class="table table-sm">
        <thead>
            <tr>
                <th>
                    Id
                </th>
                <th>
                    Email
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
                    {{ $usuario->email }}
                </td>
                <td>
                    {{ $usuario->password }}
                </td>
                <td>
                    <form action="{{ route('usuario.destroy', $usuario) }}" method="post">
                        @csrf
                        @method('delete')
                        <button type="submit" class="btn btn-danger btn-sm" class="formulario-eliminar">Borrar</button>
                    </form>
                    <a href="{{ route('usuario.edit', $usuario) }}"  class="btn btn-warning btn-sm">Editar</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection
