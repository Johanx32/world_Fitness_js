@extends('auth.tema.app')

@section('title', "Registrar")

@section('contenido')
    <h3>Nuevo Cliente</h3>
    <div class="col-sm-12">
                <a href="{{ route('ejercicio.create') }}" class="btn btn-link">Crear Ejercicio</a>
                <a href="{{ route('ejercicio.index') }}" class="btn btn-link">Listar Ejercicio</a>
                <a href="{{ route('gerente.indexadmin') }}"class="btn btn-link">Volver</a>
            </div>
    <form action="{{ route('ejercicio.store') }}" method="POST">
        @csrf
        <div class="row">
            <div class="col-sm-6">
                <input type="hidden" name="id" class="form-control"><br><br>
                <label for="nombre_Ejercicio" class="form-label">Nombre</label><br>
                <input type="text" name="nombre_Ejercicio" class="form-control" id="nombre_Ejercicio"><br><br>
            </div>
            
            <div class="col-sm-6">
                <label for="tiempo_Ejercicio" class="form-label">Tiempo</label><br>
                <input type="text" name="tiempo_Ejercicio" class="form-control" id="tiempo_Ejercicio"><br><br>
            </div>

            <div class="col-sm-6">
                <label for="series_Ejercicio" class="form-label">Series</label><br>
                <input type="text" name="series_Ejercicio" class="form-control" id="series_Ejercicio"><br><br>
            </div>

            <div class="col-sm-6">
                <label for="musculos_Involucrados" class="form-label">Musculos Involucrados</label><br>
                <input type="text" name="musculos_Involucrados" class="form-control" id="musculos_Involucrados"><br><br>
            </div>
           
            <div class="col-sm-6">
                <label for="ejemplo_Ejercicio" class="form-label">Ejemplo</label><br>
                <input type="text" name="ejemplo_Ejercicio" class="form-control" id="ejemplo_Ejercicio"><br><br>
            </div>

            <div class="col-sm-6"><br><br>
                <label for="estado_Ejercicio" class="form-label">Estado</label><br>
                <select name="estado_Ejercicio" id="estado_Ejercicio" class="form-select">
                    <option value="1">Activo</option>
                    <option value="0">Inactivo</option>
                </select><br>
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