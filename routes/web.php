<?php

use App\Http\Controllers\SolicitudAdopcionController;
use App\Http\Controllers\MascotaController;
use Illuminate\Support\Facades\Route;

Route::post('/login', [LoginController::class, 'login'])->name('login');
Route::post('/procesar_formulario', [SolicitudAdopcionController::class, 'store'])->name('procesar.formulario');
Route::get('/resumen-solicitud', [SolicitudAdopcionController::class, 'mostrarResumenSolicitud'])->name('resumen-solicitud');
Route::get('/descargar-resumen', [SolicitudAdopcionController::class, 'descargarResumen'])->name('descargar-resumen');
Route::get('descargar/{id}', [SolicitudAdopcionController::class, 'descargarPDF'])->name('descargar-pdf');
Route::get('/mascotas', [MascotaController::class, 'index'])->name('mascotas.index');

Route::get('/', function () {
    return view('inicio');
})->name('inicio');
    
Route::get('/inicio', function () {
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

Route::get('/compra', function () {
    return view('compra');
});

Route::get('/foros', function () {
    return view('foros');
});

Route::get('/consultas', function () {
    return view('consultas');
});

Route::get('/solicitudadopcion', function () {
    return view('solicitudadopcion');
});

Route::get('/login', function () {
    return view('login');
});


Auth::routes();
