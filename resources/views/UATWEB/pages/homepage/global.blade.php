@extends('UATWEB.layouts.main')

@php
    $currentRouteName = Route::currentRouteName();
@endphp

@section('title')
Landing Page 
@if($currentRouteName === 'global-singapore')
    (singapore)
@elseif($currentRouteName === 'global-australia')
    (australia)
@elseif($currentRouteName === 'global-ph')
    (ph)
@elseif($currentRouteName === 'global-india')
    (india)
@elseif($currentRouteName === 'global-usa')
    (usa)
@elseif($currentRouteName === 'global-latin-america')
    (latin america)
@elseif($currentRouteName === 'global-uae')
    (uae)
@elseif($currentRouteName === 'global-uk')
    (uk)
@endif
- Avvanz Global
@endsection

@section('css')

@if($currentRouteName === 'global-singapore')
    <link rel="preload" href="{{ asset('images/global/background/globalSingaporeBg.webp') }}" as="image">
@elseif($currentRouteName === 'global-australia')
    <link rel="preload" href="{{ asset('images/global/background/globalAustraliaBg.webp') }}" as="image">
@elseif($currentRouteName === 'global-ph')
    <link rel="preload" href="{{ asset('images/global/background/globalIndiaBg.webp') }}" as="image">
@elseif($currentRouteName === 'global-india')
    <link rel="preload" href="{{ asset('images/global/background/globalPhilippinesBg.webp') }}" as="image">
@elseif($currentRouteName === 'global-usa')
    <link rel="preload" href="{{ asset('images/global/background/globalSUsaBg.webp') }}" as="image">
@elseif($currentRouteName === 'global-latin-america')
    <link rel="preload" href="{{ asset('images/global/background/globalLatinBg.webp') }}" as="image">
@elseif($currentRouteName === 'global-uae')
    <link rel="preload" href="{{ asset('images/global/background/globalMiddleEastBg.webp') }}" as="image">
@elseif($currentRouteName === 'global-uk')
    <link rel="preload" href="{{ asset('images/global/background/globalUkBg.webp') }}" as="image">
@else
    <link rel="preload" href="{{ asset('images/global/background/globalSDefaultBg.webp') }}" as="image">
@endif

<link rel="stylesheet" href="{{ asset('css/homepage.css') }}">

