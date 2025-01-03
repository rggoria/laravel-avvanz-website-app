@extends('UATWEB.layouts.main')

@section('title')
Environmental, Social and Governance
@endsection

@section('content')

@section('css')
<link rel="preload" href="{{ asset('images/about/background/aboutSubBg2.webp') }}" as="image">
<link rel="stylesheet" href="{{ asset('css/about.css') }}">

<style>
    .bg-image-2 {
        background: url("../images/about/background/aboutSubBg2.webp") no-repeat center;
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

<!-- Environmental Section -->
<div class="bg-image-2">
    <div class="container padding-vertical">
        <div class="row text-white">
            <div class="col-md-7 offset-auto">
                <h1 class="fw-bolder display-5">
                    Environmental, Social and Governance
                </h1>
                <h1 class="divider-start-25"></h1>
                <p>
                    Make a difference
                </p>
                <form action="{{ route('pages') }}" method="get">
                    <div class="input-group mt-5">
                        <input type="text" class="form-control border-simple-left" name="s" placeholder="Search..." required>
                        <div class="input-group-append">
                            <button class="btn border-simple-right bg-marigold px-5" type="submit" aria-label="Search">
                                <i class="fas fa-search text-white"></i>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<section class="container margin-vertical">
    <div class="row g-3">
        @foreach($environmentalItems as $item)
        <div class="col-sm-12 col-md-6 col-lg-4 mb-4">
            <a href="{{ route('environmentalItem1', ['title' => Str::slug($item['title'])]) }}" class="text-decoration-none">
                <div class="card border-radius-dmb h-100">
                    <img
                        src="{{ asset('images/about/' . $item['image']) }}"
                        class="card-img-top"
                        alt="{{ $item['title'] }}"
                        style="height: 200px; width: auto;"
                        loading="lazy">
                    <div class="card-body d-flex flex-column">
                        <p class="card-title fw-bolder fs-5 text-dmb">
                            {{ $item['title'] }}
                        </p>
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
    {{ $environmentalItems->links('UATWEB.partials.paginate') }}
</section>

@endsection