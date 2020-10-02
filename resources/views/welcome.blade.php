<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

  

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
    <body>
        <header> 
            <nav>  nav</nav> 
            <div class="container main">main </div>
        </header>
        <div class="container">a</div>
        <div class="container">b</div>
        <div class="container">c</div>
        <div class="container">d</div>
        <div class="container">e</div>

       
        <footer></footer>  
    </body>
</html>