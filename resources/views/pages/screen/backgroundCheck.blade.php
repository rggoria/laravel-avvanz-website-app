@extends('layouts.master')

@section('title')
Background Checks Singapore - Avvanz Global
@endsection

@section('css')
<link rel="preload" href="{{ asset('images/homepage/homepageBg.webp') }}" as="image">
@endsection()

@section('content')

<!-- Hero Section -->
<section class="bg-image-2">
    <div class="container padding-vertical">
        <div class="row text-white">
            <div class="col-md-7 offset-auto">
                <h1 class="fw-bolder display-5">
                    Background Checks
                </h1>
                <h1 class="divider-start-25"></h1>
                <p>
                    Know Who You’re Hiring
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Background Check​ Section -->
<section class="container margin-vertical">
    <div class="row g-3">
        <div class="col-md-7 d-flex align-items-center">
            <div>
                <h1 class="fw-bolder display-5 text-dmb mb-3">
                    What types of background checks are offered?
                </h1>
                <p>
                    Combat resume discrepancies with <span class="fw-bolder">Avvanz’s</span> comprehensive background check solutions. Ensure trustworthy hires and protect your organization’s assets with both pre-employment and in-employment screening.
                </p>
            </div>
        </div>
        <div class="col-md-5 d-flex align-items-center justify-content-center">
            <img 
                src="{{ asset('images/screen/backgroundcheck.webp') }}" 
                alt="Placeholder Image" 
                class="transition-up img-fluid rounded-3 w-auto h-auto"
                loading="lazy">
        </div>
    </div>

    <!-- Due Diligence Background Checks -->
    <div class="my-5">
        <h1 class="text-center text-dmb fw-bolder display-5">
            Due Diligence Background Checks
        </h1>
        <h1 class="text-center divider-center-25"></h1>
        <div class="swiper mySwiper pb-5">
            <div class="swiper-wrapper my-5">
                @foreach ( $dueDiligenceItems as $item )
                    <div class="swiper-slide">
                        <div class="card p-3 d-flex justify-content-center align-items-center bg-mg text-white" style="height: 20rem">
                            <div class="card-body">
                                <div class="mb-3">
                                    <i class="fas {{ $item['icon'] }} fa-2x"></i>
                                </div>
                                <h4 class="card-title fw-bolder">
                                    {{ $item['title'] }}
                                </h4>
                                <p class="card-text">
                                    {{ $item['description'] }}
                                </p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="swiper-pagination"></div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
        </div>
    </div>

    <!-- Identity Checks -->
    <div class="my-5">
        <h1 class="text-center text-dmb fw-bolder display-5">
            Identity Checks
        </h1>
        <h1 class="text-center divider-center-25"></h1>
        <div class="swiper mySwiper">
            <div class="swiper-wrapper my-5">
                @foreach ( $identityCheck as $item )
                    <div class="swiper-slide">
                        <div class="card p-3 d-flex justify-content-center align-items-center bg-mg text-white" style="height: 20rem">
                            <div class="card-body">
                                <div class="mb-3">
                                    <i class="fas {{ $item['icon'] }} fa-2x"></i>
                                </div>
                                <h4 class="card-title fw-bolder">
                                    {{ $item['title'] }}
                                </h4>
                                <p class="card-text">
                                    {{ $item['description'] }}
                                </p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="swiper-pagination"></div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
        </div>
    </div>

    <!-- Financial Checks -->
    <div class="my-5">
        <h1 class="text-center text-dmb fw-bolder display-5">
            Financial Checks
        </h1>
        <h1 class="text-center divider-center-25"></h1>
        <div class="swiper mySwiper">
            <div class="swiper-wrapper my-5">
                @foreach ( $financialCheck as $item )
                    <div class="swiper-slide">
                        <div class="card p-3 d-flex justify-content-center align-items-center bg-mg text-white" style="height: 20rem">
                            <div class="card-body">
                                <div class="mb-3">
                                    <i class="fas {{ $item['icon'] }} fa-2x"></i>
                                </div>
                                <h4 class="card-title fw-bolder">
                                    {{ $item['title'] }}
                                </h4>
                                <p class="card-text">
                                    {{ $item['description'] }}
                                </p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="swiper-pagination"></div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
        </div>
    </div>

    <!-- Integrity Checks -->
    <div class="my-5">
        <h1 class="text-center text-dmb fw-bolder display-5">
            Integrity Checks
        </h1>
        <h1 class="text-center divider-center-25"></h1>
        <div class="swiper mySwiper">
            <div class="swiper-wrapper my-5">
                @foreach ( $integrityCheck as $item )
                    <div class="swiper-slide">
                        <div class="card p-3 d-flex justify-content-center align-items-center bg-mg text-white" style="height: 20rem">
                            <div class="card-body">
                                <div class="mb-3">
                                    <i class="fas {{ $item['icon'] }} fa-2x"></i>
                                </div>
                                <h4 class="card-title fw-bolder">
                                    {{ $item['title'] }}
                                </h4>
                                <p class="card-text">
                                    {{ $item['description'] }}
                                </p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="swiper-pagination"></div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
        </div>
    </div>
