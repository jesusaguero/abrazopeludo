@extends('layouts.cabezera')

    <!-- Sección Menu principal -->
    <div class="container-fluid p-0">
        <nav class="navbar navbar-expand-lg bg-dark navbar-dark py-3 py-lg-0 px-lg-5">
            <a href="" class="navbar-brand d-block d-lg-none">
                <h1 class="m-0 display-5 text-capitalize font-italic text-white"><span class="text-primary">Abrazo</span>Peludo</h1>            </a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-between px-3" id="navbarCollapse">
                <div class="navbar-nav mr-auto py-0">
                    <a href="inicio" class="nav-item nav-link">Inicio</a>
                    <a href="nosotros" class="nav-item nav-link active">Nosotros</a>
                    <a href="adopta" class="nav-item nav-link">Adopta</a>
                    <a href="donacion" class="nav-item nav-link">Donación</a>
                    <a href="compra" class="nav-item nav-link">Compra</a>
                    <a href="foros" class="nav-item nav-link">Foros</a>
                    <a href="consultas" class="nav-item nav-link">Consultas</a>
                </div>
                <a href="" class="btn btn-lg btn-primary px-3 d-none d-lg-block">Ingresa</a>
            </div>
        </nav>
    </div>
    <!-- Sección Menu principal -->


    <!-- Sección Nosotros -->
    <div class="container py-5">
        <div class="row py-5">
            <div class="col-lg-7 pb-5 pb-lg-0 px-3 px-lg-5">
                <h1 class="display-4 mb-4"><span class="text-primary">Quiénes somos</span> & <span class="text-secondary">por qué existimos</span></h1>
                <h5 class="text-muted mb-3">Somos una asociación sin fines de lucro que busca construir un mundo mejor para las mascotas a través de iniciativas sostenibles.</h5>
                <ul class="list-inline">
                    <li><h5><i class="fa fa-check-double text-secondary mr-3"></i>Adopción responsable</h5></li>
                    <li><h5><i class="fa fa-check-double text-secondary mr-3"></i>Donaciones económicas</h5></li>
                    <li><h5><i class="fa fa-check-double text-secondary mr-3"></i>Comunidad activa</h5></li>
                </ul>
            </div>
            <div class="col-lg-5">
                <div class="row px-3">
                    <div class="col-12 p-0">
                        <img class="img-fluid w-100" src="import/img/about-1.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Sección Nosotros -->


    <!-- Sección Promocional -->
    <div class="container-fluid bg-light">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5">
                    <img class="img-fluid w-100" src="import/img/feature.png" alt="">
                </div>
                <div class="col-lg-7 py-5 py-lg-0 px-3 px-lg-5">
                    <h1 class="display-4 mb-4"><span class="text-primary">¿Porque amamos</span> a las mascotas?</h1>
                    <p class="mb-4">En Abrazo Peludo nosotros somos la voz de las mascotas, y siempre velamos por su bienestar, por lo que siempre los cuidamos las 24 hrs tratando de cumplir y atenderlos en sus necesidades</p>
                    <div class="row py-2">
                        <div class="col-6">
                            <div class="d-flex align-items-center mb-4">
                                <h1 class="flaticon-cat font-weight-normal text-secondary m-0 mr-3"></h1>
                                <h5 class="text-truncate m-0">Somos un equipo</h5>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="d-flex align-items-center mb-4">
                                <h1 class="flaticon-doctor font-weight-normal text-secondary m-0 mr-3"></h1>
                                <h5 class="text-truncate m-0">Atención 24 hrs</h5>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="d-flex align-items-center">
                                <h1 class="flaticon-care font-weight-normal text-secondary m-0 mr-3"></h1>
                                <h5 class="text-truncate m-0">Cuidado de calidad</h5>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="d-flex align-items-center">
                                <h1 class="flaticon-dog font-weight-normal text-secondary m-0 mr-3"></h1>
                                <h5 class="text-truncate m-0">Brindamos compañia</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Sección Promocional -->


    <!-- Sección Equipo-->
    <div class="container mt-5 pt-5 pb-3">
    <div class="d-flex flex-column text-center mb-5">
        <h1 class="display-3 m-0">Los humanos detrás de <span class="text-primary">Abrazo Peludo</span></h1>
    </div>
    <div class="row justify-content-center text-center">
        <div class="col-lg-3 col-md-6">
            <div class="team card position-relative overflow-hidden border-0 mb-4">
                <img class="card-img-top" src="import/img/team-1.jpg" alt="">
                <div class="card-body text-center p-0">
                    <div class="team-text d-flex flex-column justify-content-center bg-light">
                        <h5>Jesus Agüero</h5>
                        <i>Founder & CEO</i>
                    </div>
                    <div class="team-social d-flex align-items-center justify-content-center bg-dark">
                        <a class="btn btn-outline-primary rounded-circle text-center mr-2 px-0" style="width: 36px; height: 36px;" href="https://twitter.com/jesusaguerob"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-outline-primary rounded-circle text-center mr-2 px-0" style="width: 36px; height: 36px;" href="https://www.facebook.com/jesusaguerob/"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-outline-primary rounded-circle text-center mr-2 px-0" style="width: 36px; height: 36px;" href="https://www.linkedin.com/in/jesusaguerob/"><i class="fab fa-linkedin-in"></i></a>
                        <a class="btn btn-outline-primary rounded-circle text-center px-0" style="width: 36px; height: 36px;" href="https://www.instagram.com/jesusaguerob/"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <div class="team card position-relative overflow-hidden border-0 mb-4">
                <img class="card-img-top" src="import/img/team-2.jpg" alt="">
                <div class="card-body text-center p-0">
                    <div class="team-text d-flex flex-column justify-content-center bg-light">
                        <h5>Edilson Huaman</h5>
                        <i>Founder & CEO</i>
                    </div>
                    <div class="team-social d-flex align-items-center justify-content-center bg-dark">
                        <a class="btn btn-outline-primary rounded-circle text-center mr-2 px-0" style="width: 36px; height: 36px;" href="#"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-outline-primary rounded-circle text-center mr-2 px-0" style="width: 36px; height: 36px;" href="#"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-outline-primary rounded-circle text-center mr-2 px-0" style="width: 36px; height: 36px;" href="#"><i class="fab fa-linkedin-in"></i></a>
                        <a class="btn btn-outline-primary rounded-circle text-center px-0" style="width: 36px; height: 36px;" href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <div class="team card position-relative overflow-hidden border-0 mb-4">
                <img class="card-img-top" src="import/img/team-3.jpg" alt="">
                <div class="card-body text-center p-0">
                    <div class="team-text d-flex flex-column justify-content-center bg-light">
                        <h5>Bruno CHigne</h5>
                        <i>Founder & CEO</i>
                    </div>
                    <div class="team-social d-flex align-items-center justify-content-center bg-dark">
                        <a class="btn btn-outline-primary rounded-circle text-center mr-2 px-0" style="width: 36px; height: 36px;" href="#"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-outline-primary rounded-circle text-center mr-2 px-0" style="width: 36px; height: 36px;" href="#"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-outline-primary rounded-circle text-center mr-2 px-0" style="width: 36px; height: 36px;" href="#"><i class="fab fa-linkedin-in"></i></a>
                        <a class="btn btn-outline-primary rounded-circle text-center px-0" style="width: 36px; height: 36px;" href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

    <!-- Sección Equipo-->
    
@extends('layouts.barra')