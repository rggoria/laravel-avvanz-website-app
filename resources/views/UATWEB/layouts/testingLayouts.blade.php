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
</style>
<body>
    @yield('content')

    <!-- Floating Button -->
    @include('UATWEB.partials.floating')
</body>
</html>