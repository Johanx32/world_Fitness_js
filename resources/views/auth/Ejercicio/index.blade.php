@extends('auth.tema.app')

@section('title', "Listado de Ejercicios")

@section('contenido')
    <h3>Listado de Ejercicios</h3>
    
    <div class="col-sm-12">
    <a href="{{ route('ejercicio.create') }}" class="btn btn-link">Crear Ejercicio</a>
                <a href="{{ route('ejercicio.index') }}" class="btn btn-link">Listar Ejercicios</a>
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
                    Tiempo
                </th>
                <th>
                    Series
                </th>
                <th>
                    Musculos Involucrados
                </th>
                <th>
                    Ejemplo
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
            @foreach ($ejercicio as $ejercicio)
            <tr>
                <td>
                    {{ $ejercicio->id }}
                </td>
                <td>
                    {{ $ejercicio->nombre_Ejercicio }}
                </td>
                <td>
                    {{ $ejercicio->tiempo_Ejercicio }}
                </td>
                <td>
                    {{ $ejercicio->series_Ejercicios }}
                </td>
                <td>
                    {{ $ejercicio->musculos_Involucrados }}
                </td>
                <td>
                    {{ $ejercicio->ejemplo_Ejercicio }}
                </td>
                <td>
                    {{ $ejercicio->estado_Ejercicio() }}
                </td>
                <td>
                    <form action="{{ route('ejercicio.destroy', $ejercicio) }}" method="post">
                        @csrf
                        @method('delete')
                        <button type="submit" class="btn btn-danger btn-sm">Borrar</button>
                    </form>
                    <a href="{{ route('ejercicio.edit', $ejercicio) }}">Editar</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection