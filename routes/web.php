<?php

use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\ContactoController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\NosotrosController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\RegistroControllerController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('inicio');
})->name("inicio");



Route::prefix('categorias')->group(function () {
    Route::get('/', [CategoriaController::class, 'index'])->name("categorias.index");
    Route::get('/agregar', [CategoriaController::class, 'create'])->name("categorias.create");
    Route::get('/editar/{id}', [CategoriaController::class, 'edit'])->name("categorias.edit");
    Route::get('/eliminar/{id}', [CategoriaController::class, 'show'])->name('categorias.show');
    Route::put('/actualizar/{id}', [CategoriaController::class, 'update'])->name("categorias.update");
    Route::post('/guardar', [CategoriaController::class, 'store'])->name("categorias.store");
    Route::delete('/destroy/{id}', [CategoriaController::class, 'destroy'])->name('categorias.destroy');
});

Route::prefix('contactos')->group(function () {
    Route::get('/', [ContactoController::class, 'index'])->name("contactos.index");
    Route::get('/agregar', [ContactoController::class, 'create'])->name("contactos.create");
    Route::get('/editar/{id}', [ContactoController::class, 'edit'])->name("contactos.edit");
    Route::get('/eliminar/{id}', [ContactoController::class, 'show'])->name('contactos.show');
    Route::put('/actualizar/{id}', [ContactoController::class, 'update'])->name("contactos.update");
    Route::post('/guardar', [ContactoController::class, 'store'])->name("contactos.store");
    Route::delete('/destroy/{id}', [ContactoController::class, 'destroy'])->name('contactos.destroy');
});
Route::prefix('nuestros')->group(function () {
    Route::post('/', [NosotrosController::class, 'store'])->name("nuestros.store"); 

 
});




Route::prefix('login')->group(function () {
    Route::get('/', [RegistroControllerController::class, 'index'])->name("registrar.index");
    Route::post('/registrar', [RegistroControllerController::class, 'store'])->name("login.store");
    Route::get('/registrar', [RegistroControllerController::class, 'index'])->name('registrar.index');

    Route::get('/login', [LoginController::class, 'index'])->name('login');
    Route::post('/login', [LoginController::class, 'store']);
    Route::post('/logout', [LogoutController::class, 'store'])->name('logout');



    Route::get('/{user:username}', [PostController::class, 'index'])->name('post.index');
    Route::get('/posts/create', [PostController::class, 'create'])->name('posts.create');
    /*    Route::get('/muro',[PostController::class,'index'])->name('post.index');  */
});
