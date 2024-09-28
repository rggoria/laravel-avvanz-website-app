@extends('layouts.master')

@section('title')
Avvanz Techstival 7 April - Avvanz Global
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
                    <i class="fa fa-calendar"></i> April 7, 2021
                </p>
            </div>
        </div>
    </div>
</section>

<section class="container margin-vertical">
    <h1 class="display-5 fw-bolder">
        Avvanz Techstival 7 April
    </h1>
    <div class="text-center">
        <img class="img-fluid w-50 h-50" src="{{ asset('images/resources/webinarItems/webinar19-1.jpg') }}" alt="webinar19-1">
    </div>
    <h1 class="fw-bolder">
        ABOUT TECHSTIVAL
    </h1>
    <p>
        Techstival is the first-of-its kind hybrid event connecting physical and virtual participants, seen through our avatar – Dennis Miller – as he starts his HR lifecycle journey. This event showcases how technology and best practices empower Dennis. 
    </p>
    <p>
        Avvanz brings together global brands, speakers and panelists to socialise with Dennis and you in a unique format in this event.
    </p>
    <h1>
        Agenda (click to watch)
    </h1>
    <a href="https://youtu.be/56Ub0QluD34" class="link-hover">
        Understand the entire employee lifecycle
    </a>
    <p>
        Employer branding and how to use technology to attract talent
    </p>
    <a href="https://youtu.be/Z1kR-oM2LZc" class="link-hover">
        Talent sourcing and recruitment strategies
    </a>
    <p>
        How technology drives gig economy
    </p>
    <a href="https://youtu.be/oepQjivI37M" class="link-hover">
        Artificial intelligence in recruitment
    </a>
    <a href="https://youtu.be/bR-zzgCj3QA" class="link-hover">
        Screening for the “right” and “safe” hires
    </a>
    <a href="https://youtu.be/f0cJp9nne88" class="link-hover">
        Cloud technology to onboard new joiners
    </a>
    <a href="https://youtu.be/n995cbcYYYk" class="link-hover">
        Get employees productive to the floor in the quickest time
    </a>
    <a href="https://youtu.be/CWGDt4vk7ZA" class="link-hover">
        Engaging and managing performance in the current new dynamics
    </a>
    <a href="https://youtu.be/ku9WVbTiIKM" class="link-hover">
        Effective learning and development strategies leveraging technologies like AR/VR to get employees digital ready
    </a>
    <p>
        Impact of Social Media on HR
    </p>
    <a href="https://youtu.be/pzD7kaUj9hU" class="link-hover">
        Leadership: The importance of creating one’s leadership manifesto
    </a>
    <a href="https://youtu.be/RNb2sdUbjNc" class="link-hover">
        Optimising employee experience to encourage employee retention
    </a>
</section>

@endsection