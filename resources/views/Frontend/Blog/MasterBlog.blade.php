<!DOCTYPE html>
<html lang="en-US">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Katen - Minimal Blog & Magazine HTML Theme</title>
    <meta name="description" content="Katen - Minimal Blog & Magazine HTML Theme">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link href="{{asset('Blog/css/style.css')}}" rel="stylesheet">

</head>

<body>

    <!-- Top -->
    <div class="header" id="home">
        @include('Layouts.Frontend.Topheader')
    </div>
    <!-- // Top -->

    <!-- Navbar -->
    <div class="ban-top">
        @include('Layouts.Frontend.Navbar')
    </div>
    <!-- // Navbar -->

    <!-- Main Content -->
    @yield('content')
    <!-- // Main Content -->
    

    <!-- Footer -->
    @include('Layouts.Frontend.Footer')
    <!-- // Footer -->


    @include('Layouts.Frontend.Scripts')

</body>

</html>
