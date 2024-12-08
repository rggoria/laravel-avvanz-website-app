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
    <!-- Swiper CSS -->
    <link href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" rel="stylesheet">
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

    <!-- Modal Popup -->
    <div class="modal fade" id="imageModal" tabindex="-1" aria-labelledby="imageModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-body position-relative">
                    <button type="button" class="btn-close position-absolute top-0 end-0 m-2" data-bs-dismiss="modal" aria-label="Close" style="z-index: 10;"></button>

                    <a href="{{ route('leadership-home') }}">
                        <img src="{{ asset('images/homepage/leadership.webp') }}" alt="Leadership" class="img-fluid figure rounded shadow-lg">
                    </a>
                </div>
            </div>
        </div>
    </div>    

    <!-- Deferred Bootstrap JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" defer></script>
    <!-- jQuery CDN -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- Swiper JS CDN -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <!-- Custom JS -->
    <script src="{{ asset('js/index.js') }}"></script>
    @yield('scripts')

    <!-- Show Modal Automatically -->
    <script>
        $(document).ready(function() {
            // Show the modal when the page loads
            $('#imageModal').modal('show');
        });
    </script>

    <!-- This site is converting visitors into subscribers and customers with https://respond.io -->
    {{-- <script id="respondio__widget" src="https://cdn.respond.io/webchat/widget/widget.js?cId=6850f5d54cbfd25be536b0b59847be5"></script> --}}
    <!-- https://respond.io -->
</body>
</html>
