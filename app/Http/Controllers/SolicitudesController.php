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
        return view('admin.solicitudes', ['solicitudes' => $solicitudes]);
    }

    public function create()
    {
        return view('admin.solicitud.create');
    }

    public function store(Request $request)
    {
        // Validar los datos del formulario
        $validatedData = $request->validate([
            'id_solicitud_adopcion' => 'required|integer',
            'id_users' => 'required|integer',
            'id_mascota' => 'required|integer',
            'id_situacion' => 'required|integer',
            'descripcion' => 'nullable|string',
        ]);

        // Crear una nueva instancia de SolicitudAdopcion y asignar los valores
        $solicitud = new SolicitudAdopcion();
        $solicitud->id_solicitud_adopcion = $request->id_solicitud_adopcion;
        $solicitud->id_users = $request->id_users;
        $solicitud->id_mascota = $request->id_mascota;
        $solicitud->id_situacion = $request->id_situacion;
        $solicitud->descripcion = $request->descripcion;

        // Guardar la solicitud en la base de datos
        $solicitud->save();

        // Redirigir a una página de confirmación o a la lista de solicitudes
        return redirect()->route('admin.solicitud.index')->with('success', 'Solicitud de adopción creada exitosamente');
    }

    public function show($id)
    {
        $solicitud = SolicitudAdopcion::find($id);
        return view('admin.solicitud.show', ['solicitud' => $solicitud]);
    }

    public function edit($id)
    {
        $solicitud = SolicitudAdopcion::find($id);
        return view('admin.solicitud.edit', ['solicitud' => $solicitud]);
    }

    public function update(Request $request, $id)
    {
        $solicitud = SolicitudAdopcion::find($id);

        // Actualizar los datos de la solicitud según los valores del formulario ($request)
        $solicitud->id_solicitud_adopcion = $request->input('id_solicitud_adopcion');
        $solicitud->id_users = $request->input('id_users');
        $solicitud->id_mascota = $request->input('id_mascota');
        $solicitud->id_situacion = $request->input('id_situacion');
        $solicitud->descripcion = $request->input('descripcion');

        // Guardar los cambios en la base de datos
        $solicitud->save();

        return redirect()->route('admin.solicitud.index')->with('success', 'Solicitud de adopción actualizada exitosamente.');
    }

    public function destroy($id)
    {
        $solicitud = SolicitudAdopcion::find($id);
        // Eliminar la solicitud de adopción de la base de datos
        $solicitud->delete();

        return redirect()->route('admin.solicitud.index')->with('success', 'Solicitud de adopción eliminada exitosamente.');
    }
}