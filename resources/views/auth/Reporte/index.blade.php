@extends('auth.tema.app')

@section('title', "Listado de Reportes")

@section('contenido')
    <h3>Listado de Reportes</h3>
    <div class="col-sm-12">
                <a href="{{ route('reporte.create') }}" class="btn btn-link">Crear Reporte</a>
                <a href="{{ route('reporte.index') }}" class="btn btn-link">Listar Reportes</a>
                <a href="{{ route('gerente.indexadmin') }}"class="btn btn-link">Volver</a>
            </div>
    <table class="table table-stripped table-hover">
        <thead>
            <tr>
                <th>
                    Id
                </th>
                <th>
                    Fecha
                </th>
                <th>
                    Descripcion
                </th>
                <th>
                    Id Maquina
                </th>
                <th>
                    Identificacion Usuario
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
            @foreach ($reporte as $reporte)
            <tr>
                <td>
                    {{ $reporte->id}}
                </td>
                <td>
                    {{ $reporte->fecha_Reporte }}
                </td>
                <td>
                    {{ $reporte->descripcion }}
                </td>
                <td>
                    {{ $reporte->id_Maquina_FK }}
                </td>
                <td>
                    {{ $reporte->identificacion_Usuario_FK }}
                </td>
                <td>
                    {{ $reporte->estado_Reporte() }}
                </td>
                <td>
                    <form action="{{ route('reporte.destroy', $reporte) }}" method="post">
                        @csrf
                        @method('delete')
                        <button type="submit" class="btn btn-danger btn-sm">Borrar</button>
                    </form>
                    <a href="{{ route('reporte.edit', $reporte) }}">Editar</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection