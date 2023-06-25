<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;

class ProductoController extends Controller
{

    public function create()
    {
        return view('productos.create');
    }

    public function index()
    {
        $productos = Producto::all();
        return view('catalogo', compact('productos'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nombre' => 'required',
            'tipo' => 'required',
            'precio' => 'required|numeric',
            'descripcion' => 'required',
            'imagen' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $producto = new Producto;
        $producto->nombre = $request->nombre;
        $producto->tipo = $request->tipo;
        $producto->precio = $request->precio;
        $producto->descripcion = $request->descripcion;

        if ($request->hasFile('imagen')) {
            $image = $request->file('imagen');
            $imageName = time().'.'.$image->getClientOriginalExtension();
            $image->move(public_path('images'), $imageName);
            $producto->imagen = $imageName;
        }

        $producto->save();

        return redirect()->back()->with('success', 'Producto agregado exitosamente.');
    }

    public function show($tipo, $producto)
    {
        $producto = Producto::where('tipo', $tipo)->where('nombre', $producto)->first();

        if (!$producto) {
            abort(404);
        }

        return view('productos.show', compact('producto', 'tipo', 'producto'));
    }

    public function showByTipo($tipo)
    {
        $productos = Producto::where('tipo', $tipo)->get();

        return view('productos.showByTipo', compact('productos', 'tipo'));
    }
}


