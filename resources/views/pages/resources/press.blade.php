@extends('layouts.master')

@section('title')
Press & Media - Avvanz Global
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
                    Press & Media
                </h1>
                <h1 class="divider-start-25"></h1>
                <p>
                    Media resources
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Press Section -->
<section class="container margin-vertical">
    <div class="row g-3">
        @foreach($pressItems as $item)
        <div class="col-sm-12 col-md-6 col-lg-4 mb-4">
            <a href="{{ $item['link'] }}" class="text-decoration-none">
                <div class="card border-radius-dmb h-100">
                    <img
                        src="{{ asset('images/resources/' . $item['image']) }}"
                        class="card-img-top"
                        alt="{{ $item['title'] }}"
                        style="height: 200px; width: auto;"
                        loading="lazy">
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
            </a>
        </div>
        @endforeach
    </div>
    {{ $pressItems->links('partials.paginate') }}
</section>

<!-- Floating Button -->
@include('layouts.floating')

<!-- Footer Section -->
@include('layouts.footer')

@endsection