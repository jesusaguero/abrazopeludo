@extends('layouts.app3')

@section('content')
<div class="row mt-3">
    <div class="col-md-10 offset-md-1">
        <div class="card">
            <div class="card-header text-center">
                <h5 class="card-title" style="color: #555; font-size: 24px;">Detalles de la mascota</h5>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6 text-center">
                        <img class="card-img-top img-fluid mx-auto" src="{{ asset('import/img/mascotas/mascota'.$mascota->id_mascota.'.jpg') }}" alt="{{ $mascota->nombre }}" style="max-width: 400px;">
                    </div>
                    <div class="col-md-6 text-center" > 
                        <div class="row">
                            <div class="col-md-12">
                                <p><strong>ID_MASCOTA:</strong> {{ $mascota->id_mascota }}</p>
                                <p><strong>ID_ESTADO:</strong> {{ $mascota->id_estado }}</p>
                                <p><strong>Nombre:</strong> {{ $mascota->nombre }}</p>
                                <p><strong>Especie:</strong> {{ $mascota->especie }}</p>
                                <p><strong>Raza:</strong> {{ $mascota->raza }}</p>
                                <p><strong>Edad:</strong> {{ $mascota->edad }}</p>
                                <p><strong>Género:</strong> {{ $mascota->genero }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
