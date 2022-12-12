<?php

namespace App\Http\Controllers;

use App\Models\RegistroController;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class RegistroControllerController extends Controller
{

    public function index()
    {
        return view('login/inicio');
    }


    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        /* Javier aca estamos modificando el Request para que me valide y muestre
           el error de usuario duplicado. No es la mejor forma no se recomienda pero por el momento no vi de otra manera */
        /*  desde aca  */
        $request->request->add(['username' => Str::slug($request->username)]);
        /*  hasta aca */

        /* aca se validan los campos */
        $this->validate($request, [
            'name' => 'required|min:4|max:28',
            'username' => 'required|min:4|max:20|unique:users',
            'email' => 'required|unique:users|email|max:60',
            'password' => 'required|confirmed|min:6'
        ]);

        /* aca se valida la informacion */
        User::create([
            'name' => $request->name,
            'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);

        /* autenticar usuario para ir al muro */
        auth()->attempt($request->only('email', 'password'));

        /*  aca lo redireccionamos */
         return redirect()->route('inicio'); 
         
       /*    return redirect()->route('post.index', ['user' => auth()->user()->username]);   */
    }

    public function show(RegistroController $registroController)
    {
        //
    }


    public function edit(RegistroController $registroController)
    {
        //
    }


    public function update(Request $request, RegistroController $registroController)
    {
        //
    }


    public function destroy(RegistroController $registroController)
    {
        //
    }
}
