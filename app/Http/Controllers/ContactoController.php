<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use App\Models\Contacto;
use App\Models\ContactoCatView;
use Illuminate\Http\Request;

class ContactoController extends Controller
{
    public function index()
    {
        $vista = ContactoCatView::orderBy('id','desc')->paginate(4);
        return view('contactos/inicio', compact('vista'));
    }


    public function create()
    {
        $categoria = Categoria::all();
        return view('contactos/agregar', compact('categoria'));
    }

    public function store(Request $request)
    {
        $contacto = new Contacto();
        $contacto->nombres = strtoupper($request->post('nom'));
        $contacto->apellidos = strtoupper($request->post('ape'));
        $contacto->telefono = strtoupper($request->post('tel'));
        $contacto->correo = strtoupper($request->post('cor'));
        $contacto->categoria_id = strtoupper($request->post('cat'));
        $contacto->save();
        return redirect()->route("contactos.index")->with("success", "Agregado con exito!");
    }

    public function show($id)
    {
        $contacto = ContactoCatView::find($id);
              
        return view("contactos/eliminar",compact('contacto')); 
    }


    public function edit($id)
    {
        $contacto = Contacto::find($id);
        $categoria = Categoria::all();
        return view("contactos/editar", compact('contacto', 'categoria'));
    }


    public function update(Request $request, $id)
    {
        $contacto = Contacto::find($id);

        $contacto->nombres = strtoupper($request->post('nom'));
        $contacto->apellidos = strtoupper($request->post('ape'));
        $contacto->telefono = strtoupper($request->post('tel'));
        $contacto->correo = strtoupper($request->post('cor'));
        $contacto->categoria_id = strtoupper($request->post('cat'));
        $contacto->save();
        return redirect()->route("contactos.index")->with("success", "Actualizado con exito!");
    }


    public function destroy($id)
    {
        $contacto = Contacto::find($id);
        $contacto->delete();
        return redirect()->route("contactos.index")->with("success", "Eliminado con exito!");
    }
}
