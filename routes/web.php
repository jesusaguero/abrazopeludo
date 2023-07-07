<?php

use App\Http\Controllers\SolicitudAdopcionController;
use App\Http\Controllers\MascotaController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DonacionController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;

Route::post('/login', [LoginController::class, 'login'])->name('login');
Route::post('/procesar_formulario', [SolicitudAdopcionController::class, 'store'])->name('procesar.formulario');
Route::get('/descargar-resumen', [SolicitudAdopcionController::class, 'descargarResumen'])->name('descargar-resumen');
Route::get('descargar/{id}', [SolicitudAdopcionController::class, 'descargarPDF'])->name('descargar-pdf');
Route::resource('/users', UserController::class);
Route::resource('/home', AdminController::class);
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

//INICIO DE RUTAS DE ADMINISTRADOR
Route::get('/adopciones', function () {
    return view('/admin/adopciones');
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

Route::prefix('mascotas')->group(function () {
    for ($i = 1; $i <= 12; $i++) {
        Route::get('/mascota'.$i, function () use ($i) {
            return view('mascotas.mascota'.$i);
        })->name('mascotas.mascota'.$i);
    }
});
//FIN DE RUTAS MASCOTAS



//INICIO DE RUTAS VERIFICADAS
Auth::routes();

Route::get('/shop', [App\Http\Controllers\CartController::class, 'shop'])->name('shop');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/adopta', [App\Http\Controllers\HomeController::class, 'adopta'])->name('adopta');
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