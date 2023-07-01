<?php

use App\Http\Controllers\SolicitudAdopcionController;
use App\Http\Controllers\MascotaController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DonacionController;

Route::post('/login', [LoginController::class, 'login'])->name('login');
Route::post('/procesar_formulario', [SolicitudAdopcionController::class, 'store'])->name('procesar.formulario');
Route::get('/descargar-resumen', [SolicitudAdopcionController::class, 'descargarResumen'])->name('descargar-resumen');
Route::get('descargar/{id}', [SolicitudAdopcionController::class, 'descargarPDF'])->name('descargar-pdf');

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




Auth::routes();


Route::get('/compra', [App\Http\Controllers\HomeController::class, 'compra'])->name('compra');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/adopta', [App\Http\Controllers\HomeController::class, 'adopta'])->name('adopta');
Route::get('/donacion', [App\Http\Controllers\HomeController::class, 'donacion'])->name('donacion');
Route::resource('donaciones', DonacionController::class);