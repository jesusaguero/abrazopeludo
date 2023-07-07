@extends('layouts.app3')

@section('content')
<div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
      <h1 class="display-4">¡Bienvenido {{ Auth::user()->name }}!</h1>
      <p class="lead">Por favor, seleccione la opción a la que desea dirigirse: donaciones, compras o solicitudes de adopción. ¡Gracias por tu labor en Abrazo Peludo!</p>
    </div>

    <div class="container">
      <div class="card-deck mb-3 text-center">
        <div class="card mb-4 box-shadow">
          <div class="card-header">
            <h4 class="my-0 font-weight-normal">Adopciones</h4>
          </div>
          <div class="card-body">
            <h1 class="card-title pricing-card-title">Al ingresar podrás: <small class="text-muted"></small></h1>
            <ul class="list-unstyled mt-3 mb-4">
              <li>Verificar las Adopciones</li>
              <li>Aceptar / Rechazar las Adopciones</li>
              <li>Agregar Mascotas</li>
            </ul>
            <a href="referencia_adopciones" class="btn btn-lg btn-block btn-primary">Ingresar</a>
          </div>
        </div>
        <div class="card mb-4 box-shadow">
          <div class="card-header">
            <h4 class="my-0 font-weight-normal">Compras Online</h4>
          </div>
          <div class="card-body">
            <h1 class="card-title pricing-card-title">Al ingresar podrás: <small class="text-muted"></small></h1>
            <ul class="list-unstyled mt-3 mb-4">
              <li>Verificar las compras</li>
              <li>Agregar Productos</li>
              <li>Eliminar Productos</li>
              <li>Actualizar Productos</li>
            </ul>
            <a href="referencia_compras" class="btn btn-lg btn-block btn-primary">Ingresar</a>
          </div>
        </div>
        <div class="card mb-4 box-shadow">
          <div class="card-header">
            <h4 class="my-0 font-weight-normal">Solicitudes de adopción</h4>
          </div>
          <div class="card-body">
          <h1 class="card-title pricing-card-title">Al ingresar podrás: <small class="text-muted"></small></h1>
            <ul class="list-unstyled mt-3 mb-4">
              <li>Verificar las solicitudes</li>
              <li>Aceptar las solicitudes</li>
              <li>Rechazar las solicitudes</li>
            </ul>
            <a href="referencia_solicitudes" class="btn btn-lg btn-block btn-primary">Ingresar</a>
          </div>
        </div>
      </div>
@endsection
