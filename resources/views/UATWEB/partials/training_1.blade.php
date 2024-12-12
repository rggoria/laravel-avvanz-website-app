@extends('UATWEB.layouts.main')

@section('title')
Leadership - Avvanz Global
@endsection

@section('css')
<style>
    @media (max-width: 767px) {
        .carousel-inner .carousel-item > div {
            display: none;
        }

        .carousel-inner .carousel-item > div:first-child {
            display: block;
        }
    }

    .carousel-inner .carousel-item.active,
    .carousel-inner .carousel-item-next,
    .carousel-inner .carousel-item-prev {
        display: flex;
    }

    @media (min-width: 768px) {
        .carousel-inner .carousel-item-end.active,
        .carousel-inner .carousel-item-next {
            transform: translateX(33%); /* adjust thist base on the column max number */
        }

        .carousel-inner .carousel-item-start.active, 
        .carousel-inner .carousel-item-prev {
            transform: translateX(-33%); /* adjust thist base on the column max number */
        }
    }

    .carousel-inner .carousel-item-end,
    .carousel-inner .carousel-item-start { 
        transform: translateX(0);
    }
</style>
@endsection

@section('content')

<section class="container padding-vertical">
    <h1 class="text-center text-marigold fw-bolder display-5">
        Leadership
    </h1>
</section>

<section class="container margin-vertical">
    <h5 class="fw-bolder">
        Unlock Your Leadership Potential: Transform, Inspire, Lead
    </h5>
    <p>
        Welcome to Avvanz’s suite of Leadership Programs, where your journey to becoming an exceptional leader begins. In today’s rapidly evolving world, leadership is not just a position – it’s a mindset, a skill set and a commitment to excellence. Our programs are meticulously designed to empower you with the tools, insights and confidence needed to lead effectively, inspire change and drive success.
    </p>
</section>

<section class="container margin-vertical">
    <h1 class="text-center text-pb fw-bolder display-5">
        Why Choose Our Leadership Programs?
    </h1>
    <h1 class="text-center text-dmb fw-bolder display-5">
        Due Diligence Background Checks
    </h1>
    <h1 class="text-center divider-center-25"></h1>
    <div class="row justify-content-center my-5">
        <div id="carouselLeadershipItems" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                @foreach ($leadershipItems as $count => $item)
                    <button type="button" data-bs-target="#carouselLeadershipItems" data-bs-slide-to="{{ $count }}" class="{{ $count === 0 ? 'active' : '' }}" aria-current="{{ $count === 0 ? 'true' : 'false' }}" aria-label="Slide {{ $count + 1 }}"></button>
                @endforeach
            </div>
            <div class="carousel-inner" role="listbox">
                @foreach ($leadershipItems as $count => $item)
                    <div class="carousel-item {{ $count === 0 ? 'active' : '' }}">
                        <div class="col-md-4">
                            <div class="card mx-3 border-radius-dmb text-center" style="height: 25rem;">
                                <img
                                    src="{{ asset('images/develop/' . $item['image']) }}"
                                    class="card-img-top"
                                    alt="{{ $item['title'] }}"
                                    style="height: 200px; width: auto;"
                                    loading="lazy">
                                <div class="card-body d-flex flex-column">
                                    <h5 class="card-title fw-bolder text-dmb">
                                        {{ $item['title'] }}
                                    </h5>
                                    <small class="card-text text-muted mb-3">
                                        {{ $item['description'] }}
                                    </small>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach                
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselLeadershipItems" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselLeadershipItems" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>    
</section>

