@extends('layouts.app3')

@section('content')
<div class="row mt-3">
    <div class="col-md-6 offset-md-3">
        <div class="card">
            <div class="card-header text-center">
                <h5 class="card-title" style="color: #555; font-size: 24px;">Editar mascota</h5>
            </div>
            <div class="card-body">
                <!-- Formulario para editar los datos de la mascota -->
                <form action="{{ route('admin.adopciones.update', $mascota->id_mascota) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <!-- Agrega aquí los campos del formulario para editar la mascota -->
                    <div class="form-group">
                        <label for="id_estado">Estado:</label>
                        <select name="id_estado" class="form-control" required>
                            <option value="1" {{ $mascota->id_estado == 1 ? 'selected' : '' }}>1</option>
                            <option value="2" {{ $mascota->id_estado == 2 ? 'selected' : '' }}>2</option>
                        </select>
                        <small class="form-text text-muted">1: Disponible, 2: Adoptado</small>
                    </div>
                    <div class="form-group">
                        <label for="nombre">Nombre:</label>
                        <input type="text" name="nombre" class="form-control" value="{{ $mascota->nombre }}" required>
                    </div>
                    <div class="form-group">
                        <label for="especie">Especie:</label>
                        <input type="text" name="especie" class="form-control" value="{{ $mascota->especie }}" required>
                    </div>
                    <div class="form-group">
                        <label for="raza">Raza:</label>
                        <input type="text" name="raza" class="form-control" value="{{ $mascota->raza }}" required>
                    </div>
                    <div class="form-group">
                        <label for="edad">Edad:</label>
                        <input type="number" name="edad" class="form-control" value="{{ $mascota->edad }}" required>
                    </div>
                    <div class="form-group">
                        <label for="genero">Género:</label>
                        <select name="genero" class="form-control" required>
                            <option value="Macho" {{ $mascota->genero == 'Macho' ? 'selected' : '' }}>Macho</option>
                            <option value="Hembra" {{ $mascota->genero == 'Hembra' ? 'selected' : '' }}>Hembra</option>
                        </select>
                    </div>
                    <!-- Otros campos del formulario -->
                    <button type="submit" class="btn btn-primary">Guardar cambios</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
