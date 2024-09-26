@extends('layouts.master')

@php
    $currentRouteName = Route::currentRouteName();
@endphp

@section('title')
Request Form 
@if($currentRouteName === 'request-ibc')
    (IBC)
@elseif($currentRouteName === 'request-wrbc')
    (WRBC)
@elseif($currentRouteName === 'request-cdd')
    (CDD)
@elseif($currentRouteName === 'request-lte')
    (LTE)
@endif
- Avvanz Global
@endsection


@section('content')

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
<div class="text-center my-5">
    <h1 class="text-dmb fw-bolder display-5">
        Wanna ask for a help?
    </h1>
    <h1 class="divider-center-25"></h1>
    <p class="text-dark my-3">
        please fill the required information so that we connect with you soonest possible.
    </p>
    <div class="row text-start">
        <div class="col-md-6 offset-3">
            <div class="p-4">
                <div id="response-message"></div>
                <form id="contact-form">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label text-dmb fw-bolder">Name <span class="sup text-danger">*</span></label>
                        <input name="name" type="text" class="form-control" id="name" placeholder="Enter your name">
                        <div id="name-error" class="invalid-feedback"></div>
                    </div>
                    <hr>
                    <div class="mb-3">
                        <label for="cname" class="form-label text-dmb fw-bolder">Company Name <span class="sup text-danger">*</span></label>
                        <input name="cname" type="text" class="form-control" id="cname" placeholder="Enter your company name">
                        <div id="cname-error" class="invalid-feedback"></div>
                    </div>
                    <hr>
                    <div class="mb-3">
                        <label for="email" class="form-label text-dmb fw-bolder">Company Email <span class="sup text-danger">*</span></label>
                        <input name="email" type="email" class="form-control" id="email" placeholder="Enter your company email">
                        <div id="email-error" class="invalid-feedback"></div>
                    </div>
                    <hr>
                    <div class="mb-3">
                        <label for="contact" class="form-label text-dmb fw-bolder">Company Contact No. <span class="sup text-danger">*</span></label>
                        <input name="contact" type="text" class="form-control" id="contact" placeholder="Enter your contact no.">
                        <div id="contact-error" class="invalid-feedback"></div>
                    </div>
                    <hr>
                    <div class="mb-3">
                        <label for="designation" class="form-label text-dmb fw-bolder">Designation <span class="sup text-danger">*</span></label>
                        <input name="designation" type="text" class="form-control" id="designation" placeholder="Enter your designation">
                        <div id="designation-error" class="invalid-feedback"></div>
                    </div>
                    <hr>
                    <div class="mb-3">
                        <label for="country" class="form-label text-dmb fw-bolder">Country <span class="sup text-danger">*</span></label>
                        <input name="country" type="text" class="form-control" id="country" placeholder="Enter your country">
                        <div id="country-error" class="invalid-feedback"></div>
                    </div>
                    <hr>
                    <div class="mb-3">
                        <label class="form-label text-dmb fw-bolder">How did you hear about Avvanz? <span class="sup text-danger">*</span></label>
                        <div class="form-check">
                            <input name="about[]" type="checkbox" class="form-check-input" id="about-client" value="From Avvanz’s other Clients">
                            <label class="form-check-label" for="about-client">From Avvanz’s other Clients</label>
                        </div>
                        <div class="form-check">
                            <input name="about[]" type="checkbox" class="form-check-input" id="about-google" value="Through Google Search">
                            <label class="form-check-label" for="about-google">Through Google Search</label>
                        </div>
                        <div class="form-check">
                            <input name="about[]" type="checkbox" class="form-check-input" id="about-others" value="Others">
                            <label class="form-check-label" for="about-others">Others</label>
                        </div>
                        <div id="about-error" class="invalid-feedback"></div>
                    </div>
                    <hr>
                    <div class="mb-3">
                        <button type="submit" class="btn btn-marigold-transition w-100">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<section class="container margin-vertical text-white">
    <div class="text-center">
        <h1 class="text-dmb fw-bolder display-5">
            Request a Demo
        </h1>
        <h1 class="divider-center-25"></h1>
    </div>
    <div class="row g-3 mt-3">
        <div class="col-md-3">
            <a href="{{ route('request-ibc') }}" class="text-decoration-none">
                <h4 class="p-5 d-flex justify-content-center align-items-center bg-dmb fw-bolder text-center h-100 w-100 text-white">
                    International Backgorund Check
                </h4>
            </a>
        </div>
        <div class="col-md-3">
            <a href="{{ route('request-wrbc') }}" class="text-decoration-none">
                <h4 class="p-5 d-flex justify-content-center align-items-center bg-marigold fw-bolder text-center h-100 w-100 text-white">
                    Workpass Requirement Background Checks
                </h4>
            </a>
        </div>
        <div class="col-md-3">
            <a href="{{ route('request-cdd') }}" class="text-decoration-none">
                <h4 class="p-5 d-flex justify-content-center align-items-center bg-dmb fw-bolder text-center h-100 w-100 text-white">
                    Compnay Due Diligence
                </h4>
            </a>
        </div>
        <div class="col-md-3">
            <a href="{{ route('request-lte') }}" class="text-decoration-none">
                <h4 class="p-5 d-flex justify-content-center align-items-center bg-marigold fw-bolder text-center h-100 w-100 text-white">
                    LIVE Training and eLearning
                </h4>
            </a>
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

@section('scripts')
<script>
    $(document).ready(function() {
        $('#contact-form').on('submit', function(e) {
            e.preventDefault();
            $('.invalid-feedback').text('');
            $('#response-message').empty();
            $.ajax({
                type: 'POST',
                url: '{{ route('request-send') }}',
                data: $(this).serialize(),
                success: function(response) {
                    $('#response-message').html('<p class="text-success">' + response.success + '</p>');
                    $('#contact-form')[0].reset(); // Reset form
                },
                error: function(xhr) {
                    if (xhr.status === 422) {
                        // Validation errors
                        $.each(xhr.responseJSON.errors, function(key, value) {
                            $('#' + key + '-error').text(value[0]).addClass('d-block');
                        });
                    } else {
                        $('#response-message').html('<p class="text-danger">An error occurred. Please try again.</p>');
                    }
                }
            });
        });
    });

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