@extends('UATWEB.layouts.testingLayouts')

@section('title')
Avvanz - Background Checks & Screening
@endsection

@section('content')

<!-- Hero Section -->
<section class="bg-image-1">
    <div class="container padding-vertical">
        <div class="row">
            <div class="col-md-6 order-2 order-md-1 justify-content-center align-content-center">
                <div class="text-white">
                    <h1 class="fw-bolder display-5">
                        We Screen & Strengthen your Human Assets
                    </h1>
                    <div class="divider-start-50"></div>
                    <p>
                        Avvanz is a multi-award winning HRTech and FinTech company that helps more than 3000 companies around the globe mitigate people related risks through background checks and due diligence solutions and enhance their skills and competencies through highly interactive training solutions suited for the Digital Economy.
                    </p>
                    <a href="{{ route('contact') }}" class="btn hero-button fw-bolder" aria-label="Request a demo">Request a Demo</a>
                </div>
            </div>
            <div class="col-md-6 order-1 order-md-2 justify-content-center align-content-center text-center">
                <picture>
                    <source srcset="{{ asset('images/homepage/homepage1-m.webp') }}" type="image/webp" media="(max-width: 767px)">
                    <source srcset="{{ asset('images/homepage/homepage1-w.webp') }}" type="image/webp" media="(min-width: 768px)">
                    <img src="{{ asset('images/homepage/homepage1-w.webp') }}" alt="Homepage Image" class="img-fluid transition-up" width="360" height="360">
                </picture>
            </div>
        </div>
    </div>
</section>

@endsection