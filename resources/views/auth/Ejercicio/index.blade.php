@extends('auth.tema.app')

@section('title', "Listado de Ejercicios")

@section('contenido')
<h3>Listado de Ejercicios</h3>

<div class="col-sm-12">
    <a href="{{ route('ejercicio.create') }}" class="btn btn-outline-secondary">Crear Ejercicio</a>
    <a href="{{ route('ejercicio.index') }}" class="btn btn-outline-secondary">Listar Ejercicios</a>
    <a href="{{ route('gerente.indexadmin') }}" class="btn btn-outline-secondary">Volver</a>
</div>
<br>
<table class="table table-sm">
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
                EjemploDescripcion
            <th>
                Estado
            </th>
            <th colspan="3">
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
                {{ $ejercicio->series_Ejercicio }}
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
            </td>
            <td>
                <a href="{{ route('ejercicio.edit', $ejercicio) }}" class="btn btn-warning btn-sm">Editar</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection