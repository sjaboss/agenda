<!doctype html>
<html lang="es">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Data Tables CSS -->
    <link rel="stylesheet" href=" https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.2.3/css/buttons.dataTables.min.css">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Island+Moments&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Island+Moments&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Island+Moments&family=Roboto+Condensed:ital@1&display=swap"
        rel="stylesheet">
    <link href="{{ asset('css/stylebarra.css') }}"rel="stylesheet">


    <title>@yield('tituloPagina')</title>
</head>

<body style="background: #E5E7E9 ; text-align: center">




    <nav class="navbar navbar-expand-lg" style="background-color: #E5E7E9">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{ route('inicio')  }}" >
                {{--  <span class="fas fa-address-card fa-2x"></span> --}}
                <img class="logo" src="{{ asset('img/logosjaboss.png') }}">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    {{--   <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="{{ route('inicio') }}"><span
                                    class="fas fa-home"></span> Inicio</a>
                        </li> --}}
                 {{--    <li class="nav-item">
                        <a class="nav-link" href="{{ route('categorias.index') }}"> <span
                                class="fas fa-list-alt"></span> Categorias</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('contactos.index') }}"><span class="fas fa-id-card"></span>
                            Contactos</a>
                    </li> --}}
                </ul>
                <ul class="navbar-nav">
                

                   
                    @guest

                    <li>
                        <a class="nav-link" href="#sec1">¿Quienes Somos?</span> </a>
                    </li>

                    <li>
                        <a class="nav-link" href="#sec3">Contacto</span> </a>
                    </li>

                        <li>
                            <a class="nav-link" href="{{ route('login') }}"></span>Ingresar</a>
                        </li>


                    @endguest

                    @auth

                    <li>
                        <a class="nav-link" href="{{ route('registrar.index') }}"></span>Registrarse</a>
                    </li>

                        <li>
                            <a style="font-size: 18px; color: darkslategray; font:bold " class="nav-link" href="{{ route('post.index', auth()->user()->username) }}">
                               
                                <span  class="fas fa-id-card" >
                                    {{ auth()->user()->username }}
                                </span>
                                
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <button  class="btn btn"  type="submit">
                                    Cerrar Sesión
                                </button>
                            </form>
                            </a>

                        </li>
                    @endauth
                </ul>



            </div>
        </div>
    </nav>

    @yield('contenido')
    @yield('footer')





    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>

    <script src=" https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.3/js/dataTables.buttons.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.print.min.js"></script>

    {{--     @yield('dataTable') --}}




    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
        integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
        integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous">
    </script>
    -->


</body>


</html>
