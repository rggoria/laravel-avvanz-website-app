@extends('layouts.master')

@section('title')
Environmental, Social and Governance
@endsection

@section('content')

@section('css')
<link rel="preload" href="{{ asset('images/homepage/homepageBg.webp') }}" as="image">
<link rel="stylesheet" href="{{ asset('css/about.css') }}">
@endsection()

<!--  Navbar Section -->
@include('layouts.navbar')

<!-- Environmental Section -->
<div class="bg-image-2">
    <div class="container padding-vertical">
        <div class="row text-white">
            <div class="col-md-7 offset-auto">
                <h1 class="fw-bolder display-5">
                    Environmental, Social and Governance
                </h1>
                <h1 class="divider-start-25"></h1>
                <p>
                    Make a difference
                </p>
                <div class="input-group mt-5">
                    <input type="text" class="form-control border-simple-left" placeholder="Search...">
                    <div class="input-group-append">
                        <button class="btn border-simple-right bg-marigold px-5" type="button">
                            <i class="fas fa-search text-white"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<section class="container margin-vertical">
    <div class="row g-3">
        <div class="col-sm-12 col-md-6 col-lg-4 mb-4">
            <a href="https://www.avvanz.com/avvanz-charity-movement-to-tahanan-ng-pagmamahal/" class="text-decoration-none">
                <div class="card border-radius-dmb h-100">
                    <img
                        src="{{ asset('images/about/environment1.webp') }}" 
                        class="card-img-top" 
                        style="height: 200px; width:auto"
                        alt="Environment Image 1"
                        loading='lazy'>
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title fw-bolder text-dmb">
                            Executive of the Year - HR Technology
                        </h5>
                        <p class="card-text text-muted">
                            May 2, 2023
                        </p>                  
                    </div>
                </div>
            </a>
        </div>
    </div>
</section>

<!-- Floating Button -->
@include('layouts.floating')

<!-- Footer Section -->
@include('layouts.footer')

@endsection