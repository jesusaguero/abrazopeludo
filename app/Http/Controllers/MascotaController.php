<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Mascota;

class MascotaController extends Controller
{
    public function index()
    {
        $mascotas = DB::table('mascota')
            ->select('mascota.*')
            ->orderBy('id_mascota', 'ASC')
            ->get();

        return view('adopta', ['mascotas' => $mascotas]);
    }
    public function mostrarMascota1()
    {
        $mascota = Mascota::first();
        return view('mascotas.mascota1', ['mascota' => $mascota]);
    }

    public function mostrarMascota2()
    {
        $mascota = Mascota::find(2);
        return view('mascotas.mascota2', ['mascota' => $mascota]);
    }

    public function mostrarMascota3()
    {
        $mascota = Mascota::find(3);
        return view('mascotas.mascota3', ['mascota' => $mascota]);
    }
    public function mostrarMascota4()
    {
        $mascota = Mascota::find(4);
        return view('mascotas.mascota4', ['mascota' => $mascota]);
    }
    public function mostrarMascota5()
    {
        $mascota = Mascota::find(5);
        return view('mascotas.mascota5', ['mascota' => $mascota]);
    }
    public function mostrarMascota6()
    {
        $mascota = Mascota::find(6);
        return view('mascotas.mascota6', ['mascota' => $mascota]);
    }
    public function mostrarMascota7()
    {
        $mascota = Mascota::find(7);
        return view('mascotas.mascota7', ['mascota' => $mascota]);
    }
    public function mostrarMascota8()
    {
        $mascota = Mascota::find(8);
        return view('mascotas.mascota8', ['mascota' => $mascota]);
    }
    public function mostrarMascota9()
    {
        $mascota = Mascota::find(9);
        return view('mascotas.mascota9', ['mascota' => $mascota]);
    }
    public function mostrarMascota10()
    {
        $mascota = Mascota::find(10);
        return view('mascotas.mascota10', ['mascota' => $mascota]);
    }
    public function mostrarMascota11()
    {
        $mascota = Mascota::find(11);
        return view('mascotas.mascota11', ['mascota' => $mascota]);
    }
    public function mostrarMascota12()
    {
        $mascota = Mascota::find(12);
        return view('mascotas.mascota12', ['mascota' => $mascota]);
    }
    public function mostrarMascota13()
    {
        $mascota = Mascota::find(13);
        return view('mascotas.mascota13', ['mascota' => $mascota]);
    }
    public function mostrarMascota14()
    {
        $mascota = Mascota::find(14);
        return view('mascotas.mascota14', ['mascota' => $mascota]);
    }
}