</section>

<!-- Get Started with Avvanz Section -->
<section class="bg-afw py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-8 d-flex align-items-center">
                <div>
                    <h1 class="fw-bolder display-5">
                        Get Started with Avvanz
                    </h1>
                    <h1 class="divider-start-25"></h1>
                    <p class="mt-3">
                        Order checks in minutes with our uniquely innovative multi-award platform at <a href="https://www.avvanz.com/screenglobal/" class="link-hover">https://www.avvanz.com/screenglobal/</a>.
                    </p>
                    <ul class="list-unstyled">
                        <li class="d-flex align-items-start mb-2">
                            <i class="fas fa-check me-2 fs-6 mt-1 text-pb align-self-start"></i>
                            <span class="fw-bold">NO</span>&nbsp;lengthy onboarding
                        </li>
                        <li class="d-flex align-items-start mb-2">
                            <i class="fas fa-check me-2 fs-6 mt-1 text-pb align-self-start"></i>
                            As easy as ordering an item on an eCommerce store - More than 20 types of checks covering 150+ countries
                        </li>
                        <li class="d-flex align-items-start mb-2">
                            <i class="fas fa-check me-2 fs-6 mt-1 text-pb align-self-start"></i>
                            <span class="fw-bold">NO</span>&nbsp;Setup Fees
                        </li>
                        <li class="d-flex align-items-start mb-2">
                            <i class="fas fa-check me-2 fs-6 mt-1 text-pb align-self-start"></i>
                            <span class="fw-bold">NO</span>&nbsp;Onboarding Fees
                        </li>
                        <li class="d-flex align-items-start mb-2">
                            <i class="fas fa-check me-2 fs-6 mt-1 text-pb align-self-start"></i>
                            <span class="fw-bold">NO</span>&nbsp;Minimum Commitment
                        </li>
                        <li class="d-flex align-items-start mb-2">
                            <i class="fas fa-check me-2 fs-6 mt-1 text-pb align-self-start"></i>
                            <span class="fw-bold">NO</span>&nbsp;Subscription Fees
                        </li>
                        <li class="d-flex align-items-start mb-2">
                            <i class="fas fa-check me-2 fs-6 mt-1 text-pb align-self-start"></i>
                            Pay-per-Use
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-4 d-flex align-items-center justify-content-center">
                <div class="p-5 d-flex justify-content-center align-items-center border-radius-co h-100 w-100">
                    <div class="text-center">
                      <h4 class="fw-bolder text-dmb">Consult with Us</h4>
                      <br>
                      <a href="{{ route('contact') }}" class="btn text-uppercase btn-marigold-link">get started</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@section('scripts')
    <script src="{{ asset('js/backgroundCheckSwiper.js') }}"></script>
@endsection

@endsection