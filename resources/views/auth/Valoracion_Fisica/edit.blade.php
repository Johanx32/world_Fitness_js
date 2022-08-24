@extends('auth.tema.app')

@section('title', "Registrar")

@section('contenido')
    <h3>Nueva Valoracion Fisica</h3>

    <form action="{{ route('valoracion_fisica.update', $valoracion_fisica) }}" method="POST">
    @method('put')
        @csrf
        <div class="row">
            <div class="col-sm-12">
                <input type="hidden" name="id" class="form-control"><br><br>
                <label for="peso" class="form-label">Peso</label><br>
                <input type="text" name="peso" class="form-control" id="peso" value="{{ old('peso', $valoracion_fisica->peso) }}"><br><br>
            </div>

            <div class="col-sm-12">
                <label for="DiagMantenimiento" class="form-label">Estatura</label><br>
                <input type="text" name="estatura" class="form-control" id="DiagMantenimiento" value="{{ old('estatura', $valoracion_fisica->estatura) }}"><br><br>
            </div>

            <div class="col-sm-12">
                <label for="descripmed" class="form-label">Descripcion Medidas</label><br>
                <input type="textarea" name="descripcion_Medidas" class="form-control" id="descripmed" value="{{ old('descripcion_Medidas', $valoracion_fisica->descripcion_Medidas) }}"><br><br>
            </div>

            <div class="col-sm-12">
                <label for="imc" class="form-label">IMC</label><br>
                <input type="text" name="imc" class="form-control" id="imc" value="{{ old('imc', $valoracion_fisica->imc) }}"><br><br>
            </div>

            <div class="col-sm-12">
                <label for="fechaVal" class="form-label">Fecha Valoracion</label><br>
                <input type="date" name="fecha_Valoracion" class="form-control" id="fechaVal" value="{{ old('fechaVal', $valoracion_fisica->fechaVal) }}"><br><br>
            </div>

            <div class="col-sm-12">
                <label for="estadoVal" class="form-label">Estado</label><br>
                <select name="estado_Valoracion" id="estadoVal" class="form-select" value="{{ old('estadoVal', $valoracion_fisica->estadoVal) }}">
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