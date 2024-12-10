@extends('UATWEB.layouts.main')

@section('title')
Industry Report - Avvanz Global
@endsection

@section('css')
<link rel="preload" href="{{ asset('images/resources/background/resourcesSubBg3.webp') }}" as="image">

<style>
    .bg-image-2 {
        background: url("../images/resources/background/resourcesSubBg3.webp") no-repeat center;
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
                    Industry Report
                </h1>
                <h1 class="divider-start-25"></h1>
                <p>
                    Latest Industry Reports 
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Industry Section -->
<section class="container margin-vertical">
    <div class="row g-3">
        @foreach($industryItems as $item)
            <div class="col-sm-12 col-md-12 col-lg-4 mb-4">
                <a href="{{ route('industryItem', ['title' => Str::slug($item['title'])]) }}" class="text-decoration-none">
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
                            <small class="card-text text-muted mb-3">
                                {{ $item['description'] }}
                            </small>
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
    {{ $industryItems->links('UATWEB.partials.paginate') }}
</section>

@endsection