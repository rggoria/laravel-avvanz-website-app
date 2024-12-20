@extends('UATWEB.layouts.main')

@section('title')
Contact Us - Avvanz Global
@endsection

@section('css')
<link rel="preload" href="{{ asset('images/contact/background/contactMainBg.webp') }}" as="image">

<style>
    .bg-image-2 {
        background: url("../images/contact/background/contactMainBg.webp") no-repeat center;
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
            <a href="{{ route('request-ibc') }}" class="text-decoration-none">
                <h4 class="p-5 d-flex justify-content-center align-items-center bg-dmb fw-bolder text-center h-100 w-100 text-white">
                    International Background Check
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
                    Company Due Diligence
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
    <div class="text-center my-5">
        <h1 class="text-dmb fw-bolder display-5">
            General Inquiry
        </h1>
        <h1 class="divider-center-25"></h1>
        <p class="text-dark my-3">
            Feel free to send us a message. We would like to hear it from you!
        </p>
        <div class="row text-start justify-content-center">
            <div class="col-md-6">
                <div class="p-4">
                    <div id="response-message"></div>
                    <form id="contact-form">
                        @csrf
                        <div class="mb-3">
                            <label for="name" class="form-label text-dmb fw-bolder">Name <span class="sup text-danger">*</span></label>
                            <input name="name" type="text" class="form-control" id="name" placeholder="Enter your name">
                            <div id="name-error" class="invalid-feedback"></div>
                        </div>
                        <div class="mb-3">
                            <label for="cname" class="form-label text-dmb fw-bolder">Company Name <span class="sup text-danger">*</span></label>
                            <input name="cname" type="text" class="form-control" id="cname" placeholder="Enter your company name">
                            <div id="cname-error" class="invalid-feedback"></div>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label text-dmb fw-bolder">Company Email <span class="sup text-danger">*</span></label>
                            <input name="email" type="email" class="form-control" id="email" placeholder="Enter your company email">
                            <div id="email-error" class="invalid-feedback"></div>
                        </div>
                        <div class="mb-3">
                            <label for="contact" class="form-label text-dmb fw-bolder">Company Contact No. <span class="sup text-danger">*</span></label>
                            <input name="contact" type="text" class="form-control" id="contact" placeholder="Enter your contact no.">
                            <div id="contact-error" class="invalid-feedback"></div>
                        </div>
                        <div class="mb-3">
                            <label for="subject" class="form-label text-dmb fw-bolder">Subject <span class="sup text-danger">*</span></label>
                            <input name="subject" type="text" class="form-control" id="subject" placeholder="Enter your subject">
                            <div id="subject-error" class="invalid-feedback"></div>
                        </div>
                        <div class="mb-3">
                            <label for="message" class="form-label text-dmb fw-bolder">Message <span class="sup text-danger">*</span></label>
                            <textarea name="message" class="form-control" id="message" rows="3" placeholder="Enter your message"></textarea>
                            <div id="message-error" class="invalid-feedback"></div>
                        </div>
                        <div class="mb-3">
                            <button type="submit" class="btn btn-marigold-transition w-100">Submit</button>
                        </div>
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

@section('scripts')
<script>
    $(document).ready(function() {
        $('#contact-form').on('submit', function(e) {
            e.preventDefault();
            $('.invalid-feedback').text('');
            $('#response-message').empty();
            $.ajax({
                type: 'POST',
                url: '{{ route('contact-send') }}',
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