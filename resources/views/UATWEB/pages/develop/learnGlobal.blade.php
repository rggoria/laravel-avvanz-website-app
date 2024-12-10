@extends('UATWEB.layouts.main')

@section('title')
LearnGlobal - Avvanz Global
@endsection

@section('css')
<link rel="preload" href="{{ asset('images/develop/background/developSubBg2.webp') }}" as="image">

<style>
    .bg-image-2 {
        background: url("../images/develop/background/developSubBg2.webp") no-repeat center;
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
                    LearnGlobal
                </h1>
                <h1 class="divider-start-25"></h1>
                <p>
                    Explore Courses
                </p>
                <a href="https://learnglobal.apptitude.xyz/" class="btn btn-orange-border fw-bolder text-uppercase">learnglobal login</a>
            </div>
        </div>
    </div>
</section>

<!-- LearnGlobal Section -->
<section class="container margin-vertical">
    <div class="text-center">
        <div class="d-flex align-items-center justify-content-center mt-5">
            <img src="{{ asset('images/develop/LearnGlobal.webp') }}" alt="LearnGlobal" style="height: 350px; width: auto" class="transition-up img-fluid" loading="lazy">
        </div>
        <h1 class="divider-center-25"></h1>
        <p class="mt-5">
            An integrated platform for complete Learning and Development with a large library of on-demand, micro-learning accessible 24/7.
        </p>
    </div>
    <div class="row g-3 padding-vertical" id="learnglobal-items">
        @for($i = 0; $i < 6; $i++)
            @if(isset($learnglobalItems[$i]))
                <div class="col-sm-12 col-md-12 col-lg-4 mb-4">
                    <div class="card border-radius-dmb h-100" style="cursor: pointer;" data-bs-toggle="modal" data-bs-target="#modal-{{ $i }}">
                        <img src="{{ asset('images/develop/' . $learnglobalItems[$i]['image']) }}" class="card-img-top" style="height: 200px; width: auto;" alt="{{ $learnglobalItems[$i]['title'] }}" loading="lazy">
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-text fw-bolder text-co">{{ $learnglobalItems[$i]['title'] }}</h5>
                        </div>
                    </div>
                </div>
                <div class="modal fade" id="modal-{{ $i }}" tabindex="-1" aria-labelledby="modalLabel-{{ $i }}" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title w-bolder text-co" id="modalLabel-{{ $i }}">{{ $learnglobalItems[$i]['title'] }}</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <img src="{{ asset('images/develop/' . $learnglobalItems[$i]['image']) }}" class="img-fluid" alt="{{ $learnglobalItems[$i]['title'] }}" loading="lazy">
                            </div>
                        </div>
                    </div>
                </div>
            @endif
        @endfor
    </div>
    <div class="text-center mt-4">
        <button class="btn btn-orange-border" id="load-more" data-offset="6">Load More</button>
    </div>
</section>

<!-- Clients Section -->
<section class="container my-5">
    <hr>
    <div class="text-center">
        <h1 class="fw-bolder text-dmb display-5">
            Clients
        </h1>
        <h1 class="divider-center-25"></h1>
        <div class="d-flex align-items-center justify-content-center mt-5">
            <img
                src="{{ asset('images/develop/clients.webp')}}"
                alt="Clients Image"
                class="transition-up img-fluid h-75 w-75"
                loading="lazy">
        </div>
        <h1 class="fw-bolder text-dmb display-5 mt-5">
            Client Testimonials
        </h1>
        <h1 class="divider-center-25"></h1>
        <div class="swiper mySwiper">
            <div class="swiper-wrapper my-5">
                <div class="swiper-slide">
                    <div class="speech-bubble my-3">
                        "I thought the program will be highly technical and dry but to my amazement, it was delivered in a very engaging and layman way, and I still managed to grasp the in-depth elements of difficult to comprehend technologies like AI and Blockchain. The use of interactive training methodologies really helped."
                        <div class="speech-bubble-tail"></div>
                    </div>
                    <p class="fw-bold text-dmb">
                        Ocean Network Express
                        <br>
                        <small class="text-dark">
                            Managing Director
                        </small>
                    </p>
                </div>
                <div class="swiper-slide">
                    <div class="speech-bubble my-3">
                        "All our staff across all levels from all regions went through the DT Program. We built solid actionable plan in line with ARA's Digital Vision"
                        <div class="speech-bubble-tail"></div>
                    </div>
                    <p class="fw-bold text-dmb">
                        ARA Group
                    </p>
                </div>
            </div>
            <div class="swiper-pagination"></div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
        </div>
    </div>
</section>

<!-- Contact Us Section -->
<section class="container my-5">
    <hr>
    <div class="row mt-5">
        <div class="col-6 offset-3">
            <div class="card p-4 shadow">
                <h4 class="text-center">Contact Us</h4>
                <div id="response-message"></div>
                <form id="contact-form">
                    @csrf
                    <div class="mb-3">
                        <input name="name" type="text" class="form-control" id="name" placeholder="Name">
                        <div id="name-error" class="invalid-feedback"></div>
                    </div>
                    <div class="mb-3">
                        <input name="email" type="email" class="form-control" id="email" placeholder="Email">
                        <div id="email-error" class="invalid-feedback"></div>
                    </div>
                    <div class="mb-3">
                        <textarea name="message" class="form-control" id="message" rows="3" placeholder="Message"></textarea>
                        <div id="message-error" class="invalid-feedback"></div>
                    </div>
                    <div class="mb-3">
                        <button type="submit" class="btn btn-marigold-transition w-100">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

@section('scripts')
<script>
    $(document).ready(function() {
        const totalCount = {{ $totalCount }}; // Get total count from the server

        $('#load-more').on('click', function() {
            let offset = $(this).data('offset');

            $.ajax({
                url: '/learnglobal/load-more',
                method: 'GET',
                data: { offset: offset },
                success: function(data) {
                    if (data.length) {
                        data.forEach((item, index) => {
                            $('#learnglobal-items').append(`
                                <div class="col-sm-12 col-md-12 col-lg-4 mb-4">
                                    <div class="card border-radius-dmb h-100" style="cursor: pointer;" data-bs-toggle="modal" data-bs-target="#modal-${offset + index}">
                                        <img src="/images/develop/${item.image}" class="card-img-top" style="height: 200px; width: auto;" alt="${item.title}" loading="lazy">
                                        <div class="card-body d-flex flex-column">
                                            <h5 class="card-text fw-bolder text-co">${item.title}</h5>
                                        </div>
                                    </div>
                                </div>
                            `);

                            $('#learnglobal-items').append(`
                                <div class="modal fade" id="modal-${offset + index}" tabindex="-1" aria-labelledby="modalLabel-${offset + index}" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title w-bolder text-co" id="modalLabel-${offset + index}">${item.title}</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <img src="/images/develop/${item.image}" class="img-fluid" alt="${item.title}" loading="lazy">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            `);
                        });

                        // Update offset for the next load
                        $('#load-more').data('offset', offset + data.length);

                        // Check if we've reached the total count
                        if (offset + data.length >= totalCount) {
                            $('#load-more').hide(); // Hide button if no more items
                        }
                    } else {
                        $('#load-more').hide(); // Hide button if no more items
                    }
                }
            });
        });
    });

    $(document).ready(function() {
        $('#contact-form').on('submit', function(e) {
            e.preventDefault();
            $('.invalid-feedback').text('');
            $('#response-message').empty();
            $.ajax({
                type: 'POST',
                url: '{{ route('develop-2-send') }}',
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
<script src="{{ asset('js/learnGlobalSwiper.js') }}"></script>
@endsection


@endsection