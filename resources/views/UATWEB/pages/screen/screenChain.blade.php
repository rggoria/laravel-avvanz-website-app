@extends('UATWEB.layouts.main')

@section('title')
ScreenChain - Avvanz Global
@endsection

@section('css')
<link rel="preload" href="{{ asset('images/screen/background/screenSubBg2.webp') }}" as="image">

<style>
    .bg-image-2 {
        background: url("../images/screen/background/screenSubBg2.webp") no-repeat center;
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
        background-color: rgba(190, 201, 206, 0.6);
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
                class="img-fluid rounded-3 transition-up"
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

@endsection