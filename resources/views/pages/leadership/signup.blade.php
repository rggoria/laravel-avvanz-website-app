@extends('layouts.master')

@section('title')
Leadership Breakthrough Summit
@endsection

@section('css')
<link rel="preload" href="{{ asset('images/homepage/homepageBg.webp') }}" as="image">
<link rel="stylesheet" href="{{ asset('css/homepage.css') }}">
@endsection()

@section('content')

<!-- Hero Section -->
<section class="bg-image-1">
    <div class="container padding-vertical">
        <div class="row">
            <div class="col-md-6 order-2 order-md-1">
                <div class="text-white">
                    <h1 class="fw-bolder display-5">
                        We Screen & Strengthen your Human Assets
                    </h1>
                    <div class="divider-start-50"></div>
                    <p>
                        Avvanz is a multi-award winning HRTech and FinTech company that helps more than 3000 companies around the globe mitigate people related risks through background checks and due diligence solutions and enhance their skills and competencies through highly interactive training solutions suited for the Digital Economy.
                    </p>
                    <a href="{{ route('contact') }}" class="btn hero-button fw-bolder">Request a Demo</a>
                </div>
            </div>
            <div class="col-md-6 order-1 order-md-2 justify-content-center align-content-center text-center">
                <img 
                    src="{{ asset('images/homepage/homepage1.webp') }}"
                    alt="Placeholder Image"
                    class="img-fluid transition-up"
                    style="width: 300px; height: 300px;"
                    loading="lazy">
            </div>
        </div>
    </div>
</section>

<section class="container margin-vertical text-center text-white">
    <div class="row">
        <div class="col-md-6 bg-dmb p-5">
            <h1 class="fw-bolder display-5">
                Screen
            </h1>
            <p>
                Background Checks, KYC/AML and Company Due Diligence
            </p>
            <a href="{{ route('screen-main') }}" class="btn hero-screen-button fw-bolder text-uppercase">
                Click to know more
            </a>
        </div>
        <div class="col-md-6 bg-marigold p-5">
            <h1 class="fw-bolder display-5">
                Develop
            </h1>
            <p>
                F2F/Virtual LIVE Training, Coaching and Customized elearning
            </p>
            <a href="{{ route('develop-main') }}" class="btn hero-develop-button fw-bolder text-uppercase">Click to know more</a>
        </div>
    </div>
</section>

<section>
    <input type="text"> name
    <input type="text"> company email
    <input type="text"> contact number
    <input type="checkbox" name="" id="">I consent to the processing of my personal data
    <button>Register Your Interest</button>
</section>

@endsection