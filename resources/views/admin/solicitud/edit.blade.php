@extends('layouts.app')

@section('content')
    <div class="row mt-3">
        <div class="col-md-6 offset-md-3">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title">Editar Solicitud de Adopción</h5>
                </div>
                <div class="card-body">
                    <form action="{{ route('admin.adopciones.update', $solicitud->id_solicitud_adopcion) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="id_solicitud_adopcion">ID Solicitud de Adopción:</label>
                            <input type="number" name="id_solicitud_adopcion" class="form-control" value="{{ $solicitud->id_solicitud_adopcion }}" required>
                        </div>
                        <div class="form-group">
                            <label for="id_users">ID Usuario:</label>
                            <input type="number" name="id_users" class="form-control" value="{{ $solicitud->id_users }}" required>
                        </div>
                        <div class="form-group">
                            <label for="id_mascota">ID Mascota:</label>
                            <input type="number" name="id_mascota" class="form-control" value="{{ $solicitud->id_mascota }}" required>
                        </div>
                        <div class="form-group">
                            <label for="id_situacion">ID Situación:</label>
                            <input type="number" name="id_situacion" class="form-control" value="{{ $solicitud->id_situacion }}" required>
                        </div>
                        <div class="form-group">
                            <label for="descripcion">Descripción:</label>
                            <textarea name="descripcion" class="form-control" rows="3">{{ $solicitud->descripcion }}</textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Guardar cambios</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
