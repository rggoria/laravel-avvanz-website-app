@extends('layouts.master')

@section('title')
Avvanz Webcafe: Monetary Authority of Singapore (MAS) Mandatory Reference Checks - Avvanz Global
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
                    <i class="fa fa-calendar"></i> January 6, 2022
                </p>
            </div>
        </div>
    </div>
</section>

<section class="container margin-vertical">
    <h1 class="display-5 fw-bolder">
        Avvanz Webcafe: Monetary Authority of Singapore (MAS) Mandatory Reference Checks
    </h1>
    <div class="text-center">
        <img class="img-fluid w-50 h-50" src="{{ asset('images/resources/webinarItems/webinar24-1.png') }}" alt="webinar24-1">
    </div>
    <p>
        <span class="fw-bolder">Participants:</span> Kannan Chettiar and Siang Tan of Avvanz
    </p>
    <p>
        <span class="fw-bolder">Topic:</span> MAS Mandatory Reference Checks
    </p>
    <p>
        In this <span class="fw-bolder">Webcafe</span>, you will learn more on:
    </p>
    <ul>
        <li>
            Background of the MAS proposal on mandatory reference checks.
        </li>
        <li>
            Who is impacted?
        </li>
        <li>
            What are the changes?
        </li>
        <li>
            How Technology can help.
        </li>
    </ul>
    <p>
        Watch the full video <a href="https://www.youtube.com/watch?v=RJrrn0OSjbo" class="link-hover">here</a>.
    </p>
</section>

@endsection