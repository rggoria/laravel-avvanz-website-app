@extends('layouts.master')

@section('title')
Environmental, Social and Governance
@endsection

@section('content')

@section('css')
<link rel="preload" href="{{ asset('images/homepage/homepageBg.webp') }}" as="image">
<link rel="stylesheet" href="{{ asset('css/about.css') }}">
@endsection()

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
                <form action="https://www.avvanz.com/" method="get">
                    <div class="input-group mt-5">
                        <input type="text" class="form-control border-simple-left" name="s" placeholder="Search..." required>
                        <div class="input-group-append">
                            <button class="btn border-simple-right bg-marigold px-5" type="submit">
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
    {{ $environmentalItems->links('partials.paginate') }}
</section>

@endsection