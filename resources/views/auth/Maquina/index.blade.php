@extends('auth.tema.app')

@section('title', "Listado de Maquinas")

@section('contenido')
    <h3>Listado de Maquinas</h3>
    <div class="col-sm-12">
                <a href="{{ route('maquina.create') }}" class="btn btn-outline-secondary">Crear Maquina</a>
                <a href="{{ route('maquina.index') }}" class="btn btn-outline-secondary">Listar Maquinas</a>
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
                    Nombre
                </th>
                <th>
                    Proveedor
                </th>
                <th>
                    Cantidad
                </th>
                <th>
                    Lugar Maquina
                </th>
                <th>
                    Foto Maquina
                </th>
                <th>
                    Id Mantenimiento
                </th>
                <th>
                    Identificacion Gerente
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
            @foreach ($maquina as $maquina)
            <tr>
                <td>
                    {{ $maquina->id}}
                </td>
                <td>
                    {{ $maquina->nombre_Maquina }}
                </td>
                <td>
                    {{ $maquina->proveedor }}
                </td>
                <td>
                    {{ $maquina->cantidad }}
                </td>
                <td>
                    {{ $maquina->lugar_Maquina }}
                </td>
                <td>
                    {{ $maquina->foto_Maquina }}
                </td>
                <td>
                    {{ $maquina->id_Mantenimiento_FK }}
                </td>
                <td>
                    {{ $maquina->identificacion_Gerente_FK }}
                </td>
                <td>
                    {{ $maquina->estado_Maquina() }}
                </td>
                <td>
                    <form action="{{ route('maquina.destroy', $maquina) }}" method="post">
                        @csrf
                        @method('delete')
                        <button type="submit" class="btn btn-danger btn-sm">Borrar</button>
                    </form>
                    <a href="{{ route('maquina.edit', $maquina) }}" class="btn btn-warning btn-sm">Editar</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection