<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>Laravel</title>

    <!-- Styles -->
    <style>
        body {
            /* background-image: url("{{ asset('xx.webp') }}"); */
            background-size: cover; 
            background-position: center; 
            background-attachment: fixed;
            background-repeat: no-repeat; 
            height: 100vh;
            margin: 0;
            padding: 0;
            background-color: rgba(255, 255, 255, 50);
            position: relative;
        }
        body::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    /* background-color: rgba(0, 0, 0, 0.5); Assombrir avec une couleur noire semi-transparente */
    z-index: -1; /* Placer l'overlay derrière le contenu */
}
    </style>
    {{-- @yield('title') --}}
</head>
<body>
    @include('client.navbar.navbar_client')
    @yield('content')
    @include('client.footer.footer_client')
</body>
</html>
