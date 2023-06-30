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
                    <a href="compra" class="nav-item nav-link active">Compra</a>
                    <a href="foros" class="nav-item nav-link">Foros</a>
                    <a href="consultas" class="nav-item nav-link">Consultas</a>
                </div>
                <a href="" class="btn btn-lg btn-primary px-3 d-none d-lg-block">Ingresa</a>
            </div>
        </nav>
    </div>
    <!-- Sección Menu principal -->

@extends('layouts.barra')