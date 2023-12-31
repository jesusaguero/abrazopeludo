@extends('layouts.app1')
@section('content')

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

@endsection