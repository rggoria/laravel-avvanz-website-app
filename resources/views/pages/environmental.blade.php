@extends('layouts.master')

@section('title')
Environmental, Social and Governance
@endsection

@section('content')

@section('css')
<link rel="stylesheet" href="{{ asset('css/about.css') }}">
@endsection()

{{-- Navbar Section --}}
@include('layouts.navbar')

<!-- Environmental Section -->
<div class="bg-image">
    <div class="container">
        <div class="row text-white">
            <div class="bcol-md-7 offset-auto">
                <h1 class="fw-bolder">Environmental, Social and Governance</h1>
                <h1 class="divider-start-25"></h1>
                <p>Make a difference</p>
                <br>
                <div class="input-group">
                    <input type="text" class="form-control border-simple-left" placeholder="Search...">
                    <div class="input-group-append">
                        <button class="btn border-simple-right bg-marigold px-5" type="button">
                            <i class="fas fa-search text-white"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<section class="container py-5">
    <div class="row">
        <!-- Award 1 -->
        <div class="col-md-4 mb-4">
            <div class="border-radius-dmb d-flex flex-column" style="height: 24rem;">
                <img src="https://www.avvanz.com/wp-content/uploads/2023/03/normal_u13-1.svg" class="card-img-top" alt="Best Background Screening Provider">
                <div class="card-body">
                    <h5 class="card-title text-dmb fw-bolder">Executive of the Year - HR Technology</h5>
                    <p class="card-text flex-fill">May 2, 2023</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Floating Button -->
@include('layouts.floating')

<!-- Footer Section -->
@include('layouts.footer')

@endsection