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
        /* Optional: Prevent layout shifts by specifying widget size */
        #respondio__widget-container {
            width: 300px; /* Adjust width according to your design */
            height: 500px; /* Adjust height according to your design */
        }

        /* Optional: Add a loading indicator */
        .loading {
            text-align: center;
            font-size: 16px;
            color: #555;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    @yield('content')

    <!-- Optional: Display a loading message while the widget loads -->
    <div id="respondio__widget-container">
        <div class="loading">Loading chat...</div>
    </div>

    <!-- This site is converting visitors into subscribers and customers with https://respond.io -->
    <script defer id="respondio__widget" src="https://cdn.respond.io/webchat/widget/widget.js?cId=6850f5d54cbfd25be536b0b59847be5"></script>
    <!-- https://respond.io -->
</body>
</html>
