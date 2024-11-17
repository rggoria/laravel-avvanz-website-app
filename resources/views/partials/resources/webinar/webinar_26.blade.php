@extends('layouts.master')

@section('title')
Avvanz Techstival 2023 Philippine Edition - Avvanz Global
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
                    <i class="fa fa-calendar"></i> May 2, 2023
                </p>
            </div>
        </div>
    </div>
</section>

<section class="container margin-vertical">
    <h1 class="display-5 fw-bolder">
        Avvanz Techstival 2023 Philippine Edition
    </h1>
    <div class="text-center my-3">
        <img class="img-fluid w-50 h-50 transition-up rounded" src="{{ asset('images/resources/webinarItems/webinar26-1.png') }}" alt="webinar26-1">
    </div>
    <p>
        Theme: <span class="fw-bolder">Leveraging Disruptive Technologies in Human Resources</span>
    </p>
    <p>
        Participants:
    </p>
    <ul>
        <li>
            <span class="fw-bolder">Kannan Chettiar</span> (Avvanz)
        </li>
        <li>
            <span class="fw-bolder">Siang Tan</span> (Avvanz)
        </li>
        <li>
            <span class="fw-bolder">Zek Fernandez</span> (Viventis)
        </li>
        <li>
            <span class="fw-bolder">Yu Ming Chin</span> (Viventis)
        </li>
        <li>
            <span class="fw-bolder">May Manaog</span> (Principal Global Services)
        </li>
        <li>
            <span class="fw-bolder">Gauri Sharma</span> (CGI)
        </li>
    </ul>
    <p>
        In this video, you can see the highlights of what happened during the <span class="fw-bolder">Techstival</span> and how insightful the discussion was.
    </p>
    <p>
        Watch the replay <a href="https://youtu.be/NG_TPQDh6dE" class="link-hover">here</a>.
    </p>
    <p class="fw-bolder">
        What we have discussed:
    </p>
    <ul>
        <li class="fw-bolder">
            Recruitment
        </li>
        <li class="fw-bolder">
            Screening
        </li>
        <li class="fw-bolder">
            Screening
        </li>
    </ul>
</section>

@endsection