<section class="container margin-vertical">
    <div class="text-center my-3">
        <img class="img-fluid w-50 h-50 transition-up rounded" src="{{ asset('images/develop/leadership6.png') }}" alt="leadership6">
    </div>
    <h1 class="text-center text-marigold fw-bolder display-5">
        Lead Self
    </h1>
    <p>
        This program is designed to help individuals develop self-awareness, self-regulation, and personal effectiveness as the foundation of their leadership journey. Participants will explore their values, strengths, and areas for improvement, and learn how to set and achieve personal goals while maintaining a positive work-life balance. 
    </p>
    <p class="fw-bolder">
        Learning Outcomes: 
    </p>
    <ol>
        <li>
            Understand the importance of self-awareness in leadership and assess personal leadership styles and strengths
        </li>
        <li>
            Develop strategies for self-regulation, including managing emotions and stress effectively
        </li>
        <li>
            Set and achieve personal and professional goals aligned with individual values and aspirations
        </li>
        <li>
            Cultivate resilience and adaptability to navigate challenges and changes
        </li>
        <li>
            Enhance personal effectiveness through time management, prioritization and decision-making skills.
        </li>
    </ol>
    <a href="{{ asset('files/develop/Lead-Self.pdf') }}" class="file-hover" target="_blank">
        <i class="fas fa-file-pdf"></i> Download brochure here
    </a>
    <div class="text-center my-3">
        <img class="img-fluid w-50 h-50 transition-up rounded" src="{{ asset('images/develop/leadership7.png') }}" alt="leadership7">
    </div>
    <h1 class="text-center text-marigold fw-bolder display-5">
        Lead People
    </h1>
    <p>
        This program focuses on the skills and strategies needed to lead and motivate teams effectively. Participants will learn about emotional intelligence, communication, conflict resolution, and how to foster a positive and inclusive team culture that drives performance and engagement. 
    </p>
    <p class="fw-bolder">
        Learning Outcomes: 
    </p>
    <ol>
        <li>
            Understand the role of emotional intelligence in building strong relationships and leading people effectively.
        </li>
        <li>
            Develop effective communication skills, including active listening, giving feedback, and conveying vision.
        </li>
        <li>
            Apply strategies for conflict resolution and negotiation to maintain a harmonious team environment.
        </li>
        <li>
            Motivate and engage team members by understanding their needs and leveraging their strengths.
        </li>
        <li>
            Foster a culture of diversity, equity, and inclusion to enhance team collaboration and innovation.
        </li>
    </ol>
    <a href="{{ asset('files/develop/Lead-People.pdf') }}" class="file-hover" target="_blank">
        <i class="fas fa-file-pdf"></i> Download brochure here
    </a>
    <div class="text-center my-3">
        <img class="img-fluid w-50 h-50 transition-up rounded" src="{{ asset('images/develop/leadership8.png') }}" alt="leadership8">
    </div>
    <h1 class="text-center text-marigold fw-bolder display-5">
        Lead Managers
    </h1>
    <p>
        This program is designed for leaders who are responsible for managing other managers or teams of teams. Participants will learn about strategic leadership, delegation, performance management, and developing leadership talent within their organization.
    </p>
    <p class="fw-bolder">
        Learning Outcomes: 
    </p>
    <ol>
        <li>
            Develop strategic leadership skills to align team goals with organizational objectives
        </li>
        <li>
            Master the art of delegation to empower managers and optimize team performance.
        </li>
        <li>
            Implement effective performance management techniques to drive accountability and results
        </li>
        <li>
            Coach and mentor managers to develop their leadership capabilities and succession planning.
        </li>
        <li>
            Navigate organizational politics and build influential relationships to support team and organizational success.
        </li>
    </ol>
    <a href="{{ asset('files/develop/Lead-Managers.pdf') }}" class="file-hover" target="_blank">
        <i class="fas fa-file-pdf"></i> Download brochure here
    </a>
    <div class="text-center my-3">
        <img class="img-fluid w-50 h-50 transition-up rounded" src="{{ asset('images/develop/leadership9.png') }}" alt="leadership9">
    </div>
    <h1 class="text-center text-marigold fw-bolder display-5">
        Lead Organizations
    </h1>
    <p>
        This program is aimed at senior leaders and executives responsible for shaping the direction and culture of their organization. Participants will explore strategic planning, change management, innovation, and corporate governance to lead their organization toward sustained success.
    </p>
    <p class="fw-bolder">
        Learning Outcomes: 
    </p>
    <ol>
        <li>
            Develop a strategic mindset to identify opportunities and challenges in the external environment.
        </li>
        <li>
            Lead organization change initiatives effectively, managing resistance and ensuring stakeholder buy-in.
        </li>
        <li>
            Foster a culture of innovation and continuous improvement to stay competitive and adaptive.
        </li>
        <li>
            Understand the principles of corporate governance and ethical leadership to build trust and credibility.
        </li>
        <li>
            Drive organizational performance through vision, alignment, and execution, ensuring long-term sustainability.
        </li>
    </ol>
    <a href="{{ asset('files/develop/Lead-Organizations.pdf') }}" class="file-hover" target="_blank">
        <i class="fas fa-file-pdf"></i> Download brochure here
    </a>
    <div class="text-center my-3">
        <img class="img-fluid w-50 h-50 transition-up rounded" src="{{ asset('images/develop/leadership10.png') }}" alt="leadership10">
    </div>
    <div class="text-center my-3">
        <img class="img-fluid w-50 h-50 transition-up rounded" src="{{ asset('images/develop/leadership11.png') }}" alt="leadership11">
    </div>
    <div class="text-center my-3">
        <img class="img-fluid w-50 h-50 transition-up rounded" src="{{ asset('images/develop/leadership12.png') }}" alt="leadership12">
    </div>
</section>

@endsection

@section('scripts')
    <script>
        let items = document.querySelectorAll('#carouselLeadershipItems .carousel-item');
    
        items.forEach((el) => {
            const minPerSlide = 3;
            let next = el.nextElementSibling;
            for (let i = 1; i < minPerSlide; i++) {
                if (!next) {
                    next = items[0];
                }
                let cloneChild = next.cloneNode(true);
                el.appendChild(cloneChild.children[0]);
                next = next.nextElementSibling;
            }
        });
    </script>     
@endsection