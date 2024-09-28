@extends('layouts.master')

@section('title')
Webinar: Safeguarding And Child Protection Part 1 - Avvanz Global
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
                    <i class="fa fa-calendar"></i> February 19, 2020
                </p>
            </div>
        </div>
    </div>
</section>

<section class="container margin-vertical">
    <h1 class="display-5 fw-bolder">
        Webinar: Safeguarding And Child Protection Part 1
    </h1>
    <div class="text-center">
        <img class="img-fluid w-50 h-50" src="{{ asset('images/resources/webinarItems/webinar5-1.gif') }}" alt="webinar5-1">
    </div> 
    <p>
        This is Part 1 of the Webinar Series on <span class="fw-bolder">Safeguarding and Child Protection</span>. 
    </p>
    <a href="https://youtu.be/mgAi8BGoeVs" class="link-hover">Click to view</a>
</section>

@endsection