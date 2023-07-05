<?php

//RUTAS DE LOS CONTROLADORES
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SolicitudAdopcionController;
use App\Http\Controllers\MascotaController;
use App\Http\Controllers\DonacionController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\AdminController;
//RUTAS DE LOS CONTROLADORES


//RUTAS DE LAS VISTAS DE LAS MASCOTAS
Route::get('', function () {
    return view('home');
});

Route::get('inicio/home', function () {
    return view('inicio');
});

Route::get('nosotros/nosotros', function () {
    return view('nosotros');
});

Route::get('adopcion/adopta', function () {
    return view('adopta');
});

Route::get('donacion/donacion', function () {
    return view('donacion');
});


Route::get('foros/foros', function () {
    return view('foros');
});

Route::get('consulta/consultas', function () {
    return view('consultas');
});

Route::get('usuarios/login', function () {
    return view('login');
});
//RUTAS DE LAS VISTAS DE LAS MASCOTAS


//LOGIN CONTROLLER
Route::post('/login', [LoginController::class, 'login'])->name('login');
//LOGIN CONTROLLER

//SOLICITUD DE ADOPCIÓN CONTROLLER
Route::post('/procesar_formulario', [SolicitudAdopcionController::class, 'store'])->name('procesar.formulario');
Route::get('/descargar-resumen', [SolicitudAdopcionController::class, 'descargarResumen'])->name('descargar-resumen');
Route::get('descargar/{id}', [SolicitudAdopcionController::class, 'descargarPDF'])->name('descargar-pdf');
Route::get('/mascotas/resumen-solicitud', [SolicitudAdopcionController::class, 'mostrarResumenSolicitud'])->name('mascotas.resumen-solicitud');

Route::get('/solicitudadopcion', function () {
    return view('mascotas.solicitudadopcion');
})->name('mascotas.solicitudadopcion');

Route::prefix('mascotas')->group(function () {
    for ($i = 1; $i <= 12; $i++) {
        Route::get('/mascota'.$i, function () use ($i) {
            return view('mascotas.mascota'.$i);
        })->name('mascotas.mascota'.$i);
    }
});
//SOLICITUD DE ADOPCIÓN CONTROLLER

//RUTA DE LA VISTA DEL ADMINISTRADOR
Route::get('/admin',[AdminController::class, 'index'])
    ->middleware('auth.admin')
    ->name('admin.index');
//RUTA DE LA VISTA DEL ADMINISTRADOR

//MIDDLEWARE SECCIONES
Auth::routes();
Route::get('/shop', [App\Http\Controllers\CartController::class, 'shop'])->name('shop');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/adopta', [App\Http\Controllers\HomeController::class, 'adopta'])->name('adopta');
Route::get('/donacion', [App\Http\Controllers\HomeController::class, 'donacion'])->name('donacion');
Route::resource('donaciones', DonacionController::class);
//MIDDLEWARE SECCIONES

//RUTAS CARRITO DE COMPRA
Route::get('/cart', [CartController::class, 'cart'])->name('cart.index');
Route::post('/add', [CartController::class, 'add'])->name('cart.store');
Route::post('/update', [CartController::class, 'update'])->name('cart.update');
Route::post('/remove', [CartController::class, 'remove'])->name('cart.remove');
Route::post('/clear', [CartController::class, 'clear'])->name('cart.clear');
//RUTAS CARRITO DE COMPRA