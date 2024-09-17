@extends('layouts.master')

@section('title')
Partnership Integration - Avvanz Global
@endsection

@section('content')

<!--  Navbar Section -->
@include('layouts.navbar')

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
    <div class="swiper mySwiper my-5">
        <div class="swiper-wrapper my-5">
            @foreach ( $trustedPartnerItems as $item )
                <div class="swiper-slide">
                    <img
                        src="{{ asset('images/screen/' . $item) }}"
                        class="img-fluid"
                        alt="Partner {{ $item }}"
                        loading="lazy">
                </div>
            @endforeach
        </div>
        <div class="swiper-pagination"></div>
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
    </div>
    <div class="row g-3 py-5">
        @foreach($partnerAchievementItems as $item)
            <div class="col-sm-12 col-md-6 col-lg-4 mb-4">
                <a href="{{ $item['link'] }}" class="text-decoration-none">
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

<!-- Floating Button -->
@include('layouts.floating')

<!-- Footer Section -->
@include('layouts.footer')

@section('scripts')
    <script src="{{ asset('js/swiper.js') }}"></script>
@endsection

@endsection