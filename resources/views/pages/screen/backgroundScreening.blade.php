@extends('layouts.master')

@section('title')
Background Screening - Avvanz Global
@endsection

@section('content')

<!-- Navbar Section -->
@include('layouts.navbar')

<!-- Hero Section -->
<section class="bg-image">
    <div class="container padding-vertical">
        <div class="row text-white">
            <div class="col-md-7 offset-auto">
                <h1 class="fw-bolder display-5">
                    Background Screening
                </h1>
                <h1 class="divider-start-25"></h1>
                <p>
                    Get started
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Checks Screening -->
<section class="bg-mg padding-vertical text-white">
    <div class="text-center">
        <h1 class="fw-bolder display-5">
            Individual Background Checks Screening
        </h1>
        <h1 class="divider-center-25"></h1>
    </div>
    <div class="container margin-vertical">
        <p>
            Statistics have shown that more than 30% of CVs or resumes have discrepancies. Hence it’s imperative that a thorough Background Screening and Due Diligence process is in place to sieve out the wrong hires who can be detrimental to your organization. Your candidates and employees should be on the highest level of “integrity” and “security”. Both aspects cannot be compromised otherwise it might cost your organization in terms of reduced productivity, fraud-related costs, reputational damages, and even a decline in shareholder earnings.
        </p>
        <p>
            Since the discrepancies can be in several areas, the candidates must be channeled through different background checkpoints based on the risks associated with their functions or roles. A thorough background screening process will greatly mitigate the “security” and “integrity” risks. Organizations need to understand the following when implementing a background screening strategy:
        </p>
        <ul class="list-group ms-4">
            <li class="d-flex align-items-start mb-2">
                <i class="fas fa-circle me-2 mt-2 align-self-start" style="font-size: 7px;"></i>
                Why and how companies should conduct background screening?
            </li>
            <li class="d-flex align-items-start mb-2">
                <i class="fas fa-circle me-2 mt-2 align-self-start" style="font-size: 7px;"></i>
                PBSA Council ISO27001, and ISO27701 Certified
            </li>
        </ul>
        <p>
            This is really because background screening is an enormous task given the diverse global backgrounds of candidates, inherent risks, and complexity of country-specific personal data-related laws and regulations.
        </p>
    </div>
</section>

<!-- Floating Button -->
@include('layouts.floating')

<!-- Footer Section -->
@include('layouts.footer')

@endsection