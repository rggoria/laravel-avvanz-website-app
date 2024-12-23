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
    <style>
        /* Ensuring that the widget appears at the bottom-right without layout shifts */
        #respondio-widget-container {
            position: fixed;  /* Fixes the widget in place */
            right: 25px !important; /* Position it on the right side */
            bottom: 25px !important; /* Position it at the bottom */
            width: 300px; /* Set a fixed width */
            height: 500px; /* Set a fixed height */
            z-index: 9999; /* Ensure it appears above other content */
        }

        /* Optional: Set the size of the iframe or widget container if needed */
        iframe.dfa50 {
            width: 100% !important; /* Ensure it takes up 100% of the container width */
            height: 100% !important; /* Ensure it takes up 100% of the container height */
        }
    </style>
</head>
<body>
    @yield('content')

    <!-- This site is converting visitors into subscribers and customers with https://respond.io -->
    <div id="respondio-widget-container">
        <script defer id="respondio__widget" src="https://cdn.respond.io/webchat/widget/widget.js?cId=6850f5d54cbfd25be536b0b59847be5"></script>
    </div>
    <!-- https://respond.io -->
</body>
</html>
