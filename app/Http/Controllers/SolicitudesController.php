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
        return view('solicitudes.index', ['solicitudes' => $solicitudes]);
    }

    public function create()
    {
        return view('solicitudes.create');
    }

    public function store(Request $request)
    {
        $solicitud = new SolicitudAdopcion();
        $solicitud->id_users = $request->input('id_users');
        $solicitud->id_mascota = $request->input('id_mascota');
        $solicitud->id_situacion = $request->input('id_situacion');
        $solicitud->descripcion = $request->input('descripcion');
        $solicitud->save();

        return redirect()->route('solicitudes.index')->with('success', 'Solicitud de adopción creada exitosamente.');
    }

    public function edit($id)
    {
        $solicitud = SolicitudAdopcion::findOrFail($id);
        return view('solicitudes.edit', ['solicitud' => $solicitud]);
    }

    public function update(Request $request, $id)
    {
        $solicitud = SolicitudAdopcion::findOrFail($id);
        $solicitud->id_users = $request->input('id_users');
        $solicitud->id_mascota = $request->input('id_mascota');
        $solicitud->id_situacion = $request->input('id_situacion');
        $solicitud->descripcion = $request->input('descripcion');
        $solicitud->save();

        return redirect()->route('solicitudes.index')->with('success', 'Solicitud de adopción actualizada exitosamente.');
    }

    public function destroy($id)
    {
        $solicitud = SolicitudAdopcion::findOrFail($id);
        $solicitud->delete();

        return redirect()->route('solicitudes.index')->with('success', 'Solicitud de adopción eliminada exitosamente.');
    }
}