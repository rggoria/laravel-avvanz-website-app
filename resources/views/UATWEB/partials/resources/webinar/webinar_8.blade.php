@extends('UATWEB.layouts.main')

@section('title')
Webinar: Safeguarding And Child Protection Part 2 - Avvanz Global
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
                    <i class="fa fa-calendar"></i> May 13, 2020
                </p>
            </div>
        </div>
    </div>
</section>

<section class="container margin-vertical">
    <h1 class="display-5 fw-bolder">
        Webinar: Safeguarding And Child Protection Part 2
    </h1>
    <div class="text-center my-3">
        <img class="img-fluid w-50 h-50 transition-up rounded" src="{{ asset('images/resources/webinarItems/webinar8-1.png') }}" alt="webinar8-1">
    </div> 
    <p>
        This is Part 2 of the Webinar Series on <span class="fw-bolder">Safeguarding and Child Protection</span>.
    </p>
    <p>
        Presenter is Suzanne Murray – Safeguarding Lead of Cognita Group of Schools
    </p>
    <div class="text-start">
        <img class="img-fluid w-25 h-25" src="{{ asset('images/resources/webinarItems/webinar8-2.jpg') }}" alt="webinar8-2">
    </div> 
    <a href="https://www.youtube.com/watch?v=B6i7BiIYsj0" class="link-hover">Click to view</a>
</section>

@endsection