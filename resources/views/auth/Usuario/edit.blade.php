@extends('auth.tema.app')

@section('title', "Editar")

@section('contenido')
    <h3>Editar Usuario</h3>
    <div class="col-sm-12">
                <a href="{{ route('usuario.create') }}" class="btn btn-outline-secondary">Crear Usuario</a>
                <a href="{{ route('usuario.index') }}" class="btn btn-outline-secondary">Listar Usuarios</a>
                <a href="{{ route('gerente.indexadmin') }}"class="btn btn-outline-secondary">Volver</a>
            </div>

    <form action="{{ route('usuario.update', $usuario) }}" method="POST">
        @method('put')
        @csrf
        <br>
        <div class="row">
            <div class="col-sm-12">
                <label for="user" class="form-label">Usuario</label><br>
                <input type="text" name="user" class="form-control" id="user" value="{{ old('user', $usuario->user) }}"><br>
            </div>

            <div class="col-sm-12">
                <label for="Contra" class="form-label">Contraseña</label><br>
                <input type="text" name="password" class="form-control" id="Contra" value="{{ old('password', $usuario->password) }}">
            </div>

            <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

            <div class="col-sm-12 text-end my-2">
                <button type="submit" class="btn btn-outline-success">
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