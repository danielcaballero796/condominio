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
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li>
                                    <a href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        Logout
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

    <section>
        <div class="container">
                <div class="col-md-8 col-md-offset-2">
                    <div class="panel panel-primary">
                        <div class="panel-heading">Registro de personas en Vivienda</div>
                        <br>
                            <div class="correr">
                                 {!! Form::open(['route' => 'personas.store', 'method' => 'POST']) !!}

                                <div class="form-group">
                                    {!! Form::label('cedula','Cedula') !!}
                                    {!! Form::text('cedula',null,['class' => 'corredero','placeholder'=>'Cedula', 'required']) !!}
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

