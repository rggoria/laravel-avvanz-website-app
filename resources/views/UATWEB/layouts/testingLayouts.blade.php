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

    <!-- Preload critical resources -->
    <link rel="preload" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" as="style" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="preload" href="{{ asset('images/homepage/homepage1-w.webp') }}" as="image">
    <link rel="preload" href="{{ asset('images/homepage/homepageBg.webp') }}" as="image">

    <!-- Minified Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", "Roboto", "Helvetica Neue", Arial, sans-serif;
        }

        .bg-image {
            background-repeat: no-repeat;
            background-size: cover;
            position: relative;
        }

        .bg-image-1 {
            background-image: url("{{ asset('images/homepage/homepageBg.webp') }}");
            min-height: 300px;
        }

        .bg-image-2 {
            background-image: url("{{ asset('images/homepage/homepageBg.webp') }}");
            min-height: 100px;
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

    @yield('css')
</head>

<body>
    @include('UATWEB.partials.navbar')
    @include('UATWEB.partials.floating')

    <div id="cookie-consent-banner" class="cookie-consent-banner" role="dialog" aria-labelledby="cookie-consent-heading" aria-live="assertive" aria-hidden="true">
        <h2 id="cookie-consent-heading" class="sr-only">Cookie Consent</h2>
        <p><b>Do you like cookies? </b> We use cookies to improve your experience. By using our site, you consent to cookies. You can accept or reject them.</p>
        <button id="accept-cookies" class="accept-cookies-btn" aria-label="Accept cookies">Accept</button>
        <button id="reject-cookies" class="reject-cookies-btn" aria-label="Reject cookies">Reject</button>
    </div>

    @yield('content')

    <!-- jQuery CDN -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" defer></script>

    <!-- Custom JS -->
    <script src="{{ asset('js/index.js') }}" defer></script>

    <!-- Deferred Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" defer></script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const cookieConsentBanner = document.getElementById('cookie-consent-banner');
            const acceptCookiesButton = document.getElementById('accept-cookies');
            const rejectCookiesButton = document.getElementById('reject-cookies');
            
            if (!localStorage.getItem('cookie_accepted') && !localStorage.getItem('cookie_rejected')) {
                cookieConsentBanner.style.display = 'block';
                cookieConsentBanner.setAttribute('aria-hidden', 'false');
                acceptCookiesButton.focus();
            }

            acceptCookiesButton.addEventListener('click', function() {
                localStorage.setItem('cookie_accepted', 'true');
                localStorage.removeItem('cookie_rejected');
                cookieConsentBanner.style.display = 'none';
                cookieConsentBanner.setAttribute('aria-hidden', 'true');
            });

            rejectCookiesButton.addEventListener('click', function() {
                localStorage.setItem('cookie_rejected', 'true');
                localStorage.removeItem('cookie_accepted');
                cookieConsentBanner.style.display = 'none';
                cookieConsentBanner.setAttribute('aria-hidden', 'true');
            });

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
