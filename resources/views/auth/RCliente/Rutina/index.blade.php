@extends('auth.tema.app')

@section('title', "Listado de Rutinas")

@section('contenido')
<h3>Listado de Rutinas</h3>
<div class="col-sm-12">
    <a href="{{ route('Cliente.indexcliente') }}" class="btn btn-outline-secondary">Volver</a>
</div>
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
                {{ $rutina->id_Ejercicio_FK }}
            </td>
            <td>
                {{ $rutina->identificacion_Entrenador_FK }}
            </td>
            <td>
                {{ $rutina->identificacion_Cliente_FK }}
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection