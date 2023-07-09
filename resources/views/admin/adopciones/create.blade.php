@extends('layouts.app3')

@section('content')
<div class="row mt-3">
    <div class="card-header text-center">
        <h5 class="card-title" style="color: #555; font-size: 24px;">Crear nueva mascota</h5>
    </div>
    <div class="col-md-6">
        <div class="card">
            <div class="card-body">
                <!-- Formulario para crear una nueva mascota -->
                <form action="{{ route('admin.adopciones.store') }}" method="POST">
                    @csrf
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="id_mascota">ID Mascota:</label>
                            <input type="text" name="id_mascota" class="form-control" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="id_estado">ID Estado:</label>
                            <select name="id_estado" class="form-control" required>
                                <option value="1">1</option>
                                <option value="2">2</option>
                            </select>
                            <small class="form-text text-muted">1: Disponible, 2: Adoptado</small>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="nombre">Nombre:</label>
                            <input type="text" name="nombre" class="form-control" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="especie">Especie:</label>
                            <input type="text" name="especie" class="form-control" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="raza">Raza:</label>
                            <input type="text" name="raza" class="form-control" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="edad">Edad:</label>
                            <input type="number" name="edad" class="form-control" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="genero">Género:</label>
                            <input type="text" name="genero" class="form-control" required>
                        </div>
                    </div>
                    <!-- Otros campos del formulario -->
                    <button type="submit" class="btn btn-primary">Guardar</button>
                </form>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <img src="{{ asset('import/img/mascotas/mascotasG.jpg') }}" alt="Imagen" class="img-fluid">
    </div>
</div>
@endsection
