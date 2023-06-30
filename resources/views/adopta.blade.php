<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Abrazo Peludo</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">


    <!-- Favicon -->
    <link href="/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans&family=Nunito:wght@600;700;800&display=swap" rel="stylesheet"> 

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Flaticon Font -->
    <link href="import/lib/flaticon/font/flaticon.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="import/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="import/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- Customized Bootstrap Stylesheet -->
    <link href="import/css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Topbar Start -->
    <div class="container-fluid">
        <div class="row py-3 px-lg-5">
            <div class="col-lg-4">
                <a href="" class="navbar-brand d-none d-lg-block">
                    <h1 class="m-0 display-5 text-capitalize"><span class="text-primary">Abrazo</span>Peludo</h1>
                </a>
            </div>
        </div>
    </div>
    <!-- Topbar End -->

    <!-- Navbar Start -->
    <div class="container-fluid p-0">
        <nav class="navbar navbar-expand-lg bg-dark navbar-dark py-3 py-lg-0 px-lg-5">
            <a href="" class="navbar-brand d-block d-lg-none">
                <h1 class="m-0 display-5 text-capitalize font-italic text-white"><span class="text-primary">Abrazo</span>Peludo</h1>
            </a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-between px-3" id="navbarCollapse">
                <div class="navbar-nav mr-auto py-0">
                    <a href="inicio" class="nav-item nav-link">Inicio</a>
                    <a href="nosotros" class="nav-item nav-link">Nosotros</a>
                    <a href="adopta" class="nav-item nav-link active">Adopta</a>
                    <a href="donacion" class="nav-item nav-link">Donación</a>
                    <a href="compra" class="nav-item nav-link">Compra</a>
                    <a href="foros" class="nav-item nav-link">Foros</a>
                    <a href="consultas" class="nav-item nav-link">Consultas</a>
                </div>
                <a href="" class="btn btn-lg btn-primary px-3 d-none d-lg-block">Ingresa</a>
            </div>
        </nav>
    </div>
    <!-- Navbar End -->



