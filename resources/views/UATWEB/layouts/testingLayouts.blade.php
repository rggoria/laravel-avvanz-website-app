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
        /* Optional: Style for ensuring proper widget size and positioning */
        #respondio-widget {
            position: fixed;  /* Fixes the widget in place */
            right: 25px !important; /* Position it on the right side */
            bottom: 25px !important; /* Position it at the bottom */
            width: 300px; /* Adjust the width */
            height: 500px; /* Adjust the height */
            border: none; /* Remove the border */
            z-index: 9999; /* Ensure it appears above other elements */
        }
    </style>
</head>
<body>
    @yield('content')

    <!-- This site is converting visitors into subscribers and customers with https://respond.io -->
    <iframe id="respondio-widget" src="https://cdn.respond.io/webchat/widget/chat.html?" width="100%" height="100%" frameborder="0" allowfullscreen="true" webkitallowfullscreen="true" mozallowfullscreen="true"></iframe>
    <!-- https://respond.io -->
</body>
</html>
