@extends('auth.tema.app')

@section('title', "Listado de Valoracion Fisica")

@section('contenido')
<h3>Listado de Valoracion Fisica</h3>
<div class="col-sm-12">
    <a href="{{ route('valoracion_fisica.create') }}" class="btn btn-outline-secondary">Crear valoracion fisica</a>
    <a href="{{ route('valoracion_fisica.index') }}" class="btn btn-outline-secondary">Listar valoracion fisicas</a>
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
                Peso
            </th>
            <th>
                Estatura
            </th>
            <th>
                Descripcion Medidas
            </th>
            <th>
                IMC
            </th>
            <th>
                Fecha Valoracion
            </th>
            <th>
                Estado
            </th>
            <th colspan="3">
                Acciones
            </th>
        </tr>
    </thead>

    <tbody>
        @foreach ($valoracion_fisica as $valoracion_fisica)
        <tr>
            <td>
                {{ $valoracion_fisica->id }}
            </td>
            <td>
                {{ $valoracion_fisica->peso }}
            </td>
            <td>
                {{ $valoracion_fisica->estatura }}
            </td>
            <td>
                {{ $valoracion_fisica->descripcion_Medidas }}
            </td>
            <td>
                {{ $valoracion_fisica->imc }}
            </td>
            <td>
                {{ $valoracion_fisica->fecha_Valoracion }}
            </td>
            <td>
                {{ $valoracion_fisica->estado_Valoracion() }}
            </td>
            <td>
                <form action="{{ route('valoracion_fisica.destroy', $valoracion_fisica) }}" method="post">
                    @csrf
                    @method('delete')
                    <button type="submit" class="btn btn-danger btn-sm">Borrar</button>
                </form>
            </td>
            <td>
                <a href="{{ route('valoracion_fisica.edit', $valoracion_fisica) }}" class="btn btn-warning btn-sm">Editar</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection