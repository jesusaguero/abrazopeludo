@extends('layouts.app1')
@section('content')

<!-- Sección de Servicios -->
<div class="container-fluid bg-light pt-5">
    <div class="container py-5">
        <div class="d-flex flex-column text-center mb-5">
            <h1 class="display-4 m-0"><span class="text-primary">Nuestros</span> engreídos</h1>
        </div>
        <div class="row pb-3">
            @foreach ($mascotas as $mascota)
                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="card text-center" style="width: 18rem;">
                        <img class="card-img-top img-fluid" src="{{ asset('import/img/mascotas/mascota'.$mascota->id_mascota.'.jpg') }}" alt="{{ $mascota->nombre }}">
                        <div class="card-body">
                            <h3 class="card-title">{{ $mascota->nombre }}</h3>
                            <div class="rating">
                                <p class="stars">★★★★★</p>
                            </div>
                            <a href="{{ route('mascotas.mascota'.$mascota->id_mascota) }}#descripcion-{{ strtolower($mascota->nombre) }}" class="btn btn-primary">ADOPTAR</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
<!-- Sección de Servicios -->

<style>
.rating {
  display: flex;
  justify-content: center;
  align-items: center;
  font-size: 24px;
  color: orange;
}
</style>

<!-- Sección de Servicios -->



<!-- Sección de Testimonios -->
    <div class="container-fluid p-0 py-5">
        <div class="container p-0 pt-5">
            <div class="d-flex flex-column text-center mb-5">
                <h4 class="text-secondary mb-3">Testimonios de nuestros adoptantes</h4>
                <h1 class="display-4 m-0">Nuestros clientes <span class="text-primary">comparten su felicidad</span></h1>
            </div>
            <div class="owl-carousel testimonial-carousel">
                <div class="bg-light mx-3 p-4">
                    <div class="d-flex align-items-end mb-3 mt-n4 ml-n4">
                        <img class="img-fluid" src="import/img/testimonios/testimonial-1.jpg" style="width: 80px; height: 80px;" alt="">
                        <div class="ml-3">
                            <h5>Juan Castañeda</h5>
                            <i>Docente</i>
                        </div>
                    </div>
                    <p class="m-0">Creo firmemente en la adopción de mascotas. He adoptado dos perros y ha sido una experiencia increíble. Estas criaturas merecen una segunda oportunidad y pueden brindar tanto amor y compañía en nuestras vidas</p>
                </div>
                <div class="bg-light mx-3 p-4">
                    <div class="d-flex align-items-end mb-3 mt-n4 ml-n4">
                        <img class="img-fluid" src="import/img/testimonios/testimonial-2.jpg" style="width: 80px; height: 80px;" alt="">
                        <div class="ml-3">
                            <h5>Carlos Arango</h5>
                            <i>Estudiante</i>
                        </div>
                    </div>
                    <p class="m-0">La adopción de mascotas es una excelente opción. Adopté un gato hace un par de años y ha sido la mejor decisión que he tomado. No solo le di un hogar a un animalito necesitado, sino que también encontré un compañero fiel y cariñoso.</p>
                </div>
                <div class="bg-light mx-3 p-4">
                    <div class="d-flex align-items-end mb-3 mt-n4 ml-n4">
                        <img class="img-fluid" src="import/img/testimonios/testimonial-3.jpg" style="width: 80px; height: 80px;" alt="">
                        <div class="ml-3">
                            <h5>Roberto Medina</h5>
                            <i>Ingeniero</i>
                        </div>
                    </div>
                    <p class="m-0">La adopción de mascotas es algo que todos deberíamos considerar. Hay tantos animales abandonados que necesitan un hogar. Adopté un perro hace cinco años y ha sido una experiencia gratificante ver cómo ha prosperado y se ha convertido en parte de nuestra familia</p>
                </div>
            </div>
        </div>
    </div>
<!-- Sección de Testimonios -->
@endsection

@extends('layouts.app3')

@section('content')
<div class="row mt-3">
    <div class="col-md-6 offset-md-3">
        <div class="card">
            <div class="card-header text-center">
                <h5 class="card-title" style="color: #555; font-size: 24px;">Detalles de la mascota</h5>
            </div>
            <div class="card-body">
                <!-- Mostrar información de la mascota -->
                <p><strong>Nombre:</strong> {{ $mascota->nombre }}</p>
                <p><strong>Especie:</strong> {{ $mascota->especie }}</p>
                <p><strong>Raza:</strong> {{ $mascota->raza }}</p>
                <p><strong>Edad:</strong> {{ $mascota->edad }}</p>
                <p><strong>Género:</strong> {{ $mascota->genero }}</p>
                <!-- Agrega aquí la lógica condicional para mostrar los botones -->
                @if ($mascota->id_estado == 1)
                    <a href="{{ route('admin.adopciones.edit', $mascota->id_mascota) }}" class="btn btn-primary">Adoptar</a>
                    <button class="btn btn-success">Disponible</button>
                @elseif ($mascota->id_estado == 2)
                    <button class="btn btn-danger">Adoptado</button>
                    <a href="{{ route('admin.adopciones.edit', $mascota->id_mascota) }}" class="btn btn-primary">Editar</a>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection
