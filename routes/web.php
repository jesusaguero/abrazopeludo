<?php

//RUTAS DE LOS CONTROLADORES
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SolicitudAdopcionController;
use App\Http\Controllers\MascotaController;
use App\Http\Controllers\DonacionController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\AdminController;
//RUTAS DE LOS CONTROLADORES

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

//SOLICITUD DE ADOPCIÓN CONTROLLER

//RUTAS DE LAS VISTAS DE LAS MASCOTAS
Route::get('/', function () {
    return view('home');
});

Route::get('/home', function () {
    return view('inicio');
});

Route::get('/nosotros', function () {
    return view('nosotros');
});

Route::get('/adopta', function () {
    return view('adopta');
});

Route::get('/donacion', function () {
    return view('donacion');
});


Route::get('/foros', function () {
    return view('foros');
});

Route::get('/consultas', function () {
    return view('consultas');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/compra', function () {
    return view('compra');
});
//RUTAS DE LAS VISTAS DE LAS MASCOTAS


//RUTA DE LA VISTA DEL ADMINISTRADOR
Route::get('/admin',[AdminController::class, 'index'])
    ->middleware('auth.admin')
    ->name('admin.index');
//RUTA DE LA VISTA DEL ADMINISTRADOR

Route::prefix('mascotas')->group(function () {
    for ($i = 1; $i <= 12; $i++) {
        Route::get('/mascota'.$i, function () use ($i) {
            return view('mascotas.mascota'.$i);
        })->name('mascotas.mascota'.$i);
    }
});




Auth::routes();


Route::get('/shop', [App\Http\Controllers\CartController::class, 'shop'])->name('shop');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/adopta', [App\Http\Controllers\HomeController::class, 'adopta'])->name('adopta');
Route::get('/donacion', [App\Http\Controllers\HomeController::class, 'donacion'])->name('donacion');
Route::resource('donaciones', DonacionController::class);


Route::get('/cart', [CartController::class, 'cart'])->name('cart.index');
Route::post('/add', [CartController::class, 'add'])->name('cart.store');
Route::post('/update', [CartController::class, 'update'])->name('cart.update');
Route::post('/remove', [CartController::class, 'remove'])->name('cart.remove');
Route::post('/clear', [CartController::class, 'clear'])->name('cart.clear');
