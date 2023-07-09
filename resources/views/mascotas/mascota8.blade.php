@extends('layouts.app1')
@section('content')
    <!-- Contenido principal -->
    <div class="container my-5">
        <div class="row">
            <div class="col-lg-6">
                <img src="{{ asset('import/img/mascotas/mascota'.$mascota->id_mascota.'.jpg') }}" alt="Imagen de la mascota" class="img-fluid">
            </div>
            <div class="col-lg-6">
                <h2>Descripción de la mascota</h2>
                <p>¡Hola, mi nombre es {{ $mascota->nombre }}!</p>
                <p>Soy una gatita dulce y tranquila en busca de un hogar sereno. Disfruto de los momentos de relajación y las caricias suaves. Si me adoptas, seré tu compañera fiel y te llenaré de ternura. ¿Quieres compartir tu vida conmigo?</p>
                <p>Sexo: Hembra</p>
                <p>Tamaño: Pequeño</p>
                <p>raza: {{ $mascota->raza }}</p>
                <p>Edad: {{ $mascota->edad }} años</p>
                <a href="{{ route('mascotas.solicitudadopcion') }}" class="btn btn-primary">Solicitar Adopción</a>
            </div>
        </div>
    </div>
@endsection