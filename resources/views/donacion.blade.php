@extends('layouts.header')

    <!-- Nombre Web -->
    <div class="container-fluid">
        <div class="row py-3 px-lg-5">
            <div class="col-lg-4">
                <a href="" class="navbar-brand d-none d-lg-block">
                    <h1 class="m-0 display-5 text-capitalize"><span class="text-primary">Abrazo</span>Peludo</h1>
                </a>
            </div>
        </div>
    </div>
    <!-- Nombre Web -->
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
                    <a href="donacion" class="nav-item nav-link active">Donación</a>
                    <a href="compra" class="nav-item nav-link">Compra</a>
                    <a href="foros" class="nav-item nav-link">Foros</a>
                    <a href="consultas" class="nav-item nav-link">Consultas</a>
                </div>
                <a href="" class="btn btn-lg btn-primary px-3 d-none d-lg-block">Ingresa</a>
            </div>
        </nav>
    </div>
    <!-- Sección Menu principal -->

    <!-- Sección Donación -->
    <div class="container-fluid">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-5 text-center">
                <img src="import/img/mascotas/dog-7.jpg" alt="Imagen de donación" class="img-fluid">
            </div>
            <div class="col-lg-7 py-5 py-lg-0 px-3 px-lg-5">
                <h1 class="display-4 mb-4">Haz una donación aquí</h1>
                <p>Gracias por tu apoyo económico. Tu contribución es fundamental para continuar con nuestra labor.</p>
                <form>
                    <div class="form-group">
                        <label for="nombre">Nombre:</label>
                        <input type="text" class="form-control" id="nombre" placeholder="Ingrese su nombre" required>
                    </div>
                    <div class="form-group">
                        <label for="apellido">Apellido:</label>
                        <input type="text" class="form-control" id="apellido" placeholder="Ingrese su apellido" required>
                    </div>
                    <div class="form-group">
                        <label for="medioPago">Medio de pago:</label>
                        <select class="form-control" id="medioPago" required>
                            <option value="">Ingrese su medio de pago</option>
                            <option value="YAPE">Yape</option>
                            <option value="TARJETA">Tarjeta</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="monto">Monto:</label>
                        <input type="text" class="form-control" id="monto" placeholder="Ingrese el monto" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Enviar</button>
                </form>
            </div>
        </div>
    </div>
</div>


    <!-- Sección Donación -->

@extends('layouts.footer')
