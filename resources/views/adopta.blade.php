@extends('layouts.app')
@section('content')

<!-- Sección de Servicios -->
<div class="container-fluid bg-light pt-5">
    <div class="container py-5">
        <div class="d-flex flex-column text-center mb-5">
            <h1 class="display-4 m-0"><span class="text-primary">Nuestros</span> engreidos</h1>
        </div>
        <div class="row pb-3">
            <div class="col-md-6 col-lg-4 mb-4">
                <div class="card text-center" style="width: 18rem;">
                    <img class="card-img-top img-fluid" src="import/img/mascotas/dog-1.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Rocky</h5>
                        <p class="card-text"> Rocky es un perro valiente y enérgico. Le encanta correr y jugar en el parque. Es muy leal y siempre está dispuesto a proteger a su familia.</p>
                        <a href="{{ route('mascotas.mascota1') }}#descripcion-rocky" class="btn btn-primary">ADOPTAR</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 mb-4">
                <div class="card text-center" style="width: 18rem;">
                    <img class="card-img-top img-fluid" src="import/img/mascotas/dog-2.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Luna</h5>
                        <p class="card-text">Luna es una perrita cariñosa y juguetona. Le encanta recibir mimos y jugar con su pelota favorita. Es muy sociable y se lleva bien con otros perros.</p>
                        <a href="{{ route('mascotas.mascota2') }}#descripcion-luna" class="btn btn-primary">ADOPTAR</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 mb-4">
                <div class="card text-center" style="width: 18rem;">
                    <img class="card-img-top img-fluid" src="import/img/mascotas/dog-3.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Max</h5>
                        <p class="card-text">Max es un perro muy inteligente y obediente. Le encanta aprender nuevos trucos y realizar actividades al aire libre. Es un compañero leal y protector.</p>
                        <a href="{{ route('mascotas.mascota3') }}#descripcion-max" class="btn btn-primary">ADOPTAR</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 mb-4">
                <div class="card text-center" style="width: 18rem;">
                    <img class="card-img-top img-fluid" src="import/img/mascotas/dog-4.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Bella</h5>
                        <p class="card-text">Bella es una perrita tierna y juguetona. Siempre está lista para recibir caricias y dar lamidas de amor. Le gusta pasear y explorar nuevos lugares.</p>
                        <a href="{{ route('mascotas.mascota4') }}#descripcion-bella" class="btn btn-primary">ADOPTAR</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 mb-4">
                <div class="card text-center" style="width: 18rem;">
                    <img class="card-img-top img-fluid" src="import/img/mascotas/dog-5.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Duke</h5>
                        <p class="card-text">Duke es un perro atlético y enérgico. Le encanta correr largas distancias y jugar al aire libre. Es muy amigable con las personas y disfruta de la compañía.</p>
                        <a href="{{ route('mascotas.mascota5') }}#descripcion-duque" class="btn btn-primary">ADOPTAR</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 mb-4">
                <div class="card text-center" style="width: 18rem;">
                    <img class="card-img-top img-fluid" src="import/img/mascotas/dog-6.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Coco</h5>
                        <p class="card-text"> Coco es una perrita pequeña y adorable. Aunque es tímida al principio, se vuelve cariñosa una vez que se siente segura. Le gusta descansar en el regazo de sus dueños.</p>
                        <a href="{{ route('mascotas.mascota6') }}#descripcion-coco" class="btn btn-primary">ADOPTAR</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 mb-4">
                <div class="card text-center" style="width: 18rem;">
                    <img class="card-img-top img-fluid" src="import/img/mascotas/cat-1.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Simba</h5>
                        <p class="card-text">Simba es un gato aventurero y curioso. Siempre está explorando nuevos rincones y persiguiendo juguetes por toda la casa. Es cariñoso y le encanta que le acaricien.</p>
                        <a href="{{ route('mascotas.mascota7') }}#descripcion-simba" class="btn btn-primary">ADOPTAR</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 mb-4">
                <div class="card text-center" style="width: 18rem;">
                    <img class="card-img-top img-fluid" src="import/img/mascotas/cat-3.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Vene</h5>
                        <p class="card-text">Vene es una gatita elegante y tranquila. Disfruta de largas siestas al sol y de jugar con pelotas de estambre. Es muy independiente, pero también le gusta recibir mimos.</p>
                        <a href="{{ route('mascotas.mascota8') }}#descripcion-vene" class="btn btn-primary">ADOPTAR</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 mb-4">
                <div class="card text-center" style="width: 18rem;">
                    <img class="card-img-top img-fluid" src="import/img/mascotas/cat-5.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Oliver</h5>
                        <p class="card-text">Oliver es un gato inteligente y juguetón. Le gusta resolver acertijos y cazar juguetes interactivos. Es cariñoso y siempre está buscando atención y caricias.</p>
                        <a href="{{ route('mascotas.mascota9') }}#descripcion-oliver" class="btn btn-primary">ADOPTAR</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 mb-4">
                <div class="card text-center" style="width: 18rem;">
                    <img class="card-img-top img-fluid"src="import/img/mascotas/cat-4.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Pichu</h5>
                        <p class="card-text">Pichu es una gatita tímida y dulce. Le gusta pasar tiempo en lugares tranquilos y acogedores. Una vez que toma confianza, se convierte en una compañera leal.</p>
                        <a href="{{ route('mascotas.mascota10') }}#descripcion-pichu" class="btn btn-primary">ADOPTAR</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 mb-4">
                <div class="card text-center" style="width: 18rem;">
                    <img class="card-img-top img-fluid"src="import/img/mascotas/cat-6.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Filomena</h5>
                        <p class="card-text">Filomena es un gato atlético y aventurero. Le encanta trepar a los árboles y explorar su entorno. Es muy curioso y siempre está en busca de nuevas experiencias.</p>
                        <a href="{{ route('mascotas.mascota11') }}#descripcion-filomena" class="btn btn-primary">ADOPTAR</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 mb-4">
                <div class="card text-center" style="width: 18rem;">
                    <img class="card-img-top img-fluid" src="import/img/mascotas/cat-2.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Chloe</h5>
                        <p class="card-text">Chloe es una gata cariñosa y juguetona. Le gusta jugar con pelotas y perseguir plumas. Es sociable y se lleva bien con otros animales de compañía.</p>
                        <a href="{{ route('mascotas.mascota12') }}#descripcion-chloe" class="btn btn-primary">ADOPTAR</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
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
                        <img class="img-fluid" src="import/img/testimonial-1.jpg" style="width: 80px; height: 80px;" alt="">
                        <div class="ml-3">
                            <h5>Juan Castañeda</h5>
                            <i>Docente</i>
                        </div>
                    </div>
                    <p class="m-0">Creo firmemente en la adopción de mascotas. He adoptado dos perros y ha sido una experiencia increíble. Estas criaturas merecen una segunda oportunidad y pueden brindar tanto amor y compañía en nuestras vidas</p>
                </div>
                <div class="bg-light mx-3 p-4">
                    <div class="d-flex align-items-end mb-3 mt-n4 ml-n4">
                        <img class="img-fluid" src="import/img/testimonial-2.jpg" style="width: 80px; height: 80px;" alt="">
                        <div class="ml-3">
                            <h5>Carlos Arango</h5>
                            <i>Estudiante</i>
                        </div>
                    </div>
                    <p class="m-0">La adopción de mascotas es una excelente opción. Adopté un gato hace un par de años y ha sido la mejor decisión que he tomado. No solo le di un hogar a un animalito necesitado, sino que también encontré un compañero fiel y cariñoso.</p>
                </div>
                <div class="bg-light mx-3 p-4">
                    <div class="d-flex align-items-end mb-3 mt-n4 ml-n4">
                        <img class="img-fluid" src="import/img/testimonial-3.jpg" style="width: 80px; height: 80px;" alt="">
                        <div class="ml-3">
                            <h5>Roberto Medina</h5>
                            <i>Ingeniero</i>
                        </div>
                    </div>
                    <p class="m-0">La adopción de mascotas es algo que todos deberíamos considerar. Hay tantos animales abandonados que necesitan un hogar. Adopté un perro hace cinco años y ha sido una experiencia gratificante ver cómo ha prosperado y se ha convertido en parte de nuestra familia</p>
                </div>
                <div class="bg-light mx-3 p-4">
                    <div class="d-flex align-items-end mb-3 mt-n4 ml-n4">
                        <img class="img-fluid" src="import/img/testimonial-4.jpg" style="width: 80px; height: 80px;" alt="">
                        <div class="ml-3">
                            <h5>Andres Bellido</h5>
                            <i>Futbolista</i>
                        </div>
                    </div>
                    <p class="m-0">La adopción de mascotas es una responsabilidad que todos deberíamos asumir. Adopté un conejo de un refugio y ha sido un compañero maravilloso. Es increíble ver cómo estos animales pueden traer tanta alegría a nuestras vidas.</p>
                </div>
            </div>
        </div>
    </div>
<!-- Sección de Testimonios -->
@endsection