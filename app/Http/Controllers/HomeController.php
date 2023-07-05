<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('/inicio/home');
    }

    public function shop()
    {
        return view('/compra/shop');
    }

    public function adopta()
    {
        return view('/adopcion/adopta');
    }

    public function donacion()
    {
        return view('/donacion/donacion');
    }
}
