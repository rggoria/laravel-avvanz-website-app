@extends('layouts.master')

@section('title')
Blog - Avvanz Global
@endsection

@section('content')

<!-- Hero Section -->
<section class="bg-image-2">
    <div class="container padding-vertical">
        <div class="row text-white">
            <div class="col-md-7 offset-auto">
                <h1 class="fw-bolder display-5">
                    Blog
                </h1>
                <h1 class="divider-start-25"></h1>
                <p>
                    Subscribe now
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Blog Section -->
<section class="container margin-vertical">
    <div class="row g-3">
        @foreach($blogItems as $item)
        <div class="col-sm-12 col-md-6 col-lg-4 mb-4">
            <a href="{{ route('blogItem', ['title' => Str::slug($item['title'])]) }}" class="text-decoration-none">
            {{-- <a href="{{ $item['link'] }}" class="text-decoration-none"> --}}
                <div class="card border-radius-dmb h-100">
                    @if(!empty($item['image']))
                        <img
                            src="{{ asset('images/resources/' . $item['image']) }}"
                            class="card-img-top"
                            alt="{{ $item['title'] }}"
                            style="height: 200px; width: auto;"
                            loading="lazy">
                    @endif
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title fw-bolder text-dmb">
                            {{ $item['title'] === 'Back Digital Transformation Brings New Opportunities For Healthcare' ? 'Digital Transformation Brings New Opportunities For Healthcare' : $item['title'] }}
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
    {{ $blogItems->links('partials.paginate') }}
</section>

@endsection