<style>
    .bg-image-1 {
        @if($currentRouteName === 'global-singapore')
            background: url("{{ asset('images/global/background/globalSingaporeBg.webp') }}") no-repeat center;
        @elseif($currentRouteName === 'global-australia')
            background: url("{{ asset('images/global/background/globalAustraliaBg.webp') }}") no-repeat center;
        @elseif($currentRouteName === 'global-ph')
            background: url("{{ asset('images/global/background/globalPhilippinesBg.webp') }}") no-repeat center;
        @elseif($currentRouteName === 'global-india')
            background: url("{{ asset('images/global/background/globalIndiaBg.webp') }}") no-repeat center;
        @elseif($currentRouteName === 'global-usa')
            background: url("{{ asset('images/global/background/globalSUsaBg.webp') }}") no-repeat center;
        @elseif($currentRouteName === 'global-latin-america')
            background: url("{{ asset('images/global/background/globalLatinBg.webp') }}") no-repeat center;
        @elseif($currentRouteName === 'global-uae')
            background: url("{{ asset('images/global/background/globalMiddleEastBg.webp') }}") no-repeat center;
        @elseif($currentRouteName === 'global-uk')
            background: url("{{ asset('images/global/background/globalUkBg.webp') }}") no-repeat center;
        @else
            background: url("{{ asset('images/global/background/globalSDefaultBg.webp') }}") no-repeat center;
        @endif
        background-size: cover;
        position: relative;
        min-height: 100px;
    }

    .bg-image-1::before {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(128, 122, 122, 0.3);
        z-index: 1;
    }

    .bg-image-1 .container {
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
<section class="bg-image-1">
    <div class="container padding-vertical">
        <div class="row">
            <div class="col-md-6 order-2 order-md-1">
                <div class="text-white">
                    <h1 class="fw-bolder display-5">
                        We Screen & Strengthen your Human Assets
                    </h1>
                    <div class="divider-start-50"></div>
                    <p>
                        Avvanz is a multi-award winning HRTech and FinTech company that helps more than 3000 companies around the globe mitigate people related risks through background checks and due diligence solutions and enhance their skills and competencies through highly interactive training solutions suited for the Digital Economy.
                    </p>
                    <a href="{{ route('contact') }}" class="btn hero-button fw-bolder">Request a Demo</a>
                </div>
            </div>
            <div class="col-md-6 order-1 order-md-2 justify-content-center align-content-center text-center">
                <picture>
                    <source srcset="{{ asset('images/homepage/homepage1-m.webp') }}" type="image/webp" media="(max-width: 767px)">
                    <source srcset="{{ asset('images/homepage/homepage1-w.webp') }}" type="image/webp" media="(min-width: 768px)">
                    <img src="{{ asset('images/homepage/homepage1-w.webp') }}" alt="Homepage Image" class="img-fluid transition-up">
                </picture>
            </div>
        </div>            
    </div>
</section>

<section class="container margin-vertical text-center text-white">
    <div class="row">
        <div class="col-md-6 bg-dmb p-5">
            <h1 class="fw-bolder display-5">
                Screen
            </h1>
            <p>
                Background Checks, KYC/AML and Company Due Diligence
            </p>
            <a href="{{ route('screen-main') }}" class="btn hero-screen-button fw-bolder text-uppercase">
                Click to know more
            </a>
        </div>
        <div class="col-md-6 bg-marigold p-5">
            <h1 class="fw-bolder display-5">
                Develop
            </h1>
            <p>
                F2F/Virtual LIVE Training, Coaching and Customized elearning
            </p>
            <a href="{{ route('develop-main') }}" class="btn hero-develop-button fw-bolder text-uppercase">Click to know more</a>
        </div>
    </div>
</section>

<!-- Awards Section -->
<section class="container my-5">
    <h1 class="text-center text-dmb display-5 fw-bolder">
        Awards & Certification
    </h1>
    <h1 class="text-center divider-center-25"></h1>
    <div class="row g-5 my-5">
        <div class="col-sm-12 col-md-12 col-lg-6 d-flex justify-content-center align-items-center">
            <div id="carouselAwardsIndicators" class="carousel slide" data-bs-touch="true">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselAwardsIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselAwardsIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselAwardsIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <picture>
                            <source srcset="{{ asset('images/homepage/certification1-m.webp') }}" type="image/webp" media="(max-width: 767px)">
                            <source srcset="{{ asset('images/homepage/certification1-w.webp') }}" type="image/webp" media="(min-width: 768px)">
                            <img src="{{ asset('images/homepage/certification1-w.webp') }}" class="img-fluid" style="height: 200px; width:auto" alt="Award 1" loading="lazy">
                        </picture>
                    </div>
                    <div class="carousel-item">
                        <picture>
                            <source srcset="{{ asset('images/homepage/certification2-m.webp') }}" type="image/webp" media="(max-width: 767px)">
                            <source srcset="{{ asset('images/homepage/certification2-w.webp') }}" type="image/webp" media="(min-width: 768px)">
                            <img src="{{ asset('images/homepage/certification2-w.webp') }}" class="img-fluid" style="height: 200px; width:auto" alt="Award 2" loading="lazy">
                        </picture>
                    </div>
                    <div class="carousel-item">
                        <picture>
                            <source srcset="{{ asset('images/homepage/certification3-m.webp') }}" type="image/webp" media="(max-width: 767px)">
                            <source srcset="{{ asset('images/homepage/certification3-w.webp') }}" type="image/webp" media="(min-width: 768px)">
                            <img src="{{ asset('images/homepage/certification3-w.webp') }}" class="img-fluid" style="height: 200px; width:auto" alt="Award 3" loading="lazy">
                        </picture>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselAwardsIndicators" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselAwardsIndicators" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
        <div class="col-sm-12 col-md-12 col-lg-6 d-flex justify-content-center align-items-center">
            <picture>
                <source srcset="{{ asset('images/homepage/certification4-m.webp') }}" type="image/webp" media="(max-width: 767px)">
                <source srcset="{{ asset('images/homepage/certification4-w.webp') }}" type="image/webp" media="(min-width: 768px)">
                <img src="{{ asset('images/homepage/certification4-w.webp') }}" class="img-fluid" style="height: 200px; width:auto" alt="Award 4" loading="lazy">
            </picture>
        </div>
    </div>
</section>

<!-- Solution Section -->
<section class="container my-5 py-5">
    <div class="row g-3">
        <div class="col-lg-6 order-2 order-lg-1 d-flex align-items-center">
            <div>
                <h3 class="fw-bold text-co">
                    Searching for an automated compliant background screening solution?
                </h3>
                <p>
                    As much as people are the biggest assets to your organization, the wrong people can pose the highest risks to your business. Hence, you need to identify the “right” and “safe” talents before onboarding them. Our Multi-award winning Avvanz ScreenGlobal will help you mitigate risks due to wrongful hires.
                </p>
                <a href="{{ route('screen-main') }}" class="btn solution-button fw-bolder text-uppercase">Explore Solutions</a>
            </div>
        </div>
        <div class="col-lg-6 order-1 order-lg-2 d-flex align-items-center justify-content-center">
            <img
                src="{{ asset('images/global/globalScreen.webp') }}"
                alt="Global Screen"
                class="transition-up image-horizontal-display"
                loading="lazy">
        </div>
    </div>
</section>

<!-- Courses Section -->
<section class="bg-mg text-white p-5">
    <div class="container">
        <div class="row g-3">
            <div class="col-lg-6 d-flex align-items-center justify-content-center">
                <img
                    src="{{ asset('images/global/globalDevelop.webp') }}"
                    alt="Global Develop"
                    class="transition-up image-horizontal-display"
                    loading="lazy">
            </div>
            <div class="col-lg-6 d-flex align-items-center">
                <div>
                    <h3 class="fw-bold">
                        Do you want to be effectively onboard and upskill your employees?
                    </h3>
                    <p>
                        Avvanz will work closely with you to equip your human assets with skills and competencies to thrive in this Digital Economy whilst surpassing your business KPI’s.
                    </p>
                    <a href="{{ route('develop-main') }}" class="btn btn-orange-border fw-bolder text-uppercase">Explore Courses</a>
                </div>
            </div>
        </div>
   </div>
</section>

<!-- Partners Section -->
<section class="container my-5">
    <h1 class="text-center text-dmb display-5 fw-bolder">
        Discover Our Partners
    </h1>
    <h1 class="text-center divider-center-25"></h1>
    <p class="text-center mt-2 text-wrap text-justify">
        Connect with our trusted service providers and integration partners to streamline your background screening process.
    </p>
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
</section>

<!-- Highlights Section -->
<section class="container my-5">
    <h1 class="text-center text-dmb display-5 fw-bolder">
        Highlights
    </h1>
    <h1 class="text-center divider-center-25"></h1>
    <div class="row g-3 py-5">
        <div class="col-sm-12 col-md-4 col-lg-4">
            <div class="card border-0 h-100 text-center">
                <img
                    src="{{ asset('images/global/globalUkHighlight1.webp') }}"
                    class="card-img-top"
                    alt="UK Higlight 1"
                    loading="lazy">
                <div class="card-body d-flex flex-column">
                    <h5 class="card-title fw-bolder text-marigold">
                        UK DBS Checks
                    </h5>
                    <h5 class="card-text">
                        DBS stands for Disclosure and Barring Service, which is a government agency in the UK that provides criminal record checks. The DBS check is a background check that is carried out on individuals who work or volunteer with vulnerable...
                    </h5>
                    <div class="d-grid gap-2 col-6 mx-auto my-4">
                        <a href="" class="btn btn-orange-border text-uppercase">learn more</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-12 col-md-4 col-lg-4">
            <div class="card border-0 h-100 text-center">
                <img
                    src="{{ asset('images/global/globalUkHighlight2.webp') }}"
                    class="card-img-top"
                    alt="UK Higlight 2"
                    loading="lazy">
                <div class="card-body d-flex flex-column">
                    <h5 class="card-title fw-bolder text-marigold">
                        BS7858: All you need to know about the British Standard for Security Screening
                    </h5>
                    <h5 class="card-text">
                        Avvanz’s 7 years of serving more than 2000 companies around the globe has enabled us to do offer some useful data analytics...
                    </h5>
                    <div class="d-grid gap-2 col-6 mx-auto my-4">
                        <a href="" class="btn btn-orange-border text-uppercase">learn more</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-12 col-md-4 col-lg-4">
            <div class="card border-0 h-100 text-center">
                <img
                    src="{{ asset('images/global/globalUkHighlight3.webp') }}"
                    class="card-img-top"
                    alt="UK Higlight 3"
                    loading="lazy">
                <div class="card-body d-flex flex-column">
                    <h5 class="card-title fw-bolder text-marigold">
                        AVVANZ is awarded as HR Technology Company
                    </h5>
                    <h5 class="card-text">
                        Closing off the 2021 South-East Asia Business awards, Apac-Insider gives opportunities to businesses from different sectors to showcase unparalleled expertise, from manufacturing and exporting to technology...
                    </h5>
                    <div class="d-grid gap-2 col-6 mx-auto my-4">
                        <a href="" class="btn btn-orange-border text-uppercase">learn more</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Industry Section -->
<section class="bg-image-2 text-center container-fluid py-5">
    <h1 class="text-center text-white fw-bolder">In-depth Industry Expertise</h1>
    <h1 class="text-center industry-divider"></h1>
    <div class="container mt-5">
        <div class="row g-3">
            <div class="col-lg-4 p-1">
                <div class="card-display card-border">
                    <div class="card-content p-5">
                        <div class="card-body d-flex flex-column align-items-center text-center">
                            <div class="card-icon d-flex justify-content-center align-items-center">
                                <i class="fas fa-shopping-cart"></i>
                            </div>
                            <h5 class="card-title fw-bold mt-5">Banking, Financial Services & Insurance</h5>
                        </div>
                    </div>
                    <div class="card-description">
                        <p>Financial compliance requires specific background checks for various risk based roles.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 p-1">
                <div class="card-display card-border">
                    <div class="card-content p-5">
                        <div class="card-body d-flex flex-column align-items-center text-center">
                            <div class="card-icon d-flex justify-content-center align-items-center">
                                <i class="fas fa-shopping-cart"></i>
                            </div>
                            <h5 class="card-title fw-bold mt-5">Retail</h5>
                        </div>
                    </div>
                    <div class="card-description">
                        <p>Fast Hiring and Effective Onboarding are critical on top of the thorough background checks to address financial losses due to stock loss.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 p-1">
                <div class="card-display card-border">
                    <div class="card-content p-5">
                        <div class="card-body d-flex flex-column align-items-center text-center">
                            <div class="card-icon d-flex justify-content-center align-items-center">
                                <i class="fas fa-shopping-basket"></i>
                            </div>
                            <h5 class="card-title fw-bold mt-5">Fast Moving Consumer Goods and Manufacturing</h5>
                        </div>
                    </div>
                    <div class="card-description">
                        <p>Due to generally quick staff turnover, Fast Hiring, Effective Onboarding and Engaging Training solutions are key.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 p-1">
                <div class="card-display card-border">
                    <div class="card-content p-5">
                        <div class="card-body d-flex flex-column align-items-center text-center">
                            <div class="card-icon d-flex justify-content-center align-items-center">
                                <i class="fas fa-laptop"></i>
                            </div>
                            <h5 class="card-title fw-bold mt-5">Technology</h5>
                        </div>
                    </div>
                    <div class="card-description">
                        <p>Due to war for talent and inherent risk due to wrongful hires, thorough background checks and continuous learning and development solutions are required.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 p-1">
                <div class="card-display card-border">
                    <div class="card-content p-5">
                        <div class="card-body d-flex flex-column align-items-center text-center">
                            <div class="card-icon d-flex justify-content-center align-items-center">
                                <i class="fas fa-stethoscope"></i>
                            </div>
                            <h5 class="card-title fw-bold mt-5">Healthcare</h5>
                        </div>
                    </div>
                    <div class="card-description">
                        <p>Customized Pre-employment Sceening, Regular re-screening and Continuous Monitoring solutions are needed for the various medical professionals depending on the compliance requirements.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 p-1">
                <div class="card-display card-border">
                    <div class="card-content p-5">
                        <div class="card-body d-flex flex-column align-items-center text-center">
                            <div class="card-icon d-flex justify-content-center align-items-center">
                                <i class="fas fa-users"></i>
                            </div>
                            <h5 class="card-title fw-bold mt-5">Business Process Outsourcing</h5>
                        </div>
                    </div>
                    <div class="card-description">
                        <p>Ensure the right people are placed in the various roles which pose different levels of risks and thus warrant different types of background checks.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 p-1">
                <div class="card-display card-border">
                    <div class="card-content p-5">
                        <div class="card-body d-flex flex-column align-items-center text-center">
                            <div class="card-icon d-flex justify-content-center align-items-center">
                                <i class="fas fa-user-graduate"></i>
                            </div>
                            <h5 class="card-title fw-bold mt-5">Education</h5>
                        </div>
                    </div>
                    <div class="card-description">
                        <p>Safeguarding and Child Protection guidelines require different mix of background checks on the various roles. Higher level educational institutions pose varying complexities and hence a right background screening methodology needs to be adopted.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 p-1">
                <div class="card-display card-border">
                    <div class="card-content p-5">
                        <div class="card-body d-flex flex-column align-items-center text-center">
                            <div class="card-icon d-flex justify-content-center align-items-center">
                                <i class="fas fa-water"></i>
                            </div>
                            <h5 class="card-title fw-bold mt-5">Oil & Gas</h5>
                        </div>
                    </div>
                    <div class="card-description">
                        <p>Inhouse staff and Site workers pose different types of risks and hence a varied background screening, onboarding and training framework needs to be implemented.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 p-1">
                <div class="card-display card-border">
                    <div class="card-content p-5">
                        <div class="card-body d-flex flex-column align-items-center text-center">
                            <div class="card-icon d-flex justify-content-center align-items-center">
                                <i class="fas fa-lightbulb"></i>
                            </div>
                            <h5 class="card-title fw-bold mt-5">Others</h5>
                        </div>
                    </div>
                    <div class="card-description">
                        <p>Avvanz provides customized solutions for all other industries given our in-depth domain expertise across all these industries.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

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