@extends('UATWEB.layouts.main')

@section('title')
View From The Top: Disparity between the stock markets and the economy - Avvanz Global
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
                    <i class="fa fa-calendar"></i> July 13, 2020
                </p>
            </div>
        </div>
    </div>
</section>

<section class="container margin-vertical">
    <h1 class="text-center display-5 fw-bolder">
        View From The Top: Disparity between the stock markets and the economy
    </h1>
    <div class="text-center my-3">
        <img class="img-fluid w-50 h-50 transition-up rounded" src="{{ asset('images/resources/pressItems/press5-1.png') }}" alt="press5-1">
    </div> 
</section>

@endsection