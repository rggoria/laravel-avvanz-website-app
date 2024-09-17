<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Optimized Bootstrap Page</title>
    
    <!-- Preload Bootstrap CSS -->
    <link rel="preload" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" as="style">
    <!-- Font Awesome CSS CDN -->
    <link rel="preload" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" as="style">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" media="print" onload="this.media='all'">
    <link rel="stylesheet" href="{{ asset('css/homepage.css') }}" media="print" onload="this.media='all'">
    <!-- Minified Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <style>
        body {
            margin: 0;
            padding: 0;
        }
        .bg-image {
            background: url("../images/homepage/homepageBg.webp") no-repeat center;
            background-size: cover;
            position: relative;
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
    </style>
</head>
<body>
    @include('layouts.navbar')
    <!-- Hero Section #1 -->
    <section class="bg-image">
        <div class="container padding-vertical">
            <div class="row text-white">
                <div class="col-md-6 order-1 order-md-2 d-flex align-items-center justify-content-center">
                    <img
                        src="{{ asset('images/homepage/homepage1.webp') }}"
                        alt="Placeholder Image"
                        class="transition-up image-hero"
                        loading="lazy">
                </div>
                <div class="col-md-6 order-2 order-md-1">
                    <div class="text-white">
                        <h1 class="fw-bolder display-5">
                            We Screen & Strengthen your Human Assets
                        </h1>
                        <h1 class="divider-start-50"></h1>
                        <br>
                        <p>
                            Avvanz is a multi-award winning HRTech and FinTech company that helps more than 3000 companies around the globe mitigate people related risks through background checks and due diligence solutions and enhance their skills and competencies through highly interactive training solutions suited for the Digital Economy.
                        </p>
                        <br>
                        <a href="{{ route('contact') }}" class="btn hero-button text-uppercase fw-bolder">Request a Demo</a>
                    </div>
                </div>                
            </div>
        </div>
    </section>
    
    <!-- Deferred Bootstrap JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" defer></script>
</body>
</html>
