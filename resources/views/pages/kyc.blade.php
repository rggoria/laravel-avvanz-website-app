@extends('layouts.master')

@section('title')
KYC AML Compliance - Avvanz Global
@endsection

@section('content')

{{-- Navbar Section --}}
@include('layouts.navbar')

<!-- Hero Section -->
<div class="bg-image">
    <div class="container">
        <div class="row text-white">
            <div class="col-md-7 offset-auto">
                <h1 class="fw-bolder">KYC AML Compliance</h1>
                <h1 class="divider-start-25"></h1>
                <p>Building Stronger Businesses</p>
            </div>
        </div>
    </div>
</div>

<!-- Award Section -->
<section class="bg-mg py-5">
    <div class="container text-center text-white w-75">
        <p>
            Gold Medal awarded ScreenGlobal Platform allows for Know Your Customer (KYC) and Customer/Company Due Diligence (CDD) related automated workflows that provide quick visibility into potential risks associated with financial crimes like money laundering and terrorist financing. Our comprehensive fraud detection and prevention solutions provide dynamic insights into customer events and changes.
        </p>
    </div>
</section>

<!-- Partner Section -->
<section class="container my-5 text-white">
    <div class="row g-3">
        <div class="col-4">
            <div class="card p-5 d-flex justify-content-center align-items-center bg-marigold h-100 w-100">
                <div class="card-body text-center">
                    <img src="https://avvanz.com/wp-content/uploads/2023/03/normal_u14.png" class="card-img-top img-fluid rounded mx-auto d-block" alt="Best Background Screening Provider">
                    <br>
                    <h4 class="card-title fw-bolder">Verify identity of your subjects</h4>
                    <p class="card-text">
                        Avvanz’s Digital Identity Verification partnerships across the globe enable you to authenticate and ensure your subject is really who (s)he claims to be.
                    </p>
                </div>
            </div>
        </div>
        <div class="col-4">
            <div class="card p-5 d-flex justify-content-center align-items-center bg-mg h-100 w-100">
                <div class="card-body text-center">
                    <img src="https://avvanz.com/wp-content/uploads/2023/03/sassasasas.png" class="card-img-top img-fluid rounded mx-auto d-block" alt="Best Background Screening Provider">
                    <br>
                    <h4 class="card-title fw-bolder">KYC or Know Your Customer (or Business or Partner or Employee)</h4>
                    <p class="card-text">
                        Avvanz’s CDDGlobal and ScreenGlobal will offer you full insights on your subject before you engage in a partnership with that subject. We have APIs available too.
                    </p>
                </div>
            </div>
        </div>
        <div class="col-4">
            <div class="card p-5 d-flex justify-content-center align-items-center bg-marigold h-100 w-100">
                <div class="card-body text-center">
                    <img src="https://avvanz.com/wp-content/uploads/2023/03/normal_u13.png" class="card-img-top img-fluid rounded mx-auto d-block" alt="Best Background Screening Provider">
                    <br>
                    <h4 class="card-title fw-bolder">Global Watchlist and Sanctions with constant monitoring tools</h4>
                    <p class="card-text">
                        Avvanz’s checks are focused around AML (Anti-money laundering), CTF (Counter-terrorism Financing), PEP (Politically Exposed Persons), Sanctions Compliance, Adverse Media and other crimes such as bribery and corruption, fraud and modern slavery.
                    </p>
                </div>
            </div>
        </div> 
    </div>
</section>

<section class="my-5">
    <div class="container">
        <h1 class="fw-bolder text-dmb">What else does this entail?</h1>
        <h1 class="divider-start-25"></h1>
        <br>
        <div class="row">
            <div class="col-md-7 d-flex align-items-center">
                <div>
                    <ul class="list-unstyled">
                        <li class="list-item">
                            <i class="fas fa-check-circle list-icon"></i>
                            Consolidated AML data sets with Continuous Monitoring capabilities. AML data can be retrieved in minutes. This dynamic global database covers Global Watchlist and Sanctions, Adverse Media, PEPs, Criminal Enforcements, Financial Compliance and Healthcare Sanctions.
                        </li>
                        <li class="list-item">
                            <i class="fas fa-check-circle list-icon"></i>
                            Identity Verification (KYC) – Passports and IDs from more than 150 countries can be verified using Machine Language technologies.
                        </li>
                        <li class="list-item">
                            <i class="fas fa-check-circle list-icon"></i>
                            Seamless integration via RESTful APIs to 3rd party platforms and client portals with customizable UX/UI.
                        </li>
                        <li class="list-item">
                            <i class="fas fa-check-circle list-icon"></i>
                            Additional Background Checks to ensure your organization meets compliance obligations in whichever part of the globe your business sits in.
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-5 d-flex align-items-center justify-content-center">
                <img src="{{ asset('images/about-us-img-3-768x512.webp') }}" alt="Placeholder Image" class="transition-up img-fluid rounded-3 w-auto h-auto">
            </div>
        </div>
    </div>
</section>

<!-- Floating Button -->
@include('layouts.floating')

<!-- Footer Section -->
@include('layouts.footer')

@endsection