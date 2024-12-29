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
    <link rel="preload" href="{{ asset('images/homepage/homepageBg.webp') }}" as="image" type="image/webp">
    <link rel="preload" href="{{ asset('images/homepage/homepage1-w.webp') }}" as="image" type="image/webp">
    <link rel="preload" href="{{ asset('images/homepage/avvanzLogoChristmas_v1.webp') }}" as="image">

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

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    @yield('css')

    <!-- Ensure async scripts don’t block page rendering -->
    <script async id="respondio__widget" src="https://cdn.respond.io/webchat/widget/widget.js?cId=6850f5d54cbfd25be536b0b59847be5"></script>
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
    @include('UATWEB.partials.footer')

    <!-- Cookie Consent Banner -->
    <div id="cookie-consent-banner" class="cookie-consent-banner" role="dialog" aria-labelledby="cookie-consent-heading" aria-live="assertive" aria-hidden="true">
        <h2 id="cookie-consent-heading" class="sr-only">Cookie Consent</h2>
        <p><b>Do you like cookies? </b> We use cookies to improve your experience. By using our site, you consent to cookies. You can accept or reject them.</p>
        <button id="accept-cookies" class="accept-cookies-btn" aria-label="Accept cookies">Accept</button>
        <button id="reject-cookies" class="reject-cookies-btn" aria-label="Reject cookies">Reject</button>
    </div>

    <!-- This site is converting visitors into subscribers and customers with https://respond.io -->
    <script defer id="respondio__widget" src="https://cdn.respond.io/webchat/widget/widget.js?cId=6850f5d54cbfd25be536b0b59847be5"></script>
    <!-- https://respond.io -->

    <!-- Custom JS -->
    <script src="{{ asset('js/index.js') }}" defer></script>

    <!-- Deferred Bootstrap JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" defer></script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const cookieConsentBanner = document.getElementById('cookie-consent-banner');
            const acceptCookiesButton = document.getElementById('accept-cookies');
            const rejectCookiesButton = document.getElementById('reject-cookies');
            
            // Check if cookies have been accepted or rejected before
            if (!localStorage.getItem('cookie_accepted') && !localStorage.getItem('cookie_rejected')) {
                cookieConsentBanner.style.display = 'block';
                cookieConsentBanner.setAttribute('aria-hidden', 'false');
                acceptCookiesButton.focus(); // Focus on the Accept button
            }

            // Handle acceptance of cookies
            acceptCookiesButton.addEventListener('click', function() {
                localStorage.setItem('cookie_accepted', 'true');
                localStorage.removeItem('cookie_rejected'); // In case the user previously rejected
                cookieConsentBanner.style.display = 'none';
                cookieConsentBanner.setAttribute('aria-hidden', 'true');
            });

            // Handle rejection of cookies
            rejectCookiesButton.addEventListener('click', function() {
                localStorage.setItem('cookie_rejected', 'true');
                localStorage.removeItem('cookie_accepted'); // In case the user accepted before
                cookieConsentBanner.style.display = 'none';
                cookieConsentBanner.setAttribute('aria-hidden', 'true');
            });

            // Close the banner with the Escape key
            document.addEventListener('keydown', function(event) {
                if (event.key === 'Escape' && cookieConsentBanner.style.display === 'block') {
                    cookieConsentBanner.style.display = 'none';
                    cookieConsentBanner.setAttribute('aria-hidden', 'true');
                }
            });
        });
    </script>

    @yield('scripts')
</body>
</html>