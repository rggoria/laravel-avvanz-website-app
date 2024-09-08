@extends('layouts.master')

@section('title')
Webinars & Videos - Avvanz Global
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
                    Webinars & Videos
                </h1>
                <h1 class="divider-start-25"></h1>
                <p class="lead">
                    Join the conversation
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Webinar Section -->
<section class="container my-5">
    <div class="row g-3 py-5">
        @foreach($webinarItems as $item)
        <div class="col-sm-12 col-md-6 col-lg-4 mb-4">
            <div class="card border-radius-dmb h-100">
                <img src="{{ asset('images/resources/' . $item['image']) }}" class="card-img-top" alt="{{ $item['title'] }}">
                <div class="card-body d-flex flex-column">
                    <h5 class="card-title fw-bolder text-dmb">
                        {{ $item['title'] }}
                    </h5>
                    <h5 class="card-text fw-bolder text-marigold">
                        Read More »
                    </h5>
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
    <div class="text-center py-5">
        <h1 class="text-dmb fw-bolder display-5">
            Videos
        </h1>
        <h1 class="divider-center-25"></h1>
        <div class="container">
            <ul class="nav nav-pills nav-justified mb-3" id="pills-tab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Home</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Profile</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Contact</button>
                </li>
            </ul>
            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab" tabindex="0">
                    <div class="row bg-dark">
                        <!-- Video Container -->
                        <div class="col-lg-8 col-md-7 col-12 d-flex align-items-center justify-content-center">
                            <div class="ratio ratio-16x9 w-100">
                                <iframe
                                    id="videoPlayer"
                                    src="https://www.youtube.com/embed/zlyAWt_UMAU?start=1"
                                    title="YouTube video player"
                                    allowfullscreen>
                                </iframe>
                            </div>
                        </div>
                        <!-- Sidebar -->
                        <div class="col-lg-4 col-md-5 col-12 p-0">
                            <div class="bg-dmb fw-bolder p-2">
                                Top Podcast
                            </div>
                            <div class="list-group">
                                <li class="list-group-item list-group-item-actio data-video active" data-video-id="zlyAWt_UMAU" aria-current="true" style="cursor: pointer">
                                    <div class="d-flex w-100 justify-content-between align-items-start">
                                        <i class="fas fa-play-circle me-2 fs-4"></i>
                                        <h5 class="mb-1 ms-auto">Digital Transformation Quick Starter Blueprint</h5>
                                        <small class="text-body-secondary">32:29</small>
                                    </div>
                                </li>
                                <li class="list-group-item list-group-item-actio data-video" data-video-id="5aBki-Dqf40" style="cursor: pointer">
                                    <div class="d-flex w-100 justify-content-between align-items-start">
                                        <i class="fas fa-play-circle me-2 fs-4"></i>
                                        <h5 class="mb-1 me-auto">NLP Success Mindset</h5>
                                        <small class="text-body-secondary">0:16</small>
                                    </div>
                                </li>
                                <li class="list-group-item list-group-item-actio data-video" data-video-id="1XoW0l25gyE" style="cursor: pointer">
                                    <div class="d-flex w-100 justify-content-between align-items-start">
                                        <i class="fas fa-play-circle me-2 fs-4"></i>
                                        <h5 class="mb-1 me-auto">Nomadic Mindset To Beat Stress</h5>
                                        <small class="text-body-secondary">0:16</small>
                                    </div>
                                </li>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab" tabindex="0">...</div>
                <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab" tabindex="0">...</div>

            </div>
        </div>
    </div>
</section>

<!-- Floating Button -->
@include('layouts.floating')

<!-- Footer Section -->
@include('layouts.footer')

@endsection