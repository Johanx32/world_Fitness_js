@extends('auth.tema.app')

@section('title', "Editar")

@section('contenido')
    <h3>Editar Ejercicio</h3>
    <div class="col-sm-12">
                <a href="{{ route('ejercicio.create') }}" class="btn btn-link">Crear Ejercicio</a>
                <a href="{{ route('ejercicio.index') }}" class="btn btn-link">Listar Ejercicios</a>
                <a href="{{ route('gerente.indexadmin') }}"class="btn btn-link">Volver</a>
            </div>

            <form action="{{ route('ejercicio.update', $ejercicio) }}" method="POST">
    @method('put')
        @csrf
        <div class="row">
            <div class="col-sm-6">
                <input type="hidden" name="id" class="form-control"><br><br>
                <label for="nombre_Ejercicio" class="form-label">Nombre</label><br>
                <input type="text" name="nombre_Ejercicio" class="form-control" id="nombre_Ejercicio" value="{{ old('nombre_Ejercicio', $ejercicio->nombre_Ejercicio) }}"><br><br>
            </div>
            
            <div class="col-sm-6">
                <label for="tiempo_Ejercicio" class="form-label">Tiempo</label><br>
                <input type="text" name="tiempo_Ejercicio" class="form-control" id="tiempo_Ejercicio" value="{{ old('tiempo_Ejercicio', $ejercicio->tiempo_Ejercicio) }}"><br><br>
            </div>

            <div class="col-sm-6">
                <label for="series_Ejercicio" class="form-label">Series</label><br>
                <input type="text" name="series_Ejercicio" class="form-control" id="series_Ejercicio" value="{{ old('series_Ejercicio', $ejercicio->series_Ejercicio) }}"><br><br>
            </div>

            <div class="col-sm-6">
                <label for="musculos_Involucrados" class="form-label">Musculos Involucrados</label><br>
                <input type="text" name="musculos_Involucrados" class="form-control" id="musculos_Involucrados" value="{{ old('musculos_Involucrados', $ejercicio->musculos_Involucrados) }}"><br><br>
            </div>
           
            <div class="col-sm-6">
                <label for="ejemplo_Ejercicio" class="form-label">Ejemplo</label><br>
                <input type="text" name="ejemplo_Ejercicio" class="form-control" id="ejemplo_Ejercicio" value="{{ old('ejemplo_Ejercicio', $ejercicio->ejemplo_Ejercicio) }}"><br><br>
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