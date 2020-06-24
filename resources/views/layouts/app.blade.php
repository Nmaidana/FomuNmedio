<!DOCTYPE html>
<html lang="es" style="margin-left: 0px;">

<head>
    <nav class="main-header navbar navbar-expand navbar-dark navbar-info" style="margin-left: 0px;">
    <div class="">
                    <img src="{{asset('Logo1.jpg')}}"class="brand-image img-circle elevation-3" style="opacity: .8; float: left;
                           margin-right: 0.5rem;
                        margin-top: 0px; max-height: 40px; width: auto;">
                </div>
    </nav>
    <link rel="stylesheet" href="{{ asset('wolfsyncro/adminlte3/plugins/fontawesome-free/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('wolfsyncro/adminlte3/dist/css/adminlte.min.css') }}">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    @yield('css')
</head>

<body class="hold-transition sidebar-mini" style="margin-left: 0px;">
    <div class="wrapper">
        <div class="content-wrapper" style="margin-left: 0px;"><br></br>
            <div class="content" >
                <div class="container-fluid">@yield('content') </div>
            </div>
        </div>
    </div>
    <script src="{{ asset('wolfsyncro/adminlte3/plugins/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('wolfsyncro/adminlte3/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('wolfsyncro/adminlte3/dist/js/adminlte.min.js') }}"></script>@yield('scripts')
</body>

</html>
