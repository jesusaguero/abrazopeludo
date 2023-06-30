<?php

use App\Http\Controllers\SolicitudAdopcionController;
use App\Http\Controllers\MascotaController;
use Illuminate\Support\Facades\Route;

Route::post('/login', [LoginController::class, 'login'])->name('login');
Route::post('/procesar_formulario', [SolicitudAdopcionController::class, 'store'])->name('procesar.formulario');
Route::get('/resumen-solicitud', [SolicitudAdopcionController::class, 'mostrarResumenSolicitud'])->name('resumen-solicitud');
Route::get('/descargar-resumen', [SolicitudAdopcionController::class, 'descargarResumen'])->name('descargar-resumen');
Route::get('descargar/{id}', [SolicitudAdopcionController::class, 'descargarPDF'])->name('descargar-pdf');

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

Route::prefix('mascotas')->group(function () {
    Route::get('/solicitudadopcion', function () {
        return view('mascotas.solicitudadopcion');
    })->name('mascotas.solicitudadopcion');

    Route::get('/resumen-solicitud', function () {
        return view('mascotas.resumen-solicitud');
    })->name('mascotas.resumen-solicitud');
});

Route::prefix('mascotas')->group(function () {
    for ($i = 1; $i <= 12; $i++) {
        Route::get('/mascota'.$i, function () use ($i) {
            return view('mascotas.mascota'.$i);
        })->name('mascotas.mascota'.$i);
    }
});


Route::get('/login', function () {
    return view('login');
});

Auth::routes();
