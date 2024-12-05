@extends('UATWEB.layouts.main')

@section('title')
You searched for {{ $searchTerm }} - Avvanz GLobal
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
            <div class="col-md-6">
                <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                      <li class="breadcrumb-item active">HOME</li>
                      <li class="breadcrumb-item active" aria-current="page">THOUGH LEADERSHIP</li>
                    </ol>
                </nav>
                <h1 class="divider-start-25"></h1>
                <h4>
                    Search Results
                </h4>
            </div>
            <div class="col-md-6">
                <form action="{{ route('pages') }}" method="get">
                    <div class="input-group mt-5">
                        <input type="text" class="form-control border-simple-left" name="s" placeholder="Search..." value="{{ $searchTerm }}" required>
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
        <h4>
            @if($searchTerm)
                Search Results for: {{ $searchTerm }} 
                @if($blogItems->currentPage() != 1 && !($blogItems->isEmpty()))
                    - Page {{ $blogItems->currentPage() }}
                @endif
            @else
                Search Results for:
            @endif
        
        </h4>
        @if($blogItems->isEmpty())
            <p>It seems we can't find what you're looking for.</p>
        @else
            @foreach($blogItems as $item)
            <div class="col-sm-12 col-md-6 col-lg-4 mb-4">
                <a href="{{ route('blogItem', ['title' => Str::slug($item['title'])]) }}" class="text-decoration-none">
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
        @endif
    </div>
    {{ $blogItems->links('UATWEB.partials.paginate') }}
</section>

@endsection