<!-- Services Start -->
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
                        <a href="{{ route('mascotas.index') }}#descripcion-rocky" class="btn btn-primary">ADOPTAR</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 mb-4">
                <div class="card text-ce    nter" style="width: 18rem;">
                    <img class="card-img-top img-fluid" src="import/img/mascotas/dog-2.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Luna</h5>
                        <p class="card-text">Luna es una perrita cariñosa y juguetona. Le encanta recibir mimos y jugar con su pelota favorita. Es muy sociable y se lleva bien con otros perros.</p>
                        <a href="{{ route('mascotas.index') }}#descripcion-luna" class="btn btn-primary">ADOPTAR</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 mb-4">
                <div class="card text-center" style="width: 18rem;">
                    <img class="card-img-top img-fluid" src="import/img/mascotas/dog-3.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Max</h5>
                        <p class="card-text">Max es un perro muy inteligente y obediente. Le encanta aprender nuevos trucos y realizar actividades al aire libre. Es un compañero leal y protector.</p>
                        <a href="{{ route('mascotas.index') }}#descripcion-max" class="btn btn-primary">ADOPTAR</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 mb-4">
                <div class="card text-center" style="width: 18rem;">
                    <img class="card-img-top img-fluid" src="import/img/mascotas/dog-4.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Bella</h5>
                        <p class="card-text">Bella es una perrita tierna y juguetona. Siempre está lista para recibir caricias y dar lamidas de amor. Le gusta pasear y explorar nuevos lugares.</p>
                        <a href="{{ route('mascotas.index') }}#descripcion-bella" class="btn btn-primary">ADOPTAR</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 mb-4">
                <div class="card text-center" style="width: 18rem;">
                    <img class="card-img-top img-fluid" src="import/img/mascotas/dog-5.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Duke</h5>
                        <p class="card-text">Duke es un perro atlético y enérgico. Le encanta correr largas distancias y jugar al aire libre. Es muy amigable con las personas y disfruta de la compañía.</p>
                        <a href="{{ route('mascotas.index') }}#descripcion-duque" class="btn btn-primary">ADOPTAR</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 mb-4">
                <div class="card text-center" style="width: 18rem;">
                    <img class="card-img-top img-fluid" src="import/img/mascotas/dog-6.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Coco</h5>
                        <p class="card-text"> Coco es una perrita pequeña y adorable. Aunque es tímida al principio, se vuelve cariñosa una vez que se siente segura. Le gusta descansar en el regazo de sus dueños.</p>
                        <a href="{{ route('mascotas.index') }}#descripcion-coco" class="btn btn-primary">ADOPTAR</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 mb-4">
                <div class="card text-center" style="width: 18rem;">
                    <img class="card-img-top img-fluid" src="import/img/mascotas/cat-1.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Simba</h5>
                        <p class="card-text">Simba es un gato aventurero y curioso. Siempre está explorando nuevos rincones y persiguiendo juguetes por toda la casa. Es cariñoso y le encanta que le acaricien.</p>
                        <a href="{{ route('mascotas.index') }}#descripcion-simba" class="btn btn-primary">ADOPTAR</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 mb-4">
                <div class="card text-center" style="width: 18rem;">
                    <img class="card-img-top img-fluid" src="import/img/mascotas/cat-3.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Vene</h5>
                        <p class="card-text">Vene es una gatita elegante y tranquila. Disfruta de largas siestas al sol y de jugar con pelotas de estambre. Es muy independiente, pero también le gusta recibir mimos.</p>
                        <a href="{{ route('mascotas.index') }}#descripcion-vene" class="btn btn-primary">ADOPTAR</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 mb-4">
                <div class="card text-center" style="width: 18rem;">
                    <img class="card-img-top img-fluid" src="import/img/mascotas/cat-5.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Oliver</h5>
                        <p class="card-text">Oliver es un gato inteligente y juguetón. Le gusta resolver acertijos y cazar juguetes interactivos. Es cariñoso y siempre está buscando atención y caricias.</p>
                        <a href="{{ route('mascotas.index') }}#descripcion-oliver" class="btn btn-primary">ADOPTAR</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 mb-4">
                <div class="card text-center" style="width: 18rem;">
                    <img class="card-img-top img-fluid"src="import/img/mascotas/cat-4.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Pichu</h5>
                        <p class="card-text">Pichu es una gatita tímida y dulce. Le gusta pasar tiempo en lugares tranquilos y acogedores. Una vez que toma confianza, se convierte en una compañera leal.</p>
                        <a href="{{ route('mascotas.index') }}#descripcion-pichu" class="btn btn-primary">ADOPTAR</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 mb-4">
                <div class="card text-center" style="width: 18rem;">
                    <img class="card-img-top img-fluid"src="import/img/mascotas/cat-6.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Filomena</h5>
                        <p class="card-text">Filomena es un gato atlético y aventurero. Le encanta trepar a los árboles y explorar su entorno. Es muy curioso y siempre está en busca de nuevas experiencias.</p>
                        <a href="{{ route('mascotas.index') }}#descripcion-filomena" class="btn btn-primary">ADOPTAR</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 mb-4">
                <div class="card text-center" style="width: 18rem;">
                    <img class="card-img-top img-fluid" src="import/img/mascotas/cat-2.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Chloe</h5>
                        <p class="card-text">Chloe es una gata cariñosa y juguetona. Le gusta jugar con pelotas y perseguir plumas. Es sociable y se lleva bien con otros animales de compañía.</p>
                        <a href="{{ route('mascotas.index') }}#descripcion-chloe" class="btn btn-primary">ADOPTAR</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Services End -->



    <!-- Testimonial Start -->
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
    <!-- Testimonial End -->


    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-white mt-5 py-5 px-sm-3 px-md-5">
        <div class="row pt-5">
            <div class="col-lg-4 col-md-12 mb-5">
                <h1 class="mb-3 display-5 text-capitalize text-white"><span class="text-primary">Abrazo</span>Peludo</h1>
                <p class="m-0">Más que un albergue somos un hogar | Nuestro objetivo como albergue es el poder encontrar un hogar responsable a las mascotas/p>
            </div>
            <div class="col-lg-8 col-md-12">
                <div class="row">
                    <div class="col-md-4 mb-5">
                        <h5 class="text-primary mb-4">Nos Ubicamos</h5>
                        <p><i class="fa fa-map-marker-alt mr-2"></i>Av. Cascanueces, Sta Anita</p>
                        <p><i class="fa fa-phone-alt mr-2"></i>+51 989 679 624</p>
                        <p><i class="fa fa-envelope mr-2"></i>info@abrazopeludo.com</p>
                        <div class="d-flex justify-content-start mt-4">
                            <a class="btn btn-outline-light rounded-circle text-center mr-2 px-0" style="width: 36px; height: 36px;" href="https://twitter.com/tecsup_pe"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-outline-light rounded-circle text-center mr-2 px-0" style="width: 36px; height: 36px;" href="https://www.facebook.com/tecsup/"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-outline-light rounded-circle text-center mr-2 px-0" style="width: 36px; height: 36px;" href="https://www.linkedin.com/school/tecsup/"><i class="fab fa-linkedin-in"></i></a>
                            <a class="btn btn-outline-light rounded-circle text-center mr-2 px-0" style="width: 36px; height: 36px;" href="https://www.instagram.com/vive_tecsup/"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                    <div class="col-md-4 mb-5">
                        <h5 class="text-primary mb-4">Conoce más</h5>
                        <div class="d-flex flex-column justify-content-start">
                            <a class="text-white mb-2" href="inicio"><i class="fa fa-angle-right mr-2"></i>Inicio</a>
                            <a class="text-white mb-2" href="nosotros"><i class="fa fa-angle-right mr-2"></i>Nosotros</a>
                            <a class="text-white mb-2" href="adopta"><i class="fa fa-angle-right mr-2"></i>Adopta</a>
                            <a class="text-white mb-2" href="compra"><i class="fa fa-angle-right mr-2"></i>Compra</a>
                            <a class="text-white" href="consultas"><i class="fa fa-angle-right mr-2"></i>Consultas</a>
                        </div>
                    </div>
                    <div class="col-md-4 mb-5">
                        <h5 class="text-primary mb-4">Noticias</h5>
                        <form action="">
                            <div class="form-group">
                                <input type="text" class="form-control border-0" placeholder="Tu nombre" required="required" />
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control border-0" placeholder="Tu correo" required="required" />
                            </div>
                            <div>
                                <button class="btn btn-lg btn-primary btn-block border-0" type="submit">Envíar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid text-white py-4 px-sm-3 px-md-5" style="background: #111111;">
        <div class="row">
            <div class="col-md-6 text-center text-md-left mb-3 mb-md-0 ">
                <p class="m-0 text-white">
                    &copy; <a class="text-white font-weight-bold" href="#">Abrazo Peludo</a>. Todos los derechos reservados. Designed by Tecsup 2023
                </p>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary back-to-top"><i class="fa fa-angle-double-up"></i></a>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="import/lib/easing/easing.min.js"></script>
    <script src="import/lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="import/lib/tempusdominus/js/moment.min.js"></script>
    <script src="import/lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="import/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="import/mail/jqBootstrapValidation.min.js"></script>
    <script src="import/mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="import/js/main.js"></script>
</body>

</html>