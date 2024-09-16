@extends('layouts.master')

@section('title')
Avvanz ScreenGlobal - Avvanz Global
@endsection

@section('content')

<!--  Navbar Section -->
@include('layouts.navbar')

<!-- Hero Section -->
<div class="bg-image">
    <div class="container padding-vertical">
        <div class="row text-white">
            <div class="col-md-7 offset-auto">
                <h1 class="fw-bolder display-5">
                    Avvanz ScreenGlobal
                </h1>
                <h1 class="divider-start-25"></h1>
                <p>
                    Your Trusted Partner
                </p>
            </div>
        </div>
    </div>
</div>

<!-- CVs or Resumes Section -->
<section class="bg-mg padding-vertical">
    <div class="container">
        <div class="row">
            <div class="col-md-6 d-flex align-items-center">
                <div class="text-white">
                    <h1 class="fw-bolder display-5">
                        More than 20% of CVs or Resumes
                    </h1>
                    <h1 class="divider-start-25 mb-3"></h1>
                    <p>
                        Statistics have shown that more than 20% of CVs or resumes have discrepancies and hence it’s imperative that a thorough Background Screening and Due Diligence process is in place to sieve out the wrong hires who can be detrimental to your organization. Your candidates and employees need to be of the highest level of “integrity” and “security”. Both aspects cannot be compromised otherwise it might cost your organization in terms of reduced productivity, fraud-related costs, reputational damages, and even a decline in shareholder earnings.
                    </p>
                </div>
            </div>
            <div class="col-md-6 d-flex align-items-center justify-content-center">
                <img
                    src="{{ asset('images/screen/screenglobal.webp') }}"
                    alt="Screen Global"
                    class="transition-up img-fluid rounded-3 w-auto h-auto"
                    loading="lazy">
            </div>
        </div>
    </div>
</section>

<!-- Strategy Section -->
<section class="container py-5">
    <p>
        Since the discrepancies can be in several areas, the candidates must be channeled through different background checkpoints based on the risks associated with their functions or roles. A thorough background screening process will greatly mitigate the “security” and “integrity” risks. Organizations need to understand the following when implementing a background screening strategy:
    </p>
    <div class="row g-3 text-white">
        <div class="col-6 py-5">
            <div class="p-5 d-flex justify-content-center align-items-center bg-mg fw-bolder text-center h-100 w-100">
                <div class="mb-3 fw-bold">
                    <i class="fas fa-question fa-5x"></i>
                    <p class="mt-3 ">Why and how companies should conduct background screening?</p>
                </div>                
            </div>
        </div>
        <div class="col-6 py-5">
            <div class="p-5 d-flex justify-content-center align-items-center bg-marigold fw-bolder text-center h-100 w-100">
                <div class="mb-3 fw-bold">
                    <i class="fas fa-lightbulb fa-5x"></i>
                    <p class="mt-3">What to look out for when working with the right background screening partner</p>
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