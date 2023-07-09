<?php

namespace App\Http\Controllers;

use App\Models\Mascota;
use Illuminate\Http\Request;

class AdopcionController extends Controller
{
    public function index()
    {
        $mascotas = Mascota::all();
        return view('admin.adopciones', ['mascotas' => $mascotas]);
    }

    public function show($id)
    {
        $adopcion = Mascota::find($id);
        return view('admin.adopciones.show', ['adopcion' => $adopcion]);
    }

    public function edit($id)
    {
        $mascota = Mascota::find($id);
        return view('admin.adopciones.edit', ['mascota' => $mascota]);
    }

    public function update(Request $request, $id)
    {
        $mascota = Mascota::find($id);
        // Actualizar los datos de la mascota según los valores del formulario ($request)
        $mascota->nombre = $request->input('nombre');
        $mascota->especie = $request->input('especie');
        $mascota->raza = $request->input('raza');
        $mascota->edad = $request->input('edad');
        $mascota->genero = $request->input('genero');

        // Guardar los cambios en la base de datos
        $mascota->save();

        return redirect()->route('admin.adopciones.index')->with('success', 'Mascota actualizada exitosamente.');
    }

    public function destroy($id)
    {
        $mascota = Mascota::find($id);
        // Eliminar la mascota de la base de datos
        $mascota->delete();

        return redirect()->route('admin.adopciones.index')->with('success', 'Mascota eliminada exitosamente.');
    }
}