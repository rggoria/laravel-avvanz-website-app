<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <meta name="description" content="Our Multi-award winning background checks platform ScreenGlobal will help you mitigate risk due to wrongful hires.">
    
    <!-- Website Icon -->
    <link rel="icon" type="image/x-icon" href="{{ asset('images/homepage/avvanz.ico') }}"/>

    <!-- Preload Critical CSS -->
    <link rel="preload" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" as="style" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="preload" href="{{ asset('css/style.css') }}" as="style">
    
    <!-- Preload Google Fonts with font-display swap -->
    <link rel="preload" href="https://fonts.googleapis.com/css?family=Roboto:400,400i,700,700i&display=swap" as="style" />

    <!-- Preload logo image for faster LCP -->
    <link rel="preload" href="{{ asset('images/homepage/avvanzLogoChristmas_v1.webp') }}" as="image" type="image/webp" />
    
    <!-- Minified Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    <!-- Custom Stylesheet -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    @yield('css') <!-- Allow additional styles from specific pages -->
</head>
<body>
    <!-- Navbar -->
    @include('UATWEB.partials.navbar')

    <!-- Floating Button -->
    @include('UATWEB.partials.floating')

    <!-- Main Content -->
    @yield('content')

    <!-- Footer Section -->
    @include('UATWEB.partials.footer')

    <!-- Webchat (Defer this to load after the page content) -->
    <script defer id="respondio__widget" src="https://cdn.respond.io/webchat/widget/widget.js?cId=6850f5d54cbfd25be536b0b59847be5"></script>

    <!-- Core JavaScript Libraries -->
    <!-- jQuery CDN (Do not use async; it's critical for other scripts) -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- Bootstrap JavaScript (with defer to prevent render blocking) -->
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Custom JavaScript (Defer to load last, after everything else) -->
    <script src="{{ asset('js/index.js') }}" defer></script>

    @yield('scripts') <!-- Allow additional scripts from specific pages -->
</body>
</html>
