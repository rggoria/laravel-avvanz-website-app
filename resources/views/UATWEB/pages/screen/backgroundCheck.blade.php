@extends('UATWEB.layouts.main')

@section('title')
Background Checks Singapore - Avvanz Global
@endsection

@section('css')
<link rel="preload" href="{{ asset('images/screen/background/screenSubBg1-2.webp') }}" as="image">

<style>
    .bg-image-2 {
        background: url("../images/screen/background/screenSubBg1-2.webp") no-repeat center;
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
        background-color: rgba(18, 71, 95, 0.8);
        z-index: 1;
    }

    .bg-image-2 .container {
        position: relative;
        z-index: 2;
    }

    @media (max-width: 767px) {
        .carousel-inner .carousel-item > div {
            display: none;
        }

        .carousel-inner .carousel-item > div:first-child {
            display: block;
        }
    }

    .carousel-inner .carousel-item.active,
    .carousel-inner .carousel-item-next,
    .carousel-inner .carousel-item-prev {
        display: flex;
    }

    @media (min-width: 768px) {
        .carousel-inner .carousel-item-end.active,
        .carousel-inner .carousel-item-next {
            transform: translateX(33%); /* adjust thist base on the column max number */
        }

        .carousel-inner .carousel-item-start.active, 
        .carousel-inner .carousel-item-prev {
            transform: translateX(-33%); /* adjust thist base on the column max number */
        }
    }

    .carousel-inner .carousel-item-end,
    .carousel-inner .carousel-item-start { 
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
                alt="Background Check Image 1" 
                class="img-fluid transition-up rounded-3 w-auto h-auto"
                loading="lazy">
        </div>
    </div>

    <!-- Due Diligence Background Checks -->
    <div class="my-5">
        <h1 class="text-center text-dmb fw-bolder display-5">
            Due Diligence Background Checks
        </h1>
        <h1 class="text-center divider-center-25"></h1>
        <div class="row justify-content-center my-5">
            <div id="carouselDueDiligenceItems" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    @foreach ($dueDiligenceItems as $count => $item)
                        <button type="button" data-bs-target="#carouselDueDiligenceItems" data-bs-slide-to="{{ $count }}" class="{{ $count === 0 ? 'active' : '' }}" aria-current="{{ $count === 0 ? 'true' : 'false' }}" aria-label="Slide {{ $count + 1 }}"></button>
                    @endforeach
                </div>
                <div class="carousel-inner" role="listbox">
                    @foreach ($dueDiligenceItems as $count => $item)
                        <div class="carousel-item {{ $count === 0 ? 'active' : '' }}">
                            <div class="col-md-4">
                                <div class="card mx-3 p-3 d-flex justify-content-center align-items-center bg-mg text-white" style="height: 20rem">
                                    <div class="card-body">
                                        <div class="mb-3">
                                            <i class="fas {{ $item['icon'] }} fa-2x"></i>
                                        </div>
                                        <p class="card-title fs-4 fw-bolder">
                                            {{ $item['title'] }}
                                        </p>
                                        <p class="card-text">
                                            {{ $item['description'] }}
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselDueDiligenceItems" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselDueDiligenceItems" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </div>

    <!-- Identity Checks -->
    <div class="my-5">
        <h1 class="text-center text-dmb fw-bolder display-5">
            Identity Checks
        </h1>
        <h1 class="text-center divider-center-25"></h1>
        <div class="row justify-content-center my-5">
            <div id="carouselIdentityCheckItems" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    @foreach ($identityCheck as $count => $item)
                        <button type="button" data-bs-target="#carouselIdentityCheckItems" data-bs-slide-to="{{ $count }}" class="{{ $count === 0 ? 'active' : '' }}" aria-current="{{ $count === 0 ? 'true' : 'false' }}" aria-label="Slide {{ $count + 1 }}"></button>
                    @endforeach
                </div>
                <div class="carousel-inner" role="listbox">
                    @foreach ($identityCheck as $count => $item)
                        <div class="carousel-item {{ $count === 0 ? 'active' : '' }}">
                            <div class="col-md-4">
                                <div class="card mx-3 p-3 d-flex justify-content-center align-items-center bg-mg text-white" style="height: 20rem">
                                    <div class="card-body">
                                        <div class="mb-3">
                                            <i class="fas {{ $item['icon'] }} fa-2x"></i>
                                        </div>
                                        <p class="card-title fs-4 fw-bolder">
                                            {{ $item['title'] }}
                                        </p>
                                        <p class="card-text">
                                            {{ $item['description'] }}
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselIdentityCheckItems" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselIdentityCheckItems" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </div>

    <!-- Financial Checks -->
    <div class="my-5">
        <h1 class="text-center text-dmb fw-bolder display-5">
            Financial Checks
        </h1>
        <h1 class="text-center divider-center-25"></h1>
        <div class="row justify-content-center my-5">
            <div id="carouselFinancialCheckItems" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    @foreach ($financialCheck as $count => $item)
                        <button type="button" data-bs-target="#carouselFinancialCheckItems" data-bs-slide-to="{{ $count }}" class="{{ $count === 0 ? 'active' : '' }}" aria-current="{{ $count === 0 ? 'true' : 'false' }}" aria-label="Slide {{ $count + 1 }}"></button>
                    @endforeach
                </div>
                <div class="carousel-inner" role="listbox">
                    @foreach ($financialCheck as $count => $item)
                        <div class="carousel-item {{ $count === 0 ? 'active' : '' }}">
                            <div class="col-md-4">
                                <div class="card mx-3 p-3 d-flex justify-content-center align-items-center bg-mg text-white" style="height: 20rem">
                                    <div class="card-body">
                                        <div class="mb-3">
                                            <i class="fas {{ $item['icon'] }} fa-2x"></i>
                                        </div>
                                        <p class="card-title fs-4 fw-bolder">
                                            {{ $item['title'] }}
                                        </p>
                                        <p class="card-text">
                                            {{ $item['description'] }}
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselFinancialCheckItems" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselFinancialCheckItems" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </div>

    <!-- Integrity Checks -->
    <div class="my-5">
        <h1 class="text-center text-dmb fw-bolder display-5">
            Integrity Checks
        </h1>
        <h1 class="text-center divider-center-25"></h1>
        <div class="row justify-content-center my-5">
            <div id="carouselIntegrityCheckItems" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    @foreach ($integrityCheck as $count => $item)
                        <button type="button" data-bs-target="#carouselIntegrityCheckItems" data-bs-slide-to="{{ $count }}" class="{{ $count === 0 ? 'active' : '' }}" aria-current="{{ $count === 0 ? 'true' : 'false' }}" aria-label="Slide {{ $count + 1 }}"></button>
                    @endforeach
                </div>
                <div class="carousel-inner" role="listbox">
                    @foreach ($integrityCheck as $count => $item)
                        <div class="carousel-item {{ $count === 0 ? 'active' : '' }}">
                            <div class="col-md-4">
                                <div class="card mx-3 p-3 d-flex justify-content-center align-items-center bg-mg text-white" style="height: 20rem">
                                    <div class="card-body">
                                        <div class="mb-3">
                                            <i class="fas {{ $item['icon'] }} fa-2x"></i>
                                        </div>
                                        <p class="card-title fs-4 fw-bolder">
                                            {{ $item['title'] }}
                                        </p>
                                        <p class="card-text">
                                            {{ $item['description'] }}
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselIntegrityCheckItems" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselIntegrityCheckItems" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
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

@endsection

@section('scripts')
    <script>
        let dueDiligenceItems = document.querySelectorAll('#carouselDueDiligenceItems .carousel-item');
    
        dueDiligenceItems.forEach((el) => {
            const minPerSlide = 3;
            let next = el.nextElementSibling;
            for (let i = 1; i < minPerSlide; i++) {
                if (!next) {
                    next = dueDiligenceItems[0];
                }
                let cloneChild = next.cloneNode(true);
                el.appendChild(cloneChild.children[0]);
                next = next.nextElementSibling;
            }
        });

        let identityCheckItems = document.querySelectorAll('#carouselIdentityCheckItems .carousel-item');

        identityCheckItems.forEach((el) => {
            const minPerSlide = 3;
            let next = el.nextElementSibling;
            for (let i = 1; i < minPerSlide; i++) {
                if (!next) {
                    next = identityCheckItems[0];
                }
                let cloneChild = next.cloneNode(true);
                el.appendChild(cloneChild.children[0]);
                next = next.nextElementSibling;
            }
        });

        let carouselFinancialCheckItems = document.querySelectorAll('#carouselFinancialCheckItems .carousel-item');

        carouselFinancialCheckItems.forEach((el) => {
            const minPerSlide = 3;
            let next = el.nextElementSibling;
            for (let i = 1; i < minPerSlide; i++) {
                if (!next) {
                    next = carouselFinancialCheckItems[0];
                }
                let cloneChild = next.cloneNode(true);
                el.appendChild(cloneChild.children[0]);
                next = next.nextElementSibling;
            }
        });

        let carouselIntegrityCheckItems = document.querySelectorAll('#carouselIntegrityCheckItems .carousel-item');

        carouselIntegrityCheckItems.forEach((el) => {
            const minPerSlide = 3;
            let next = el.nextElementSibling;
            for (let i = 1; i < minPerSlide; i++) {
                if (!next) {
                    next = carouselIntegrityCheckItems[0];
                }
                let cloneChild = next.cloneNode(true);
                el.appendChild(cloneChild.children[0]);
                next = next.nextElementSibling;
            }
        });
    </script>     
@endsection