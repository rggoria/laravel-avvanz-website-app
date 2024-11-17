@extends('layouts.master')

@section('title')
Quickiebinar Part 1: How Avvanz Weathered Covid-19 - Avvanz Global
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
                    <i class="fa fa-calendar"></i> January 29, 2021
                </p>
            </div>
        </div>
    </div>
</section>

<section class="container margin-vertical">
    <h1 class="display-5 fw-bolder">
        Quickiebinar Part 1: How Avvanz Weathered Covid-19
    </h1>
    <div class="text-center my-3">
        <img class="img-fluid w-50 h-50 transition-up rounded" src="{{ asset('images/resources/webinarItems/webinar18-1.png') }}" alt="webinar18-1">
    </div>
    <p>
        Kannan Chettiar, CEO of Avvanz speaks about how Avvanz managed to weather Covid-19 and came out stronger after. Digital Transformation, ensuring all our employees were onboard the new changes was key to weathering the changes.
    </p>
    <p>
        This Quickiebinar is the first in a series of ‘Quickiebinars’ which Avvanz intends to launch on a regular basis. Watch this space for new videos!
    </p>
    <p>
        Click <a href="https://www.youtube.com/watch?v=D3TZyD3K4XA" class="link-hover">here</a> to watch the short video.
    </p>
    <p>
        Reach out to us at consult@avvanz.com for a non-obligatory chat on how Digital Transformation can help your organization move ahead.
    </p>
</section>

@endsection