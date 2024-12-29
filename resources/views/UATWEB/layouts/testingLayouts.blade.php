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

    <!-- Preload Images -->
    <link rel="preload" href="{{ asset('images/homepage/homepageBg.webp') }}" as="image" type="image/webp">
    <link rel="preload" href="{{ asset('images/homepage/homepage1-w.webp') }}" as="image" type="image/webp">
    <link rel="preload" href="{{ asset('images/homepage/avvanzLogoChristmas_v1.webp') }}" as="image">

    <!-- Preload Custom CSS -->
    <link rel="preload" href="{{ asset('css/style.css') }}" as="style">

    <!-- Preload Respond.io Script -->
    <link rel="preload" href="https://cdn.respond.io/webchat/widget/widget.js?cId=6850f5d54cbfd25be536b0b59847be5" as="script">

    <!-- Minified Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- Critical CSS -->
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", "Roboto", "Helvetica Neue", Arial, sans-serif;
        }

        .bg-image-christmas {
            background: url("{{ asset('images/homepage/avvanzBgChristmas2.webp') }}") no-repeat center center;
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

        /* Cookie Consent Banner */
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
            z-index: 9998;
            border-top: 2px solid #fff;
        }

        .accept-cookies-btn, .reject-cookies-btn {
            padding: 5px 10px;
            font-size: 16px;
            border: none;
            cursor: pointer;
            margin: 5px;
            color: #fff;
        }

        .accept-cookies-btn {
            background-color: green;
        }

        .reject-cookies-btn {
            background-color: #c0392b;
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    @include('UATWEB.partials.navbar')

    <!-- Floating Button -->
    @include('UATWEB.partials.floating')

    @yield('content')

    <!-- jQuery CDN -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" defer></script>

    <!-- Respond.io Script (Lazy-loaded) -->
    <script async id="respondio__widget" src="https://cdn.respond.io/webchat/widget/widget.js?cId=6850f5d54cbfd25be536b0b59847be5"></script>

    <!-- Custom JS -->
    <script src="{{ asset('js/index.js') }}" defer></script>
</body>
</html>
