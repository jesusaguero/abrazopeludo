@extends('layouts.app1')
@section('content')
<body>
    <div class="container">
        <div class="row mt-5">
            <div class="col-3">
                <a href="../adopta" class="btn btn-lg btn-primary px-3 d-none d-lg-block">Volver a Adopta</a>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h2 class="card-title">Resumen de la Solicitud de Adopción</h2>

                        @if($solicitud)
                            <p class="card-text">Nombres: {{ $solicitud['nombres'] }}</p>
                            <p class="card-text">Apellidos: {{ $solicitud['apellidos'] }}</p>
                            <p class="card-text">Teléfono: {{ $solicitud['telefono'] }}</p>
                            <p class="card-text">DNI: {{ $solicitud['dni'] }}</p>
                            <p class="card-text">Correo electrónico: {{ $solicitud['correo'] }}</p>
                            <p class="card-text">Experiencia con mascotas: {{ $solicitud['experiencia'] }}</p>

                            <a href="{{ route('descargar-resumen') }}" class="btn btn-primary float-end">Descargar Resumen</a>
                        @else
                            <p class="card-text">No hay datos de solicitud disponibles.</p>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection