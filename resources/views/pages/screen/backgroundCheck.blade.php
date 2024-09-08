@extends('layouts.master')

@section('title')
Background Checks Singapore - Avvanz Global
@endsection

@section('css')
<link rel="stylesheet" href="{{ asset('css/screen.css') }}">
@endsection

@section('content')

{{-- Navbar Section --}}
@include('layouts.navbar')

<!-- Hero Section -->
<div class="bg-image">
    <div class="container">
        <div class="row text-white">
            <div class="col-md-7 offset-auto">
                <h1 class="fw-bolder">Background Checks​</h1>
                <h1 class="divider-start-25"></h1>
                <p>Know Who You’re Hiring</p>
            </div>
        </div>
    </div>
</div>

<!-- Background Check​ Section -->
<section class="my-5 container">
    <div class="row">
        <div class="col-md-7 d-flex align-items-center">
            <div>
                <h1 class="fw-bolder text-dmb">
                    What types of background checks are offered?
                </h1>
                <br>
                <p>
                    Combat resume discrepancies with Avvanz’s comprehensive background check solutions. Ensure trustworthy hires and protect your organization’s assets with both pre-employment and in-employment screening.
                </p>
            </div>
        </div>
        <div class="col-md-5 d-flex align-items-center justify-content-center">
            <img src="{{ asset('images/about-us-img-3-768x512.webp') }}" alt="Placeholder Image" class="transition-up img-fluid rounded-3 w-auto h-auto">
        </div>
    </div>

    <!-- Due Diligence Background Checks -->
    <div class="my-5">
        <h1 class="text-center text-dmb fw-bolder">Due Diligence Background Checks</h1>
        <h1 class="text-center divider-center-25"></h1>
        <div class="swiper mySwiper">
            <div class="swiper-wrapper my-5 text-white">
                <div class="swiper-slide">
                    <div class="card p-5 d-flex justify-content-center align-items-center bg-mg h-100 w-100">
                        <div class="card-body">
                            <div class="mb-3">
                                <i class="fas fa-film fa-2x"></i>
                            </div>
                            <h4 class="card-title fw-bolder">Global Watchlist and Sanctions</h4>
                            <p class="card-text">
                                We deliver negative media insights from thousands of global sources, spanning back to the early 1900s. It's not just about names, it's about behavior.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="card p-5 d-flex justify-content-center align-items-center bg-mg h-100 w-100">
                        <div class="card-body">
                            <div class="mb-3">
                                <i class="fas fa-globe fa-2x"></i>
                            </div>
                            <h4 class="card-title fw-bolder">Global Watchlist and Sanctions</h4>
                            <p class="card-text">
                                Elevate global compliance with our thorough due diligence solution. Screen 45+ regulatory bodies, 1600+ Watch Lists, covering AML, KYC, terrorism, and corruption.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="card p-5 d-flex justify-content-center align-items-center bg-mg h-100 w-100">
                        <div class="card-body">
                            <div class="mb-3">
                                <i class="fas fa-film fa-2x"></i>
                            </div>
                            <h4 class="card-title fw-bolder">Global Watchlist and Sanctions</h4>
                            <p class="card-text">
                                We deliver negative media insights from thousands of global sources, spanning back to the early 1900s. It's not just about names, it's about behavior.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="card p-5 d-flex justify-content-center align-items-center bg-mg h-100 w-100">
                        <div class="card-body">
                            <div class="mb-3">
                                <i class="fas fa-film fa-2x"></i>
                            </div>
                            <h4 class="card-title fw-bolder">Global Watchlist and Sanctions</h4>
                            <p class="card-text">
                                We deliver negative media insights from thousands of global sources, spanning back to the early 1900s. It's not just about names, it's about behavior.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-pagination"></div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
        </div>
    </div>

    <!-- Identity Checks -->
    <div class="my-5">
        <h1 class="text-center text-dmb fw-bolder">Identity Checks</h1>
        <h1 class="text-center divider-center-25"></h1>
        <div class="swiper mySwiper">
            <div class="swiper-wrapper my-5 text-white">
                <div class="swiper-slide">
                    <div class="card p-5 d-flex justify-content-center align-items-center bg-mg h-100 w-100">
                        <div class="card-body">
                            <div class="mb-3">
                                <i class="fas fa-film fa-2x"></i>
                            </div>
                            <h4 class="card-title fw-bolder">Global Watchlist and Sanctions</h4>
                            <p class="card-text">
                                We deliver negative media insights from thousands of global sources, spanning back to the early 1900s. It's not just about names, it's about behavior.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="card p-5 d-flex justify-content-center align-items-center bg-mg h-100 w-100">
                        <div class="card-body">
                            <div class="mb-3">
                                <i class="fas fa-globe fa-2x"></i>
                            </div>
                            <h4 class="card-title fw-bolder">Global Watchlist and Sanctions</h4>
                            <p class="card-text">
                                Elevate global compliance with our thorough due diligence solution. Screen 45+ regulatory bodies, 1600+ Watch Lists, covering AML, KYC, terrorism, and corruption.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="card p-5 d-flex justify-content-center align-items-center bg-mg h-100 w-100">
                        <div class="card-body">
                            <div class="mb-3">
                                <i class="fas fa-film fa-2x"></i>
                            </div>
                            <h4 class="card-title fw-bolder">Global Watchlist and Sanctions</h4>
                            <p class="card-text">
                                We deliver negative media insights from thousands of global sources, spanning back to the early 1900s. It's not just about names, it's about behavior.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="card p-5 d-flex justify-content-center align-items-center bg-mg h-100 w-100">
                        <div class="card-body">
                            <div class="mb-3">
                                <i class="fas fa-film fa-2x"></i>
                            </div>
                            <h4 class="card-title fw-bolder">Global Watchlist and Sanctions</h4>
                            <p class="card-text">
                                We deliver negative media insights from thousands of global sources, spanning back to the early 1900s. It's not just about names, it's about behavior.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-pagination"></div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
        </div>
    </div>

    <!-- Financial Checks -->
    <div class="my-5">
        <h1 class="text-center text-dmb fw-bolder">Financial Checks</h1>
        <h1 class="text-center divider-center-25"></h1>
        <div class="swiper mySwiper">
            <div class="swiper-wrapper my-5 text-white">
                <div class="swiper-slide">
                    <div class="card p-5 d-flex justify-content-center align-items-center bg-mg h-100 w-100">
                        <div class="card-body">
                            <div class="mb-3">
                                <i class="fas fa-film fa-2x"></i>
                            </div>
                            <h4 class="card-title fw-bolder">Global Watchlist and Sanctions</h4>
                            <p class="card-text">
                                We deliver negative media insights from thousands of global sources, spanning back to the early 1900s. It's not just about names, it's about behavior.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="card p-5 d-flex justify-content-center align-items-center bg-mg h-100 w-100">
                        <div class="card-body">
                            <div class="mb-3">
                                <i class="fas fa-globe fa-2x"></i>
                            </div>
                            <h4 class="card-title fw-bolder">Global Watchlist and Sanctions</h4>
                            <p class="card-text">
                                Elevate global compliance with our thorough due diligence solution. Screen 45+ regulatory bodies, 1600+ Watch Lists, covering AML, KYC, terrorism, and corruption.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="card p-5 d-flex justify-content-center align-items-center bg-mg h-100 w-100">
                        <div class="card-body">
                            <div class="mb-3">
                                <i class="fas fa-film fa-2x"></i>
                            </div>
                            <h4 class="card-title fw-bolder">Global Watchlist and Sanctions</h4>
                            <p class="card-text">
                                We deliver negative media insights from thousands of global sources, spanning back to the early 1900s. It's not just about names, it's about behavior.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="card p-5 d-flex justify-content-center align-items-center bg-mg h-100 w-100">
                        <div class="card-body">
                            <div class="mb-3">
                                <i class="fas fa-film fa-2x"></i>
                            </div>
                            <h4 class="card-title fw-bolder">Global Watchlist and Sanctions</h4>
                            <p class="card-text">
                                We deliver negative media insights from thousands of global sources, spanning back to the early 1900s. It's not just about names, it's about behavior.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-pagination"></div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
        </div>
    </div>

    <!-- Integrity Checks -->
    <div class="my-5">
        <h1 class="text-center text-dmb fw-bolder">Integrity Checks</h1>
        <h1 class="text-center divider-center-25"></h1>
        <div class="swiper mySwiper">
            <div class="swiper-wrapper my-5 text-white">
                <div class="swiper-slide">
                    <div class="card p-5 d-flex justify-content-center align-items-center bg-mg h-100 w-100">
                        <div class="card-body">
                            <div class="mb-3">
                                <i class="fas fa-film fa-2x"></i>
                            </div>
                            <h4 class="card-title fw-bolder">Global Watchlist and Sanctions</h4>
                            <p class="card-text">
                                We deliver negative media insights from thousands of global sources, spanning back to the early 1900s. It's not just about names, it's about behavior.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="card p-5 d-flex justify-content-center align-items-center bg-mg h-100 w-100">
                        <div class="card-body">
                            <div class="mb-3">
                                <i class="fas fa-globe fa-2x"></i>
                            </div>
                            <h4 class="card-title fw-bolder">Global Watchlist and Sanctions</h4>
                            <p class="card-text">
                                Elevate global compliance with our thorough due diligence solution. Screen 45+ regulatory bodies, 1600+ Watch Lists, covering AML, KYC, terrorism, and corruption.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="card p-5 d-flex justify-content-center align-items-center bg-mg h-100 w-100">
                        <div class="card-body">
                            <div class="mb-3">
                                <i class="fas fa-film fa-2x"></i>
                            </div>
                            <h4 class="card-title fw-bolder">Global Watchlist and Sanctions</h4>
                            <p class="card-text">
                                We deliver negative media insights from thousands of global sources, spanning back to the early 1900s. It's not just about names, it's about behavior.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="card p-5 d-flex justify-content-center align-items-center bg-mg h-100 w-100">
                        <div class="card-body">
                            <div class="mb-3">
                                <i class="fas fa-film fa-2x"></i>
                            </div>
                            <h4 class="card-title fw-bolder">Global Watchlist and Sanctions</h4>
                            <p class="card-text">
                                We deliver negative media insights from thousands of global sources, spanning back to the early 1900s. It's not just about names, it's about behavior.
                            </p>
                        </div>
                    </div>
                </div>
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
                    <h1 class="fw-bolder">Get Started with Avvanz</h1>
                    <h1 class="divider-start-25"></h1>
                    <br>
                    <p>
                        Order checks in minutes with our uniquely innovative multi-award platform at <a href="#" class="link-hover">https://www.avvanz.com/screenglobal/</a>.
                    </p>
                    <ul class="list-unstyled">
                        <li class="list-item">
                            <i class="fas fa-check list-icon text-pb"></i>
                            <span class="fw-bold">NO</span> lengthy onboarding
                        </li>
                        <li class="list-item">
                            <i class="fas fa-check list-icon text-pb"></i>
                            As easy as ordering an item on an eCommerce store - More than 20 types of checks covering 150+ countries
                        </li>
                        <li class="list-item">
                            <i class="fas fa-check list-icon text-pb"></i>
                            <span class="fw-bold">NO</span> Setup Fees
                        </li>
                        <li class="list-item">
                            <i class="fas fa-check list-icon text-pb"></i>
                            <span class="fw-bold">NO</span> Onboarding Fees
                        </li>
                        <li class="list-item">
                            <i class="fas fa-check list-icon text-pb"></i>
                            <span class="fw-bold">NO</span> Minimum Commitment
                        </li>
                        <li class="list-item">
                            <i class="fas fa-check list-icon text-pb"></i>
                            <span class="fw-bold">NO</span> Subscription Fees
                        </li>
                        <li class="list-item">
                            <i class="fas fa-check list-icon text-pb"></i>
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
                      <a href="#" class="btn text-uppercase btn-marigold-link">get started</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Floating Button -->
@include('layouts.floating')

<!-- Footer Section -->
@include('layouts.footer')

@endsection