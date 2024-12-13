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
    <link rel="preload" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" as="style">
    <!-- Minified Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Preconnect for external resources -->
    <link rel="preconnect" href="https://cdn.jsdelivr.net" crossorigin>
    <link rel="preconnect" href="https://kit.fontawesome.com" crossorigin>
    <!-- Font Awesome Kit -->
    <script src="https://kit.fontawesome.com/134c64fe1d.js" crossorigin="anonymous"></script>
    <!-- Critical CSS -->
    <style>
        body {
            margin: 0;
            padding: 0;
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
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" media="print" onload="this.media='all'">
    @yield('css')
</head>
<body>
    <!-- Navbar -->
    @include('UATWEB.partials.navbar')
    @yield('content')

    <!-- Floating Button -->
    @include('UATWEB.partials.floating')

    <!-- Footer Section -->
    @include('UATWEB.partials.footer')

    <!-- Cookie Consent Banner -->
    <div id="cookie-consent-banner" class="cookie-consent-banner">
        <p><b>Do you like cookies? 🍪</b> We use cookies to improve your experience. By using our site, you consent to cookies. You can accept or reject them.</p>
        <button id="accept-cookies" class="accept-cookies-btn">Accept</button>
        <button id="reject-cookies" class="reject-cookies-btn">Reject</button>
    </div>

    <!-- Deferred Bootstrap JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" defer></script>
    <!-- jQuery CDN -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- Custom JS -->
    <script src="{{ asset('js/index.js') }}"></script>
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

    <!-- This site is converting visitors into subscribers and customers with https://respond.io -->
    <script id="respondio__widget" src="https://cdn.respond.io/webchat/widget/widget.js?cId=6850f5d54cbfd25be536b0b59847be5" defer></script>
    <!-- https://respond.io -->
</body>
</html>
