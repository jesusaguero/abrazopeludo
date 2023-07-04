@extends('layouts.app')
@section('content')
    
    <!-- SECCIÓN DE DONACIÓN -->
    <div class="container-fluid">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5 text-center">
                    <img src="import/img/mascotas/dog-7.jpg" alt="Imagen de donación" class="img-fluid">
                </div>
                @auth
                <div class="col-lg-7 py-5 py-lg-0 px-3 px-lg-5">
                    <h1 class="display-4 mb-4">Haz una donación aquí</h1>
                    <p>Gracias por tu apoyo económico. Tu contribución es fundamental para continuar con nuestra labor.</p>
                    <form id="donacionForm" action="{{ route('donaciones.store') }}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="nombre">Nombres:</label>
                            <input type="text" class="form-control" id="nombre" placeholder="{{ Auth::user()->name }}" value="{{ Auth::user()->id_usuario }}" disabled>
                        </div>
                        <div class="form-group">
                            <label for="medio">Medio de pago:</label>
                            <select class="form-control" id="medio" required>
                                <option value="">Ingrese su medio de pago</option>
                                <option value="YAPE">Yape</option>
                                <option value="TARJETA">Plin</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="monto">Monto:</label>
                            <input type="text" class="form-control" id="monto" name="monto" placeholder="Ingrese el monto" required>
                        </div>
                        <button type="submit" class="btn btn-primary" id="submitBtn">Enviar</button>
                    </form>
                </div>
                @endauth
            </div>
        </div>
    </div>

    <div id="messageBox" class="overlay" style="display: none;">
        <div class="message-box">
            <h2>DONACIÓN EXITOSA!</h2>
            <img src="import/img/mascotas/don.jpg" alt="Imagen de agradecimiento" class="img-fluid mb-4">
            <p class="mb-4">Tu donación es muy valiosa y nos ayuda a seguir haciendo una diferencia en la vida de los demás. Estamos sumamente agradecidos por tu apoyo y compromiso con nuestra causa.</p>
            <a href="adopta" class="btn btn-primary" id="resumenBtn">Volver a donación</a>
        </div>
    </div>

    <script>
        window.addEventListener('DOMContentLoaded', function() {
            var donacionForm = document.getElementById('donacionForm');
            var messageBox = document.getElementById('messageBox');
            var resumenButton = document.getElementById('resumenBtn');

            donacionForm.addEventListener('submit', function(e) {
                e.preventDefault();

                // Mostrar el mensaje de agradecimiento
                messageBox.style.display = 'flex';

                // Redireccionar al resumen de solicitud
                resumenButton.href = window.location.href;

                // Redireccionar después de 10 segundos
                setTimeout(function() {
                    window.location.href = resumenButton.href;
                }, 20000);

                // Enviar el formulario de forma normal
                donacionForm.submit();
            });
        });
    </script>


    <!-- SECCIÓN DE DONACIÓN -->
@endsection

