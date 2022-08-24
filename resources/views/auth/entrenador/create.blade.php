@extends('auth.tema.app')

@section('title', "Registrar")

@section('contenido')
    <h3>Nuevo Entrenador</h3>
    <div class="col-sm-12">
                <a href="{{ route('entrenador.create') }}" class="btn btn-link">Crear Entrenador</a>
                <a href="{{ route('entrenador.index') }}" class="btn btn-link">Listar Entrenador</a>
                <a href="{{ route('gerente.indexadmin') }}"class="btn btn-link">Volver</a>
                <a href="" class="btn btn-link">Volver</a>
            </div>
    <form action="{{ route('entrenador.store') }}" method="POST">
        @csrf
        <div class="row">
            <div class="col-sm-6">
                <input type="hidden" name="id" class="form-control"><br><br>
                <label for="nombre_Entre" class="form-label">Nombre</label><br>
                <input type="text" name="nombre_Entre" class="form-control" id="nombre_Entre"><br><br>
            </div>

            <div class="col-sm-6">
                <label for="apellido_Entre" class="form-label">Apellido</label><br>
                <input type="text" name="apellido_Entre" class="form-control" id="apellido_Entre"><br><br>
            </div>

            <div class="col-sm-6">
                <label for="fecha_Nac_Entre" class="form-label">Fecha Nacimiento</label><br>
                <input type="date" name="fecha_Nac_Entre" class="form-control" id="fecha_Nac_Entre"><br><br>
            </div>

            <div class="col-sm-6">
                <label for="telefono_Entre" class="form-label">Telefono</label><br>
                <input type="text" name="telefono_Entre" class="form-control" id="telefono_Entre"><br><br>
            </div>
           
            <div class="col-sm-6">
                <label for="direccion_Entre" class="form-label">Direccion</label><br>
                <input type="text" name="direccion_Entre" class="form-control" id="direccion_Entre"><br><br>
            </div>

            <div class="col-sm-12">
                <label for="estado_Entre" class="form-label">Estado</label><br>
                <select name="estado_Entre" id="estado_Entre" class="form-select">
                    <option value="1">Activo</option>
                    <option value="0">Inactivo</option>
                </select><br>
            </div>

            <div class="col-sm-6">
                <input type="hidden" name="id" class="form-control"><br><br>
                <label for="identificacion_Usuario_FK" class="form-label">Id Usuario</label><br>
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