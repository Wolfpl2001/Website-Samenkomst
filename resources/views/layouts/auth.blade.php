<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/style.css', 'resources/css/adduser.css','resources/js/app.js'])
    <title>@yield('title', 'login')</title>
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"> -->
    <!-- @include('layouts.nav') -->
</head>

<body>
    <!-- <div class="container mt-3">
        {{-- Zoekbalk wordt alleen getoond als de pagina @section('searchbar') gebruikt --}}
        @yield('searchbar')
    </div> -->
    <!-- @include('layouts.nav') -->

    @yield('content')


</html>