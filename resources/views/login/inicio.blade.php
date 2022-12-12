 @extends('layouts/blanca')
 <link href="{{ asset('css/stylebarra.css') }}"rel="stylesheet">
 @section('tituloPagina', 'Alta-Registro')
 
 <div class="tope" style="padding-top: 5%"> </div>
 @section('contenido')

         <h5 class="card-header" style="text-align: center"> <img class="logoFormularios" src="{{ asset('img/logosjaboss.png') }}"><br> Alta-Registro-Usuario</h5>

         <form class="form-group" action="{{ route('login.store') }}" method="POST" novalidate>
             @csrf
             <label for="name" class="form-label">Nombre</label>
             <input autocomplete="off" type="text" name="name" id="name" placeholder="Tu nombre"
                 class="form-control @error('name') @enderror " value="{{ old('name') }}">
             @error('name')
                 <div class="alert alert-danger mt-1" role="alert"><strong>Aviso:</strong> {{ $message }} </div>
             @enderror

             <label for="username" class="form-label">Usuario</label>
             <input autocomplete="off" type="text" placeholder="Tu nombre de Usuario" name="username" id="username"
                 class="form-control @error('username') form-control is-invalid @enderror" value="{{ old('username') }}">
             @error('username')
                 <div class="alert alert-danger mt-1" role="alert"><strong>Aviso:</strong> {{ $message }} </div>
             @enderror

             <label for="email" class="form-label">Correo</label>
             <input autocomplete="off" placeholder="Tu correo" type="email" name="email" id="email"
                 class="form-control @error('email') form-control is-invalid @enderror" value="{{ old('email') }}">
             @error('email')
                 <div class="alert alert-danger mt-1" role="alert"><strong>Aviso:</strong> {{ $message }} </div>
             @enderror

             <label for="password" class="form-label">Password</label>
             <input autocomplete="off" placeholder="Password" type="password" name="password"
                 id="password"class="form-control @error('password') form-control is-invalid @enderror">
             @error('password')
                 <div class="alert alert-danger mt-1" role="alert"><strong>Aviso:</strong> {{ $message }} </div>
             @enderror

             <label for="password_confirmation" class="form-label">Repetir Password</label>
             <input autocomplete="off" type="password" name="password_confirmation"
                 id="password_confirmation"class="form-control" placeholder="Password">

             <hr>
             <p style="text-align:end">
                 <button class="btn btn-primary"> <span class="fas fa-user-plus"> </span> Agregar</button>
                 <a href="{{ route('inicio') }}"> <span class="fas fa-undo-alt"> </span></a>
             </p>
         </form>
         </p>
    
     </div>
     
 @endsection
