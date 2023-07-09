@extends('layouts.app3')

@section('content')
    <div class="card">
        <div class="card-header">Detalles de la mascota</div>
        <div class="card-body">
            <p><strong>ID_MASCOTA:</strong> {{ $mascota->id_mascota }}</p>
            <p><strong>ID_ESTADO:</strong> {{ $mascota->id_estado }}</p>
            <p><strong>Nombre:</strong> {{ $mascota->nombre }}</p>
            <p><strong>Especie:</strong> {{ $mascota->especie }}</p>
            <p><strong>Raza:</strong> {{ $mascota->raza }}</p>
            <p><strong>Edad:</strong> {{ $mascota->edad }}</p>
            <p><strong>Género:</strong> {{ $mascota->genero }}</p>
        </div>
    </div>
@endsection