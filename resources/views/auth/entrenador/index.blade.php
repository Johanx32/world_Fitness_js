@extends('auth.tema.app')

@section('title', "Listado de Entrenador")

@section('contenido')
    <h3>Listado de Entrenador</h3>
    
    <div class="col-sm-12">
    <a href="{{ route('entrenador.create') }}" class="btn btn-link">Crear Entrenador</a>
    <a href="{{ route('entrenador.index') }}" class="btn btn-link">Listar Entrenador</a>
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
                    Apellido
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
                    Estado
                </th>
                <th>
                    Acciones
                </th>
            </tr>
        </thead>

        <tbody>
            @foreach ($entrenador as $entrenador)
            <tr>
                <td>
                    {{ $entrenador->id }}
                </td>
                <td>
                    {{ $entrenador->nombre_Entre }}
                </td>
                <td>
                    {{ $entrenador->apellido_Entre }}
                </td>
                <td>
                    {{ $entrenador->fecha_Nac_Entre }}
                </td>
                <td>
                    {{ $entrenador->telefono_Entre }}
                </td>
                <td>
                    {{ $entrenador->direccion_Entre }}
                </td>
                <td>
                    {{ $entrenador->estado_Entre() }}
                </td>
                <td>
                    {{ $entrenador->identificacion_Usuario_FK }}
                </td>
                <td>
                    <form action="{{ route('entrenador.destroy', $entrenador) }}" method="post">
                        @csrf
                        @method('delete')
                        <button type="submit" class="btn btn-danger btn-sm" onclick="Toast()">Borrar</button>
                    </form>
                    <a href="{{ route('entrenador.edit', $entrenador) }}">Editar</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection