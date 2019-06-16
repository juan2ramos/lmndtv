<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta name="description" content="@yield('description','La mejor noche de tu vida')">
    <meta name="author" content="juan2ramos">
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>La mejor noche de tu vida - @yield('title') </title>
    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,300i,400,400i,700,900" rel="stylesheet">
    <link href="{{asset('css/app.css')}}" rel="stylesheet" type="text/css">
</head>
<body data-site="{{env('APP_URL')}}" id="body">
    <main class="Main" id="app">
        <div class="Nav" id="Nav"></div>
        @yield('content')
    </main>
<script src="{{asset('js/app.js')}}"></script>
</body>
</html>
