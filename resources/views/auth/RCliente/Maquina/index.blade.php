@extends('auth.tema.app')

@section('title', "Listado de Maquinas")

@section('contenido')
<h3>Listado de Maquinas</h3>
<div class="col-sm-12">
    <a href="{{ route('Cliente.indexcliente') }}" class="btn btn-outline-secondary">Volver</a>
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
        @endforeach
    </tbody>
</table>
@endsection