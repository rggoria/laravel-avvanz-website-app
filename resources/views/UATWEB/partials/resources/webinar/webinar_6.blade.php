@extends('UATWEB.layouts.main')

@section('title')
Recruitment Masterclass: Employer Branding, Candidate Engagement And Background Screening During COVID-19 - Avvanz Global
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
                    <i class="fa fa-calendar"></i> May 6, 2020
                </p>
            </div>
        </div>
    </div>
</section>

<section class="container margin-vertical">
    <h1 class="display-5 fw-bolder">
        Recruitment Masterclass: Employer Branding, Candidate Engagement And Background Screening During COVID-19
    </h1>
    <div class="text-center my-3">
        <img class="img-fluid w-50 h-50 transition-up rounded" src="{{ asset('images/resources/webinarItems/webinar6-1.png') }}" alt="webinar6-1">
    </div> 
    <p>
        Avvanz, in partnership with Justlogin, presented to close to 200 attendees on why employment screening is even more important amidst Covid-19. RecruiterPal and Happyer spoke about candidate engagement and employer branding. 
    </p>
    <a href="https://offer.justlogin.com/webinar-recording-recruitment-masterclass" class="link-hover">
        Click here to watch the Webinar. 
    </a>
</section>

@endsection