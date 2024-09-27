@extends('layouts.master')

@section('title')
Avvanz Managing Director is Executive of the Year – HR Technology - Avvanz Global
@endsection

@section('content')

@section('css')
<link rel="preload" href="{{ asset('images/homepage/homepageBg.webp') }}" as="image">
<link rel="stylesheet" href="{{ asset('css/about.css') }}">
@endsection()

<section class="bg-image-2">
    <div class="container padding-vertical">
        <div class="row text-white">
            <div class="col-md-7 offset-auto">
                <h1 class="fw-bolder display-5">
                    Press and Media
                </h1>
                <h1 class="divider-start-25"></h1>
                <p>
                    <i class="fa fa-calendar"></i> December 7, 2017
                </p>
            </div>
        </div>
    </div>
</section>

<section class="container margin-vertical">
    <h1 class="text-dmb display-5 fw-bolder">
        Avvanz Managing Director is Executive of the Year – HR Technology
    </h1>
    <p>
        Singapore Business Review, the only industry magazine which reaches senior executives in the top 1700 companies covering 94% of listed companies, lauds 2017’s most exceptional business leaders. The winners were judged by NEXIA TS, SEA Consulting Asia Pacific, Deloitte, Baker Tilly TFW, Drew & Napier and RHTLaw Taylor Wessing LLP.
    </p>
    <div class="row justify-content-center align-items-center">
        <div class="col-lg-3 d-flex justify-content-center align-items-center my-5">
            <img
                src="{{ asset('images/about/award1-1.jpg') }}"
                width="250"
                height="350"
                alt="About Us Image 1"
                class="rounded-3 transition-up"
                loading="lazy">
        </div>
        <div class="col-lg-9">
            <div>
                <p>
                    Kannan Chettiar, Managing Director of Avvanz, a technology-based Employee Lifecycle Managment company, has been awarded <span class="fw-bolder">Executive of the Year – Human Resource Technology</span>. This is an extremely honourable Management Excellence Award. Within 2 years of inception, Kannan has managed to differentiate <a href="{{ route('home') }}" class="link-hover">Avvanz</a> in the HR Tech space with uniquely differentiated solutions in background checks and due diligence, new employee onboarding and training and development. Kannan delightfully remarked, “This is an amazing endorsement for Avvanz, my extremely diligent team and myself. We were told we won this because the judges were impressed by how we have managed to disrupt the HR space by incorporating technology into the employee lifecycle management and how we have established a client base internationally across Asia, EMEA and NA within a short space of time. The judges also commented that they believe our solutions are essential to all organizations. We are very pumped up about this and we will continue to grow our business internationally with our innovative solutions.”
                </p>
            </div>
        </div>
    </div>
</section>

@endsection