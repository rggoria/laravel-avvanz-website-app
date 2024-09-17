@extends('layouts.master')

@section('title')
Revision Nibble & Learn - Avvanz Global
@endsection

@section('css')
<link rel="stylesheet" href="{{ asset('css/develop.css') }}">
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
        <div class="row bg-dark" style="max-height: 500px">
            <div class="col-lg-8 col-md-8 p-0">
                <div class="tab-content" id="v-pills-tabContent">
                    <div class="tab-pane fade show active" id="v-pills-podcast1">
                        <div class="ratio ratio-16x9 w-100">
                            <div class="video-facade" data-src="https://www.youtube.com/embed/zlyAWt_UMAU?start=1">
                                <img src="https://img.youtube.com/vi/zlyAWt_UMAU/hqdefault.jpg" alt="Video Thumbnail" class="img-fluid">
                                <button class="btn btn-primary play-button">Play</button>
                            </div>
                            <iframe
                                class="lazy-frame"
                                title="YouTube video player"
                                allowfullscreen
                                style="display: none;">
                            </iframe>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="v-pills-podcast2">
                        <div class="ratio ratio-16x9 w-100">
                            <div class="video-facade" data-src="https://www.youtube.com/embed/5aBki-Dqf40?start=1">
                                <img src="https://img.youtube.com/vi/5aBki-Dqf40/hqdefault.jpg" alt="Video Thumbnail" class="img-fluid">
                                <button class="btn btn-primary play-button">Play</button>
                            </div>
                            <iframe
                                class="lazy-frame"
                                title="YouTube video player"
                                allowfullscreen
                                style="display: none;">
                            </iframe>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="v-pills-podcast3">
                        <div class="ratio ratio-16x9 w-100">
                            <div class="video-facade" data-src="https://www.youtube.com/embed/1XoW0l25gyE?start=1">
                                <img src="https://img.youtube.com/vi/1XoW0l25gyE/hqdefault.jpg" alt="Video Thumbnail" class="img-fluid">
                                <button class="btn btn-primary play-button">Play</button>
                            </div>
                            <iframe
                                class="lazy-frame"
                                title="YouTube video player"
                                allowfullscreen
                                style="display: none;">
                            </iframe>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 h-100 p-0 bg-afw">
                <div class="bg-dmb fw-bolder p-2">
                    Top Podcast
                </div>
                <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                    <button class="nav-link link-sub-tab active d-flex w-100 text-start align-items-start" id="v-pills-podcast1-tab" data-bs-toggle="pill" data-bs-target="#v-pills-podcast1" type="button">
                        <i class="fas fa-play-circle me-2 fs-4"></i>
                        <h5 class="mb-1 me-auto">Digital Transformation Quick Starter Blueprint</h5>
                        <small class="text-body-secondary">32:29</small>
                    </button>
                    <button class="nav-link link-sub-tab d-flex w-100 text-start align-items-start" id="v-pills-podcast2-tab" data-bs-toggle="pill" data-bs-target="#v-pills-podcast2" type="button">
                        <i class="fas fa-play-circle me-2 fs-4"></i>
                        <h5 class="mb-1 me-auto">NLP Success Mindset</h5>
                        <small class="text-body-secondary">0:16</small>
                    </button>
                    <button class="nav-link link-sub-tab d-flex w-100 text-start align-items-start" id="v-pills-podcast3-tab" data-bs-toggle="pill" data-bs-target="#v-pills-podcast3" type="button">
                        <i class="fas fa-play-circle me-2 fs-4"></i>
                        <h5 class="mb-1 me-auto">Nomadic Mindset To Beat Stress</h5>
                        <small class="text-body-secondary">0:16</small>
                    </button>
                </div>
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
    document.addEventListener("DOMContentLoaded", function() {
        const tabLinks = document.querySelectorAll('#v-pills-tab button');
        function replaceFacadeWithIframe(tabPane) {
            const facade = tabPane.querySelector('.video-facade');
            const iframe = tabPane.querySelector('iframe.lazy-frame');
            if (facade && iframe) {
                const src = facade.getAttribute('data-src');
                facade.style.display = 'none';
                iframe.src = src;
                iframe.style.display = '';
            }
        }
    
        function onTabShow(event) {
            const targetId = event.target.getAttribute('data-bs-target');
            const targetPane = document.querySelector(targetId);
            if (targetPane) {
                replaceFacadeWithIframe(targetPane);
            }
        }
    
        tabLinks.forEach(link => {
            link.addEventListener('shown.bs.tab', onTabShow);
        });
        const activeTab = document.querySelector('.tab-pane.active');
        if (activeTab) {
            replaceFacadeWithIframe(activeTab);
        }
        document.querySelectorAll('.video-facade .play-button').forEach(button => {
            button.addEventListener('click', function() {
                const facade = this.parentElement;
                const iframe = facade.nextElementSibling;
                const src = facade.getAttribute('data-src');
                facade.style.display = 'none'; 
                iframe.src = src; 
                iframe.style.display = '';
            });
        });
    });
</script>    
@endsection

@endsection