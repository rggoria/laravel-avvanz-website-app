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
    <div class="row g-3">
        @foreach($webinarItems as $item)
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
    <div class="text-center py-5">
        <h1 class="text-dmb fw-bolder display-5">
            Videos
        </h1>
        <h1 class="divider-center-25"></h1>
        <div class="container text-start text-white mb-5">
            <br>
            <ul class="nav nav-pills nav-justified mb-3" id="pills-tab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-webinar" type="button" role="tab" aria-controls="pills-webinar" aria-selected="true">Webinar</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-events-tab" data-bs-toggle="pill" data-bs-target="#pills-events" type="button" role="tab" aria-controls="pills-events" aria-selected="false">Events</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-company-tab" data-bs-toggle="pill" data-bs-target="#pills-company" type="button" role="tab" aria-controls="pills-company" aria-selected="false">Company Updates</button>
                </li>
            </ul>
            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-webinar" role="tabpanel" aria-labelledby="pills-webinar-tab" tabindex="0">
                    <div class="row bg-dark">
                        <!-- Video Container -->
                        <div class="col-lg-8 col-md-8 h-100 p-0">
                            <div class="tab-content" id="v-pills-tabContent">
                                <div class="tab-pane fade show active" id="v-pills-podcast1">
                                    <div class="ratio ratio-16x9 w-100">
                                        <iframe
                                            id="videoPlayer"
                                            src="https://www.youtube.com/embed/zlyAWt_UMAU?start=1"
                                            title="YouTube video player"
                                            allowfullscreen>
                                        </iframe>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="v-pills-podcast2">
                                    <div class="ratio ratio-16x9 w-100">
                                        <iframe
                                            id="videoPlayer"
                                            src="https://www.youtube.com/embed/5aBki-Dqf40?start=1"
                                            title="YouTube video player"
                                            allowfullscreen>
                                        </iframe>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="v-pills-podcast3">
                                    <div class="ratio ratio-16x9 w-100">
                                        <iframe
                                            id="videoPlayer"
                                            src="https://www.youtube.com/embed/1XoW0l25gyE?start=1"
                                            title="YouTube video player"
                                            allowfullscreen>
                                        </iframe>
                                    </div>
                                </div>
                            </div>    
                        </div>
                        <!-- Sidebar -->
                        <div class="col-lg-4 col-md-4 h-100 p-0 bg-afw">
                            <div class="bg-dmb fw-bolder p-2">
                                Top Videos Webinar
                            </div>
                            <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                <button class="nav-link active d-flex w-100 text-start align-items-start" id="v-pills-podcast1-tab" data-bs-toggle="pill" data-bs-target="#v-pills-podcast1" type="button">
                                    <i class="fas fa-play-circle me-2 fs-4"></i>
                                    <h5 class="mb-1 me-auto">Digital Transformation Quick Starter Blueprint</h5>
                                    <small class="text-body-secondary">32:29</small>
                                </button>
                                <button class="nav-link d-flex w-100 text-start align-items-start" id="v-pills-podcast2-tab" data-bs-toggle="pill" data-bs-target="#v-pills-podcast2" type="button">
                                    <i class="fas fa-play-circle me-2 fs-4"></i>
                                    <h5 class="mb-1 me-auto">NLP Success Mindset</h5>
                                    <small class="text-body-secondary">0:16</small>
                                </button>
                                <button class="nav-link d-flex w-100 text-start align-items-start" id="v-pills-podcast3-tab" data-bs-toggle="pill" data-bs-target="#v-pills-podcast3" type="button">
                                    <i class="fas fa-play-circle me-2 fs-4"></i>
                                    <h5 class="mb-1 me-auto">Nomadic Mindset To Beat Stress</h5>
                                    <small class="text-body-secondary">0:16</small>
                                </button>
                            </div>             
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="pills-events" role="tabpanel" aria-labelledby="pills-events-tab" tabindex="0">
                    <div class="row bg-dark">
                        <!-- Video Container -->
                        <div class="col-lg-8 col-md-8 h-100 p-0">
                            <div class="tab-content" id="v-pills-tabContent">
                                <div class="tab-pane fade show active" id="v-pills-podcast1">
                                    <div class="ratio ratio-16x9 w-100">
                                        <iframe
                                            id="videoPlayer"
                                            src="https://www.youtube.com/embed/zlyAWt_UMAU?start=1"
                                            title="YouTube video player"
                                            allowfullscreen>
                                        </iframe>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="v-pills-podcast2">
                                    <div class="ratio ratio-16x9 w-100">
                                        <iframe
                                            id="videoPlayer"
                                            src="https://www.youtube.com/embed/5aBki-Dqf40?start=1"
                                            title="YouTube video player"
                                            allowfullscreen>
                                        </iframe>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="v-pills-podcast3">
                                    <div class="ratio ratio-16x9 w-100">
                                        <iframe
                                            id="videoPlayer"
                                            src="https://www.youtube.com/embed/1XoW0l25gyE?start=1"
                                            title="YouTube video player"
                                            allowfullscreen>
                                        </iframe>
                                    </div>
                                </div>
                            </div>    
                        </div>
                        <!-- Sidebar -->
                        <div class="col-lg-4 col-md-4 h-100 p-0 bg-afw">
                            <div class="bg-dmb fw-bolder p-2">
                                Top Video Event
                            </div>
                            <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                <button class="nav-link active d-flex w-100 text-start align-items-start" id="v-pills-podcast1-tab" data-bs-toggle="pill" data-bs-target="#v-pills-podcast1" type="button">
                                    <i class="fas fa-play-circle me-2 fs-4"></i>
                                    <h5 class="mb-1 me-auto">Digital Transformation Quick Starter Blueprint</h5>
                                    <small class="text-body-secondary">32:29</small>
                                </button>
                                <button class="nav-link d-flex w-100 text-start align-items-start" id="v-pills-podcast2-tab" data-bs-toggle="pill" data-bs-target="#v-pills-podcast2" type="button">
                                    <i class="fas fa-play-circle me-2 fs-4"></i>
                                    <h5 class="mb-1 me-auto">NLP Success Mindset</h5>
                                    <small class="text-body-secondary">0:16</small>
                                </button>
                                <button class="nav-link d-flex w-100 text-start align-items-start" id="v-pills-podcast3-tab" data-bs-toggle="pill" data-bs-target="#v-pills-podcast3" type="button">
                                    <i class="fas fa-play-circle me-2 fs-4"></i>
                                    <h5 class="mb-1 me-auto">Nomadic Mindset To Beat Stress</h5>
                                    <small class="text-body-secondary">0:16</small>
                                </button>
                            </div>             
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="pills-company" role="tabpanel" aria-labelledby="pills-company-tab" tabindex="0">
                    <div class="row bg-dark">
                        <!-- Video Container -->
                        <div class="col-lg-8 col-md-8 h-100 p-0">
                            <div class="tab-content" id="v-pills-tabContent">
                                <div class="tab-pane fade show active" id="v-pills-podcast1">
                                    <div class="ratio ratio-16x9 w-100">
                                        <iframe
                                            id="videoPlayer"
                                            src="https://www.youtube.com/embed/zlyAWt_UMAU?start=1"
                                            title="YouTube video player"
                                            allowfullscreen>
                                        </iframe>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="v-pills-podcast2">
                                    <div class="ratio ratio-16x9 w-100">
                                        <iframe
                                            id="videoPlayer"
                                            src="https://www.youtube.com/embed/5aBki-Dqf40?start=1"
                                            title="YouTube video player"
                                            allowfullscreen>
                                        </iframe>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="v-pills-podcast3">
                                    <div class="ratio ratio-16x9 w-100">
                                        <iframe
                                            id="videoPlayer"
                                            src="https://www.youtube.com/embed/1XoW0l25gyE?start=1"
                                            title="YouTube video player"
                                            allowfullscreen>
                                        </iframe>
                                    </div>
                                </div>
                            </div>    
                        </div>
                        <!-- Sidebar -->
                        <div class="col-lg-4 col-md-4 h-100 p-0 bg-afw">
                            <div class="bg-dmb fw-bolder p-2">
                                Top Videos Company Update
                            </div>
                            <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                <button class="nav-link active d-flex w-100 text-start align-items-start" id="v-pills-podcast1-tab" data-bs-toggle="pill" data-bs-target="#v-pills-podcast1" type="button">
                                    <i class="fas fa-play-circle me-2 fs-4"></i>
                                    <h5 class="mb-1 me-auto">Digital Transformation Quick Starter Blueprint</h5>
                                    <small class="text-body-secondary">32:29</small>
                                </button>
                                <button class="nav-link d-flex w-100 text-start align-items-start" id="v-pills-podcast2-tab" data-bs-toggle="pill" data-bs-target="#v-pills-podcast2" type="button">
                                    <i class="fas fa-play-circle me-2 fs-4"></i>
                                    <h5 class="mb-1 me-auto">NLP Success Mindset</h5>
                                    <small class="text-body-secondary">0:16</small>
                                </button>
                                <button class="nav-link d-flex w-100 text-start align-items-start" id="v-pills-podcast3-tab" data-bs-toggle="pill" data-bs-target="#v-pills-podcast3" type="button">
                                    <i class="fas fa-play-circle me-2 fs-4"></i>
                                    <h5 class="mb-1 me-auto">Nomadic Mindset To Beat Stress</h5>
                                    <small class="text-body-secondary">0:16</small>
                                </button>
                            </div>             
                        </div>
                    </div>
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