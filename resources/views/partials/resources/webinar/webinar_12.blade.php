@extends('layouts.master')

@section('title')
IHRP Tech Talk Series-Leveraging HR Tech To Create Best In Class Candidate Experience - Avvanz Global
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
                    <i class="fa fa-calendar"></i> August 28, 2020
                </p>
            </div>
        </div>
    </div>
</section>

<section class="container margin-vertical">
    <h1 class="display-5 fw-bolder">
        IHRP Tech Talk Series-Leveraging HR Tech To Create Best In Class Candidate Experience
    </h1>
    <div class="text-center">
        <img class="img-fluid w-50 h-50" src="{{ asset('images/resources/webinarItems/webinar12-1.png') }}" alt="webinar12-1">
    </div> 
    <a href="https://www.youtube.com/watch?v=TkvNaY6oLI4" class="link-hover">Click to watch recording of Webinar attended by close to 400 professionals.</a>
</section>

@endsection