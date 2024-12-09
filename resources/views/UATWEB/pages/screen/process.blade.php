@extends('UATWEB.layouts.main')

@section('title')
Process - Avvanz Global
@endsection

@section('css')
<link rel="preload" href="{{ asset('images/screen/background/screenSubBg1-4.webp') }}" as="image">

<style>
    .bg-image-2 {
        background: url("../images/screen/background/screenSubBg1-4.webp") no-repeat center;
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
                    Process
                </h1>
                <h1 class="divider-start-25"></h1>
                <p>
                    Our Innovative Process Solutions
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Protocol Section -->
<section class="container-fluid padding-vertical">
    <div class="container text-white text-center">
        <h1 class="fw-bolder text-dmb display-5">
            Overview of Background Check Process
        </h1>
        <h1 class="divider-center-25"></h1>       
        <p style="margin: 3rem">
            This whole process can be likened to a Candidate having to go through 2 Firewalls before gaining access to your company the SECURITY Firewall and the INTEGRITY Firewall.
        </p>
        <div class="text-center">
            <img 
                src="{{ asset('images/screen/process.webp') }}" 
                alt="Proccess"
                width="350"
                height="500"
                class="transition-up rounded-3"
                loading="lazy">
        </div>
    </div>
</section>

<!-- Note Section  -->
<section class="bg-afw">
    <div class="container text-center section-padding">
        <h6 class="fw-bold">
            Note: TAT or Turn-Around Time is computed from the date when you Checkout your Order after Candidate’s required information, signed Letter of Consent and mandatory documents are submitted at Avvanz ScreenGlobal.
        </h6>
    </div>
</section>

@endsection