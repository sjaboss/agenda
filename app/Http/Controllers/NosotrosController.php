<?php

namespace App\Http\Controllers;

use App\Models\Nosotros;
use Illuminate\Http\Request;

class NosotrosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|min:4|max:28',
            'email' => 'required|email|max:60'
        ]);

        /* aca se valida la informacion */
        $nosotros = new Nosotros();
        $nosotros->name = strtoupper($request->post('name'));
        $nosotros->email = strtoupper($request->post('email'));
        $nosotros->mensaje = strtoupper($request->post('mensaje'));
        $nosotros->save();
       
         return redirect()->route("inicio")->with("success", "Alta Exitosa. Te Estaremos Contantacto!"); 
       
      
     
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Nosotros  $nosotros
     * @return \Illuminate\Http\Response
     */
    public function show(Nosotros $nosotros)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Nosotros  $nosotros
     * @return \Illuminate\Http\Response
     */
    public function edit(Nosotros $nosotros)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Nosotros  $nosotros
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Nosotros $nosotros)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Nosotros  $nosotros
     * @return \Illuminate\Http\Response
     */
    public function destroy(Nosotros $nosotros)
    {
        //
    }
}
