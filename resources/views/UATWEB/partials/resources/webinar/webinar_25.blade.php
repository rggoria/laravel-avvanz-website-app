@extends('UATWEB.layouts.main')

@section('title')
AVVANZ WEBCAFE: The Great Resignation vs. The Great Retention - Avvanz Global
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
        AVVANZ WEBCAFE: The Great Resignation vs. The Great Retention
    </h1>
    <div class="text-center my-3">
        <img class="img-fluid w-50 h-50 transition-up rounded" src="{{ asset('images/resources/webinarItems/webinar25-1.png') }}" alt="webinar25-1">
    </div>
    <p>
        <span class="fw-bolder">Participants:</span>
    </p>
    <ul>
        <li>
            Kannan Chettiar, Avvanz
        </li>
        <li>
            Rosalind Loh, Avvanz
        </li>
        <li>
            Chi Ming Loh, LinkedIn
        </li>
        <li>
            Gary Lee, Group HR
        </li>
        <li>
            Vivek Ivyani, Millenial Minds PTE Ltd.
        </li>
        <li>
            Shirley Temple Lau, Herrenknecht Asia Ltd.
        </li>
    </ul>
    <p>
        In this insightful discussion, you will be able to hear different views and perspectives from our participants of different backgrounds and industries about The Great Resignation vs. The Great Retention: best practices on how to retain the best talents.
    </p>
    <p>
        Watch the replay <a href="https://www.youtube.com/watch?v=WgwT_uRdZXY" class="link-hover">here</a>.
    </p>
    <p class="fw-bolder">
        What we have discussed:
    </p>
    <ul>
        <li>
            The “hopper” mindset
        </li>
        <li>
            The great reshuffle
        </li>
        <li>
            What are the best practices that you can do in your organization to retain your talents
        </li>
        <li>
            How do you address employee concerns from different generations
        </li>
    </ul>
</section>

@endsection