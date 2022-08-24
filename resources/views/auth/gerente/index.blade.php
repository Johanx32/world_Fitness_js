@extends('auth.tema.app')

@section('title', "Listado de Gerentes")

@section('contenido')
    <h3>Listado de Gerentes</h3>
    
    <div class="col-sm-12">
    <a href="{{ route('gerente.create') }}" class="btn btn-link">Crear Gerente</a>
                <a href="{{ route('gerente.index') }}" class="btn btn-link">Listar Gerentes</a>
                <a href="{{ route('gerente.indexadmin') }}"class="btn btn-link">Volver</a>
    </div>
    <table class="table table-stripped table-hover">
        <thead>
            <tr>
                <th>
                    Id
                </th>
                <th>
                    Nombre
                </th>
                <th>
                    Apelli
                </th>
                <th>
                    Fecha Nacimiento
                </th>
                <th>
                    Telefono
                </th>
                <th>
                    Direccion
                </th>
                <th>
                    Acciones
                </th>
            </tr>
        </thead>

        <tbody>
            @foreach ($gerente as $gerente)
            <tr>
                <td>
                    {{ $gerente->id }}
                </td>
                <td>
                    {{ $gerente->nombre_Geren }}
                </td>
                <td>
                    {{ $gerente->apellido_Geren }}
                </td>
                <td>
                    {{ $gerente->fecha_Nac_Geren }}
                </td>
                <td>
                    {{ $gerente->telefono_Geren }}
                </td>
                <td>
                    {{ $gerente->direccion_Geren }}
                </td>
                <td>
                    <form action="{{ route('gerente.destroy', $gerente) }}" method="post">
                        @csrf
                        @method('delete')
                        <button type="submit" class="btn btn-danger btn-sm">Borrar</button>
                    </form>
                    <a href="{{ route('gerente.edit', $gerente) }}">Editar</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection