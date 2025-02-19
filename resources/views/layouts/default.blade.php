<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Condominio</title>


    <!-- Incluyendo de Bootstrap-->
    <link href="{{ asset('plugins/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

    <!-- Custom Fonts -->
    <link href="{{ asset('plugins/vendor/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>

    <!-- Plugin CSS -->
    <link href="{{ asset('plugins/vendor/magnific-popup/magnific-popup.css') }}" rel="stylesheet">

    <!-- Theme CSS -->
    <link href="{{ asset('plugins/vendor/bootstrap/css/creative.css') }}" rel="stylesheet">

</head>

<body id="page-top">

    @yield('nav')

    <header>

        <div class="header-content">
            <br><br><br><br><br>

                <a href="{{ route ('inicio') }}" class="btn btn-primary btn-xl">Inicia Sesion</a>
            <hr>
        </div>
    </header>
    @include('flash::message')
    @yield('content')

    <!-- jQuery -->
    <script src=" {{ asset('plugins/vendor/jquery/jquery.js') }} "></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="{{ asset('plugins/vendor/bootstrap/js/bootstrap.js') }}"></script>

    <!-- Plugin JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="{{ asset('plugins/vendor/scrollreveal/scrollreveal.js') }}"></script>
    <script src="{{ asset('plugins/vendor/magnific-popup/jquery.magnific-popup.js') }}"></script>

    <!-- Theme JavaScript -->
    <script src="{{ asset('plugins/bootstrap/js/creative.js') }}"></script>

</body>


</html>


