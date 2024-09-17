@extends('layouts.master')

@section('title')
Contact Us - Avvanz Global
@endsection

@section('content')

<!--  Navbar Section -->
@include('layouts.navbar')

<!-- Hero Section -->
<section class="bg-image-2">
    <div class="container padding-vertical">
        <div class="row text-white">
            <div class="col-md-7 offset-auto">
                <h1 class="fw-bolder display-5">
                    Contact Us
                </h1>
                <h1 class="divider-start-25"></h1>
                <p>
                    Feel free to send us a message. We would like to hear it from you!
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Request Demo Section -->
<section class="container margin-vertical text-white">
    <div class="text-center">
        <h1 class="text-dmb fw-bolder display-5">
            Request a Demo
        </h1>
        <h1 class="divider-center-25"></h1>
    </div>
    <div class="row g-3 mt-3">
        <div class="col-md-3">
            <h4 class="p-5 d-flex justify-content-center align-items-center bg-dmb fw-bolder text-center h-100 w-100">
                International Backgorund Check
            </h4>
        </div>
        <div class="col-md-3">
            <h4 class="p-5 d-flex justify-content-center align-items-center bg-marigold fw-bolder text-center h-100 w-100">
                Workpass Requirement Background Checks
            </h4>
        </div>
        <div class="col-md-3">
            <h4 class="p-5 d-flex justify-content-center align-items-center bg-dmb fw-bolder text-center h-100 w-100">
                Compnay Due Diligence
            </h4>
        </div>
        <div class="col-md-3">
            <h4 class="p-5 d-flex justify-content-center align-items-center bg-marigold fw-bolder text-center h-100 w-100">
                LIVE Training and eLearning
            </h4>
        </div>
    </div>
    <div class="text-center my-5">
        <h1 class="text-dmb fw-bolder display-5">
            General Inquiry
        </h1>
        <h1 class="divider-center-25"></h1>
        <p class="text-dark my-3">
            Feel free to send us a message. We would like to hear it from you!
        </p>
        <div class="row justify-content-center text-start">
            <div class="col-md-8">
                <div class="p-4">
                    <form>
                        <div class="mb-3">
                            <label for="name" class="form-label text-dmb fw-bolder">Name <span class="sup text-danger">*</span></label>
                            <input type="text" class="form-control" id="name" placeholder="Enter your name" required>
                        </div>
                        <div class="mb-3">
                            <label for="cname" class="form-label text-dmb fw-bolder">Company Name <span class="sup text-danger">*</span></label>
                            <input type="text" class="form-control" id="cname" placeholder="Enter your name" required>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label text-dmb fw-bolder">Company Email <span class="sup text-danger">*</span></label>
                            <input type="email" class="form-control" id="email" placeholder="Enter your email" required>
                        </div>
                        <div class="mb-3">
                            <label for="contact" class="form-label text-dmb fw-bolder">Company Contact No. <span class="sup text-danger">*</span></label>
                            <input type="text" class="form-control" id="contact" placeholder="Enter your contact no." required>
                        </div>
                        <div class="mb-3">
                            <label for="subject" class="form-label text-dmb fw-bolder">Subject <span class="sup text-danger">*</span></label>
                            <input type="text" class="form-control" id="subject" placeholder="Enter your subject" required>
                        </div>
                        <div class="mb-3">
                            <label for="message" class="form-label text-dmb fw-bolder">Message <span class="sup text-danger">*</span></label>
                            <textarea class="form-control" id="message" rows="3" placeholder="Enter you message...."></textarea>
                        </div>

                        <button type="submit" class="btn btn-marigold-transition w-100">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Global Section -->
<section class="container my-5">
    <div class="text-center">
        <h1 class="text-dmb fw-bolder display-5">
            Avvanz Global Offices
        </h1>
        <h1 class="divider-center-25"></h1>
    </div>
    <div class="row g-3 py-5">
        @foreach ($globalItems as $count => $item)
            <div class="col-sm-12 col-md-6 col-lg-6">
                <div class="card 
                    {{ $count === 0 || $count === 3 || $count === 4 ? 'bg-marigold' : 'bg-dmb' }}
                    w-100 h-100 text-white">
                    <div class="card-header">
                        <iframe
                            class="w-100 lazy-iframe"
                            data-src="{{ $item['geolocation'] }}"
                            style="height: 300px; border: 0;"
                            loading="lazy"
                            allowfullscreen
                            title="Google Maps Location"></iframe>
                    </div>
                    <div class="card-body d-flex flex-column">
                        <h3 class="card-title text-center fw-bolder">
                            {{ $item['country'] }}
                        </h3>
                        <div class="card-text">
                            <p class="fw-bold">
                                {{ $item['company'] }}
                            </p>
                            <p class="d-flex align-items-start mb-2">
                                <i class="fas fa-map-marker-alt me-2 fs-6 mt-2 align-self-start"></i>
                                {{ $item['address'] }}
                            </p>
                            @if ($item['contact'])
                                <p class="d-flex align-items-start mb-2">
                                    <i class="fas fa-phone-alt me-2 fs-6 mt-2 align-self-start"></i>
                                    {{ $item['contact'] }}
                                </p>
                            @endif
                            <p class="d-flex align-items-start mb-2">
                                <i class="fas fa-envelope me-2 fs-6 mt-2 align-self-start"></i>
                                consult@avvanz.com
                            </p>
                            @if ($item['country'] == "Singapore")
                                <p class="d-flex align-items-start mb-2">
                                    <i class="fas fa-envelope me-2 fs-6 mt-2 align-self-start"></i>
                                    clientservices@avvanz.com
                                </p>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>    
</section>

<!-- Floating Button -->
@include('layouts.floating')

<!-- Footer Section -->
@include('layouts.footer')

@section('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        var iframes = document.querySelectorAll('.lazy-iframe');
        var observer = new IntersectionObserver(function(entries) {
            entries.forEach(function(entry) {
                if (entry.isIntersecting) {
                    var iframe = entry.target;
                    iframe.src = iframe.getAttribute('data-src');
                    iframe.classList.remove('lazy-iframe');
                    observer.unobserve(iframe);
                }
            });
        }, { threshold: 0.1 });
    
        iframes.forEach(function(iframe) {
            observer.observe(iframe);
        });
    });
</script>
@endsection

@endsection