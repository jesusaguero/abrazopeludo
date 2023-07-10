@extends('layouts.app')

@section('content')
    <div class="row mt-3">
        <div class="col-md-6 offset-md-3">
            <div class="card">
                <div class="card-header text-center">
                    <h5 class="card-title" style="color: #555; font-size: 24px;">Detalles de la solicitud</h5>
                </div>
                <div class="card-body">
                    <!-- Mostrar los detalles de la solicitud -->
                    <p><strong>ID de la solicitud:</strong> {{ $solicitud->id }}</p>
                    <p><strong>ID de usuario:</strong> {{ $solicitud->id_users }}</p>
                    <p><strong>ID de mascota:</strong> {{ $solicitud->id_mascota }}</p>
                    <p><strong>ID de situación:</strong> {{ $solicitud->id_situacion }}</p>
                    <p><strong>Descripción:</strong> {{ $solicitud->descripcion }}</p>
                    
                    <!-- Formulario para eliminar la solicitud -->
                    <form action="{{ route('admin.solicitudes.destroy', $solicitud->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Eliminar solicitud</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
