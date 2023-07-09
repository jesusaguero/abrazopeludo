@extends('layouts.app3')

@section('content')
    <div class="card">
        <div class="card-header">Editar mascota</div>
        <div class="card-body">
            <!-- Formulario para editar los datos de la mascota -->
            <form action="{{ route('admin.adopciones.update', $mascota->id_mascota) }}" method="POST">
                @csrf
                @method('PUT')
                <!-- Agrega aquí los campos del formulario para editar la mascota -->
                <div class="form-group">
                    <label for="nombre">Nombre:</label>
                    <input type="text" name="nombre" class="form-control" value="{{ $mascota->nombre }}" required>
                </div>
                <!-- Otros campos del formulario -->
                <button type="submit" class="btn btn-primary">Guardar cambios</button>
            </form>
        </div>
    </div>
@endsection
