@extends('layouts.master')

@section('title')
Webinars & Videos - Avvanz Global
@endsection

@section('css')
<link rel="stylesheet" href="{{ asset('css/resources.css') }}">
<style>
    .video-player {
        position: relative;
        padding-bottom: 56.25%; /* 16:9 aspect ratio */
        height: 0;
        overflow: hidden;
        max-width: 100%;
        background: #000;
    }

    .video-facade {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(51, 51, 51, 0.8);
        color: #fff;
        display: flex;
        align-items: center;
        justify-content: center;
        cursor: pointer;
    }
    .video-player iframe {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        display: none; /* Initially hide the iframe */
    }
    .playlistWebinar {
        max-height: 375px;
        overflow-y: auto;
    }
    .video-thumbnail {
        cursor: pointer;
        color: var(--darkMidnightBlue) !important;
        font-weight: bold !important;
        background-color: white !important;
        border-radius: 0 !important;
    }
    .video-thumbnail:hover {
        color: var(--darkMidnightBlue) !important;
        font-weight: bold !important;
        background-color: var(--periglacialBlue) !important;
        border-radius: 0 !important;
    }
    .active-video {
        color: var(--darkMidnightBlue) !important;
        font-weight: bold !important;
        background-color: var(--periglacialBlue) !important;
        border-radius: 0 !important;
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
                    Webinars & Videos
                </h1>
                <h1 class="divider-start-25"></h1>
                <p>
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
        <div class="col-sm-12 col-md-12 col-lg-4 mb-4">
            <a href="{{ route('webinarItem', ['title' => Str::slug($item['title'])]) }}" class="text-decoration-none">
                <div class="card border-radius-dmb h-100">
                    <img
                        src="{{ asset('images/resources/' . $item['image']) }}"
                        class="card-img-top"
                        style="height: 200px; width: auto;"
                        alt="{{ $item['title'] }}"
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
    {{ $webinarItems->links('partials.paginate') }}
    <div class="text-center py-5">
        <h1 class="text-dmb fw-bolder display-5">
            Videos
        </h1>
        <h1 class="divider-center-25"></h1>
        <div class="container text-start text-white mb-5">
            <br>
            <ul class="nav nav-pills nav-justified mb-3" id="pills-tab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link link-tab active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-webinar" type="button" role="tab" aria-controls="pills-webinar" aria-selected="true">Webinar</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link link-tab" id="pills-events-tab" data-bs-toggle="pill" data-bs-target="#pills-events" type="button" role="tab" aria-controls="pills-events" aria-selected="false">Events</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link link-tab" id="pills-company-tab" data-bs-toggle="pill" data-bs-target="#pills-company" type="button" role="tab" aria-controls="pills-company" aria-selected="false">Company Updates</button>
                </li>
            </ul>
            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-webinar" role="tabpanel" aria-labelledby="pills-webinar-tab" tabindex="0">
                    <div class="row bg-dark">
                        <div class="col-sm-12 col-md-12 col-lg-8 p-0">
                            <!-- Video Player with Facade -->
                            <div class="video-player">
                                <div id="videoFacadeWebinar" class="video-facade" style="cursor: pointer;">
                                    <img id="thumbnailWebinar" src="" alt="Video Thumbnail" style="width: 100%; height: auto;" />
                                </div>
                                <iframe 
                                    id="videoIframeWebinar" 
                                    src=""
                                    frameborder="0" 
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                                    allowfullscreen
                                    loading="lazy" 
                                    style="display: none;">  <!-- Hide initially -->
                                </iframe>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-12 col-lg-4 p-0">
                            <!-- Video Playlist -->
                            <div class="bg-dmb fw-bolder p-2 d-flex justify-content-between">
                                <span>Top Videos</span>
                                <small>{{ count($webinarVideosItems) }} Videos</small>
                            </div>
                            <ul class="list-group playlistWebinar">
                                @foreach ( $webinarVideosItems as $items )
                                    <li 
                                        class="list-group-item d-flex align-items-center video-thumbnail webinar-thumbnail {{ $loop->first ? 'active-video' : '' }}" 
                                        data-video-id="{{ $items['code'] }}">
                                        <i class="fas fa-play-circle me-2 fs-4"></i>
                                        <h5 class="mb-1 me-auto">
                                            {{ $items['title'] }}
                                        </h5>
                                        <small class="text-body-secondary">
                                            {{ $items['duration'] }}
                                        </small>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="pills-events" role="tabpanel" aria-labelledby="pills-events-tab" tabindex="0">
                    <div class="row bg-dark">
                        <div class="col-sm-12 col-md-12 col-lg-8 p-0">
                            <!-- Video Player with Facade -->
                            <div class="video-player">
                                <div id="videoFacadeEvent" class="video-facade" style="cursor: pointer;">
                                    <img id="thumbnailEvent" src="" alt="Video Thumbnail" style="width: 100%; height: auto;" />
                                </div>
                                <iframe 
                                    id="videoIframeEvent" 
                                    src=""
                                    frameborder="0" 
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                                    allowfullscreen
                                    loading="lazy" 
                                    style="display: none;">  <!-- Hide initially -->
                                </iframe>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-12 col-lg-4 p-0">
                            <!-- Video Playlist -->
                            <div class="bg-dmb fw-bolder p-2 d-flex justify-content-between">
                                <span>Top Videos</span>
                                <small>{{ count($eventVideosItems) }} Videos</small>
                            </div>
                            <ul class="list-group">
                                @foreach ( $eventVideosItems as $items )
                                    <li 
                                        class="list-group-item d-flex align-items-center video-thumbnail event-thumbnail {{ $loop->first ? 'active-video' : '' }}" 
                                        data-video-id="{{ $items['code'] }}">
                                        <i class="fas fa-play-circle me-2 fs-4"></i>
                                        <h5 class="mb-1 me-auto">
                                            {{ $items['title'] }}
                                        </h5>
                                        <small class="text-body-secondary">
                                            {{ $items['duration'] }}
                                        </small>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="pills-company" role="tabpanel" aria-labelledby="pills-company-tab" tabindex="0">
                    <div class="row bg-dark">
                        <div class="col-sm-12 col-md-12 col-lg-8 p-0">
                            <!-- Video Player with Facade -->
                            <div class="video-player">
                                <div id="videoFacadeCompany" class="video-facade" style="cursor: pointer;">
                                    <img id="thumbnailCompany" src="" alt="Video Thumbnail" style="width: 100%; height: auto;" />
                                </div>
                                <iframe 
                                    id="videoIframeCompany" 
                                    src=""
                                    frameborder="0" 
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                                    allowfullscreen
                                    loading="lazy" 
                                    style="display: none;">  <!-- Hide initially -->
                                </iframe>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-12 col-lg-4 p-0">
                            <!-- Video Playlist -->
                            <div class="bg-dmb fw-bolder p-2 d-flex justify-content-between">
                                <span>Top Videos</span>
                                <small>{{ count($companyVideosItems) }} Videos</small>
                            </div>
                            <ul class="list-group">
                                @foreach ( $companyVideosItems as $items )
                                    <li 
                                        class="list-group-item d-flex align-items-center video-thumbnail company-thumbnail {{ $loop->first ? 'active-video' : '' }}" 
                                        data-video-id="{{ $items['code'] }}">
                                        <i class="fas fa-play-circle me-2 fs-4"></i>
                                        <h5 class="mb-1 me-auto">
                                            {{ $items['title'] }}
                                        </h5>
                                        <small class="text-body-secondary">
                                            {{ $items['duration'] }}
                                        </small>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@section('scripts')
<script>
    const videoFacadeWebinar = document.getElementById('videoFacadeWebinar');
    const videoIframeWebinar = document.getElementById('videoIframeWebinar');
    const thumbnailWebinar = document.getElementById('thumbnailWebinar');

    // Load the first video thumbnail on page load
    const firstVideoIdWebinar = document.querySelector('.webinar-thumbnail').getAttribute('data-video-id');
    thumbnailWebinar.src = `https://img.youtube.com/vi/${firstVideoIdWebinar}/hqdefault.jpg`;

    // Load the video on clicking the thumbnail
    videoFacadeWebinar.addEventListener('click', () => {
        videoIframeWebinar.src = `https://www.youtube.com/embed/${firstVideoIdWebinar}?autoplay=1`;
        videoFacadeWebinar.style.display = 'none';  // Hide facade
        videoIframeWebinar.style.display = 'block';  // Show iframe
    });

    // Add click event listeners to each thumbnail
    document.querySelectorAll('.webinar-thumbnail').forEach(thumbnailItem => {
        thumbnailItem.addEventListener('click', function() {
            document.querySelectorAll('.webinar-thumbnail').forEach(item => item.classList.remove('active-video'));
            this.classList.add('active-video');
            const videoIdWebinar = this.getAttribute('data-video-id');

            // Update the thumbnail for the selected video
            thumbnailWebinar.src = `https://img.youtube.com/vi/${videoIdWebinar}/hqdefault.jpg`;

            // Load the video
            videoIframeWebinar.src = `https://www.youtube.com/embed/${videoIdWebinar}?autoplay=1`;
            videoFacadeWebinar.style.display = 'none';  // Hide facade
            videoIframeWebinar.style.display = 'block';  // Show iframe
        });
    });
    const videoFacadeEvent = document.getElementById('videoFacadeEvent');
    const videoIframeEvent = document.getElementById('videoIframeEvent');
    const thumbnailEvent = document.getElementById('thumbnailEvent');

    // Load the first video thumbnail on page load
    const firstVideoIdEvent = document.querySelector('.event-thumbnail').getAttribute('data-video-id');
    thumbnailEvent.src = `https://img.youtube.com/vi/${firstVideoIdEvent}/hqdefault.jpg`;

    // Load the video on clicking the thumbnail
    videoFacadeEvent.addEventListener('click', () => {
        videoIframeEvent.src = `https://www.youtube.com/embed/${firstVideoIdEvent}?autoplay=1`;
        videoFacadeEvent.style.display = 'none';  // Hide facade
        videoIframeEvent.style.display = 'block';  // Show iframe
    });

    // Add click event listeners to each thumbnail
    document.querySelectorAll('.event-thumbnail').forEach(thumbnailItem => {
        thumbnailItem.addEventListener('click', function() {
            document.querySelectorAll('.event-thumbnail').forEach(item => item.classList.remove('active-video'));
            this.classList.add('active-video');
            const videoIdEvent = this.getAttribute('data-video-id');

            // Update the thumbnail for the selected video
            thumbnailEvent.src = `https://img.youtube.com/vi/${videoIdEvent}/hqdefault.jpg`;

            // Load the video
            videoIframeEvent.src = `https://www.youtube.com/embed/${videoIdEvent}?autoplay=1`;
            videoFacadeEvent.style.display = 'none';  // Hide facade
            videoIframeEvent.style.display = 'block';  // Show iframe
        });
    });
    const videoFacadeCompany = document.getElementById('videoFacadeCompany');
    const videoIframeCompany = document.getElementById('videoIframeCompany');
    const thumbnailCompany = document.getElementById('thumbnailCompany');

    // Load the first video thumbnail on page load
    const firstVideoIdCompany = document.querySelector('.company-thumbnail').getAttribute('data-video-id');
    thumbnailCompany.src = `https://img.youtube.com/vi/${firstVideoIdCompany}/hqdefault.jpg`;

    // Load the video on clicking the thumbnail
    videoFacadeCompany.addEventListener('click', () => {
        videoIframeCompany.src = `https://www.youtube.com/embed/${firstVideoIdCompany}?autoplay=1`;
        videoFacadeCompany.style.display = 'none';  // Hide facade
        videoIframeCompany.style.display = 'block';  // Show iframe
    });

    // Add click event listeners to each thumbnail
    document.querySelectorAll('.company-thumbnail').forEach(thumbnailItem => {
        thumbnailItem.addEventListener('click', function() {
            document.querySelectorAll('.company-thumbnail').forEach(item => item.classList.remove('active-video'));
            this.classList.add('active-video');
            const videoIdCompany = this.getAttribute('data-video-id');

            // Update the thumbnail for the selected video
            thumbnailCompany.src = `https://img.youtube.com/vi/${videoIdCompany}/hqdefault.jpg`;

            // Load the video
            videoIframeCompany.src = `https://www.youtube.com/embed/${videoIdCompany}?autoplay=1`;
            videoFacadeCompany.style.display = 'none';  // Hide facade
            videoIframeCompany.style.display = 'block';  // Show iframe
        });
    });
</script>
@endsection

@endsection