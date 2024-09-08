@extends('layouts.master')

@section('title')
LearnGlobal - Avvanz Global
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
                    LearnGlobal
                </h1>
                <h1 class="divider-start-25"></h1>
                <p class="lead">
                    Explore Courses
                </p>
                <a href="#" class="btn btn-orange-border fw-bolder text-uppercase">learnglobal login</a>
            </div>
        </div>
    </div>
</section>

<!-- LearnGlobal Section -->
<section class="container my-5">
    <div class="text-center">
        <div class="d-flex align-items-center justify-content-center mt-5">
            <img src="{{ asset('images/develop/normal_u17.png')}}" alt="Placeholder Image" class="transition-up img-fluid h-50 w-50">
        </div>
        <h1 class="divider-center-25"></h1>
        <p class="lead mt-5">
            An integrated platform for complete Learning and Development with a large library of on-demand, micro-learning accessible 24/7.
        </p>
    </div>
    <div class="row g-3 py-5">
        @foreach($learnglobalItems as $index => $item)
            <div class="col-sm-12 col-md-6 col-lg-4 mb-4">
                <div class="card border-radius-dmb h-100" style="cursor: pointer;" data-bs-toggle="modal" data-bs-target="#modal-{{ $index }}">
                    <img src="{{ asset('images/develop/' . $item['image']) }}" class="card-img-top" alt="{{ $item['title'] }}">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-text lead text-co">
                            {{ $item['title'] }}
                        </h5>
                    </div>
                </div>
            </div>
            <!-- Modal -->
            <div class="modal fade" id="modal-{{ $index }}" tabindex="-1" aria-labelledby="modalLabel-{{ $index }}" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="modalLabel-{{ $index }}">{{ $item['title'] }}</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <img src="{{ asset('images/develop/' . $item['image']) }}" class="img-fluid" alt="{{ $item['title'] }}">
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    <div class="text-center mt-4">
        <button class="btn btn-orange-border">Load More</button>
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
            <img src="{{ asset('images/develop/clientsArtboard-4-1-2048x896.png')}}" alt="Placeholder Image" class="transition-up img-fluid h-75 w-75">
        </div>
        <h1 class="fw-bolder text-dmb display-5 mt-5">
            Client Testimonials
        </h1>
        <h1 class="divider-center-25"></h1>
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
</section>

<!-- Contact Us Section -->
<section class="container my-5">
    <hr>
    <div class="row justify-content-center mt-5">
        <div class="col-md-8">
            <div class="card text-center p-4">
                <h4>Contact Us</h4>
                <form>
                    <div class="mb-3">
                        <input type="text" class="form-control" id="name" placeholder="Name" required>
                    </div>
                    <div class="mb-3">
                        <input type="email" class="form-control" id="email" placeholder="Email" required>
                    </div>
                    <div class="mb-3">
                        <textarea class="form-control" id="message" placeholder="Message" rows="4" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-marigold-transition w-100">Send</button>
                </form>
            </div>
        </div>
    </div>
</section>

<!-- Floating Button -->
@include('layouts.floating')

<!-- Footer Section -->
@include('layouts.footer')

@endsection