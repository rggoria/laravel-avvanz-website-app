@extends('UATWEB.layouts.main')

@section('title')
Integrating Background Screening with your HRMS/ATS - Avvanz Global
@endsection

@section('content')

@section('css')
<link rel="preload" href="{{ asset('images/homepage/homepageBg.webp') }}" as="image">
<link rel="stylesheet" href="{{ asset('css/about.css') }}">
@endsection()

<!-- Environmental Section -->
<section class="bg-image-2">
    <div class="container padding-vertical">
        <div class="row text-white">
            <div class="col-md-7 offset-auto">
                <h1 class="fw-bolder display-5">
                    Partnership Integration
                </h1>
                <h1 class="divider-start-25"></h1>
                <p>
                    <i class="fa fa-calendar"></i> August 5, 2022
                </p>
            </div>
        </div>
    </div>
</section>

<section class="container margin-vertical">
    <div class="row">
        <div class="col">
            <img class="img-fluid" src="{{ asset('images/screen/achievement3-1.jpg') }}" alt="achievement3-1">
        </div>
        <div class="col">
            <img class="img-fluid" src="{{ asset('images/screen/achievement3-2.jpg') }}" alt="achievement3-2">
        </div>
        <div class="col">
            <img class="img-fluid" src="{{ asset('images/screen/achievement3-3.jpg') }}" alt="achievement3-3">
        </div>
    </div>
    <div class="text-center">
        <img class="img-fluid" src="{{ asset('images/screen/achievement3-4.jpg') }}" alt="achievement3-4">
    </div>
    <div class="text-center">
        <img class="img-fluid" src="{{ asset('images/screen/achievement3-5.jpg') }}" alt="achievement3-5">
    </div>
    <div class="text-center">
        <img class="img-fluid" src="{{ asset('images/screen/achievement3-6.jpg') }}" alt="achievement3-6">
    </div>
</section>

@endsection