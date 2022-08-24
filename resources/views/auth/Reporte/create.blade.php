@extends('auth.tema.app')

@section('title', "Registrar")

@section('contenido')
    <h3>Nuevo Reporte</h3>
    <div class="col-sm-12">
                <a href="{{ route('reporte.create') }}" class="btn btn-link">Crear Reporte</a>
                <a href="{{ route('reporte.index') }}" class="btn btn-link">Listar Reportes</a>
                <a href="{{ route('gerente.indexadmin') }}"class="btn btn-link">Volver</a>
            </div>
    <form action="{{ route('reporte.store') }}" method="POST">
        @csrf
        <div class="row">
            <div class="col-sm-12">
                <input type="hidden" name="id" class="form-control"><br><br>
                <label for="fecha_Reporte" class="form-label">Fecha Reporte</label><br>
                <input type="date" name="fecha_Reporte" class="form-control" id="fecha_Reporte"><br><br>
            </div>

            <div class="col-sm-12">
                <label for="descripcion" class="form-label">Descripcion</label><br>
                <input type="text" name="descripcion" class="form-control" id="descripcion"><br><br>
            </div>

            <div class="col-sm-12">
                <label for="id_Maquina_FK" class="form-label">id Mantenimiento</label><br>
                <input type="text" name="id_Maquina_FK" class="form-control" id="id_Maquina_FK"><br><br>
            </div>

            <div class="col-sm-12">
                <label for="identificacion_Usuario_FK" class="form-label">Identificacion Gerente</label><br>
                <input type="text" name="identificacion_Usuario_FK" class="form-control" id="identificacion_Usuario_FK"><br><br>
            </div>

            <div class="col-sm-12">
                <label for="estado_Reporte" class="form-label">Estado</label><br>
                <select name="estado_Reporte" id="estado_Reporte" class="form-select">
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