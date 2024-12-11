@extends('UATWEB.layouts.main')

@section('title')
Environmental, Social and Governance
@endsection

@section('content')

@section('css')
<link rel="preload" href="{{ asset('images/homepage/homepageBg.webp') }}" as="image">
<link rel="stylesheet" href="{{ asset('css/about.css') }}">
@endsection()

<!-- Environmental Section -->
<section class="bg-image-2">
    <div class="container padding-vertical">
        <div class="row text-white">
            <div class="col-md-7 offset-auto">
                <h1 class="fw-bolder display-5">
                    Environmental, Social and Governance
                </h1>
                <h1 class="divider-start-25"></h1>
                <p>
                    <i class="fa fa-calendar"></i> {{ $item['created_at'] }}
                </p>
            </div>
        </div>
    </div>
</section>

<section class="container margin-vertical">
    <h1 class="text-dmb display-5 fw-bolder">
        {{ $item['title'] }}
    </h1>
    <div class="padding-vertical">
        <img class="img-fluid" src="{{ asset('images/about/' . $item['image']) }}" alt="{{ $item['title'] }}">
    </div>
    @foreach($description as $descriptionItem)
        <p>{{ $descriptionItem }}</p>
    @endforeach
</section>

@endsection