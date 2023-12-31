@extends('layouts.app1')
@section('content')
<!-- SECCIÓN DE CARRUSEL -->
<div class="container-fluid p-0">
        <div id="header-carousel" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="import/img/carousel-1.jpg" alt="Image" preload="auto" loading="lazy">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h1 class="display-3 text-white mb-3">En Perú hay más de 6 MILLONES de mascotas sin hogar</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<!-- SECCIÓN DE CARRUSEL -->

<!-- SECCIÓN DE OBJETIVOS -->

    <div class="container-fluid bg-light pt-5">
        <div class="container py-5">
            <div class="d-flex flex-column text-center mb-5">
                <h1 class="display-4 m-0"><span class="text-primary">Nuestro</span> Objetivo</h1>
            </div>
            <div class="row pb-3">
                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="d-flex flex-column text-center bg-white mb-2 p-3 p-sm-5">
                        <h3 class="flaticon-house display-3 font-weight-normal text-secondary mb-3"></h3>
                        <h3 class="mb-3">Brindar refugio y alojamiento</h3>
                        <p>Nuestro objetivo principal es ofrecer un entorno seguro, limpio y cómodo para las mascotas.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="d-flex flex-column text-center bg-white mb-2 p-3 p-sm-5">
                        <h3 class="flaticon-food display-3 font-weight-normal text-secondary mb-3"></h3>
                        <h3 class="mb-3">Promover la adopción responsable</h3>
                        <p>Abrazo Peludo se esfuerza por encontrar hogares permanentes y responsables para las mascotas bajo su cuidado. Esto implica realizar procesos de adopción cuidadosos, que incluyan entrevistas, cuestionarios de evaluación y seguimiento posterior a la adopción, con el fin de asegurar que las mascotas sean colocados en entornos adecuados y seguros.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="d-flex flex-column text-center bg-white mb-2 p-3 p-sm-5">
                        <h3 class="flaticon-grooming display-3 font-weight-normal text-secondary mb-3"></h3>
                        <h3 class="mb-3">Brindar atención y cuidado de calidad</h3>
                        <p>En Abrazo Peludo tenemos como objetivo proporcionar atención veterinaria básica y necesaria para las mascotas bajo nuestro cuidado.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="d-flex flex-column text-center bg-white mb-2 p-3 p-sm-5">
                        <h3 class="flaticon-cat display-3 font-weight-normal text-secondary mb-3"></h3>
                        <h3 class="mb-3">Fomentar la socialización y el bienestar animal</h3>
                        <p>En Abrazo Peludo nos esforzamos por garantizar el bienestar emocional y físico de los animales, proporcionándoles oportunidades de socialización y estimulación. </p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="d-flex flex-column text-center bg-white mb-2 p-3 p-sm-5">
                        <h3 class="flaticon-dog display-3 font-weight-normal text-secondary mb-3"></h3>
                        <h3 class="mb-3">Educar sobre el cuidado de mascotas</h3>
                        <p>Tenemos como objetivo educar a la comunidad sobre la responsabilidad y el cuidado adecuado de las mascotas. Esto implica proporcionar información sobre nutrición, higiene, entrenamiento y necesidades específicas de cada especie, con el fin de promover la tenencia responsable de animales.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="d-flex flex-column text-center bg-white mb-2 p-3 p-sm-5">
                        <h3 class="flaticon-vaccine display-3 font-weight-normal text-secondary mb-3"></h3>
                        <h3 class="mb-3">Colaborar con la comunidad</h3>
                        <p>Contaremos con una sección de foros con el objetivo de trabajar en conjunto para abordar el problema del abandono y la falta de hogar de las mascotas, promoviendo iniciativas de esterilización, programas de adopción y concienciación pública.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
<!-- SECCIÓN DE OBJETIVOS -->

<!-- SECCIÓN DE TESTIMONIOS -->
    <div class="container-fluid bg-light my-5 p-0 py-5">
    <div class="container p-0 py-5">
        <div class="d-flex flex-column text-center mb-5">
            <h1 class="display-4 m-0">Empresas<span class="text-primary"> Aliadas</span></h1>
        </div>
        <div class="d-flex flex-row">
            <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="import/img/pet3.jpg" alt="Card image cap">
                <div class="card-body">
                    <p class="card-text">En Royal Canin, llevamos desde 1968 trabajando para que la nutrición sea la principal medicina de gatos y perros. Esta es nuestra forma de hacer "a better world for pets".</p>
                </div>
            </div>
            <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="import/img/pet2.jpg" alt="Card image cap">
                <div class="card-body">
                    <p class="card-text">En Eukanuba somos más que una empresa que solo vende comida para mascotas, nos preocupamos por los minerales y los nutrientes que contienen nuestros productos.</p>
                </div>
            </div>
            <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="import/img/pet1.jpg" alt="Card image cap">
                <div class="card-body">
                    <p class="card-text">En Purina somos una compañía dedicada a enriquecer la vida de las mascotas y sus dueños.</p>
                </div>
            </div>
            <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="import/img/pet.jpg" alt="Card image cap">
                <div class="card-body">
                    <p class="card-text">En Ricocan con nuestros más de 50 años de experiencia en el rubro nos han convertido en los líderes de la categoría, trayendo innovación y desarrollo, soportado en nuestro talento humano y tecnología de última generación.</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- SECCIÓN DE TESTIMONIOS -->
@endsection