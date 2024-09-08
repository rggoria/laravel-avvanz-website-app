@extends('layouts.master')

@section('title')
ScreenChain - Avvanz Global
@endsection

@section('content')

{{-- Navbar Section --}}
@include('layouts.navbar')

<!-- Hero Section -->
<div class="bg-image">
    <div class="container">
        <div class="row text-white">
            <div class="col-md-7 offset-auto">
                <h1 class="fw-bolder">ScreenChain</h1>
                <h1 class="divider-start-25"></h1>
                <p>Our Innovative Process Solutions</p>
            </div>
        </div>
    </div>
</div>

<!-- Health Protocol Section -->
<section class="container-fluid py-5">
    <div class="container text-white text-center">
        <h1 class="fw-bolder text-dmb">Blockchain Technology-Enabled Background Screening for Speed, Efficiency, Transparency</h1>
        <h1 class="divider-center-25"></h1>
        <br>
        <div class="d-flex align-items-center justify-content-center">
            <img src="https://avvanz.com/wp-content/uploads/2023/03/normal_u19.png" alt="Placeholder Image" class="transition-up img-fluid rounded-3 w-auto h-auto">
        </div>
       <div class="text-dark text-start mt-2">
            <ul class="list-unstyled">
                <li class="list-item">
                    <i class="fas fa-check-circle list-icon"></i>
                    1st ever Blockchain Technology enabled ledger that offers you immediate results on pre-vetted checks.
                </li>
                <li class="list-item">
                    <i class="fas fa-check-circle list-icon"></i>
                    Get the results in seconds at a fraction of the price!
                </li>
                <li class="list-item">
                    <i class="fas fa-check-circle list-icon"></i>
                    TO request a full demo of ScreenChain, email us at consult@avvanz.com.
                </li>
            </ul>
       </div>
    </div>
</section>

<!-- Floating Button -->
@include('layouts.floating')

<!-- Footer Section -->
@include('layouts.footer')

@endsection