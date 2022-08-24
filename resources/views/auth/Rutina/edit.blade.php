@extends('auth.tema.app')

@section('title', "Editar")

@section('contenido')
    <h3>Editar Rutina</h3>
    <div class="col-sm-12">
                <a href="{{ route('rutina.create') }}" class="btn btn-link">Crear Rutina</a>
                <a href="{{ route('rutina.index') }}" class="btn btn-link">Listar Rutinas</a>
                <a href="{{ route('gerente.indexadmin') }}"class="btn btn-link">Volver</a>
            </div>

            <form action="{{ route('rutina.update', $rutina) }}" method="POST">
    @method('put')
        @csrf
        <div class="row">
            <div class="col-sm-12">
                <input type="hidden" name="id" class="form-control"><br><br>
                <label for="nombre_Rutina" class="form-label">Nombre</label><br>
                <input type="text" name="nombre_Rutina" class="form-control" id="nombre_Rutina" value="{{ old('nombre_Rutina', $rutina->nombre_Rutina) }}"><br><br>
            </div>
            
            <div class="col-sm-12">
                <label for="objetivo" class="form-label">Objetivo</label><br>
                <input type="text" name="objetivo" class="form-control" id="objetivo" value="{{ old('objetivo', $rutina->objetivo) }}"><br><br>
            </div>

            <div class="col-sm-12">
                <label for="estado_Rutina" class="form-label">Estado</label><br>
                <select name="estado_Rutina" id="estado_Rutina" class="form-select" value="{{ old('estado_Rutina', $rutina->estado_Rutina) }}">
                    <option value="1">Activo</option>
                    <option value="0">Inactivo</option>
                </select><br>
            </div>
            
            <div class="col-sm-12">
                <label for="id_Ejercicio_FK" class="form-label">id Ejercicio</label><br>
                <input type="number" name="id_Ejercicio_FK" class="form-control" id="id_Ejercicio_FK" value="{{ old('id_Ejercicio_FK', $rutina->id_Ejercicio_FK) }}"><br><br>
            </div>

            <div class="col-sm-12">
                <label for="identificacion_Entrenador_FK" class="form-label">Identificacion Entrenador</label><br>
                <input type="number" name="identificacion_Entrenador_FK" class="form-control" id="identificacion_Entrenador_FK" value="{{ old('identificacion_Entrenador_FK', $rutina->identificacion_Entrenador_FK) }}"><br><br>
            </div>

            <div class="col-sm-12">
                <label for="identificacion_Gerente_FK" class="form-label">Identificacion Cliente</label><br>
                <input type="number" name="identificacion_Gerente_FK" class="form-control" id="identificacion_Gerente_FK" value="{{ old('identificacion_Gerente_FK', $rutina->identificacion_Gerente_FK) }}"><br><br>
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