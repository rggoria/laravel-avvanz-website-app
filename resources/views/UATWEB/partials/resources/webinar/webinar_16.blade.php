@extends('UATWEB.layouts.main')

@section('title')
Avvanz At Singapore FinTech Festival 2020 (7-11 Dec) - Avvanz Global
@endsection

@section('css')
<link rel="preload" href="{{ asset('images/resources/background/itemsBg.webp') }}" as="image">

<style>
    .bg-image-2 {
        background: url("../images/resources/background/itemsBg.webp") no-repeat center;
        background-size: cover;
        position: relative;
        min-height: 100px;
    }

    .bg-image-2::before {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(18, 71, 95, 0.8);
        z-index: 1;
    }

    .bg-image-2 .container {
        position: relative;
        z-index: 2;
    }
</style>
@endsection

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
                    <i class="fa fa-calendar"></i> December 7, 2020
                </p>
            </div>
        </div>
    </div>
</section>

<section class="container margin-vertical">
    <h1 class="display-5 fw-bolder">
        Avvanz At Singapore FinTech Festival 2020 (7-11 Dec)
    </h1>
    <div class="text-center my-3">
        <img class="img-fluid w-50 h-50 transition-up rounded" src="{{ asset('images/resources/webinarItems/webinar16-1.png') }}" alt="webinar16-1">
    </div>
    <p>
        Tune in to our Podcast as Kannan Chettiar, Managing Director of Avvanz speaks about Managing your employee lifecycle from background screening to onboarding to learning. 
    </p>
    <p>
        For the full Podcast, click <a href="https://adriantan.com.sg/kannan-chettiar-avvanz/" class="link-hover">here</a>.
    </p>
    <div class="text-center my-3">
        <img class="img-fluid w-50 h-50 transition-up rounded" src="{{ asset('images/resources/webinarItems/webinar16-2.png') }}" alt="webinar16-2">
    </div>
</section>

@endsection