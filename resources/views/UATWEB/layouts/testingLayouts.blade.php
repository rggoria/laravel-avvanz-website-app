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
    <!-- Preload Bootstrap CSS -->
    <link rel="preload" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" as="style" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    {{-- Preload Image --}}
    <link rel="preload" href="{{ asset('images/homepage/avvanzLogoChristmas_v1.webp') }}" as="image">
    <!-- Minified Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" media="print" onload="this.media='all'" />

    <!-- Critical CSS -->
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", "Roboto", "Helvetica Neue", Arial, sans-serif;
        }
        .bg-image-1 {
            background: url("../images/homepage/homepageBg.webp") no-repeat center;
            background-size: cover;
            position: relative;
            min-height: 300px
        }
        .bg-image-2 {
            background: url("../images/homepage/homepageBg.webp") no-repeat center;
            background-size: cover;
            position: relative;
            min-height: 100px;
        }
        .bg-image-christmas {
            background: url("../images/homepage/avvanzBgChristmas2.webp") no-repeat center center;
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center;
        }

        .padding-vertical {
            padding-top: 3rem;
            padding-bottom: 3rem;
        }
        .margin-vertical {
            margin-top: 3rem;
            margin-bottom: 3rem;
        }
        .section-padding {
            padding: 3rem;
        }
        .text-white {
            color: white;
        }
        .text-center {
            text-align: center;
        }
        /* Cookie consent styles */
        .cookie-consent-banner {
            position: fixed;
            bottom: 0;
            left: 0;
            width: 100%;
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 10px 0;
            font-size: 16px;
            display: none;
            z-index: 9999;
        }
        .accept-cookies-btn, .reject-cookies-btn {
            background-color: green;
            color: #fff;
            padding: 5px 10px;
            font-size: 16px;
            border: none;
            cursor: pointer;
            margin: 5px;
        }
        .reject-cookies-btn {
            background-color: red;
        }
    </style>

    <link rel="stylesheet" href="{{ asset('css/style.css') }}" media="print" onload="this.media='all'">
    @yield('css')
</head>
<body>
    <!-- Navbar -->
    @include('UATWEB.partials.navbar')

    <!-- Floating Button -->
    @include('UATWEB.partials.floating')

    @yield('content')

    <!-- jQuery CDN -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- Footer Section -->
    {{-- @include('UATWEB.partials.footer') --}}

    <!-- This site is converting visitors into subscribers and customers with https://respond.io -->
    <script defer id="respondio__widget" src="https://cdn.respond.io/webchat/widget/widget.js?cId=6850f5d54cbfd25be536b0b59847be5"></script>
    <!-- https://respond.io -->

    <!-- Custom JS -->
    <script src="{{ asset('js/index.js') }}" defer></script>

    <!-- Deferred Bootstrap JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" defer></script>
    @yield('scripts')
</body>
</html>
