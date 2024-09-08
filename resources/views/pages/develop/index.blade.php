@extends('layouts.master')

@section('title')
Develop - Avvanz Global
@endsection

@section('content')

<!--  Navbar Section -->
@include('layouts.navbar')

<!-- Hero Section -->
<section class="bg-image">
    <div class="container">
        <div class="row text-white">
            <div class="col-md-7 offset-auto">
                <h1 class="fw-bolder display-5">
                    Develop
                </h1>
                <h1 class="divider-start-25"></h1>
                <p class="lead">
                    Learn. Achieve. Sustain
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Training Framework Section -->
<section class="container my-5">
    <div class="text-center">
        <p class="lead mt-2 text-pb">
            To be a successful contributor to your organization amidst the Digital Economy, the right skills and competencies are very critical. To achieve that, a customized, contextualized, localized, and highly engaging training and development strategy must be crafted.
        </p>
        <h3 class="text-dmb text-co">
            Avvanz's Training Framework
        </h3>
        <div class="d-flex align-items-center justify-content-center my-5">
            <img src="{{ asset('images/develop/leadership0013Artboard-5-1024x645.png')}}" alt="Placeholder Image" class="transition-up img-fluid h-50 w-50">
        </div>
        <p class="lead my-5 text-start">
            Avvanz’s mission is to bring you world-class Mastery of Business Skills to stay relevant in this Digital Economy through our face-to-face, virtual, or blending trainings facilitated by STAR Trainers, who possess in-depth role-specific and domain-specific working experiences across multiple disciplines around the globe. The learning journey also consists of an on-demand, micro-learning programs that learners can access 24/7 at their own time and a monthly Nibble & Learn sessions for maximum retention and application.
        </p>
        <h3 class="text-dmb text-co">
            Avvanz's Training Methodology
        </h3>
        <div class="d-flex align-items-center justify-content-center my-5">
            <img src="{{ asset('images/develop/avvanzdevelopArtboard-1-1024x649.png')}}" alt="Placeholder Image" class="transition-up img-fluid h-50 w-50">
        </div>
        <hr>
        <div class="d-flex align-items-center justify-content-center my-5">
            <img src="{{ asset('images/develop/Key-TracksArtboard-1-1-1024x349.png')}}" alt="Placeholder Image" class="transition-up img-fluid h-50 w-50">
        </div>
    </div>
    <div class="row g-3 py-5">
        @foreach ( $trainingItems as $item)
            <div class="col-sm-12 col-md-4 col-lg-4 mb-4">
                <div class="card h-100 text-center py-3">
                    <i class="fas {{ $item['icon'] }}" style="font-size: 8rem;"></i>
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title fw-bolder text-dmb">
                            {{ $item['title'] }}
                        </h5>
                        <h5 class="card-text lead">
                            {{ $item['description'] }}
                        </h5>
                        <div class="d-grid gap-2 col-6 mx-auto my-4">
                            <a href="#" class="btn btn-marigold-transition text-uppercase">learn more</a>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    <div class="row g-3 py-5">
        <div class="col-sm-12 col-md-6 col-lg-6 mb-4 d-flex align-items-center ">
            <div class="d-flex justify-content-center">
                <img src="{{ asset('images/develop/leadership8Artboard-3.png')}}" alt="Placeholder Image" class="transition-up img-fluid h-50 w-50">
            </div>
        </div>
        <div class="col-sm-12 col-md-6 col-lg-6 mb-4">
            <p class="lead">
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

<!-- Partners Section -->
<section class="container my-5">
    <div class="text-center">
        <h1 class="text-dmb fw-bolder display-5">
            How Avvanz's Unique Methodology Works?
        </h1>
        <h1 class="divider-center-25"></h1>
    </div>
    <div class="row g-3 py-5">
        @foreach($methodologyAchievementItems as $item)
            <div class="col-sm-12 col-md-6 col-lg-4 mb-4">
                <div class="card border-radius-dmb h-100 text-center">
                    <img src="{{ asset('images/develop/' . $item['image']) }}" class="card-img-top" alt="{{ $item['title'] }}">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title fw-bolder text-dmb">
                            {{ $item['title'] }}
                        </h5>
                        <h5 class="card-text lead">
                            {{ $item['description'] }}
                        </h5>
                        <div class="d-grid gap-2 col-6 mx-auto my-4">
                            <a href="#" class="btn btn-marigold-transition text-uppercase">learn more</a>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    <div class="text-start">
        <ul class="list-group">
            @foreach ( $methodologyItems as $items )
                <li class="d-flex align-items-start mb-2">
                    <i class="fas fa-check-circle me-2 fs-6 mt-1 text-dmb align-self-start"></i>
                    {{ $items }}
                </li>
            @endforeach
        </ul>
    </div>
</section>

<section>
    <div class="text-center">
        <h1 class="text-dmb fw-bolder display-5">
            Find Out More!
        </h1>
        <h1 class="divider-center-25"></h1>
        <p class="lead mt-2">
            Please contact us so that we connect with you soonest possible
        </p>
    </div>
    <div class="d-grid gap-2 col-2 mx-auto my-4">
        <a href="#" class="btn btn-marigold-transition">Contact Us</a>
    </div>
</section>

<!-- Floating Button -->
@include('layouts.floating')

<!-- Footer Section -->
@include('layouts.footer')

@endsection