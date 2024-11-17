@extends('layouts.master')

@section('title')
Digital Transformation For The Maritime Industry – Demystifying The Process - Avvanz Global
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
                    <i class="fa fa-calendar"></i> January 21, 2021
                </p>
            </div>
        </div>
    </div>
</section>

<section class="container margin-vertical">
    <h1 class="display-5 fw-bolder">
        Digital Transformation For The Maritime Industry – Demystifying The Process
    </h1>
    <div class="text-center my-3">
        <img class="img-fluid w-50 h-50 transition-up rounded" src="{{ asset('images/resources/webinarItems/webinar17-1.jpeg') }}" alt="webinar17-1">
    </div>
    <p>
        In this webinar, Avvanz together with the Institute of Chartered Shipbrokers shared the Digital trends in the Maritime Industry and how the companies involved could scale up with a change in mindset and technology.
    </p>
    <p>
        Click <a href="https://www.youtube.com/watch?v=mXFEU_D4vf0" class="link-hover">here</a> to watch the webinar. 
    </p>
    <p>
        Reach out to us at consult@avvanz.com for a non-obligatory chat on how Digital Transformation can help your organization move ahead.
    </p>
</section>

@endsection