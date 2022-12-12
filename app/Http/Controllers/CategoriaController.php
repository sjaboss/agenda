<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use Illuminate\Http\Request;

class CategoriaController extends Controller
{
    public function index()
    {
        $categoria = Categoria::orderBy('id','desc')->paginate(4);
        return view('categorias/inicio', compact('categoria'));  
    }
    public function create()
    {
        return view('categorias/agregar');
    }
    public function store(Request $request)
    {
        $categoria = new Categoria();
        $categoria->nombre = strtoupper($request->post('nom'));
        $categoria->descripcion = strtoupper($request->post('desc'));
        $categoria->save();
        return redirect()->route("categorias.index")->with("success", "Agregado con exito!");
    }
    public function show($id)
    { 
        $categoria = Categoria::find($id);
        return view("categorias/eliminar",compact('categoria')); 
    }
    public function edit($id)
    {
       $categoria = Categoria::find($id);
        return view("categorias/editar",compact('categoria')); 
    }
    public function update(Request $request, $id)
    {
        $categoria = Categoria::find($id);
        $categoria->nombre= strtoupper($request->post('nom'));
        $categoria->descripcion   = strtoupper($request->post('desc'));
        $categoria->save();
        return redirect()->route("categorias.index")->with("success", "Actualizado con exito!");
    }

    public function destroy($id)
    {
        $categoria = Categoria::find($id);
        $categoria->delete();
        return redirect()->route("categorias.index")->with("success", "Eliminado con exito!");
    }
}
