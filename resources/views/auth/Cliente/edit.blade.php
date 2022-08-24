@extends('auth.tema.app')

@section('title', "Editar")

@section('contenido')
    <h3>Nuevo Cliente</h3>
    <div class="col-sm-12">
                <a href="{{ route('cliente.create') }}" class="btn btn-link">Crear cliente</a>
                <a href="{{ route('cliente.index') }}" class="btn btn-link">Listar clientes</a>
                <a href="" class="btn btn-link">Volver</a>
            </div>

            <form action="{{ route('cliente.update', $cliente) }}" method="POST">
    @method('put')
        @csrf
        <div class="row">
            <div class="col-sm-12">
                <input type="hidden" name="id" class="form-control"><br><br>
                <label for="peso" class="form-label">Peso</label><br>
                <input type="text" name="peso" class="form-control" id="peso" value="{{ old('peso', $cliente->peso) }}"><br><br>
            </div>

            <div class="col-sm-12">
                <label for="DiagMantenimiento" class="form-label">Estatura</label><br>
                <input type="text" name="estatura" class="form-control" id="DiagMantenimiento" value="{{ old('estatura', $cliente->estatura) }}"><br><br>
            </div>

            <div class="col-sm-12">
                <label for="descripmed" class="form-label">Descripcion Medidas</label><br>
                <input type="textarea" name="descripcion_Medidas" class="form-control" id="descripmed" value="{{ old('descripcion_Medidas', $cliente->descripcion_Medidas) }}"><br><br>
            </div>

            <div class="col-sm-12">
                <label for="imc" class="form-label">IMC</label><br>
                <input type="text" name="imc" class="form-control" id="imc" value="{{ old('imc', $cliente->imc) }}"><br><br>
            </div>

            <div class="col-sm-12">
                <label for="fechaVal" class="form-label">Fecha Valoracion</label><br>
                <input type="date" name="fecha_Valoracion" class="form-control" id="fechaVal" value="{{ old('fechaVal', $cliente->fechaVal) }}"><br><br>
            </div>

            <div class="col-sm-12">
                <label for="estadoVal" class="form-label">Estado</label><br>
                <select name="estado_Valoracion" id="estadoVal" class="form-select" value="{{ old('estadoVal', $cliente->estadoVal) }}">
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