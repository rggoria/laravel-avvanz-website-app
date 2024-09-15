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
