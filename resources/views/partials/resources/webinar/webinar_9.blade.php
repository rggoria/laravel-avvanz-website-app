@extends('layouts.master')

@section('title')
Webinar: Safeguarding And Child Protection Part 3 - Avvanz Global
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
                    <i class="fa fa-calendar"></i> July 17, 2020
                </p>
            </div>
        </div>
    </div>
</section>

<section class="container margin-vertical">
    <h1 class="display-5 fw-bolder">
        Webinar: Safeguarding And Child Protection Part 3
    </h1>
    <div class="text-center">
        <img class="img-fluid w-50 h-50" src="{{ asset('images/resources/webinarItems/webinar9-1.png') }}" alt="webinar9-1">
    </div> 
    <p>
        In this Part 3 of Avvanz’s Safeguarding and Child Protection Webinar, our panelists from Singapore, UK and India discussed:
    </p>
    <ul>
        <li>
            What is Safeguarding and Child Protection and what are the key aspects of it that are relevant and imperative in today’s crisis period?
        </li>
        <li>
            What is the level of understanding of safeguarding and child protection in different parts of the world?
        </li>
        <li>
            One of the key areas of Safeguarding and Child Protection is “Safer Recruitment”. Why this is critical and what measures can be taken to strengthen safer recruitment?
        </li>
        <li>
            How do you think <a href="{{ route('screen-main') }}" class="link-hover">background checks</a> can help to ensure safeguarding and child protection?
        </li>
        <li>
            With <a href="{{ route('develop-2') }}" class="link-hover">online learning</a>, what are the possible risks and how can they be mitigated?
        </li>
        <li>
            How can we ensure the learning experience is equitable during this time? / Were there any challenges that you needed to address as you transitioned to online learning during lockdown?
        </li>
        <li>
            What additional safeguarding considerations and measures you took to ensure that children were safe?
        </li>
        <li>
            What has been the biggest learning for you in these 3 months of school during Covid? / Based on your experience in the last 3 months what was the most useful element of your educational program?
        </li>
        <li>
            What have been some challenges that you are still trying to overcome?
        </li>
        <li>
            How do you plan to support children as they return to school so that they can continue to thrive in their learning?
        </li>
    </ul>
    <a href="https://www.youtube.com/watch?v=WXF5b8RZ7oI" class="link-hover">Click to watch the Webinar.</a>
    <p>
        Shots taken during Webinar:
    </p>
    <div class="text-center">
        <img class="img-fluid w-50 h-50" src="{{ asset('images/resources/webinarItems/webinar9-2.png') }}" alt="webinar9-2">
    </div> 
    <div class="text-center">
        <img class="img-fluid w-50 h-50" src="{{ asset('images/resources/webinarItems/webinar9-3.png') }}" alt="webinar9-3">
    </div> 
</section>

@endsection