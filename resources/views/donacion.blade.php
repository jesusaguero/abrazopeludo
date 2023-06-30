@extends('layouts.app')
@section('content')
    
    <!-- SECCIÓN DE DONACIÓN -->
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

    <!-- SECCIÓN DE DONACIÓN -->
@endsection
