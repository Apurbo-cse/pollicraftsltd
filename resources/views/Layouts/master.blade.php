<!DOCTYPE html>
<html>

<head>
    @include('Layouts.Frontend.Header')
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
