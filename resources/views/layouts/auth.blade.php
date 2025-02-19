<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/style.css', 'resources/js/app.js'])
    <title>@yield('title', 'login')</title>
</head>

<body>
    @yield('content')
</body>

</html>