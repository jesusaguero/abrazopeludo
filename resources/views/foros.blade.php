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
                    <a href="nosotros" class="nav-item nav-link">Nosotros</a>
                    <a href="adopta" class="nav-item nav-link">Adopta</a>
                    <a href="donacion" class="nav-item nav-link">Donación</a>
                    <a href="compra" class="nav-item nav-link">Compra</a>
                    <a href="foros" class="nav-item nav-link active">Foros</a>
                    <a href="consultas" class="nav-item nav-link">Consultas</a>
                </div>
                <a href="" class="btn btn-lg btn-primary px-3 d-none d-lg-block">Ingresa</a>
            </div>
        </nav>
    </div>
    <!-- Sección Menu principal -->


<!-- SECCIÓN DE FOROS -->
    <div class="container pt-5">
        <div class="d-flex flex-column text-center mb-5 pt-5">
            <h4 class="text-secondary mb-3">AbrazoPeludo Blog</h4>
            <h1 class="display-4 m-0"><span class="text-primary">Conoce más</span> de nuestros engreídos</h1>
        </div>
        <div class="row pb-3">
            <div class="col-lg-4 mb-4">
                <div class="card border-0 mb-2">
                    <img class="card-img-top" src="import/img/blog-1.jpg" alt="">
                    <div class="card-body bg-light p-4">
                        <h4 class="card-title text-truncate">Ben encuentra su hogar</h4>
                        <div class="d-flex mb-3">
                            <small class="mr-2"><i class="fa fa-user text-muted"></i>  Jesus Agüero</small>
                        </div>
                        <p>Después de meses en un refugio, Ben, un perro de raza mixta, finalmente encontró su hogar para siempre. Ahora, disfruta de largos paseos y de una familia amorosa que le brinda todo el cariño que se merece.</p>
                        <a class="font-weight-bold" >Historias que nos dan vida.</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 mb-4">
                <div class="card border-0 mb-2">
                    <img class="card-img-top" src="import/img/blog-2.jpg" alt="">
                    <div class="card-body bg-light p-4">
                        <h4 class="card-title text-truncate">Una segunda oportunidad</h4>
                        <div class="d-flex mb-3">
                            <small class="mr-2"><i class="fa fa-user text-muted"></i>  Bruno Chigne</small>
                        </div>
                        <p>Luna, una hermosa gata negra, fue adoptada recientemente por una pareja. Después de una breve adaptación, Luna ha demostrado ser una compañera leal y juguetona, llenando de alegría la vida de sus nuevos dueños.</p>
                        <a class="font-weight-bold" >Historias que nos dan vida.</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 mb-4">
                <div class="card border-0 mb-2">
                    <img class="card-img-top" src="import/img/blog-3.jpg" alt="">
                    <div class="card-body bg-light p-4">
                        <h4 class="card-title text-truncate">Rescate exitoso</h4>
                        <div class="d-flex mb-3">
                            <small class="mr-2"><i class="fa fa-user text-muted"></i> Edilson Huaman</small>
                        </div>
                        <p>Toby, un encantador perro de raza mixta, fue rescatado de la calle y ahora tiene una nueva familia. Su historia de superación y su energía inagotable han cautivado a sus adoptantes, quienes no podrían estar más felices.</p>
                        <a class="font-weight-bold" >Historias que nos dan vida.</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 mb-4">
                <div class="card border-0 mb-2">
                    <img class="card-img-top" src="import/img/blog-4.jpg" alt="">
                    <div class="card-body bg-light p-4">
                        <h4 class="card-title text-truncate">La dulce historia</h4>
                        <div class="d-flex mb-3">
                            <small class="mr-2"><i class="fa fa-user text-muted"></i> Jesus Agüero </small>
                        </div>
                        <p>Bella, una perrita abandonada, ha sido adoptada por una niña de ocho años. Desde el primer momento, han sido inseparables, formando un vínculo inquebrantable. Ahora, Bella es parte integral de la vida de esta valiente niña.</p>
                        <a class="font-weight-bold" >Historias que nos dan vida.</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 mb-4">
                <div class="card border-0 mb-2">
                    <img class="card-img-top" src="import/img/blog-5.jpg" alt="">
                    <div class="card-body bg-light p-4">
                        <h4 class="card-title text-truncate">Una nueva vida</h4>
                        <div class="d-flex mb-3">
                            <small class="mr-2"><i class="fa fa-user text-muted"></i> Bruno Chigne</small>
                        </div>
                        <p>Max, un perro de raza Labrador, fue encontrado vagando solo en las calles. Afortunadamente, un amante de los animales decidió adoptarlo. Ahora, Max disfruta de un hogar cálido y seguro, retribuyendo el amor con su lealtad incondicional.</p>
                        <a class="font-weight-bold" >Historias que nos dan vida.</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 mb-4">
                <div class="card border-0 mb-2">
                    <img class="card-img-top" src="import/img/blog-6.jpg" alt="">
                    <div class="card-body bg-light p-4">
                        <h4 class="card-title text-truncate">Encanto felino</h4>
                        <div class="d-flex mb-3">
                            <small class="mr-2"><i class="fa fa-user text-muted"></i> Edilson Huaman</small>
                        </div>
                        <p>Oliver, un juguetón gatito atigrado, ha sido adoptado por una familia que siempre ha sido amante de los felinos. Su personalidad traviesa y sus ronroneos reconfortantes han conquistado el corazón de sus nuevos dueños.</p>
                        <a class="font-weight-bold" >Historias que nos dan vida.</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
<!-- SECCIÓN DE FOROS -->

@extends('layouts.barra')