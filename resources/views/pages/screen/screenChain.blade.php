@extends('layouts.master')

@section('title')
ScreenChain - Avvanz Global
@endsection

@section('css')
<link rel="preload" href="{{ asset('images/homepage/homepageBg.webp') }}" as="image">
@endsection()

@section('content')

<!--  Navbar Section -->
@include('layouts.navbar')

<!-- Hero Section -->
<section class="bg-image-2">
    <div class="container padding-vertical">
        <div class="row text-white">
            <div class="col-md-7 offset-auto">
                <h1 class="fw-bolder display-5">
                    ScreenChain
                </h1>
                <h1 class="divider-start-25"></h1>
                <p>
                    Understand Screenchain
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Protocol Section -->
<section class="container-fluid padding-vertical">
    <div class="container text-white text-center">
        <h1 class="fw-bolder text-dmb display-5">
            Blockchain Technology-Enabled Background Screening for Speed, Efficiency, Transparency
        </h1>
        <h1 class="divider-center-25"></h1>
        <br>
        <div class="text-center">
            <img 
                src="{{ asset('images/screen/screenchain.webp') }}" 
                alt="ScreenChain"
                width="350"
                height="300"
                class="transition-up rounded-3"
                loading="lazy">
        </div>
        <div class="text-dark text-start section-padding">
            <ul class="list-group">
                <li class="d-flex align-items-start mb-2">
                    <i class="fas fa-check-circle me-2 fs-6 mt-1 align-self-start"></i>
                    1st ever Blockchain Technology enabled ledger that offers you immediate results on pre-vetted checks.
                </li>
                <li class="d-flex align-items-start mb-2">
                    <i class="fas fa-check-circle me-2 fs-6 mt-1 align-self-start"></i>
                    Get the results in seconds at a fraction of the price!
                </li>
                <li class="d-flex align-items-start mb-2">
                    <i class="fas fa-check-circle me-2 fs-6 mt-1 align-self-start"></i>
                    TO request a full demo of ScreenChain, email us at consult@avvanz.com.
                </li>
            </ul>
       </div>
    </div>
</section>

<!-- Floating Button -->
@include('layouts.floating')

<!-- Footer Section -->
@include('layouts.footer')

@endsection