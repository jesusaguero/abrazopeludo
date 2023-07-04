<!DOCTYPE html>
<html>
<head>
    <title>Solicitud Adopcion</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
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


    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('import/css/style.css') }}" rel="stylesheet">
    <link href="import/css/stylemessage.css" rel="stylesheet">
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
                    <a href="../home" class="nav-item nav-link">Inicio</a>
                    <a href="../nosotros" class="nav-item nav-link">Nosotros</a>
                    <a href="../adopta" class="nav-item nav-link active">Adopta</a>
                    <a href="../donacion" class="nav-item nav-link">Donación</a>
                    <a href="../shop" class="nav-item nav-link">Compra</a>
                    <a href="../foros" class="nav-item nav-link">Foros</a>
                    <a href="../consultas" class="nav-item nav-link">Consultas</a>
                </div>
                <a href="welcome" class="btn btn-lg btn-primary px-3 d-none d-lg-block">Ingresa</a>
            </div>
        </nav>
    </div>
    <!-- Navbar End -->


    <div class="container-fluid mt-5">
        <div class="row">
            <div class="col-md-4">
                <!-- Imagen a la izquierda -->
                <img src="{{ asset('import/img/mascotas/perro1.jpg') }}" class="img-fluid img-height" alt="Imagen 1" style="height: 100%;">
            </div>
            <div class="col-md-4">
                <!-- Formulario -->
                <div class="text-center">
                    <form id="solicitudForm" action="{{ route('procesar.formulario') }}" method="POST">
                        @csrf
                        <h2>FORMULARIO DE ADOPCIÓN DE MASCOTAS</h2>
                        <div class="form-group">
                            <label for="nombres">Nombres:</label>
                            <input type="text" class="form-control" id="nombres" name="nombres" required>
                        </div>


                        <div class="form-group">
                            <label for="apellidos">Apellidos:</label>
                            <input type="text" class="form-control" id="apellidos" name="apellidos" required>
                        </div>


                        <div class="form-group">
                            <label for="telefono">Teléfono:</label>
                            <input type="text" class="form-control" id="telefono" name="telefono" required>
                        </div>


                        <div class="form-group">
                            <label for="dni">DNI:</label>
                            <input type="text" class="form-control" id="dni" name="dni" required>
                        </div>


                        <div class="form-group">
                            <label for="correo">Correo electrónico:</label>
                            <input type="email" class="form-control" id="correo" name="correo" required>
                        </div>


                        <div class="form-group">
                            <label for="experiencia">Cuéntenos brevemente acerca de su experiencia con mascotas:</label>
                            <textarea class="form-control" id="experiencia" name="experiencia" required></textarea>
                        </div>


                        <button type="submit" class="btn btn-primary" id="submitBtn">ENVIAR</button>
                    </form>
                </div>
            </div>
            <div class="col-md-4">
                <!-- Imagen a la derecha -->
                <img src="{{ asset('import/img/mascotas/perro2.jpg') }}" class="img-fluid img-height" alt="Imagen 2" style="height: 100%;">
            </div>
        </div>
    </div>
    <div id="messageBox" class="overlay" style="display: none;">
        <div class="message-box">
            <img src="import/img/mascotas/dog-1.jpg" alt="Imagen de agradecimiento" class="img-fluid mb-4">
            <p class="mb-4">Gracias por enviar tu solicitud, pronto confirmaremos la situación de tu solicitud</p>
            <a href="#" class="btn btn-primary" id="resumenBtn">Ver Resumen</a>
        </div>
    </div>
    


   
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