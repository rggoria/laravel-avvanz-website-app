@extends('layouts.master')

@section('title')
Blog - Avvanz Global
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
                    Blog
                </h1>
                <h1 class="divider-start-25"></h1>
                <p class="lead">
                    Subscribe now
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Blog Section -->
<section class="container my-5">
    <div class="row g-3">
        @foreach($blogItems as $item)
            <div class="col-sm-12 col-md-6 col-lg-4 mb-4">
                <div class="card border-radius-dmb h-100">
                    <img src="{{ asset('images/resources/' . $item['image']) }}" class="card-img-top" alt="{{ $item['title'] }}">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title fw-bolder text-dmb">
                            {{ $item['title'] }}
                        </h5>
                        <p class="card-text fw-bolder text-marigold">
                            Read More »
                        </p>                  
                    </div>
                    <div class="card-footer bg-transparent text-muted">
                        {{ $item['created_at'] }}
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    <nav>
        <ul class="pagination pagination-lg justify-content-center">
            <li class="page-item active" aria-current="page">
                <span class="page-link">1</span>
            </li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item"><a class="page-link" href="#">4</a></li>
            <li class="page-item"><a class="page-link" href="#">5</a></li>
        </ul>
    </nav>
</section>

<!-- Floating Button -->
@include('layouts.floating')

<!-- Footer Section -->
@include('layouts.footer')

@endsection