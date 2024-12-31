<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <meta name="description"
        content="Our Multi-award winning background checks platform ScreenGlobal will help you mitigate risk due to wrongful hires.">
    
    <!-- Website Icon -->
    <link rel="icon" type="image/x-icon" href="{{ asset('images/homepage/avvanz.ico') }}"/>

    <!-- Bootstrap CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- Respond.io CDN -->
    <script id="respondio__widget" src="https://cdn.respond.io/webchat/widget/widget.js?cId=6850f5d54cbfd25be536b0b59847be5"></script>
</head>
<style>
    :root {
        --carrotOrange: #de9228;
        --japaneseIndigo: #1c3843;
        --marigold: #ffab00;
        --pictonBlue: #3db2ed;
        --darkMidnightBlue: #12375f;
        --midnightGreen: #12475f;
        --seaGreen: #3c8d5c;
        --antiFlashWhite: #f2f2f2;
        --brightGray: #eaf1ee;

        --blackSqueeze: #e9f4f6;
        --linkWater: #d8e8f3;
        --givry: #f7e6c5;
        --periglacialBlue: #dce2d2;
        --dustStorm: #e9d6d5;
        --mojo: #bf3d36;
    }
    /* Floating Section */
    .floating-btn {
        position: fixed;
        width: 68px;
        height: 68px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        z-index: 9999;
        border: none;
        outline: none;
        box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
    }

    .floating-btn:focus {
        outline: 3px solid var(--darkMidnightBlue);
        box-shadow: 0 0 10px var(--darkMidnightBlue);
    }

    .floating-btn i {
        font-size: 2em;
    }

    .floating-btn img {
        width: 24px;
        height: 24px;
    }

    .floating-btn-left {
        background-color: var(--darkMidnightBlue);
        bottom: 20px;
        left: 20px;
    }

    .floating-btn-right {
        background-color: var(--seaGreen);
        bottom: 25px;
        right: 20px;
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
<link rel="preload" href="{{ asset('css/style.css') }}" as="style">
<body>
    <!-- Navbar -->
    @include('UATWEB.partials.navbar')

    @yield('content')

    <!-- Cookie Consent Banner -->
    <div id="cookie-consent-banner" class="cookie-consent-banner" role="dialog" aria-labelledby="cookie-consent-heading" aria-live="assertive" aria-hidden="true">
        <h2 id="cookie-consent-heading" class="sr-only">Cookie Consent</h2>
        <p><b>Do you like cookies? </b> We use cookies to improve your experience. By using our site, you consent to cookies. You can accept or reject them.</p>
        <button id="accept-cookies" class="accept-cookies-btn" aria-label="Accept cookies">Accept</button>
        <button id="reject-cookies" class="reject-cookies-btn" aria-label="Reject cookies">Reject</button>
    </div>

    <!-- Floating Button -->
    @include('UATWEB.partials.floating')

    <!-- jQuery CDN -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- Bootstrap JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

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

    <!-- Custom JS -->
    <script src="{{ asset('js/index.js') }}"></script>
</body>
</html>