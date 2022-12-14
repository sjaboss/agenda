@extends('layouts/agenda')
@section('tituloPagina', 'Portal: Sjaboss')
@section('contenido')


    <style>
        body {
            font-family: 'Roboto Condensed', sans-serif;
            line-height: 180%;
            color: #444;
            text-align: center;
        }

        .foto1 {
            background-image: url(img/17.jpg);
            min-height: 70%;
            box-shadow: 2px 2px 5px #999;
        }


        .foto4 {
            background-image: url(img/19.jpg);
            min-height: 40%;
            box-shadow: 2px 2px 5px #999;
        }

        .foto1,
        .foto4 {
            position: relative;
            opacity: 0.75;
            background-position: center;
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
        }

        .carta {
            background-image: url(img/100.png);
            min-height: 100%;
            box-shadow: 1px 1px 4px #999;
            opacity: 0.75;
            background-position: top;
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
            font-size: bold;
        }

        .cartaSomos {

            background-position: top;
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
            font-size: bold;
        }

        .cartaSomos .parrafo1 {
            letter-spacing: 1px;
            font-size: bold;
        }

        .cards {
            display: flex;
            width: 100%;
            text-align: center;
            /*    padding-bottom: 5px;
                                            padding-top: 5px;
                                             padding-left: 20%;
                                            background-position: top;
                                            background-size: cover;
                                            background-repeat: no-repeat;
                                            background-attachment: fixed;
                                            font-size: bold;
                                           */
        }

        .cards .card-body {
            /* width: 600px;*/
            height: 350px;
            border-radius: 10px;
            padding: 30px;
            box-sizing: border-box;
            position: relative;
            display: flex;
            flex-direction: column;
            transition: all 0.3s ease;

        }

        .cards .card-body:hover {
            margin-right: 80px;
            transform: rotate(3deg) translateY(-15px);
        }
    </style>

