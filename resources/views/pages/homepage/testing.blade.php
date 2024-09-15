<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Bootstrap Website</title>
    <meta name="description" content="Our Multi-award winning background checks platform ScreenGlobal will help you mitigate risk due to wrongful hires.">
    <!-- Bootstrap 5 CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" media="print" onload="this.media='all'">
    <!-- Font Awesome CSS CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"  media="print" onload="this.media='all'">
    <!-- Critical CSS -->
    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }
                /* Navbar #1 */
        .navbar.navbar-dark.bg-ji {
            background-color: #1c3843; /* Example color, replace with actual */
        }

        .navbar-dark .navbar-brand .text-marigold {
            color: #ee9b26; /* Example color, replace with actual */
        }

        .navbar-nav .nav-link {
            font-weight: bolder;
            text-transform: uppercase;
        }

        /* Navbar #2 */
        .navbar.navbar-light.bg-white {
            background-color: #fff;
        }

        .navbar-light .navbar-brand .image-navbar-logo {
            width: 150px;
            height: 50px;
        }

        .navbar-toggler {
            border: none; /* Remove default border */
        }

        .navbar-nav .nav-link {
            font-weight: bolder;
            text-transform: uppercase;
        }

        /* Dropdowns */
        .navbar-nav .dropdown-menu {
            background-color: #fff; /* Adjust if needed */
            border: 1px solid #ddd; /* Adjust border color */
        }

        .dropdown-item {
            font-weight: bolder;
        }

        /* Ensure dropdown items don't cause layout shifts */
        .dropdown-menu.show {
            display: block;
        }

        /* General body and container styles */
        body {
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 1140px; /* Example width, adjust as needed */
            margin: auto;
        }
    </style>
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" media="print" onload="this.media='all'">
    <link rel="stylesheet" href="{{ asset('css/homepage.css') }}" media="print" onload="this.media='all'">   
</head>
<body>
    @include('layouts.navbar')

    <!-- Hero Section #1 -->
    <section class="bg-image">
        <div class="container py-5">
            <div class="row text-white">
                <div class="col-md-6 order-2 order-md-1 d-flex align-items-center">
                    <div class="text-white">
                        <h1 class="fw-bolder display-5">
                            We Screen & Strengthen your Human Assets
                        </h1>
                        <h1 class="divider-start-50"></h1>
                        <p>
                            Avvanz is a multi-award winning HRTech and FinTech company that helps more than 3000 companies around the globe mitigate people related risks through background checks and due diligence solutions and enhance their skills and competencies through highly interactive training solutions suited for the Digital Economy.
                        </p>
                        <a href="{{ route('contact') }}" class="btn hero-button text-uppercase fw-bolder">Request a Demo</a>
                    </div>
                </div>
                <div class="col-md-6 order-1 order-md-2 d-flex align-items-center justify-content-center">
                    <img src="{{ asset('images/homepage/homepage1.webp') }}" alt="Placeholder Image" class="transition-up image-hero">
                </div>
            </div>
        </div>
    </section>

    <!-- Optional JavaScript; choose one of the two! -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" async></script>
</body>
</html>
