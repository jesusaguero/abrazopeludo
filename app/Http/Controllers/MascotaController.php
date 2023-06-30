<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MascotaController extends Controller
{
    public function index()
    {
        $mascotas = DB::table('mascota')
            ->select('mascota.*')
            ->orderBy('id_mascota', 'ASC')
            ->get();

        return view('mascotas.index')->with('mascotas', $mascotas);
    }
}