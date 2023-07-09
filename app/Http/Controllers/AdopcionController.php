<?php

namespace App\Http\Controllers;

use App\Models\Mascota;
use Illuminate\Http\Request;

class AdopcionController extends Controller
{
    public function index()
    {
        $mascotas = Mascota::all();
        return view('admin.adoptacrud.index', ['mascotas' => $mascotas]);
    }

    public function create()
    {
        return view('admin.adoptacrud.create');
    }

    public function store(Request $request)
    {
        // Validar los datos del formulario
        $validatedData = $request->validate([
            'nombre' => 'required|string',
            'especie' => 'required|string',
            'raza' => 'required|string',
            'edad' => 'required|integer',
            'genero' => 'required|string',
            'id_estado' => 'integer', // Agrega la validación para el campo id_estado
        ]);

        // Crear una nueva instancia de Mascota y asignar los valores
        $mascota = new Mascota();
        $mascota->nombre = $request->nombre;
        $mascota->especie = $request->especie;
        $mascota->raza = $request->raza;
        $mascota->edad = $request->edad;
        $mascota->genero = $request->genero;
        $mascota->id_estado = $request->id_estado; // Asigna el valor de id_estado

        // Guardar la mascota en la base de datos
        $mascota->save();

        // Redirigir a una página de confirmación o a la lista de mascotas
        return redirect()->route('admin.adoptacrud.index')->with('success', 'Mascota creada exitosamente');
    }

    public function show($id)
    {
        $mascota = Mascota::find($id);
        return view('admin.adoptacrud.show', ['mascota' => $mascota]);
    }

    public function edit($id)
    {
        $mascota = Mascota::find($id);
        return view('admin.adoptacrud.edit', ['mascota' => $mascota]);
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

        return redirect()->route('admin.adoptacrud.index')->with('success', 'Mascota actualizada exitosamente.');
    }

    public function destroy($id)
    {
        $mascota = Mascota::find($id);
        // Eliminar la mascota de la base de datos
        $mascota->delete();

        return redirect()->route('admin.adoptacrud.index')->with('success', 'Mascota eliminada exitosamente.');
    }
}
