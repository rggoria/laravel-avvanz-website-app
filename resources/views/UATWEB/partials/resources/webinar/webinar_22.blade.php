@extends('UATWEB.layouts.main')

@section('title')
Achieving 60% Hiring ROI Through AI And Background Screening - Avvanz Global
@endsection

@section('css')
<link rel="preload" href="{{ asset('images/resources/background/itemsBg.webp') }}" as="image">

<style>
    .bg-image-2 {
        background: url("../images/resources/background/itemsBg.webp") no-repeat center;
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

<section class="bg-image-2">
    <div class="container padding-vertical">
        <div class="row text-white">
            <div class="col-md-7 offset-auto">
                <h1 class="fw-bolder display-5">
                    Conference Details
                </h1>
                <h1 class="divider-start-25"></h1>
                <p>
                    <i class="fa fa-calendar"></i> January 6, 2022
                </p>
            </div>
        </div>
    </div>
</section>

<section class="container margin-vertical">
    <h1 class="display-5 fw-bolder">
        Achieving 60% Hiring ROI Through AI And Background Screening
    </h1>
    <div class="text-center my-3">
        <img class="img-fluid w-50 h-50 transition-up rounded" src="{{ asset('images/resources/webinarItems/webinar22-1.jpg') }}" alt="webinar22-1">
    </div>
    <p class="fw-bolder">
        ACHIEVING 60% HIRING ROI THROUGH AI AND BACKGROUND SCREENING.
    </p>
    <p>
        Kannan Chettiar of Avvanz and Nina Alag Suri of X0PA AI will address the HR industry’s biggest concerns,
    </p>
    <p>
        debunk myths and discuss how technology integration will help achieve 60% ROI in recruitment and onboarding.
    </p>
    <p class="fw-bolder">
        WATCH THE REPLAY <a href="https://www.youtube.com/watch?v=ZHSO3zmg--4" class="link-hover">HERE</a>.
    </p>
    <h1 class="text-center display-5 fw-bolder">
        Meet the speakers.
    </h1>
    <div class="text-center my-3">
        <img class="img-fluid w-50 h-50 transition-up rounded" src="{{ asset('images/resources/webinarItems/webinar22-2.png') }}" alt="webinar22-2">
    </div>
    <div class="text-center my-3">
        <img class="img-fluid w-50 h-50 transition-up rounded" src="{{ asset('images/resources/webinarItems/webinar22-3.png') }}" alt="webinar22-3">
    </div>
</section>

@endsection