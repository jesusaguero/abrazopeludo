<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\AdminController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

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

Auth::routes();

Route::get('/compra', [App\Http\Controllers\HomeController::class, 'compra'])->name('compra');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/adopta', [App\Http\Controllers\HomeController::class, 'adopta'])->name('adopta');
Route::get('/donacion', [App\Http\Controllers\HomeController::class, 'donacion'])->name('donacion');

