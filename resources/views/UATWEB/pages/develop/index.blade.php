@extends('UATWEB.layouts.main')

@section('title')
Develop - Avvanz Global
@endsection

@section('css')
<link rel="preload" href="{{ asset('images/homepage/homepageBg.webp') }}" as="image">
<link rel="stylesheet" href="{{ asset('css/develop.css') }}">
@endsection

@section('content')

<!-- Hero Section -->
<section class="bg-image-2">
    <div class="container padding-vertical">
        <div class="row text-white">
            <div class="col-md-7 offset-auto">
                <h1 class="fw-bolder display-5">
                    Develop
                </h1>
                <h1 class="divider-start-25"></h1>
                <p>
                    Learn. Achieve. Sustain
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Training Framework Section -->
<section class="container margin-vertical">
    <div class="text-center">
        <p class="mt-2 text-pb">
            To be a successful contributor to your organization amidst the Digital Economy, the right skills and competencies are very critical. To achieve that, a customized, contextualized, localized, and highly engaging training and development strategy must be crafted.
        </p>
        <h3 class="text-co">
            Avvanz's Training Framework
        </h3>
        <div class="d-flex align-items-center justify-content-center my-5">
            <img
                src="{{ asset('images/develop/develop1.webp')}}"
                alt="Develop Image 1"
                style="height: 450px; width:350px;"
                class="transition-up img-fluid"
                loading="lazy">
        </div>
        <p class="my-5 text-start">
            Avvanz’s mission is to bring you world-class Mastery of Business Skills to stay relevant in this Digital Economy through our face-to-face, virtual, or blending trainings facilitated by STAR Trainers, who possess in-depth role-specific and domain-specific working experiences across multiple disciplines around the globe. The learning journey also consists of an on-demand, micro-learning programs that learners can access 24/7 at their own time and a monthly Nibble & Learn sessions for maximum retention and application.
        </p>
        <h3 class="text-co">
            Avvanz's Training Methodology
        </h3>
        <div class="d-flex align-items-center justify-content-center my-5">
            <img
                src="{{ asset('images/develop/develop2.webp')}}"
                alt="Develop Image 2"
                style="height: 350px; width:350px;"
                class="transition-up img-fluid"
                loading="lazy">
        </div>
        <hr>
        <div class="d-flex align-items-center justify-content-center my-5">
            <img
                src="{{ asset('images/develop/develop3.webp')}}"
                alt="Develop Image 3"
                style="height: 200px; width:350px;"
                class="transition-up img-fluid"
                loading="lazy">
        </div>
    </div>
    <div class="row g-3">
        @foreach ( $trainingItems as $item)
            <div class="col-sm-12 col-md-4 col-lg-4 mb-4">
                <div class="card text-center border-radius-dmb h-100 py-3">
                    @if ($item['title'] == "Digital Transformation & Critical Skills for Digital Economy")
                        <div class="d-flex justify-content-center text-white">
                            <div class="border-circle-mg">
                                <i class="fab {{ $item['icon'] }}" style="font-size: 6rem;"></i>
                            </div>
                        </div>
                    @else
                    <div class="d-flex justify-content-center text-white">
                        <div class="border-circle-mg">
                            <i class="fa {{ $item['icon'] }}" style="font-size: 6rem;"></i>
                        </div>
                    </div>
                    @endif
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title fw-bolder text-dmb">
                            {{ $item['title'] }}
                        </h5>
                        <h5 class="card-text">
                            {{ $item['description'] }}
                        </h5>
                        <div class="d-grid gap-2 col-6 mx-auto my-4">
                            <a href="{{ route('trainingItems', ['title' => Str::slug($item['title'])]) }}" class="btn learn-button-marigold text-uppercase">learn more</a>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    <div class="row g-3 py-5">
        <div class="col-sm-12 col-md-6 col-lg-6 mb-4 d-flex align-items-center ">
            <div class="d-flex justify-content-center">
                <img
                    src="{{ asset('images/develop/develop4.webp')}}"
                    alt="Develop Image 4"
                    class="transition-up img-fluid h-50 w-50"
                    loading="lazy">
            </div>
        </div>
        <div class="col-sm-12 col-md-6 col-lg-6 mb-4">
            <p>
                A study has shown that a robust training and development program consisting of the following mentioned components can improve an employee’s performance by at least 20% in a year.
            </p>
            <div class="text-start">
                <ul class="list-unstyled">
                    @foreach ( $programItems as $items )
                        <li class="d-flex align-items-start mb-2">
                            <i class="fas fa-check-circle me-2 fs-6 mt-1 text-co align-self-start"></i>
                            {{ $items }}
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- Methodology Section -->
<section class="container-fluid bg-afw py-5">
    <div class="container">
        <div class="text-center">
            <h1 class="text-dmb fw-bolder display-5">
                How Avvanz's Unique Methodology Works?
            </h1>
            <h1 class="divider-center-25"></h1>
        </div>
        <div class="row g-3 py-5">
            @foreach($methodologyAchievementItems as $item)
                <div class="col-sm-12 col-md-4 col-lg-4">
                    <div class="card border-radius-dmb h-100 text-center">
                        <img
                            src="{{ asset('images/develop/' . $item['image']) }}"
                            class="card-img-top"
                            alt="{{ $item['title'] }}"
                            loading="lazy">
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title fw-bolder text-dmb">
                                {{ $item['title'] }}
                            </h5>
                            <h5 class="card-text">
                                {{ $item['description'] }}
                            </h5>
                            <div class="d-grid gap-2 col-6 mx-auto my-4">
                                <a href="{{ $item['link'] }}" class="btn learn-button-mg text-uppercase">learn more</a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="text-start px-5">
            <ul class="list-group">
                @foreach ( $methodologyItems as $items )
                    <li class="d-flex align-items-start mb-2">
                        <i class="fas fa-check-circle me-2 fs-6 mt-1 text-dmb align-self-start"></i>
                        {{ $items }}
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
</section>

<section class="py-3">
    <div class="text-center">
        <h1 class="text-dmb fw-bolder display-5">
            Find Out More!
        </h1>
        <h1 class="divider-center-25"></h1>
        <p class="mt-2">
            Please contact us so that we connect with you soonest possible
        </p>
    </div>
    <div class="d-grid gap-2 col-2 mx-auto my-4">
        <a href="{{ route('contact') }}" class="btn btn-marigold-transition">Contact Us</a>
    </div>
</section>

@endsection