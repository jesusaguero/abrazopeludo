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
                <p>Soy un perro cariñoso y divertido en busca de un hogar amoroso. Me encanta jugar y recibir mimos. Si me adoptas, te aseguro que cada día será una fiesta de alegría y amor. ¿Quieres ser parte de mi vida?</p>
                <p>Sexo: Macho</p>
                <p>Tamaño: Pequeño</p>
                <p>raza: {{ $mascota->raza }}</p>
                <p>Edad: {{ $mascota->edad }} años</p>
                <a href="{{ route('mascotas.solicitudadopcion') }}" class="btn btn-primary">Solicitar Adopción</a>
            </div>
        </div>
    </div>
@endsection