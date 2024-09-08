@extends('layouts.master')

@section('title')
Revision Nibble & Learn - Avvanz Global
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
                    Nibble & Learn
                </h1>
                <h1 class="divider-start-25"></h1>
                <p class="lead">
                    Start learning
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Partners Section -->
<section class="container-fluid bg-mg">
    <div class="container text-white py-5">
        <div class="text-center">
            <h1 class="fw-bolder display-5">
                Unlock Your Capabilities
            </h1>
            <h1 class="divider-center-25"></h1>
            <p class="lead mt-2">
                Free Knowledge Nibbles Tailored To Your Needs
            </p>
        </div>
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
</section>

<!-- Excellence Section -->
<section class="container my-5">
    <div class="text-center">
        <h1 class="text-dmb fw-bolder display-5">
            EXCELLENCE is not accidental
        </h1>
        <h1 class="divider-center-25"></h1>
        <div class="text-start my-5">
            <p class="lead">
                Every day, as your organization continues to grow and your team has more demands placed on their time, it becomes more and more difficult to find the time for face-to-face learning.
            </p>
            <p class="lead">
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
    $(document).ready(function() {
        $('.data-video').click(function() {
            var videoId = $(this).data('video-id');
            $('#videoPlayer').attr('src', 'https://www.youtube.com/embed/' + videoId);
        });
    });
</script>
@endsection

@endsection