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
    <div class="swiper mySwiper my-5">
        <div class="swiper-wrapper my-5">
            @foreach ( $trustedPartnerItems as $count => $item )
                <div class="swiper-slide">
                    <img
                        src="{{ asset('images/screen/' . $item) }}"
                        width="300"
                        height="200"
                        alt="Partner Image {{ $count }}"
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

@section('scripts')
    <script src="{{ asset('js/swiper.js') }}"></script>
@endsection

@endsection