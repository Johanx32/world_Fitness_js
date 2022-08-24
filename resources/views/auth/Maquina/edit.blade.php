@extends('auth.tema.app')

@section('title', "Editar")

@section('contenido')
    <h3>Editar Maquina</h3>
    <div class="col-sm-12">
                <a href="{{ route('maquina.create') }}" class="btn btn-link">Crear Maquina</a>
                <a href="{{ route('maquina.index') }}" class="btn btn-link">Listar Maquinas</a>
                <a href="{{ route('gerente.indexadmin') }}"class="btn btn-link">Volver</a>
            </div>

            <form action="{{ route('maquina.update', $maquina) }}" method="POST">
    @method('put')
        @csrf
        <div class="row">
            <div class="col-sm-12">
                <input type="hidden" name="id" class="form-control"><br><br>
                <label for="nombre_Maquina" class="form-label">Nombre</label><br>
                <input type="text" name="nombre_Maquina" class="form-control" id="nombre_Maquina" value="{{ old('nombre_Maquina', $maquina->nombre_Maquina) }}"><br><br>
            </div>

            <div class="col-sm-12">
                <label for="proveedor" class="form-label">Nombre Proveedor</label><br>
                <input type="text" name="proveedor" class="form-control" id="proveedor" value="{{ old('proveedor', $maquina->proveedor) }}"><br><br>
            </div>

            <div class="col-sm-12">
                <label for="cantidad" class="form-label">Cantidad</label><br>
                <input type="text" name="cantidad" class="form-control" id="cantidad" value="{{ old('cantidad', $maquina->cantidad) }}"><br><br>
            </div>

            <div class="col-sm-12">
                <label for="lugar_Maquina" class="form-label">Lugar Maquina</label><br>
                <input type="text" name="lugar_Maquina" class="form-control" id="lugar_Maquina" value="{{ old('lugar_Maquina', $maquina->lugar_Maquina) }}"><br><br>
            </div>

            <div class="col-sm-12">
                <label for="foto_Maquina" class="form-label">Foto</label><br>
                <input type="text" name="foto_Maquina" class="form-control" id="foto_Maquina" value="{{ old('foto_Maquina', $maquina->foto_Maquina) }}"><br><br>
            </div>

            <div class="col-sm-12">
                <label for="id_Mantenimiento_FK" class="form-label">id Mantenimiento</label><br>
                <input type="text" name="id_Mantenimiento_FK" class="form-control" id="id_Mantenimiento_FK" value="{{ old('id_Mantenimiento_FK', $maquina->id_Mantenimiento_FK) }}"><br><br>
            </div>

            <div class="col-sm-12">
                <label for="identificacion_Gerente_FK" class="form-label">Identificacion Gerente</label><br>
                <input type="text" name="identificacion_Gerente_FK" class="form-control" id="identificacion_Gerente_FK" value="{{ old('identificacion_Gerente_FK', $maquina->identificacion_Gerente_FK) }}"><br><br>
            </div>

            <div class="col-sm-12">
                <label for="estado_Maquina" class="form-label">Estado</label><br>
                <select name="estado_Maquina" id="estado_Maquina" class="form-select">
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