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
    
    <!-- Critical CSS -->
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", "Roboto", "Helvetica Neue", Arial, sans-serif;
        }
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
        }
        .accept-cookies-btn, .reject-cookies-btn {
            padding: 10px 20px;
            font-size: 16px;
            border: none;
            cursor: pointer;
            margin: 5px;
            font-weight: bold;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }


        .accept-cookies-btn {
            background-color: #4CAF50;
            color: #ffffff;
        }

        .accept-cookies-btn:hover {
            background-color: #45a049;
        }

        .reject-cookies-btn {
            background-color: #f44336;
            color: #ffffff;
        }

        .reject-cookies-btn:hover {
            background-color: #e53935;
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
    </style>

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

    <!-- Cookie Consent Banner -->
    <div id="cookie-consent-banner" class="cookie-consent-banner" role="alert" aria-live="assertive" aria-labelledby="cookie-banner-text">
        <p id="cookie-banner-text"><b>Do you like cookies?</b> We use cookies to improve your experience. By using our site, you consent to cookies. You can accept or reject them.</p>
        <button id="accept-cookies" class="accept-cookies-btn" aria-label="Accept cookies">Accept</button>
        <button id="reject-cookies" class="reject-cookies-btn" aria-label="Reject cookies">Reject</button>
    </div>

    <!-- Webchat (Defer this to load after the page content) -->
    <script defer id="respondio__widget" src="https://cdn.respond.io/webchat/widget/widget.js?cId=6850f5d54cbfd25be536b0b59847be5"></script>

    <!-- Core JavaScript Libraries -->
    <!-- jQuery CDN (Do not use async; it's critical for other scripts) -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- Bootstrap JavaScript (with defer to prevent render blocking) -->
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Custom JavaScript (Defer to load last, after everything else) -->
    <script src="{{ asset('js/index.js') }}" defer></script>

    @yield('scripts')

    <!-- Cookie Consent JavaScript -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const cookieConsentBanner = document.getElementById('cookie-consent-banner');
            const acceptCookiesButton = document.getElementById('accept-cookies');
            const rejectCookiesButton = document.getElementById('reject-cookies');
            
            // Check if cookies have been accepted or rejected before
            if (!localStorage.getItem('cookie_accepted') && !localStorage.getItem('cookie_rejected')) {
                cookieConsentBanner.style.display = 'block';
                cookieConsentBanner.setAttribute('aria-live', 'assertive');  // Announce the banner
                acceptCookiesButton.focus(); // Set focus to the first button
            }

            // Handle acceptance of cookies
            acceptCookiesButton.addEventListener('click', function() {
                localStorage.setItem('cookie_accepted', 'true');
                localStorage.removeItem('cookie_rejected'); // In case the user previously rejected
                cookieConsentBanner.style.display = 'none';
            });

            // Handle rejection of cookies
            rejectCookiesButton.addEventListener('click', function() {
                localStorage.setItem('cookie_rejected', 'true');
                localStorage.removeItem('cookie_accepted'); // In case the user accepted before
                cookieConsentBanner.style.display = 'none';
            });
        });
    </script>
</body>
</html>
