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
                <p>Soy una perrita cariñosa y tranquila en busca de un hogar amoroso. Disfruto de los paseos suaves y de acurrucarme a tu lado. Si me adoptas, te brindaré compañía y lealtad incondicional. ¿Quieres ser mi familia?</p>
                <p>Sexo: Hembra</p>
                <p>Tamaño: Pequeño</p>
                <p>raza: {{ $mascota->raza }}</p>
                <p>Edad: {{ $mascota->edad }} años</p>
                <a href="{{ route('mascotas.solicitudadopcion') }}" class="btn btn-primary">Solicitar Adopción</a>
            </div>
        </div>
    </div>
@endsection