<?php

use App\Http\Controllers\SolicitudAdopcionController;
use App\Http\Controllers\MascotaController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DonacionController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\SolicitudesController;
use App\Http\Controllers\AdopcionController;



//INICIO DE RUTAS SOLICITUD DE ADOPCIÓN
Route::post('/login', [LoginController::class, 'login'])->name('login');
Route::post('/procesar_formulario', [SolicitudAdopcionController::class, 'store'])->name('procesar.formulario');
Route::get('/descargar-resumen', [SolicitudAdopcionController::class, 'descargarResumen'])->name('descargar-resumen');
Route::get('descargar/{id}', [SolicitudAdopcionController::class, 'descargarPDF'])->name('descargar-pdf');
Route::resource('/users', UserController::class);
Route::resource('/home', AdminController::class);
Route::get('/solicitudes', [SolicitudesController::class, 'index']);
//FIN DE RUTAS SOLICITUD DE ADOPCIÓN

//INICIO DE RUTAS DE PRINCIPALES
Route::get('/', function () {
    return view('home');
});

Route::get('/home', function () {
    return view('inicio');
});

Route::get('/nosotros', function () {
    return view('nosotros');
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
//FIN DE RUTAS DE PRINCIPALES


//INICIO DE RUTAS DE ADMINISTRADOR

Route::prefix('admin')->group(function () {
    Route::get('/admin/adopciones', [AdopcionController::class, 'index'])->name('admin.adopciones');
    Route::get('/adopciones/{id}', [AdopcionController::class, 'show'])->name('admin.adopciones.show');
    Route::get('/adopciones/{id}/edit', [AdopcionController::class, 'edit'])->name('admin.adopciones.edit');
    Route::put('/adopciones/{id}', [AdopcionController::class, 'update'])->name('admin.adopciones.update');
    Route::delete('/adopciones/{id}', [AdopcionController::class, 'destroy'])->name('admin.adopciones.destroy');
});

Route::get('/compras', function () {
    return view('/admin/compras');
});
Route::get('/solicitudes', function () {
    return view('/admin/solicitudes');
});
//FIN DE RUTAS DE ADMINISTRADOR


//INICIO DE RUTAS MASCOTAS
Route::get('/mascotas/resumen-solicitud', [SolicitudAdopcionController::class, 'mostrarResumenSolicitud'])->name('mascotas.resumen-solicitud');

Route::get('/solicitudadopcion', function () {
    return view('mascotas.solicitudadopcion');
})->name('mascotas.solicitudadopcion');


//FIN DE RUTAS MASCOTAS


//INICIO DE RUTAS VERIFICADAS
Auth::routes();

Route::get('/adopta', [MascotaController::class, 'index'])->name('adopta');
for ($i = 1; $i <= 12; $i++) {
    Route::get('/mascotas/mascota'.$i, [MascotaController::class, 'mostrarMascota'.$i])->name('mascotas.mascota'.$i);
}

Route::get('/shop', [App\Http\Controllers\CartController::class, 'shop'])->name('shop');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/donacion', [App\Http\Controllers\HomeController::class, 'donacion'])->name('donacion');
Route::resource('donaciones', DonacionController::class);
//FIN DE RUTAS VERIFICADAS


//INICIO DE RUTAS CARRITO DE COMPRAS
Route::get('/cart', [CartController::class, 'cart'])->name('cart.index');
Route::post('/add', [CartController::class, 'add'])->name('cart.store');
Route::post('/update', [CartController::class, 'update'])->name('cart.update');
Route::post('/remove', [CartController::class, 'remove'])->name('cart.remove');
Route::post('/clear', [CartController::class, 'clear'])->name('cart.clear');
Route::get('/admin', [AdminController::class, 'index'])->name('admin.index');
//FIN DE RUTAS CARRITO DE COMPRAS