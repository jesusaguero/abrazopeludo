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
                <form action="{{ route('donaciones.store') }}" method="post">
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
                    <button type="submit" class="btn btn-primary">Enviar</button>
                </form>
            </div>
            @endauth
        </div>
    </div>
</div>

    <!-- SECCIÓN DE DONACIÓN -->
@endsection
