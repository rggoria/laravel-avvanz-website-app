@extends('UATWEB.layouts.main')

@section('title')
KYC AML Compliance - Avvanz Global
@endsection

@section('css')
<link rel="preload" href="{{ asset('images/screen/background/screenSubBg1-5.webp') }}" as="image">

<style>
    .bg-image-2 {
        background: url("../images/screen/background/screenSubBg1-5.webp") no-repeat center;
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
</style>

@endsection

@section('content')

<!-- Hero Section -->
<section class="bg-image-2">
    <div class="container padding-vertical">
        <div class="row text-white">
            <div class="col-md-7 offset-auto">
                <h1 class="fw-bolder display-5">
                    KYC AML Compliance
                </h1>
                <h1 class="divider-start-25"></h1>
                <p>
                    Building Stronger Businesses
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Award Section -->
<section class="bg-mg padding-vertical">
    <div class="container text-center text-white">
        <p>
            Gold Medal awarded ScreenGlobal Platform allows for Know Your Customer (KYC) and Customer/Company Due Diligence (CDD) related automated workflows that provide quick visibility into potential risks associated with financial crimes like money laundering and terrorist financing. Our comprehensive fraud detection and prevention solutions provide dynamic insights into customer events and changes.
        </p>
    </div>
</section>

<!-- Partner Section -->
<section class="container margin-vertical">
    <div class="row g-3 py-3">
        <div class="col-sm-12 col-md-12 col-lg-4 mb-4">
            <div class="card p-5 d-flex justify-content-center align-items-center bg-marigold h-100 w-100">
                <div class="card-body text-center text-white">
                    <img 
                        src="{{ asset('images/screen/kyc1.webp') }}" 
                        class="card-img-top img-fluid rounded mx-auto d-block" 
                        alt="KYC Image 1"
                        loading="lazy">
                    <h4 class="card-title mt-3 fw-bolder">Verify identity of your subjects</h4>
                    <p class="card-text">
                        Avvanz’s Digital Identity Verification partnerships across the globe enable you to authenticate and ensure your subject is really who (s)he claims to be.
                    </p>
                </div>
            </div>
        </div>
        <div class="col-sm-12 col-md-12 col-lg-4 mb-4">
            <div class="card p-5 d-flex justify-content-center align-items-center bg-mg h-100 w-100">
                <div class="card-body text-center text-white">
                    <img 
                        src="{{ asset('images/screen/kyc2.webp') }}" 
                        class="card-img-top img-fluid rounded mx-auto d-block" 
                        alt="KYC Image 2"
                        loading="lazy">
                    <h4 class="card-title mt-3 fw-bolder">KYC or Know Your Customer (or Business or Partner or Employee)</h4>
                    <p class="card-text">
                        Avvanz’s CDDGlobal and ScreenGlobal will offer you full insights on your subject before you engage in a partnership with that subject. We have APIs available too.
                    </p>
                </div>
            </div>
        </div>
        <div class="col-sm-12 col-md-12 col-lg-4 mb-4">
            <div class="card p-5 d-flex justify-content-center align-items-center bg-marigold h-100 w-100">
                <div class="card-body text-center text-white">
                    <img 
                        src="{{ asset('images/screen/kyc3.webp') }}" 
                        class="card-img-top img-fluid rounded mx-auto d-block" 
                        alt="KYC Image 3"
                        loading="lazy">
                    <h4 class="card-title mt-3 fw-bolder">Global Watchlist and Sanctions with constant monitoring tools</h4>
                    <p class="card-text">
                        Avvanz’s checks are focused around AML (Anti-money laundering), CTF (Counter-terrorism Financing), PEP (Politically Exposed Persons), Sanctions Compliance, Adverse Media and other crimes such as bribery and corruption, fraud and modern slavery.
                    </p>
                </div>
            </div>
        </div> 
    </div>
</section>

<section class="container-fluid bg-afw mt-5">
    <div class="container py-5">
        <h1 class="fw-bolder text-dmb">What else does this entail?</h1>
        <h1 class="divider-start-25"></h1>
        <div class="row g-3 py-5">
            <div class="col-md-7 d-flex align-items-center justify-content-center">
                <div>
                    <ul class="list-unstyled">
                        <li class="d-flex align-items-start mb-2">
                            <i class="fas fa-check-circle me-2 fs-6 mt-1 align-self-start"></i>
                            Consolidated AML data sets with Continuous Monitoring capabilities. AML data can be retrieved in minutes. This dynamic global database covers Global Watchlist and Sanctions, Adverse Media, PEPs, Criminal Enforcements, Financial Compliance and Healthcare Sanctions.
                        </li>
                        <li class="d-flex align-items-start mb-2">
                            <i class="fas fa-check-circle me-2 fs-6 mt-1 align-self-start"></i>
                            Identity Verification (KYC) – Passports and IDs from more than 150 countries can be verified using Machine Language technologies.
                        </li>
                        <li class="d-flex align-items-start mb-2">
                            <i class="fas fa-check-circle me-2 fs-6 mt-1 align-self-start"></i>
                            Seamless integration via RESTful APIs to 3rd party platforms and client portals with customizable UX/UI.
                        </li>
                        <li class="d-flex align-items-start mb-2">
                            <i class="fas fa-check-circle me-2 fs-6 mt-1 align-self-start"></i>
                            Additional Background Checks to ensure your organization meets compliance obligations in whichever part of the globe your business sits in.
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-5 d-flex align-items-center justify-content-center">
                <img 
                    src="{{ asset('images/screen/kyc4.webp') }}" 
                    class="transition-up img-fluid rounded-3 w-auto h-auto" 
                    alt="KYC Image 4"
                    loading="lazy">
            </div>
        </div>
    </div>
</section>

@endsection