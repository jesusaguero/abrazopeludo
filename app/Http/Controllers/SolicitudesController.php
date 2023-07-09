<?php

namespace App\Http\Controllers;

use App\Models\SolicitudAdopcion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SolicitudesController extends Controller
{
    public function index()
    {
        $solicitudes = SolicitudAdopcion::all();
        return view('admin.solicitudes.index')->with('solicitudes', $solicitudes);
    }

    public function store(Request $request)
    {
        $solicitud = new SolicitudAdopcion();
        $solicitud->id_users = Auth::id();
        $solicitud->id_mascota = $request->input('id_mascota');
        $solicitud->id_situacion = $request->input('id_situacion');
        $solicitud->descripcion = $request->input('descripcion');
        $solicitud->save();
        return redirect()->back();
    }

    public function update(Request $request, $id)
    {
        $solicitud = SolicitudAdopcion::find($id);
        $solicitud->id_users = Auth::id();
        $solicitud->id_mascota = $request->input('id_mascota');
        $solicitud->id_situacion = $request->input('id_situacion');
        $solicitud->descripcion = $request->input('descripcion');
        $solicitud->save();
        return redirect()->back();
    }

    public function destroy($id)
    {
        $solicitud = SolicitudAdopcion::find($id);
        $solicitud->delete();
        return redirect()->back();
    }
}
