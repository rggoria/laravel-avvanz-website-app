@extends('UATWEB.layouts.main')

@section('title')
Singtel Learning Fiesta - Avvanz Global
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
                    <i class="fa fa-calendar"></i> June 10, 2014
                </p>
            </div>
        </div>
    </div>
</section>

<section class="container margin-vertical">
    <h1 class="display-5 fw-bolder">
        Singtel Learning Fiesta
    </h1>
    <div class="text-center my-3">
        <img class="img-fluid w-50 h-50 transition-up rounded" src="{{ asset('images/resources/webinarItems/webinar1-1.jpg') }}" alt="webinar1-1">
    </div> 
    <p>
        Kannan Chettiar led a Classroom of Singtel Departmental leaders on:
    </p>
    <p>
        ** Talent Acquisition Strategies to procure the “best” and “safe” talents
    </p>
    <p>
        ** Difference between being employed and being employable and how to improve employability through the right skills and continuous learning and development. Singtel Learning Fiesta
    </p>
</section>

@endsection