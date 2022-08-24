@extends('auth.tema.app')

@section('title', "Registrar")

@section('contenido')
    <h3>Nuevo Gerente</h3>
    <div class="col-sm-12">
                <a href="{{ route('gerente.create') }}" class="btn btn-link">Crear Gerente</a>
                <a href="{{ route('gerente.index') }}" class="btn btn-link">Listar Gerente</a>
                <a href="{{ route('gerente.indexadmin') }}"class="btn btn-link">Volver</a>
            </div>
    <form action="{{ route('gerente.store') }}" method="POST">
        @csrf
        <div class="row">
            <div class="col-sm-6">
                <input type="hidden" name="id" class="form-control"><br><br>
                <label for="nombre_Geren" class="form-label">Nombre</label><br>
                <input type="text" name="nombre_Geren" class="form-control" id="nombre_Geren"><br><br>
            </div>
            
            <div class="col-sm-6">
                <label for="apellido_Geren" class="form-label">Apellido</label><br>
                <input type="text" name="apellido_Geren" class="form-control" id="apellido_Geren"><br><br>
            </div>

            <div class="col-sm-6">
                <label for="fecha_Nac_Geren" class="form-label">Fecha Nacimiento:</label><br>
                <input type="date" name="fecha_Nac_Geren" class="form-control" id="fecha_Nac_Geren"><br><br>
            </div>

            <div class="col-sm-6">
                <label for="telefono_Geren" class="form-label">Telefono:</label><br>
                <input type="text" name="telefono_Geren" class="form-control" id="telefono_Geren"><br><br>
            </div>
           
            <div class="col-sm-6">
                <label for="direccion_Geren" class="form-label">Direccion:</label><br>
                <input type="text" name="direccion_Geren" class="form-control" id="direccion_Geren"><br><br>
            </div>

            <div class="col-sm-6">
                <label for="identificacion_Usuario_FK" class="form-label">Identificacion Usuario</label><br>
                <input type="text" name="identificacion_Usuario_FK" class="form-control" id="identificacion_Usuario_FK"><br><br>
            </div>

            <div class="col-sm-12 text-end my-2">
                <button type="submit" class="btn btn-primary">
                    Guardar
                </button>
            </div>

        </div>
    </form>

    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
@endsection