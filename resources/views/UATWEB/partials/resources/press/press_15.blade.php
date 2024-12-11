@extends('UATWEB.layouts.main')

@section('title')
Moving Up The Value Chain - Avvanz Global
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
                    Press and Media
                </h1>
                <h1 class="divider-start-25"></h1>
                <p>
                    <i class="fa fa-calendar"></i> February 1, 2021
                </p>
            </div>
        </div>
    </div>
</section>

<section class="container margin-vertical">
    <h1 class="display-5 fw-bolder">
        Moving Up The Value Chain
    </h1>
    <p>
        Avvanz appears in The Business Times today, on topic of What are the unique capabilities and products Singapore can develop as it seeks to transform its manufacturing sector.
    </p>
    <div class="text-center my-3">
        <img class="img-fluid w-50 h-50 transition-up rounded" src="{{ asset('images/resources/pressItems/press15-1.jpeg') }}" alt="press15-1">
    </div> 
</section>

@endsection