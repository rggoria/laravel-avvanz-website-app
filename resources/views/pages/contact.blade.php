@extends('layouts.master')

@section('title')
Contact Us - Avvanz Global
@endsection

@section('content')

<!--  Navbar Section -->
@include('layouts.navbar')

<!-- Hero Section -->
<div class="bg-image">
    <div class="container">
        <div class="row text-white">
            <div class="col-md-7 offset-auto">
                <h1 class="fw-bolder display-5">
                    Contact Us
                </h1>
                <h1 class="divider-start-25"></h1>
                <p class="lead">
                    Feel free to send us a message. We would like to hear it from you!
                </p>
            </div>
        </div>
    </div>
</div>

<!-- Partners Section -->
<div class="container my-5">
    <div class="text-center">
        <h1 class="text-dmb fw-bolder display-5">Discover Our Partners</h1>
        <h1 class="divider-center-25"></h1>
        <p class="lead mt-2">
            Connect with our trusted service providers and integration partners to streamline your background screening process.
        </p>
    </div>
    <div class="row g-3 py-5">
        <div class="col-sm-12 col-md-6 col-lg-4 mb-4">
            <a href="#" class="text-decoration-none">
                <div class="card border-radius-dmb h-100">
                    <img src="https://via.placeholder.com/300x200" class="card-img-top" alt="Sample Image 3">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title fw-bolder text-dmb">
                            This is a title for Sample Card 3
                        </h5>
                        <div class="lead text-muted">
                            <small>
                                Created on: September 10, 2024
                            </small>
                        </div>
                    </div>
                </div>
            </a>
        </div>
    </div>
</div>

<!-- Floating Button -->
@include('layouts.floating')

<!-- Footer Section -->
@include('layouts.footer')

@endsection