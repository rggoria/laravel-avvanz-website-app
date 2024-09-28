@extends('layouts.master')

@section('title')
Caribbean Webinar: How And Why To Hire The Best Background Check Company - Avvanz Global
@endsection

@section('css')
<link rel="preload" href="{{ asset('images/homepage/homepageBg.webp') }}" as="image">
@endsection()

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
                    <i class="fa fa-calendar"></i> October 28, 2020
                </p>
            </div>
        </div>
    </div>
</section>

<section class="container margin-vertical">
    <h1 class="display-5 fw-bolder">
        Caribbean Webinar: How And Why To Hire The Best Background Check Company
    </h1>
    <div class="text-center">
        <img class="img-fluid w-50 h-50" src="{{ asset('images/resources/webinarItems/webinar13-1.png') }}" alt="webinar13-1">
    </div>
    <div class="text-center">
        <img class="img-fluid w-50 h-50" src="{{ asset('images/resources/webinarItems/webinar13-2.jpeg') }}" alt="webinar13-2">
    </div>
    <a href="https://youtu.be/4RSkI-81Fjw" class="link-hover">Click here to watch the webinar organised by ActionInvest INC and Avvanz. </a>
</section>

@endsection