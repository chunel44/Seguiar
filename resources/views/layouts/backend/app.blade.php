<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Admin Blog Ahuehuete</title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />

    <link rel="apple-touch-icon" sizes="57x57" href="{{ asset('admin/favicon/apple-icon-57x57.png') }}">
    <link rel="apple-touch-icon" sizes="60x60" href="{{ asset('admin/favicon/apple-icon-60x60.png') }}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('admin/favicon/apple-icon-72x72.png') }}">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('admin/favicon/apple-icon-76x76.png') }}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('admin/favicon/apple-icon-114x114.png') }}">
    <link rel="apple-touch-icon" sizes="120x120" href="{{ asset('admin/favicon/apple-icon-120x120.png') }}">
    <link rel="apple-touch-icon" sizes="144x144" href="{{ asset('admin/favicon/apple-icon-144x144.png') }}">
    <link rel="apple-touch-icon" sizes="152x152" href="{{ asset('admin/favicon/apple-icon-152x152.png') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('admin/favicon/apple-icon-180x180.png') }}">
    <link rel="icon" type="image/png" sizes="192x192"  href="{{ asset('admin/favicon/android-icon-192x192.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('admin/favicon/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="96x96" href="{{ asset('admin/favicon/favicon-96x96.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('admin/favicon/favicon-16x16.png') }}">
    <link rel="manifest" href="{{ asset('admin/favicon/manifest.json') }}">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="{{ asset('admin/favicon/ms-icon-144x144.png') }}">
    <meta name="theme-color" content="#ffffff">

    <link href="{{ asset('admin/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" >
    <link href="{{ asset('admin/css/material-dashboard.css') }}" rel="stylesheet" type="text/css" >
    <link href="{{ asset('admin/css/demo.css') }}" rel="stylesheet" type="text/css" >
    <link href="{{ asset('admin/css/font-awesome.css') }}" rel="stylesheet" type="text/css" >

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
          rel="stylesheet">
    @stack('css')
</head>
<body>
<div class="wrapper">
    @include('layouts.backend.partials.sidebar')

    <div class="main-panel">
        <nav class="navbar navbar-transparent navbar-absolute">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="#"> @if(Request::is('categories'))
                            Categorias
                        @elseif(Request::is('posts'))
                            Post
                        @elseif(Request::is('perfil'))
                            Perfil
                        @endif </a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <a href="{{ route('logout') }}" class="dropdown-toggle" data-toggle="dropdown"
                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                <i class="material-icons">exit_to_app</i>
                                <p class="hidden-lg hidden-md">Profile</p>
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                        </li>
                        <li class="separator hidden-lg hidden-md"></li>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="content">
            <div class="container-fluid">
                @yield('content')
            </div>
        </div>

    </div>
</div>


<script type="text/javascript" src="{{ asset('admin/js/jquery-3.1.1.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('admin/js/jquery-ui.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('admin/js/bootstrap.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('admin/js/material.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('admin/js/perfect-scrollbar.jquery.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('admin/js/jquery.validate.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('admin/js/moment.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('admin/js/chartist.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('admin/js/jquery.bootstrap-wizard.js') }}"></script>
<script type="text/javascript" src="{{ asset('admin/js/bootstrap-notify.js') }}"></script>
<script type="text/javascript" src="{{ asset('admin/js/jquery.sharrre.js') }}"></script>
<script type="text/javascript" src="{{ asset('admin/js/bootstrap-datetimepicker.js') }}"></script>
<script type="text/javascript" src="{{ asset('admin/js/nouislider.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('admin/js/jquery.select-bootstrap.js') }}"></script>
<script type="text/javascript" src="{{ asset('admin/js/jquery.datatables.js') }}"></script>
<script type="text/javascript" src="{{ asset('admin/js/sweetalert2.js') }}"></script>
<script type="text/javascript" src="{{ asset('admin/js/jasny-bootstrap.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('admin/js/fullcalendar.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('admin/js/jquery.tagsinput.js') }}"></script>
<script type="text/javascript" src="{{ asset('admin/js/material-dashboard.js') }}"></script>
<script type="text/javascript" src="{{ asset('admin/js/demo.js') }}"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
{!! Toastr::message() !!}
<script>
    @if($errors->any())
    @foreach($errors->all() as $error)
    toastr.error('{{ $error }}','Error',{
        closeButton:true,
        progressBar:true,
    });
    @endforeach
    @endif
</script>
@stack('js')

</body>
</html>
