@extends('layouts.master')

@section('title')
Revision Nibble & Learn - Avvanz Global
@endsection

@section('css')
<link rel="stylesheet" href="{{ asset('css/develop.css') }}">
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
    .video-thumbnail {
        cursor: pointer;
        transition: transform 0.2s;
        color: var(--darkMidnightBlue) !important;
        font-weight: bold !important;
        background-color: white !important;
        border-radius: 0 !important;
    }
    .video-thumbnail:hover {
        transform: scale(1.05);
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

<!--  Navbar Section -->
@include('layouts.navbar')

<!-- Hero Section -->
<section class="bg-image-2">
    <div class="container padding-vertical">
        <div class="row text-white">
            <div class="col-md-7 offset-auto">
                <h1 class="fw-bolder display-5">
                    Nibble & Learn
                </h1>
                <h1 class="divider-start-25"></h1>
                <p>
                    Start learning
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Capabilities Section -->
<section class="container-fluid bg-mg">
    <div class="container text-white padding-vertical">
        <div class="text-center">
            <h1 class="fw-bolder display-5">
                Unlock Your Capabilities
            </h1>
            <h1 class="divider-center-25"></h1>
            <p class="mt-2">
                Free Knowledge Nibbles Tailored To Your Needs
            </p>
        </div>
        <div class="row bg-dark">
            <div class="col-sm-12 col-md-12 col-lg-8 p-0">
                <!-- Video Player with Facade -->
                <div class="video-player">
                    <div id="videoFacade" class="video-facade" style="cursor: pointer;">
                        <img id="thumbnail" src="" alt="Video Thumbnail" style="width: 100%; height: auto;" />
                    </div>
                    <iframe 
                        id="videoIframe" 
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
                <div class="bg-dmb fw-bolder p-2">
                    Top Podcast
                </div>
                <ul class="list-group" id="playlist">
                    @foreach ( $nibbleItems as $items )
                        <li 
                            class="list-group-item d-flex align-items-center video-thumbnail {{ $loop->first ? 'active-video' : '' }}" 
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
</section>

<!-- Excellence Section -->
<section class="container my-5">
    <div class="text-center">
        <h1 class="text-dmb fw-bolder display-5">
            EXCELLENCE is not accidental
        </h1>
        <h1 class="divider-center-25"></h1>
        <div class="text-start my-5">
            <p>
                Every day, as your organization continues to grow and your team has more demands placed on their time, it becomes more and more difficult to find the time for face-to-face learning.
            </p>
            <p>
                We host Knowledge Nibbles on a variety of business topics. If you are looking to drive personal, team, and business development, create a more engaging and collaborative culture, or want to explore new avenues of innovation, then our Knowledge Nibbles are for you. Informal discussions happen in an interactive environment that is tailored to your specific needs. Lunch & Learn sessions can be scheduled at a time convenient for your organization.
            </p>
        </div>      
    </div>  
</section>

<!-- Floating Button -->
@include('layouts.floating')

<!-- Footer Section -->
@include('layouts.footer')

@section('scripts')
<script>
    const videoFacade = document.getElementById('videoFacade');
    const videoIframe = document.getElementById('videoIframe');
    const thumbnail = document.getElementById('thumbnail');

    // Load the first video thumbnail on page load
    const firstVideoId = document.querySelector('.video-thumbnail').getAttribute('data-video-id');
    thumbnail.src = `https://img.youtube.com/vi/${firstVideoId}/hqdefault.jpg`;

    // Load the video on clicking the thumbnail
    videoFacade.addEventListener('click', () => {
        videoIframe.src = `https://www.youtube.com/embed/${firstVideoId}?autoplay=1`;
        videoFacade.style.display = 'none';  // Hide facade
        videoIframe.style.display = 'block';  // Show iframe
    });

    // Add click event listeners to each thumbnail
    document.querySelectorAll('.video-thumbnail').forEach(thumbnailItem => {
        thumbnailItem.addEventListener('click', function() {
            document.querySelectorAll('.video-thumbnail').forEach(item => item.classList.remove('active-video'));
            this.classList.add('active-video');
            const videoId = this.getAttribute('data-video-id');

            // Update the thumbnail for the selected video
            thumbnail.src = `https://img.youtube.com/vi/${videoId}/hqdefault.jpg`;

            // Load the video
            videoIframe.src = `https://www.youtube.com/embed/${videoId}?autoplay=1`;
            videoFacade.style.display = 'none';  // Hide facade
            videoIframe.style.display = 'block';  // Show iframe
        });
    });
</script>
@endsection

@endsection