<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Seguiar</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/css/fonts.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/jquery.fancybox.min.css')}}" />
    @yield('css')
</head>
<body>

@include('layouts.frontend.partials.header')
@yield('content')
@include('layouts.frontend.partials.footer')

<script type="text/javascript" src="{{asset('frontend/js/jquery-3.3.1.min.js')}}"></script>
<script type="text/javascript" src="{{asset('frontend/js/bootstrap.min.js')}}"></script>
<script type="text/javascript" src="{{asset('frontend/js/masonry.pkgd.min.js')}}"></script>
<script type="text/javascript" src="{{asset('frontend/js/jquery.fancybox.min.js')}}"></script>
<script type="text/javascript" src="{{asset('frontend/js/slide.js')}}"></script>
<script src="{{ asset('js/app.js') }}"></script>
@yield('js')
</body>
</html>