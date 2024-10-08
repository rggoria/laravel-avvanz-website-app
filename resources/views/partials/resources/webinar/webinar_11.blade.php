@extends('layouts.master')

@section('title')
Webinar: Safeguarding And Child Protection Part 4 - Avvanz Global
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
                    <i class="fa fa-calendar"></i> August 11, 2020
                </p>
            </div>
        </div>
    </div>
</section>

<section class="container margin-vertical">
    <h1 class="display-5 fw-bolder">
        Webinar: Safeguarding And Child Protection Part 4
    </h1>
    <div class="text-center">
        <img class="img-fluid w-50 h-50" src="{{ asset('images/resources/webinarItems/webinar11-1.png') }}" alt="webinar11-1">
    </div> 
    <p>
        Tune in to our Podcast as Kannan Chettiar, Managing Director of Avvanz speaks about Managing your employee lifecycle from background screening to onboarding to learning. 
    </p>
    <p>
        For the full Podcast, click <a href="https://adriantan.com.sg/kannan-chettiar-avvanz/" class="link-hover">here</a>.
    </p>
</section>

@endsection