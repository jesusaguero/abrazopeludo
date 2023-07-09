@extends('layouts.app3')

@section('content')
    <div class="card">
        <div class="card-header">Crear nueva mascota</div>
        <div class="card-body">
            <!-- Formulario para crear una nueva mascota -->
            <form action="{{ route('admin.adopciones.store') }}" method="POST">
                @csrf
                <!-- Agrega aquí los campos del formulario para crear una mascota -->
                <div class="form-group">
                    <label for="nombre">Nombre:</label>
                    <input type="text" name="nombre" class="form-control" required>
                </div>
                <!-- Otros campos del formulario -->
                <button type="submit" class="btn btn-primary">Guardar</button>
            </form>
        </div>
    </div>
@endsection