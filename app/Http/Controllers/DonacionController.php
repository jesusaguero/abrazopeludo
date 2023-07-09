<?php

namespace App\Http\Controllers;

use App\Models\Donacion;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class DonacionController extends Controller
{
    public function index()
    {
        $donaron = Donacion::all();
        return view('admin.donaciones', compact('donaron'));
    }

    public function store(Request $request)
    {
        $donacion = new Donacion();
        $donacion->id_users = Auth::id();
        $medio = ($request->input('medio') === 'Yape') ? 1 : 2;
        $donacion->id_medio_de_pago = $medio;
        $donacion->monto = $request->input('monto');
        $donacion->fecha = Carbon::now();
        $donacion->save();
        return redirect()->back();
    }

    public function update(Request $request, $id)
    {
        $donacion = new Donacion();
        $donacion->id_usuario = 1;
        $medio = ($request->input('medio') === 'Yape') ? 1 : 2;
        $donacion->id_medio_de_pago = $medio;
        $donacion->monto = $request->input('monto');
        $donacion->fecha = Carbon::now();
        $donacion->save();
        return redirect()->back();
    }

    public function destroy($id)
    {
        $donacion = Donacion::find($id);
        $donacion->delete();
        return redirect()->back();
    }
}