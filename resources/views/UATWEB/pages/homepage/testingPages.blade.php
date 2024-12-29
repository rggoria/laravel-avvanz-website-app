@extends('UATWEB.layouts.testingLayouts')

@section('title')
Avvanz - Background Checks & Screening
@endsection

<style>
    .bg-image-1 {
        background: url("{{ asset('images/homepage/homepageBg.webp') }}") no-repeat center;
        background-size: cover;
        position: relative;
        min-height: 300px;
    }
    .bg-image-2 {
        background: url("{{ asset('images/homepage/homepageBg.webp') }}") no-repeat center;
        background-size: cover;
        position: relative;
        min-height: 100px;
    }

    @media (max-width: 767px) {
        #carouselPartnershipItems .carousel-inner .carousel-item > div {
            display: none;
        }

        #carouselPartnershipItems .carousel-inner .carousel-item > div:first-child {
            display: block;
        }
    }

    #carouselPartnershipItems .carousel-inner .carousel-item.active,
    #carouselPartnershipItems .carousel-inner .carousel-item-next,
    #carouselPartnershipItems .carousel-inner .carousel-item-prev {
        display: flex;
    }

    @media (min-width: 768px) {
        #carouselPartnershipItems .carousel-inner .carousel-item-end.active,
        #carouselPartnershipItems .carousel-inner .carousel-item-next {
            transform: translateX(33%); /* adjust thist base on the column max number */
        }

        #carouselPartnershipItems .carousel-inner .carousel-item-start.active, 
        #carouselPartnershipItems .carousel-inner .carousel-item-prev {
            transform: translateX(-33%); /* adjust thist base on the column max number */
        }
    }

    #carouselPartnershipItems .carousel-inner .carousel-item-end,
    #carouselPartnershipItems .carousel-inner .carousel-item-start { 
        transform: translateX(0);
    }
</style>

@endsection

@section('content')

<!-- Hero Section -->
<section class="bg-image-1">
    <div class="container padding-vertical">
        <div class="row">
            <div class="col-md-6 order-2 order-md-1 justify-content-center align-content-center">
                <div class="text-white">
                    <h1 class="fw-bolder display-5">
                        We Screen & Strengthen your Human Assets
                    </h1>
                    <div class="divider-start-50"></div>
                    <p>
                        Avvanz is a multi-award winning HRTech and FinTech company that helps more than 3000 companies around the globe mitigate people related risks through background checks and due diligence solutions and enhance their skills and competencies through highly interactive training solutions suited for the Digital Economy.
                    </p>
                    <a href="{{ route('contact') }}" class="btn hero-button fw-bolder" aria-label="Request a demo">Request a Demo</a>
                </div>
            </div>
            <div class="col-md-6 order-1 order-md-2 justify-content-center align-content-center text-center">
                <img src="{{ asset('images/homepage/homepage1-w.webp') }}" alt="Avvanz homepage image showcasing background check services" class="img-fluid transition-up" width="360" height="360" loading="lazy">
            </div>
        </div>
    </div>
</section>

@endsection