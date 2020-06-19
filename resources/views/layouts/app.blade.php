<!DOCTYPE html>
<html lang="es" style="margin-left: 0px;">

<head>
    <nav class="main-header navbar navbar-expand navbar-dark navbar-success" style="margin-left: 0px;">
        <div class="container">
            <a class="navbar-brand">
                
                <h3><i class="fa fa-home"></i> <strong><b>Formulario </b>Clase Media</strong></h3>
                <img src="{{asset('Logo1.jpg')}}" alt="" class="brand-image img-circle elevation-3" style="opacity: .8"> 
            </a>
    </nav>
    <link rel="stylesheet" href="{{ asset('wolfsyncro/adminlte3/plugins/fontawesome-free/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('wolfsyncro/adminlte3/dist/css/adminlte.min.css') }}">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    @yield('css')
</head>

<body class="hold-transition sidebar-mini" style="margin-left: 0px;">
    <div class="wrapper">
        <div class="content-wrapper" style="margin-left: 0px;"><br></br>
            <div class="content" style=" position: absolute; right: 350px;  width: 800px;">
                <div class="container-fluid">
                    @yield('content')
                </div>
            </div>
        </div>
    </div>
    <script src="{{ asset('wolfsyncro/adminlte3/plugins/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('wolfsyncro/adminlte3/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('wolfsyncro/adminlte3/dist/js/adminlte.min.js') }}"></script>

    @yield('scripts')

</body>

</html>
