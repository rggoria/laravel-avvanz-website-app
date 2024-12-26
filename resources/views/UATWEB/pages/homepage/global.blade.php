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

    .bg-image-get-started {
        background: url("../images/contact/getStaredAustralia.webp") no-repeat center;
        background-size: cover;
        position: relative;
        min-height: 100px;
    }

    .bg-image-get-started::before {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        z-index: 1;
    }

    .bg-image-get-started .container {
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
            <div class="col-md-6 order-2 order-md-1 justify-content-center align-content-center">
                <div class="text-white">
                    <h1 class="fw-bolder display-5">
                        @if($currentRouteName === 'global-latin-america')
                            Examinamos y fortalecemos sus activos humanos
                        @else
                            We Screen & Strengthen your Human Assets
                        @endif
                    </h1>
                    <div class="divider-start-50"></div>
                    <p>
                        @if($currentRouteName === 'global-latin-america')
                            Avvanz es una empresa de HRTech y FinTech galardonada con múltiples premios que ayuda a más de 2000 empresas de todo el mundo a mitigar los riesgos relacionados con las personas a través de verificaciones de antecedentes y soluciones de diligencia debida y a mejorar sus habilidades y competencias a través de soluciones de capacitación altamente interactivas adecuadas para la economía digital.
                        @else
                            Avvanz is a multi-award winning HRTech and FinTech company that helps more than 3000 companies around the globe mitigate people related risks through background checks and due diligence solutions and enhance their skills and competencies through highly interactive training solutions suited for the Digital Economy.
                        @endif
                    </p>
                    <a href="{{ route('contact') }}" class="btn text-white hero-button fw-bolder">
                        @if($currentRouteName === 'global-latin-america')
                            Solicite una demostración
                        @else
                            Request a Demo
                        @endif
                    </a>
                </div>
            </div>
            <div class="col-md-6 order-1 order-md-2 justify-content-center align-content-center text-center">
                <picture>
                    <source srcset="{{ asset('images/homepage/homepage1-m.webp') }}" type="image/webp" media="(max-width: 767px)">
                    <source srcset="{{ asset('images/homepage/homepage1-w.webp') }}" type="image/webp" media="(min-width: 768px)">
                    <img src="{{ asset('images/homepage/homepage1-m.webp') }}" alt="Homepage Image" class="img-fluid transition-up" width="360" height="360">
                </picture>
            </div>
        </div>            
    </div>
</section>

<section class="container margin-vertical text-center text-white">
    <div class="row">
        <div class="col-md-6 bg-dmb p-5">
            <h1 class="fw-bolder display-5">
                @if($currentRouteName === 'global-latin-america')
                    Pantalla
                @else
                    Screen
                @endif
            </h1>
            <p>
                @if($currentRouteName === 'global-latin-america')
                    Verificación de antecedentes, KYC/AML y debida diligencia de la empresa
                @else
                    Background Checks, KYC/AML and Company Due Diligence
                @endif
            </p>
            <a href="{{ route('screen-main') }}" class="btn hero-screen-button fw-bolder text-uppercase">
                @if($currentRouteName === 'global-latin-america')
                    Haga clic para saber más
                @else
                    Click to know more
                @endif
            </a>
        </div>
        <div class="col-md-6 bg-marigold p-5">
            <h1 class="fw-bolder display-5">
                @if($currentRouteName === 'global-latin-america')
                    Desarrollar
                @else
                    Develop
                @endif
            </h1>
            <p>
                @if($currentRouteName === 'global-latin-america')
                    F2F/Virtual LIVE Formación, Coaching y elearning personalizado
                @else
                    F2F/Virtual LIVE Training, Coaching and Customized elearning
                @endif
            </p>
            <a href="{{ route('develop-main') }}" class="btn hero-develop-button fw-bolder text-uppercase">
                @if($currentRouteName === 'global-latin-america')
                    Haga clic para saber más
                @else
                    Click to know more
                @endif
            </a>
        </div>
    </div>
</section>

<!-- Awards Section -->
<section class="container my-5">
    <h1 class="text-center text-dmb display-5 fw-bolder">
        @if($currentRouteName === 'global-latin-america')
            Premios y Certificación  
        @else
            Awards & Certification
        @endif
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
                    @if($currentRouteName === 'global-latin-america')
                        ¿Está buscando una solución automatizada de verificación de antecedentes que cumpla con los requisitos?
                    @else
                        Searching for an automated compliant background screening solution?
                    @endif
                </h3>
                <p>
                    @if($currentRouteName === 'global-latin-america')
                        Si bien las personas son los mayores activos de su organización, las personas equivocadas pueden representar los mayores riesgos para su negocio. Por lo tanto, debe identificar los talentos “correctos” y “seguros” antes de incorporarlos. Nuestro Avvanz ScreenGlobal, ganador de múltiples premios, lo ayudará a mitigar el riesgo debido a contrataciones indebidas.
                    @else
                        As much as people are the biggest assets to your organization, the wrong people can pose the highest risks to your business. Hence, you need to identify the “right” and “safe” talents before onboarding them. Our Multi-award winning Avvanz ScreenGlobal will help you mitigate risks due to wrongful hires.
                    @endif
                </p>
                <a href="{{ route('screen-main') }}" class="btn solution-button fw-bolder text-uppercase">
                    @if($currentRouteName === 'global-latin-america')
                        Explorar soluciones
                    @else
                        Explore Courses
                    @endif
                </a>
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
                        @if($currentRouteName === 'global-latin-america')
                            ¿Quiere incorporarse de manera efectiva y obtener tu talento al día?
                        @else
                            Do you want to be effectively onboard and upskill your employees?
                        @endif 
                    </h3>
                    <p>
                        @if($currentRouteName === 'global-latin-america')
                            Avvanz trabajará en estrecha colaboración con usted para equipar sus activos humanos con habilidades y competencias para vivir en esta economía digital mientras supera los KPI de su negocio.
                        @else
                            Avvanz will work closely with you to equip your human assets with skills and competencies to thrive in this Digital Economy whilst surpassing your business KPI’s.
                        @endif
                    </p>
                    <a href="{{ route('develop-main') }}" class="btn btn-orange-border fw-bolder text-uppercase">
                        @if($currentRouteName === 'global-latin-america')
                            Explorar soluciones
                        @else
                            Explore Courses
                        @endif
                    </a>
                </div>
            </div>
        </div>
   </div>
</section>

<!-- Partners Section -->
<section class="container my-5">
    <h1 class="text-center text-dmb display-5 fw-bolder">
        @if($currentRouteName === 'global-latin-america')
            Descubre Nuestras Socios   
        @else
            Discover Our Partners
        @endif
    </h1>
    <h1 class="text-center divider-center-25"></h1>
    <p class="text-center mt-2 text-wrap text-justify">
        @if($currentRouteName === 'global-latin-america')
            Conéctese con nuestros proveedores de servicios de confianza y socios de integración para agilizar su procedimiento de verificación de antecedaentes.      
        @else
            Connect with our trusted service providers and integration partners to streamline your background screening process.
        @endif
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
@if($currentRouteName === 'global-australia')
    <section class="container my-5">
        <h1 class="text-center text-dmb display-5 fw-bolder">
            Highlights
        </h1>
        <h1 class="text-center divider-center-25"></h1>
        <div class="row g-3 py-5">
            <div class="col-sm-12 col-md-4 col-lg-4">
                <div class="card border-0 h-100 text-center">
                    <img
                        src="{{ asset('images/global/Australia/globalAustraliaHighlight1.webp') }}"
                        class="card-img-top"
                        alt="USA Higlight 1"
                        loading="lazy">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title fw-bolder text-marigold">
                            APRA Checks
                        </h5>
                        <h5 class="card-text">
                            APRA stands for Australian Prudential Regulation Authority – A regulatory body that sets requirements for companies operating in Australia to ensure the safety and stability of the financial system.
                        </h5>
                        <div class="d-grid gap-2 col-6 mx-auto my-4">
                            <a href="{{ route('blogItem', 'apra-checks') }}" class="btn btn-orange-border">Read more</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-4 col-lg-4">
                <div class="card border-0 h-100 text-center">
                    <img
                        src="{{ asset('images/global/Australia/globalAustraliaHighlight2.webp') }}"
                        class="card-img-top"
                        alt="USA Higlight 2"
                        loading="lazy">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title fw-bolder text-marigold">
                            AFP Checks
                        </h5>
                        <h5 class="card-text">
                            AFP or Australian Federal Police Checks or National Police Checks are critical checks amongst other background checks for employers to assess a candidate and his/her suitability to a role.
                        </h5>
                        <div class="d-grid gap-2 col-6 mx-auto my-4">
                            <a href="{{ route('blogItem', 'afp-checks') }}" class="btn btn-orange-border">Read more</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-4 col-lg-4">
                <div class="card border-0 h-100 text-center">
                    <img
                        src="{{ asset('images/global/Australia/globalAustraliaHighlight3.webp') }}"
                        class="card-img-top"
                        alt="USA Higlight 3"
                        loading="lazy">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title fw-bolder text-marigold">
                            AS4811: All you need to know about the NEW Workforce Screening Standard in Australia
                        </h5>
                        <h5 class="card-text">
                            Avvanz’s 7 years of serving more than 2000 companies around the globe has enabled us to do offer some useful data analytics...
                        </h5>
                        <div class="d-grid gap-2 col-6 mx-auto my-4">                        
                            <a href="{{ route('blogItem', 'all-you-need-to-know-about-the-new-workforce-screening-standard-in-australia') }}" class="btn btn-orange-border">Read more</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@elseif ($currentRouteName === 'global-usa')
    <section class="container my-5">
        <h1 class="text-center text-dmb display-5 fw-bolder">
            Highlights
        </h1>
        <h1 class="text-center divider-center-25"></h1>
        <div class="row g-3 py-5">
            <div class="col-sm-12 col-md-4 col-lg-4">
                <div class="card border-0 h-100 text-center">
                    <img
                        src="{{ asset('images/global/USA/globalUsaHighlight1.webp') }}"
                        class="card-img-top"
                        alt="USA Higlight 1"
                        loading="lazy">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title fw-bolder text-marigold">
                            FCRA : Introduction to US Screening requirements
                        </h5>
                        <h5 class="card-text">
                            Background screening in the United States is a common practice and hence that explains the plentiful number of background screening vendors. However...
                        </h5>
                        <div class="d-grid gap-2 col-6 mx-auto my-4">
                            <a href="{{ route('blogItem', 'introduction-to-us-screening-requirements') }}" class="btn btn-orange-border">Read more</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-4 col-lg-4">
                <div class="card border-0 h-100 text-center">
                    <img
                        src="{{ asset('images/global/USA/globalUsaHighlight2.webp') }}"
                        class="card-img-top"
                        alt="USA Higlight 2"
                        loading="lazy">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title fw-bolder text-marigold">
                            AVVANZ is awarded as HR Technology Company
                        </h5>
                        <h5 class="card-text">
                            Closing off the 2021 South-East Asia Business awards, Apac-Insider gives opportunities to businesses from different sectors to showcase unparalleled expertise, from manufacturing and exporting to technology...
                        </h5>
                        <div class="d-grid gap-2 col-6 mx-auto my-4">
                            <a href="{{ route('blogItem', 'avvanz-is-awarded-as-hr-technology-company-of-the-year-2021') }}" class="btn btn-orange-border">Read more</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-4 col-lg-4">
                <div class="card border-0 h-100 text-center">
                    <img
                        src="{{ asset('images/global/USA/globalUsaHighlight3.webp') }}"
                        class="card-img-top"
                        alt="USA Higlight 3"
                        loading="lazy">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title fw-bolder text-marigold">
                            How do Social Media checks compliment background checks?
                        </h5>
                        <h5 class="card-text">
                            In its 2020 Report, the Association of Certified Fraud Examiners estimated that 5% of all revenue generated by companies – some three and half trillion pounds globally – is lost every year through fraud committed ...
                        </h5>
                        <div class="d-grid gap-2 col-6 mx-auto my-4">                        
                            <a href="{{ route('blogItem', 'how-do-social-media-checks-compliment-background-checks') }}" class="btn btn-orange-border">Read more</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@elseif ($currentRouteName === 'global-uk')
    <section class="container my-5">
        <h1 class="text-center text-dmb display-5 fw-bolder">
            Highlights
        </h1>
        <h1 class="text-center divider-center-25"></h1>
        <div class="row g-3 py-5">
            <div class="col-sm-12 col-md-4 col-lg-4">
                <div class="card border-0 h-100 text-center">
                    <img
                        src="{{ asset('images/global/UK/globalUkHighlight1.webp') }}"
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
                            <a href="{{ route('blogItem', 'uk-dbs-checks') }}" class="btn btn-orange-border">Read more</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-4 col-lg-4">
                <div class="card border-0 h-100 text-center">
                    <img
                        src="{{ asset('images/global/UK/globalUkHighlight2.webp') }}"
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
                            <a href="{{ route('blogItem', 'all-you-need-to-know-about-the-british-standard-for-security-screening') }}" class="btn btn-orange-border">Read more</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-4 col-lg-4">
                <div class="card border-0 h-100 text-center">
                    <img
                        src="{{ asset('images/global/UK/globalUkHighlight3.webp') }}"
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
                            <a href="{{ route('blogItem', 'avvanz-is-awarded-as-hr-technology-company-of-the-year-2021') }}" class="btn btn-orange-border">Read more</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endif

<!-- Industry Section -->
<section class="bg-image-2 text-center container-fluid py-5">
    <h1 class="text-center text-white fw-bolder">
        @if($currentRouteName === 'global-latin-america')
            Experiencia industrial escalada    
        @else
            Scaled Industry Expertise
        @endif
    </h1>
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
                            <h5 class="card-title fw-bold mt-5">
                                @if($currentRouteName === 'global-latin-america')
                                    Banca, servicios financieros y seguros
                                @else                        
                                    Banking, Financial Services & Insurance
                                @endif
                            </h5>
                        </div>
                    </div>
                    <div class="card-description">
                        <p>
                            @if($currentRouteName === 'global-latin-america')
                                El cumplimiento financiero requiere verificaciones de antecedentes específicas para diversos roles basados ​​en riesgos.
                            @else
                                Financial compliance requires specific background checks for various risk based roles.    
                            @endif
                        </p>
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
                            <h5 class="card-title fw-bold mt-5">
                                @if($currentRouteName === 'global-latin-america')
                                    Minorista
                                @else
                                    Retail
                                @endif
                            </h5>
                        </div>
                    </div>
                    <div class="card-description">
                        <p>
                            @if($currentRouteName === 'global-latin-america')
                                La contratación rápida y la incorporación eficaz son fundamentales, además de las exhaustivas verificaciones de antecedentes, para abordar las pérdidas financieras debidas a la pérdida de existencias.
                            @else
                                Fast Hiring and Effective Onboarding are critical on top of the thorough background checks to address financial losses due to stock loss.
                            @endif
                        </p>
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
                            <h5 class="card-title fw-bold mt-5">
                                @if($currentRouteName === 'global-latin-america')
                                    Bienes de consumo y manufactura de rápido movimiento
                                @else                                    
                                    Fast Moving Consumer Goods and Manufacturing
                                @endif
                            </h5>
                        </div>
                    </div>
                    <div class="card-description">
                        <p>
                            @if($currentRouteName === 'global-latin-america')
                                Debido a la rápida rotación de personal, las soluciones de contratación rápida, incorporación efectiva y capacitación atractiva son clave.
                            @else
                                Due to generally quick staff turnover, Fast Hiring, Effective Onboarding and Engaging Training solutions are key.    
                            @endif                            
                        </p>
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
                            <h5 class="card-title fw-bold mt-5">
                                @if($currentRouteName === 'global-latin-america')
                                    Tecnología
                                @else
                                    Technology    
                                @endif                                
                            </h5>
                        </div>
                    </div>
                    <div class="card-description">
                        <p>
                            @if($currentRouteName === 'global-latin-america')
                                Debido a la guerra por el talento y al riesgo inherente debido a contrataciones indebidas, se requieren verificaciones de antecedentes exhaustivas y soluciones de aprendizaje y desarrollo continuo.                            
                            @else
                                Due to war for talent and inherent risk due to wrongful hires, thorough background checks and continuous learning and development solutions are required.
                            @endif                            
                        </p>
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
                            <h5 class="card-title fw-bold mt-5">
                                @if($currentRouteName === 'global-latin-america')
                                    Cuidado de la salud
                                @else
                                    Healthcare
                                @endif                               
                            </h5>
                        </div>
                    </div>
                    <div class="card-description">
                        <p>
                            @if($currentRouteName === 'global-latin-america')
                                Se necesitan soluciones personalizadas de detección previa al empleo, reevaluación periódica y monitoreo continuo para los distintos profesionales médicos, según los requisitos de cumplimiento.
                            @else
                                Customized Pre-employment Sceening, Regular re-screening and Continuous Monitoring solutions are needed for the various medical professionals depending on the compliance requirements.
                            @endif                            
                        </p>
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
                            <h5 class="card-title fw-bold mt-5">
                                @if($currentRouteName === 'global-latin-america')
                                    Externalización de Procesos de Negocio
                                @else
                                    Business Process Outsourcing
                                @endif
                            </h5>
                        </div>
                    </div>
                    <div class="card-description">
                        <p>
                            @if($currentRouteName === 'global-latin-america')
                                Asegúrese de que se coloque a las personas adecuadas en los distintos roles que plantean diferentes niveles de riesgo y, por lo tanto, justifican diferentes tipos de verificaciones de antecedentes.
                            @else
                                Ensure the right people are placed in the various roles which pose different levels of risks and thus warrant different types of background checks.
                            @endif
                        </p>
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
                            <h5 class="card-title fw-bold mt-5">
                                @if($currentRouteName === 'global-latin-america')
                                    Educación
                                @else
                                    Education
                                @endif                                
                            </h5>
                        </div>
                    </div>
                    <div class="card-description">
                        <p>
                            @if($currentRouteName === 'global-latin-america')
                                Las directrices de salvaguardia y protección infantil requieren una combinación diferente de verificaciones de antecedentes en las distintas funciones. Las instituciones educativas de nivel superior plantean diversas complejidades y, por lo tanto, es necesario adoptar una metodología adecuada de investigación de antecedentes.
                            @else
                                Safeguarding and Child Protection guidelines require different mix of background checks on the various roles. Higher level educational institutions pose varying complexities and hence a right background screening methodology needs to be adopted.
                            @endif                            
                        </p>
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
                            <h5 class="card-title fw-bold mt-5">
                                @if($currentRouteName === 'global-latin-america')
                                    Gas de petróleo
                                @else
                                    Oil & Gas    
                                @endif                                
                            </h5>
                        </div>
                    </div>
                    <div class="card-description">
                        <p>
                            @if($currentRouteName === 'global-latin-america')
                                El personal interno y los trabajadores del sitio plantean diferentes tipos de riesgos y, por lo tanto, es necesario implementar un marco variado de investigación de antecedentes, incorporación y capacitación.
                            @else
                                Inhouse staff and Site workers pose different types of risks and hence a varied background screening, onboarding and training framework needs to be implemented.
                            @endif                            
                        </p>
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
                            <h5 class="card-title fw-bold mt-5">
                                @if($currentRouteName === 'global-latin-america')
                                    Otras
                                @else
                                    Others
                                @endif                                
                            </h5>
                        </div>
                    </div>
                    <div class="card-description">
                        <p>
                            @if($currentRouteName === 'global-latin-america')
                                Avvanz ofrece soluciones personalizadas para todas las demás industrias dada nuestra profunda experiencia en todas estas industrias.
                            @else
                                Avvanz provides customized solutions for all other industries given our in-depth domain expertise across all these industries.
                            @endif
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- Get Started Section --}}
@if($currentRouteName === 'global-australia')
    <section class="bg-image-get-started">
        <div class="container py-5">
            <div class="text-center">
                <a href="{{ route('contact-us-australia') }}" class="btn btn-lg btn-dmb-transition w-25">Get Started</a>
            </div>
        </div>
    </section>
@endif

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