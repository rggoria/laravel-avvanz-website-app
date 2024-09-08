@extends('layouts.master')

@section('title')
Process - Avvanz Global
@endsection

@section('content')

{{-- Navbar Section --}}
@include('layouts.navbar')

<!-- Hero Section -->
<div class="bg-image">
    <div class="container">
        <div class="row text-white">
            <div class="col-md-7 offset-auto">
                <h1 class="fw-bolder">Process</h1>
                <h1 class="divider-start-25"></h1>
                <p>Our Innovative Process Solutions</p>
            </div>
        </div>
    </div>
</div>

<!-- Health Protocol Section -->
<section class="container-fluid bg-mg py-5">
    <div class="container text-white text-center">
        <h1 class="fw-bolder">Overview of Background Check Process</h1>
        <h1 class="divider-center-25"></h1>       
        <p class="m-5">
            This whole process can be likened to a Candidate having to go through 2 Firewalls before gaining access to your company the SECURITY Firewall and the INTEGRITY Firewall.
        </p>
        <div class="d-flex align-items-center justify-content-center">
            <img src="{{ asset('images/christmas.pdf-1-791x1024.png') }}" alt="Placeholder Image" class="transition-up img-fluid rounded-3 w-auto h-auto">
        </div>
    </div>
</section>

<!-- Note Section  -->
<section class="bg-afw py-5">
    <div class="container text-center w-75">
        <h6 class="fw-bold">
            Note: TAT or Turn-Around Time is computed from the date when you Checkout your Order after Candidate’s required information, signed Letter of Consent and mandatory documents are submitted at Avvanz ScreenGlobal.
        </h6>
    </div>
</section>

<!-- Floating Button -->
@include('layouts.floating')

<!-- Footer Section -->
@include('layouts.footer')

@endsection