@extends('layouts.app')

@section('content')
    <div class="row mt-3">
        <div class="col-md-6 offset-md-3">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title">Crear Solicitud de Adopción</h5>
                </div>
                <div class="card-body">
                    <form action="{{ route('admin.solicitud.store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="id_solicitud_adopcion">ID Solicitud de Adopción:</label>
                            <input type="number" name="id_solicitud_adopcion" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="id_users">ID Usuario:</label>
                            <input type="number" name="id_users" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="id_mascota">ID Mascota:</label>
                            <input type="number" name="id_mascota" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="id_situacion">ID Situación:</label>
                            <input type="number" name="id_situacion" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="descripcion">Descripción:</label>
                            <textarea name="descripcion" class="form-control" rows="3"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Guardar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
