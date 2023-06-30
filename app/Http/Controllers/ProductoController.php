<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    public function index()
    {
        $producto = Producto::all();
        return view('producto.acciones')->with('productos', $producto);
    }

    public function store(Request $request)
    {
        $producto = new Producto();
        $opcion = $request->input('opcion');

        switch ($opcion) {
            case "1":
                $categoria = 1;
                break;
            case "2":
                $categoria = 2;
                break;
            case "3":
                $categoria = 3;
                break;
        }

        $producto->id_tipo = $categoria; 
        $estado = ($request->input('estado') === 'Disponible') ? 1 : 2;
        $producto->id_estado = $estado;
        $producto->nombre = $request->input('nombre');
        $producto->precio = $request->input('precio');
        $producto->descripcion = $request->input('descripcion');
        $producto->cantidad = $request->input('cantidad');
        $producto->save();
        return redirect()->back();
    }

    public function update(Request $request, $id)
    {
        $producto = Producto::find($id);
        $producto->id_tipo = $request->input('categoria');
        $producto->id_estado = $request->input('estado');
        $producto->nombre = $request->input('nombre');
        $producto->precio = $request->input('precio');
        $producto->descripcion = $request->input('descripcion');
        $producto->cantidad = $request->input('cantidad');
        $producto->save();
        return redirect()->back();
    }

    public function destroy($id)
    {
        $producto = Producto::find($id);
        $producto->delete();
        return redirect()->back();
    }
}