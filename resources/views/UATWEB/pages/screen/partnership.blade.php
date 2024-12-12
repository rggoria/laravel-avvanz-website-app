@extends('UATWEB.layouts.main')

@section('title')
Partnership Integration - Avvanz Global
@endsection

@section('css')
<link rel="preload" href="{{ asset('images/screen/background/screenSubBg5.webp') }}" as="image">

<style>
    .bg-image-2 {
        background: url("../images/screen/background/screenSubBg5.webp") no-repeat center;
        background-size: cover;
        position: relative;
        min-height: 100px;
    }

    .bg-image-2::before {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(190, 201, 206, 0.6);
        z-index: 1;
    }

    .bg-image-2 .container {
        position: relative;
        z-index: 2;
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
<section class="bg-image-2">
    <div class="container padding-vertical">
        <div class="row text-white">
            <div class="col-md-7 offset-auto">
                <h1 class="fw-bolder display-5">
                    Partnership Integration
                </h1>
                <h1 class="divider-start-25"></h1>
                <p>
                    Collaborate with us
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Partners Section -->
<div class="container margin-vertical">
    <div class="text-center">
        <h1 class="text-dmb fw-bolder display-5">
            Discover Our Partners
        </h1>
        <h1 class="divider-center-25"></h1>
        <p class="mt-2">
            Connect with our trusted service providers and integration partners to streamline your background screening process.
        </p>
    </div>
    <div class="row justify-content-center my-5">
        <div id="carouselPartnershipItems" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                @foreach ($trustedPartnerItems as $count => $item)
                    <button type="button" data-bs-target="#carouselPartnershipItems" data-bs-slide-to="{{ $count }}" class="{{ $count === 0 ? 'active' : '' }}" aria-current="{{ $count === 0 ? 'true' : 'false' }}" aria-label="Slide {{ $count + 1 }}"></button>
                @endforeach
            </div>
            <div class="carousel-inner" role="listbox">
                @foreach ($trustedPartnerItems as $count => $item)
                    <div class="carousel-item {{ $count === 0 ? 'active' : '' }}">
                        <div class="col-md-4">
                            <div class="card mx-3">
                                <div class="card-img">
                                    <img 
                                    src="{{ asset('images/screen/' . $item) }}" 
                                    class="img-fluid"
                                    alt="{{ "Award ". $item }}"
                                    loading="lazy">
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselPartnershipItems" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselPartnershipItems" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <div class="row g-3 py-5">
        @foreach($partnerAchievementItems as $item)
            <div class="col-sm-12 col-md-6 col-lg-4 mb-4">
                <a href="{{ route('partnershipItem', ['title' => Str::slug($item['title'])]) }}" class="text-decoration-none">
                    <div class="card border-radius-dmb h-100">
                        <img
                            src="{{ asset('images/screen/' . $item['image']) }}"
                            class="card-img-top"
                            alt="{{ $item['title'] }}"
                            loading="lazy">
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title fw-bolder text-dmb">
                                {{ $item['title'] }}
                            </h5>
                            <div class="text-muted">
                                <small>
                                    {{ $item['created_at'] }}
                                </small>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        @endforeach
    </div>
</div>

@endsection

@section('scripts')
    <script>
        let items = document.querySelectorAll('#carouselPartnershipItems .carousel-item');
    
        items.forEach((el) => {
            const minPerSlide = 3;
            let next = el.nextElementSibling;
            for (let i = 1; i < minPerSlide; i++) {
                if (!next) {
                    next = items[0];
                }
                let cloneChild = next.cloneNode(true);
                el.appendChild(cloneChild.children[0]);
                next = next.nextElementSibling;
            }
        });
    </script>     
@endsection