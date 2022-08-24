@extends('auth.tema.app')

@section('title', "Listado de Rutinas")

@section('contenido')
    <h3>Listado de Rutinas</h3>
    <div class="col-sm-12">
                <a href="{{ route('rutina.create') }}" class="btn btn-link">Crear Rutina</a>
                <a href="{{ route('rutina.index') }}" class="btn btn-link">Listar Rutinas</a>
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
                    Objetivo
                </th>
                <th>
                    Id Ejercicio
                </th>
                <th>
                    Identificacion Entrenador
                </th>
                <th>
                    Identificacion Cliente
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
            @foreach ($rutina as $rutina)
            <tr>
                <td>
                    {{ $rutina->id }}
                </td>
                <td>
                    {{ $rutina->nombre_Rutina }}
                </td>
                <td>
                    {{ $rutina->objetivo }}
                </td>
                <td>
                    {{ $rutina->estado_Rutina() }}
                </td>
                <td>
                    {{ $rutina->id_Ejercicio_FK }}
                </td>
                <td>
                    {{ $rutina->identificacion_Entrenador_FK }}
                </td>
                <td>
                    {{ $rutina->identificacion_Cliente_FK }}
                </td>
                <td>
                    <form action="{{ route('rutina.destroy', $rutina) }}" method="post">
                        @csrf
                        @method('delete')
                        <button type="submit" class="btn btn-danger btn-sm">Borrar</button>
                    </form>
                    <a href="{{ route('rutina.edit', $rutina) }}">Editar</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection