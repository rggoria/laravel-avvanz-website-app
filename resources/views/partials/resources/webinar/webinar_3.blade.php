@extends('layouts.master')

@section('title')
Crown International: Effective Talent Recruitment And Retention Strategies - Avvanz Global
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
                    <i class="fa fa-calendar"></i> October 6, 2015
                </p>
            </div>
        </div>
    </div>
</section>

<section class="container margin-vertical">
    <h1 class="display-5 fw-bolder">
        Crown International: Effective Talent Recruitment And Retention Strategies
    </h1>
    <div class="text-center">
        <img class="img-fluid w-50 h-50" src="{{ asset('images/resources/webinarItems/webinar3-1.jpg') }}" alt="webinar3-1">
    </div> 
    <p>
        Kannan Chettiar delivered a MasterClass to CHROs, Talent Acquisition Leaders and Business Leaders on critical steps that can be taken to recruit the “right” and “safe” talent as well as retention strategies to reduce staff turnover related costs.
    </p>
</section>

@endsection