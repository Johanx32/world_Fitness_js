@extends('auth.tema.app')

@section('title', "Listado de Cliente")

@section('contenido')
    <h3>Listado de Clientes</h3>
    
    <div class="col-sm-12">
    <a href="{{ route('cliente.create') }}" class="btn btn-link">Crear cliente</a>
                <a href="{{ route('cliente.index') }}" class="btn btn-link">Listar clientes</a>
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
                    Estado
                </th>
                <th>
                    Acciones
                </th>
            </tr>
        </thead>

        <tbody>
            @foreach ($cliente as $cliente)
            <tr>
                <td>
                    {{ $cliente->id }}
                </td>
                <td>
                    {{ $cliente->nombre_Clie }}
                </td>
                <td>
                    {{ $cliente->apellido_Clie }}
                </td>
                <td>
                    {{ $cliente->fecha_Nac_Clie }}
                </td>
                <td>
                    {{ $cliente->telefono_Clie }}
                </td>
                <td>
                    {{ $cliente->direccion_Clie }}
                </td>
                <td>
                    {{ $cliente->estado_Clie() }}
                </td>
                <td>
                    <form action="{{ route('cliente.destroy', $cliente) }}" method="post">
                        @csrf
                        @method('delete')
                        <button type="submit" class="btn btn-danger btn-sm">Borrar</button>
                    </form>
                    <a href="{{ route('cliente.edit', $cliente) }}">Editar</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection