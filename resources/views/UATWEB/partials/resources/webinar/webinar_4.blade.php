@extends('UATWEB.layouts.main')

@section('title')
Singapore HR Congress: Sieving Out RIGHT And SAFE Multi-Generational Talents - Avvanz Global
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
                    <i class="fa fa-calendar"></i> November 8, 2016
                </p>
            </div>
        </div>
    </div>
</section>

<section class="container margin-vertical">
    <h1 class="display-5 fw-bolder">
        Singapore HR Congress: Sieving Out RIGHT And SAFE Multi-Generational Talents
    </h1>
    <div class="text-center my-3">
        <img class="img-fluid w-50 h-50 transition-up rounded" src="{{ asset('images/resources/webinarItems/webinar4-1.jpg') }}" alt="webinar4-1">
    </div> 
    <p>
        Singapore HR Congress hosted by SHRI was held on November 8th and 9th in 2016. It was initiated by Mr Teo Ser Luck, Minster of State, Ministry of Manpower. Kannan Chettiar, Managing Director of Avvanz, was specially invited for the following:
    </p>
    <ul>
        <li>
            Panelist for the discussion on <span class="fw-bolder">The Metamorphosis of Skilling the Workforce – Is Knowledge-on-Demand, the Way forward?</span>
        </li>
        <li>
            Speaker on <span class="fw-bolder">Sieving our RIGHT and SAFE Multi-Generational Talents</span>
        </li>
    </ul>
    <div class="text-center my-3">
        <img class="img-fluid w-50 h-50 transition-up rounded" src="{{ asset('images/resources/webinarItems/webinar4-2.jpg') }}" alt="webinar4-2">
    </div> 
</section>

@endsection