@section('contenido')
    @if ($mensaje = Session::get('success'))
        <div class="alert alert-success" role="alert">
            {{ $mensaje }}
        </div>
    @endif

    <div class="foto1">

        <div class="letrero">
            Ideamos
        </div>
        <div class="letrero2">
            soluciones
        </div>
        <div class="letrero3">
            informaticas

        </div>
        <div class="botonLetrero">
            <a style="color: #58B74E" class="btn btn"
                href="https://api.whatsapp.com/send?phone=541161522256&text=Quisiera realizar una consulta"> <img
                    class="what" src="img/whatsapp.png" alt=""> Whatsapp
                Directo</a>
        </div>
    </div>




    <section id="sec1" name="sec1">
        <div class="row">
            <div class="col">

                <div class="card mb-4" style="min-width:250px;  box-shadow: 2px 2px 5px #999;">
                    <div class="card-header">
                        <h1><span>??Quienes somos?</span></h1>
                    </div>
                    <div class="cartaSomos">
                        <div class="card-body text-center">
                            <div class="parrafo1">
                                <p>
                                    Somos una empresa joven con ideas innovadoras e inteligentes para optimizar los procesos
                                    de
                                    las
                                    organizaciones mejorando el control de su actividad promoviendo mejoras a nivel de
                                    productividad y
                                    beneficios. Se destacan entre los servicios ofrecidos el desarrollo de aplicaciones web,
                                    software a
                                    medida, capacitaci??n, entre otros.
                                    Nuestro objetivo para el 2015 es ampliar nuestra red de clientes ofreci??ndoles un
                                    producto
                                    confiable
                                    y eficiente con la finalidad de potenciar sus negocios.
                                    Nuestra filosof??a est?? enfocada plenamente al cliente, apuntando a entender e
                                    identificar
                                    sus
                                    necesidades tecnol??gicas para ofrecerle la soluci??n que mejor se adapte a sus
                                    expectativas y
                                    lo
                                    ayude a alcanzar sus objetivos, siempre dej??ndolo satisfecho, con productos de alta
                                    calidad
                                    y
                                    precios razonables.
                                </p>
                                <img src="img/trio_web.png" alt="">
                                <img src="img/logos_web2.png" alt="">
                                <hr>
                                <p>
                                    Nos dedicamos al desarrollo de sistemas inform??ticos a fin de mejorar el nivel de
                                    productividad y eficiencia de nuestros clientes a trav??s de nuestros paquetes de
                                    software, desarrollos a medida y acompa??amiento permanente brindando un servicio de
                                    primer nivel, entre otros.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <br>


    <br>
    <section class="dark">
        <hr>
        <div class="row">
            <div class="col">
                <!-- Card 1 -->
                <div class="card mb-4" style="min-width:250px;  box-shadow: 2px 2px 5px #999;">
                    <div class="card-header">
                        <h1>Dise??o<span class="text-muted">Web</span></h1>
                    </div>
                    <div class="carta">
                        <div class="card-body text-center">
                            <ul class="my-3 list-unstyled">
                                <li>Dise??o de p??ginas web en Argentina</li>
                                <li>que sean atractivas con dise??o Responsive, </li>
                                <li>permitiendo la visualizaci??n correcta </li>
                                <li>en cualquier tipo de dispositivo.</li>
                                <hr>

                                <br>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>


            <section id="sec2" name="sec2">
            </section>

            <!-- Card 2 -->
            <div class="col">
                <!-- Card 2 -->
                <div class="card mb-4" style="min-width:250px;  box-shadow: 2px 2px 5px #999;">
                    <div class="card-header">
                        <h1>Programaci??n<span class="text-muted">Web</span></h1>
                    </div>
                    <div class="carta">
                        <div class="card-body text-center">
                            {{--   <h1>Programaci??n<span class="text-muted">Web</span></h1> --}}
                            <ul class="my-3 list-unstyled">
                                <li>Desarrollo de Aplicaciones y Sistemas web en Argentina </li>
                                <li>producidos a medida de la necesidad del cliente. </li>
                                <li>Realizamos portales CMR permitiendo crear, editar</li>
                                <li>y eliminar contenido de su sitio web.</li>
                                <hr>
                                <br>
                            </ul>
                            {{--  <button class="btn btn-primary btn-lg btn-block">Empezar Ahora</button> --}}
                        </div>
                    </div>
                </div>
            </div>

            <!-- Card 3 -->
            <div class="col">
                <!-- Card 3 -->
                <div class="card mb-4" style="min-width:250px;  box-shadow: 2px 2px 5px #999;">
                    <div class="card-header">
                        <h1>Soporte<span class="text-muted">Web</span></h1>
                    </div>
                    <div class="carta">
                        <div class="card-body text-center">
                            <ul class="my-3 list-unstyled">
                                <li>Brindamos soluciones en Hardware y Software, </li>
                                <li>redes WIFI y mantenimiento de sistemas operativos </li>
                                <li>preparaci??n de personal a las nuevas tendencias </li>
                                <li>Capacitaciones acordes a la implementaci??n. </li>
                                <hr>
                                <br>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>



            <section class="dark" id="sec4">
                <br> <br> <br>
                <div class="row">
                    <div class="col">
                        <!-- Card 2 -->
                        <div class="card mb-4" style="min-width:250px;  box-shadow: 2px 2px 5px #999;">
                            {{--       <div class="card-header">
                                <h1><span>Nuestros Trabajos</span></h1>
                            </div> --}}
                            <div class="card">
                               
                                    <img src="{{ asset('img/pro_gif.gif') }}" style="height: 10%">
                                
                            </div>
                        </div>
                    </div>



                    {{--         <!-- Card 2 -->
                    <div class="col">
                        <!-- Card 2 -->
                        <div class="card mb-4" style="min-width:250px;  box-shadow: 2px 2px 5px #999;">
                            {{--      <div class="card-header">
                                <h1><span>Capacitaciones</span></h1>
                            </div> 

                            <div class="card ">

                                <div class="ratio ratio-16x9">
                                 {{--    <video src="" poster="img/logosjaboss.png" height="480" controls   muted></video> 
                                    <img  src="{{ asset('img/pro_gif.gif') }}">
                                     
                                </div>
                            </div>

                        </div>
                    </div> --}}


                </div>
            </section>


            <section id="sec3" name="sec3">
                <!-- Formulario de Contacto -->
                <div class="row contacto justify-content-center py-5 mb-5">
                    <div class="col-12 col-lg-8">
                        <h2 class="titulo">Contacto</h2>
                        <form class="form-group" action="{{ route('nuestros.store') }}" method="POST" novalidate>
                            @csrf
                            <div class="row">
                                <div class="col-12 col-lg-6">
                                    <div class="form-floating mb-3">
                                        <label for="name" class="form-label">Nombre</label>
                                        <input autocomplete="off" type="text" name="name" id="name"
                                            placeholder="Tu nombre" class="form-control @error('name') @enderror "
                                            value="{{ old('name') }}">
                                        @error('name')
                                            <div class="alert alert-danger mt-1" role="alert"><strong>Aviso:</strong>
                                                {{ $message }}
                                            </div>
                                        @enderror

                                    </div>
                                </div>
                                <div class="col-12 col-lg-6">
                                    <div class="form-floating mb-3">
                                        <label for="email" class="form-label">correo</label>
                                        <input autocomplete="off" type="text" name="email" id="email"
                                            placeholder="Correo" class="form-control @error('email') @enderror "
                                            value="{{ old('email') }}">
                                        @error('email')
                                            <div class="alert alert-danger mt-1" role="alert"><strong>Aviso:</strong>
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating mb-3">
                                        <textarea name="mensaje" id="mensaje" class="form-control" placeholder="Mensaje"></textarea>
                                        <label for="mensaje">Mensaje</label>
                                    </div>
                                    <div class="d-flex justify-content-center">
                                        <button class="boton" type="submit">Enviar</button>
                                    </div>
                                    <hr>
                                    @if ($mensaje = Session::get('success'))
                                        <div class="alert alert-success" role="alert">
                                            {{ $mensaje }}
                                        </div>
                                    @endif
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </section>
        </div>


    </section>

@endsection

{{-- @section('footer')
    <footer class="container py-5 my-5 border-top">
        <div class="row">
            <div class="col-12 col-md-3 order-2 order-md-1">
                <small class="d-block text-muted">?? 2015-2023</small>
            </div>
            <div class="col-6 col-md-3 order-1 order-md-2">

            </div>
        </div>
    </footer>
@endsection --}}
