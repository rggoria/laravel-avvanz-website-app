@extends('layouts.master')

@section('title')
Background Screening - Avvanz Global
@endsection

@section('content')

{{-- Navbar Section --}}
@include('layouts.navbar')

<!-- Hero Section -->
<div class="bg-image">
    <div class="container">
        <div class="row text-white">
            <div class="col-md-7 offset-auto">
                <h1 class="fw-bolder">Background Screening</h1>
                <h1 class="divider-start-25"></h1>
                <p>Get started</p>
            </div>
        </div>
    </div>
</div>

<!-- Checks Screening -->
<section class="bg-mg py-5 text-white">
    <div class="text-center">
        <h1 class="fw-bolder">Individual Background Checks Screening</h1>
        <h1 class="divider-center-25"></h1>
    </div>
    <br>
    <div class="container">
        <p>
            Statistics have shown that more than 30% of CVs or resumes have discrepancies. Hence it’s imperative that a thorough Background Screening and Due Diligence process is in place to sieve out the wrong hires who can be detrimental to your organization. Your candidates and employees should be on the highest level of “integrity” and “security”. Both aspects cannot be compromised otherwise it might cost your organization in terms of reduced productivity, fraud-related costs, reputational damages, and even a decline in shareholder earnings.
        </p>
        <br>
        <p>
            Since the discrepancies can be in several areas, the candidates must be channeled through different background checkpoints based on the risks associated with their functions or roles. A thorough background screening process will greatly mitigate the “security” and “integrity” risks. Organizations need to understand the following when implementing a background screening strategy:
        </p>
        <br>
        <ul class="list">
            <li class="list-item">
                Why and how companies should conduct background screening?
            </li>
            <li class="list-item">
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