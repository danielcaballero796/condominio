<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
</head>
<body id="appi">
<div id="app">
    <nav class="navbar navbar-default navbar-static-top">
        <div class="container">
            <div class="navbar-header">

                <!-- Collapsed Hamburger -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

            </div>

            <div class="collapse navbar-collapse" id="app-navbar-collapse">
                <!-- Left Side Of Navbar -->
                <ul class="nav navbar-nav">
                    &nbsp;
                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right">
                    <!-- Authentication Links -->
                    @if (Auth::guest())
                        <li><a href="{{ route('inicio') }}">Inicio de Sesion</a></li>
                        <li><a href="{{ route('registro') }}">Registro</a></li>
                    @else
                    <!--inicia notificaciones-->
                        <li class="dropdown notifications-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="glyphicon glyphicon-bell"></i>
                                <span class="label label-warning">!</span>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="header">You have 10 notifications</li>
                                <li class="menu">
                                <i class="glyphicon glyphicon-envelope"><a href="{{ route('mensaje.index') }}">Todas las notificaciones</a></i>
                                </li>
                            </ul>
                        </li>
                        <!--termina notificaciones-->
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li>
                                    <a href="{{ route ('saludo') }}">Representantes de las viviendas</a>
                                </li>
                                <li>
                                    <a href="{{ route('notificaciones') }}"> Notificaciones </a>
                                </li>
                                <li>
                                    <a href="{{ route('reserva.index') }}"> Reservas de Instalaciones </a>
                                </li>
                                <li>
                                    <a href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        Cerrar Session
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                                </li>
                            </ul>
                        </li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>
    @include('flash::message')
    <section>
        <div class="container">
                <div class="col-md-8 col-md-offset-2">
                    <div class="panel panel-primary">
                        <div class="panel-heading">Registro de personas en Vivienda</div>
                        <br>
                            <div class="correr">
                                 {!! Form::open(['route' => 'personas.store', 'method' => 'POST']) !!}

                                <div class="form-group">
                                    {!! Form::label('correo','Cedula del Propietario') !!}
                                    {!! Form::text('cedulap',null,['class' => 'corredero','placeholder'=>'Cedula del Propietario', 'required']) !!}
                                </div>

                                <div class="form-group">
                                    {!! Form::label('parentesco','Parentesco con el Propietario') !!}
                                    {!! Form::text('parentesco',null,['class' => 'corredero','placeholder'=>'Parentesco con el Propietario', 'required']) !!}
                                </div>

                                <div class="form-group">
                                    {!! Form::label('cedula','Cedula') !!}
                                    {!! Form::text('cedula',null,['class' => 'corredero','placeholder'=>'Cedula', 'required','maxlength' => '10']) !!}

                                </div>

                                <div class="form-group">
                                    {!! Form::label('alquilado','Alquilado') !!}
                                    {!! Form::select('alquilado',['1'=>'Si','0'=>'No'],null,['class'=>'corredero']) !!}
                                </div>

                                <div class="form-group">
                                    {!! Form::label('nombre','Nombres') !!}
                                    {!! Form::text('nombre',null,['class' => 'corredero','placeholder'=>'Nombres', 'required']) !!}
                                </div>

                                <div class="form-group">
                                    {!! Form::label('apellido','Apellidos') !!}
                                    {!! Form::text('apellido',null,['class' => 'corredero','placeholder'=>'Apellidos', 'required']) !!}
                                </div>

                                <div class="form-group">
                                    {!! Form::label('numero','Numero de la casa y bloque') !!}
                                    {!! Form::select('numero',[
                                    '101' => '101','102' => '102','103' => '103',
                                    '201' => '201','202' => '202','203' => '203',
                                    '301' => '301','302' => '302','303' => '303',],null,['class' => 'corredero']) !!}

                                    {!! Form::select('bloque',['a' => 'a','b' => 'b'],null,['class' => 'corredero','placeholder'=>'bloque de la casa', 'required']) !!}

                                </div>

                                <div class="form-group">
                                    {!! Form::label('correo','Correo') !!}
                                    {!! Form::email('correo',null,['class' => 'corredero','placeholder'=>'ejemplo@ejemplo.com', 'required']) !!}
                                </div>

                                <div class="form-group">
                                    {!! Form::label('sexo','Sexo') !!}
                                    {!! Form::select('sexo',['m'=>'H','f'=>'M'],null,['class'=>'corredero']) !!}
                                </div>

                                <div class="corredero2"><div class="form-group">
                                    {!! Form::submit('Registrar',['class'=>'btn btn-primary']) !!}
                                </div></div>
                                {!! Form::close() !!}
                            </div>
                    </div>
                </div>
        </div>
    </section>



</div>

<!-- Scripts -->
<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>

