<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{

/*  javier en esta funcion podemos hacer que se revise si el usuario esta autentificado y lo hace antes de la funcion de index  */  
 public function __construct()
{
    $this->middleware('auth');
} 

    public function index()
    {
        return view('layouts.dashboard');
    }
    
    public function create() 
    {
        return view('posts.create');
    }
}
