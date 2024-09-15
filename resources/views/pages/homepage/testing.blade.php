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
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('css/testing1.css') }}" media="print" onload="this.media='all'">
    <link rel="stylesheet" href="{{ asset('css/testing2.css') }}" media="print" onload="this.media='all'">
    <style>
       * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        /* Navbar custom styles */
        .navbar {
            padding: 0.5rem 1rem;
        }

        /* Ensure flex alignment is handled by Bootstrap */
        .navbar-expand-lg {
            flex-direction: row;
        }

        /* Make sure the navbar brand and toggler button align properly */
        .navbar-brand {
            margin-right: auto; /* Pushes brand to the left */
        }

        /* Adjust padding and margin as needed */
        .navbar-nav {
            flex-direction: row;
        }

        .navbar-collapse {
          display: flex !important;
          flex-basis: auto;
        }

        .image-navbar-logo {
            transition: transform 0.3s ease;
            height: 50px;
            width: 150px;
        }
    </style>
</head>
<body>

    @include('layouts.navbar')

    <!-- Optional JavaScript; choose one of the two! -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" async></script>
</body>
</html>
