@extends('layouts.master')

@section('title')
About Us - Avvanz Global
@endsection

@section('content')

@section('css')
<link rel="stylesheet" href="{{ asset('css/about.css') }}">
@endsection()

{{-- Navbar Section --}}
@include('layouts.navbar')

<!-- Hero Section -->
<div class="bg-image">
    <div class="container">
        <div class="row">
            <div class="text-white">
                <h1 class="fw-bolder">We Play Our Role</h1>
                <h1 class="divider-start-25"></h1>
                <p>Know more about us</p>
            </div>
        </div>
    </div>
</div>

<!-- Partner Section -->
<section class="container my-5 text-white">
    <div class="row g-3">
        <div class="col-md-3">
            <h4 class="p-5 d-flex justify-content-center align-items-center bg-dmb fw-bolder text-center h-100 w-100">Vision, Mission & Core Values</h4>
        </div>
        <div class="col-md-3">
            <h4 class="p-5 d-flex justify-content-center align-items-center bg-marigold fw-bolder text-center h-100 w-100">Why Avvanz</h4>
        </div>
        <div class="col-md-3">
            <h4 class="p-5 d-flex justify-content-center align-items-center bg-dmb fw-bolder text-center h-100 w-100">Council of Advisor</h4>
        </div>
        <div class="col-md-3">
            <h4 class="p-5 d-flex justify-content-center align-items-center bg-marigold fw-bolder text-center h-100 w-100">Management Team</h4>
        </div>
    </div>
</section>

<section class="container my-5">
    <h1 class="text-center text-dmb fw-bolder">Your Trusted Partner</h1>
    <h1 class="text-center divider-center-25"></h1>
    <p class="text-center mt-2 partners-description text-black">The Double Vs in Avvanz infer 2 strong messages:</p>

    <div class="row align-items-center">
        <div class="col-md-auto">
            <img src="{{ asset('images/avvanz_v_logo.png')}}" 
               style="width: 50px; height: 50px;" 
               alt="Avvanz Logo"
               class="d-block mx-auto">
        </div>
        <div class="col-md-10">
            <span>Avvanz closely aligns with vision, your goals, needs, and requirements and be your trusted partner.</span>
        </div>
    </div>
    <div class="row align-items-center">
        <div class="col-md-auto">
            <img src="{{ asset('images/avvanz_v_logo.png')}}" 
               style="width: 50px; height: 50px;" 
               alt="Avvanz Logo"
               class="d-block mx-auto">
        </div>
        <div class="col-md-10">
            <span>In line with the meaning of Avvanz which is “advance”, Avvanz strives to ensure your advancement in strengthening your talent as an enormous Asset leading to sustainable profitable growth.</span>
        </div>
    </div>
    <div class="row justify-content-center align-items-center">
        <div class="col-lg-3 d-flex justify-content-center align-items-center my-5">
            <img src="{{ asset('images/about-us-img-1.png') }}" alt="About Us Image" class="img-fluid rounded-3 w-auto h-auto transition-up">
        </div>
        <div class="col-lg-9">
            <div>
                <p>In today’s world, there is a global talent hunt for the right talents to “advance” organizations. Engaging, developing, motivating, and even retaining talents have become daunting for organizations. Henceforth, a robust and uniquely integrated solution is warranted.</p>
                <br>
                <p>Given that more than 30% of resumes have discrepancies, there’s an imperative need to ensure your hired talents are “safe” and of the highest level of integrity. The next immediate priority is to implement a flawlessly tight onboarding program to get the new hires integrated into the organization and become productive within the shortest possible time. Training the talents to be top contributors and developing them to enable organizations to surpass their KPIs (Key Performance Indicators) is highly critical to your organizational success.</p>
                <br>
                <p>Organizations need to work with different individuals or partners to build a powerful talent asset base. Henceforth, Avvanz’s strategic intent is to act as a 1-Point-Talent-Hub for all businesses.</p>
            </div>
        </div>
    </div>
</section>

<!-- Award Section -->
<section class="bg-mg my-5 py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-7 d-flex align-items-center">
                <div class="text-white">
                    <h1 class="h1 fw-bolder">Led by Multi-Award winning Technopreneur</h1>
                    <h1 class="divider-start-25"></h1>
                    <p>Avvanz is a Singapore headquartered company with about 100 employees and a global presence in Asia, America, and Europe.</p>
                    <p>It is led by Multi-Award winning Technopreneur, Kannan Chettier who has had a successful 27-year career in leadership positions in Technology and Professional Services.</p>
                    <p>Connect with Kannan here: <span><a href="https://sg.linkedin.com/in/kannan-chettiar-19a2348" class="link-hover">https://sg.linkedin.com/in/kannan-chettiar-19a2348</a></span>.</p>
                </div>
            </div>
            <div class="col-md-5 d-flex align-items-center justify-content-center">
                <img src="{{ asset('images/about-us-img-2-jpg.webp') }}" alt="Placeholder Image" class="transition-up img-fluid rounded-3 w-auto h-auto">
            </div>
        </div>
    </div>
</section>
<section class="my-5">
    <div class="container">
        <h1 class="h1 fw-bolder text-dmb">Received Multi Awards</h1>
        <h1 class="divider-start-25"></h1>
        <br>
        <div class="row">
            <div class="col-md-7 d-flex align-items-center">
                <div>
                    <p>Avvanz had 2000+ clients. 98% retention with 8 Global Offices, and 100 Employees across Asia, Europe, and America for over 20 different industries.</p>
                    <br>
                    <p>Received our accolades for Best Background Screening Provider (Gold), Technology Company of the Year, and Executive of the Year – Technology.</p>
                    <ul class="list-unstyled">
                        <li class="list-item">
                            <i class="fas fa-check-circle list-icon text-co"></i>
                            FinTech Certified, MOM- Approved
                        </li>
                        <li class="list-item">
                            <i class="fas fa-check-circle list-icon text-co"></i>
                            PBSA Council ISO27001, and ISO27701 Certified
                        </li>
                        <li class="list-item">
                            <i class="fas fa-check-circle list-icon text-co"></i>
                            Integrations to Leading ATS/HRMS Platforms
                        </li>
                        <li class="list-item">
                            <i class="fas fa-check-circle list-icon text-co"></i>
                            Disruptive Tech products include
                        </li>
                        <li class="list-item">
                            <i class="fas fa-check-circle list-icon text-co"></i>
                            Blockchain-enabled ScreenChain
                        </li>
                        <li class="list-item">
                            <i class="fas fa-check-circle list-icon text-co"></i>
                            6 Global Offices
                        </li>
                        <li class="list-item">
                            <i class="fas fa-check-circle list-icon text-marigold"></i>
                            Identity Verification for seamless verified access.
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-5 d-flex align-items-center justify-content-center">
                <img src="{{ asset('images/about-us-img-3-768x512.webp') }}" alt="Placeholder Image" class="transition-up img-fluid rounded-3 w-auto h-auto">
            </div>
        </div>
    </div>
</section>

<!-- Vision & Mission Section -->
<section class="bg-mg p-5">
    <div class="container text-center text-white">
        <div class="row">
            <div class="col">
                <h1 class="fw-bolder">Vision</h1>
                <h1 class="divider-center-25"></h1>
                <br>
                <p class="text-wrap text-center">To be clear number one choice for all organizations who care to hire the “right” and “safe” global talents and empower them to be able to achieve growth leaps.</p>
            </div>
            <div class="col">
                <h1 class="fw-bolder">Mission</h1>
                <h1 class="divider-center-25"></h1>
                <br>
                <p class="text-wrap text-center">Given the scarcity and difficulty of finding effective and productive talent, Avvanz strives to help organizations attain the human advantage by screening for the right talents to ensure they are calibrated to the highest levels of “safety” and “integrity”, onboarding them to integrate them quickly and developing them to achieve highest standards of excellence to ensure their organizations secure a revenue advantage.</p>
            </div>
        </div>
    </div>
    <div class="container text-white my-5">
        <h1 class="text-center fw-bolder">Core Values CACTI</h1>
        <h1 class="divider-center-25"></h1>
        <br>
        <div class="accordion accordion-flush border border-white" id="accordionFlushExample">
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                        Customer Obsession
                    </button>
                </h2>
                <div id="flush-collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">
                        We craft and deliver solutions that address customers’ current and possibly future pain points and challenges. We focus our energy, attention, and thinking on how to make every interaction with our customers simple, intuitive, fast, and efficient with a highly charged passion.
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                        Accountability
                    </button>
                </h2>
                <div id="flush-collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">
                        Our Team members act as entrepreneurs in their areas of influence with a sense of shared ownership and shared leadership.
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                        Collaboration
                    </button>
                </h2>
                <div id="flush-collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">
                        <p>We encourage synergy amongst our departments to keep our goals aligned to deliver service excellence.</p>
                        <p>We support each other and believe in diversity of talents, ideas, and perspectives.</p>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">
                        Transformation
                    </button>
                </h2>
                <div id="flush-collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">
                        <p>We foster a culture of innovation and think multi-dimensionally to be change agents and transform our space.</p>
                        <p>We invest in our business and in ourselves to enhance our processes, knowledge, skills, and competencies to be future-ready.</p>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFive" aria-expanded="false" aria-controls="flush-collapseFive">
                        Integrity
                    </button>
                </h2>
                <div id="flush-collapseFive" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">
                        <p>We think and act with integrity to stay reliable and maintain the trust given to us by our clients and colleagues.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Wise Section -->
<section class="container my-5">
    <div class="text-center">
        <h1 class="text-dmb fw-bolder">Make a Wise Choice</h1>
        <h1 class="divider-center-25"></h1>
        <p class="mt-2">Are you facing these challenges?</p>
    </div>
    <ul>
        <li>
            <p>Did you know that out of every 10 resumes, at least 3 pose some form of discrepancies, fake credentials, inflated employment experiences, undeclared derogatory pasts, or disturbing social media footprint?</p>
        </li>
        <li>
            <p>Do you really know who you hire?</p>
        </li>
        <li>
            <p>Did you know that new joiners who are not properly onboarded and not continuously upskilled tend to leave the company within a year?</p>
        </li>
        <li>
            <p>As part of managing your employee lifecycle, do you struggle with having to work with different companies for Talent Screening, Talent Onboarding, and Talent Development?</p>
        </li>
    </ul>
</section>
<section class="my-5">
    <div class="container">
        <div class="row justify-content-center align-items-center">
            <div class="col-lg-8">
                <div>
                    <p>
                        Avvanz, a multi-award winning company, with a footprint across Asia, Americas, and EMEA, leverages disruptive technologies, to help more than 3000 companies across the globe, mitigate people-related risks through thorough background checks and develop them to surpass business KPIs through highly engaging and interactive training solutions to thrive in this Digital Era.
                    </p>
                    <br>
                    <p>
                        Avvanz can address your critical Talent Acquisition, Talent Management, and Talent Development needs. Avvanz provides a modular but integrated suite of solutions. Avvanz has nimble flexibility to be able to customize solutions for your organization.
                    </p>
                    <br>
                    <p>
                        Avvanz has an extremely strong region-specific ground knowledge that will fasten the proposition of appropriate solutions. Avvanz can deliver world-class quality at cost-effective price points within expected turn-around times.
                    </p>
                </div>
            </div>
            <div class="col-lg-4 d-flex justify-content-center align-items-center my-5">
                <img src="{{ asset('images/about-us-img-1.png') }}" alt="About Us Image" class="img-fluid rounded-3 w-auto h-auto transition-up">
            </div>
        </div>
    </div>
</section>

<!-- Partners Section -->
<div class="container my-5">
    <div class="text-center">
        <h1 class="text-dmb fw-bolder">Discover Our Partners</h1>
        <h1 class="divider-center-25"></h1>
        <p class="mt-2">Connect with our trusted service providers and integration partners to streamline your background screening process.</p>
    </div>
    <div class="swiper mySwiper my-5">
        <div class="swiper-wrapper my-5">
            <div class="swiper-slide">
                <img src="{{ asset('images/partner1.png') }}" class="img-fluid" alt="Partner 1">
            </div>
            <div class="swiper-slide">
                <img src="{{ asset('images/partner2.png') }}" class="img-fluid" alt="Partner 2">
            </div>
            <div class="swiper-slide">
                <img src="{{ asset('images/partner3.png') }}" class="img-fluid" alt="Partner 3">
            </div>
            <div class="swiper-slide">
                <img src="{{ asset('images/partner4.png') }}" class="img-fluid" alt="Partner 4">
            </div>
            <div class="swiper-slide">
                <img src="{{ asset('images/partner5.png') }}" class="img-fluid" alt="Partner 5">
            </div>
            <div class="swiper-slide">
                <img src="{{ asset('images/partner6.png') }}" class="img-fluid" alt="Partner 6">
            </div>
            <div class="swiper-slide">
                <img src="{{ asset('images/partner7.png') }}" class="img-fluid" alt="Partner 7">
            </div>
            <div class="swiper-slide">
                <img src="{{ asset('images/partner8.png') }}" class="img-fluid" alt="Partner 8">
            </div>
        </div>
        <div class="swiper-pagination"></div>
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
    </div>
</div>

<!-- Awards Section -->
<section class="bg-ji py-5">
    <div class="text-center">
        <h1 class="text-white fw-bolder">Avvanz Awards</h1>
        <h1 class="divider-center-25"></h1>
    </div>
    <div class="container mt-5">

        <div class="row">
            <!-- Award 1 -->
            <div class="col-md-4 mb-4">
                <div class="d-flex flex-column" style="height: 32rem;">
                    <img src="https://www.avvanz.com/wp-content/uploads/2023/03/normal_u13-1.svg" class="card-img-top" alt="Best Background Screening Provider">
                    <div class="card-body d-flex flex-column text-white text-center">
                        <h5 class="card-title text-center">Executive of the Year - HR Technology</h5>
                        <p class="card-text text-center flex-fill">Avvanz’s Managing Director, Kannan Chettiar, has been awarded EXECUTIVE OF THE YEAR – HR TECHNOLOGY by the very prestigious Singapore Business Review.</p>
                        <a class="btn btn-orange-border" href="https://www.avvanz.com/avvanz-managing-director-is-executive-of-the-year-hr-technology/">Read Full Article</a>
                    </div>
                </div>
            </div>

            <!-- Award 2 -->
            <div class="col-md-4 mb-4">
                <div class="d-flex flex-column" style="height: 32rem;">
                    <img src="https://www.avvanz.com/wp-content/uploads/2023/03/normal_u17-1.svg" class="card-img-top" alt="Best Training Provider (Sales)">
                    <div class="card-body d-flex flex-column text-white text-center">
                        <h5 class="card-title text-center">Best Training Provider (Sales)</h5>
                        <p class="card-text text-center flex-fill">HumanResources Magazine, a leading magazine for HR Community in Asia, awarded Avvanz GOLD MEDAL for BEST BACKGROUND SCREENING PROVIDER & Finalist for BEST TRAINING PROVIDER (SALES) for 2018.</p>
                        <a class="btn btn-orange-border" href="https://www.avvanz.com/avvanz-wins-gold-medal-for-best-background-screening-provider/">Read Full Article</a>
                    </div>
                </div>
            </div>

            <!-- Award 3 -->
            <div class="col-md-4 mb-4">
                <div class="d-flex flex-column" style="height: 32rem;">
                    <img src="https://www.avvanz.com/wp-content/uploads/2023/03/normal_u18-1.svg" class="card-img-top" alt="Best Background Screening Provider">
                    <div class="card-body d-flex flex-column text-white text-center">
                        <h5 class="card-title text-center">Best Background Screening Provider</h5>
                        <p class="card-text text-center flex-fill">HumanResources Magazine, a leading magazine for HR Community in Asia, has nominated Avvanz as the BEST BACKGROUND SCREENING PROVIDER.</p>
                        <a class="btn btn-orange-border" href="https://www.avvanz.com/avvanz-best-background-screening-provider/">Read Full Article</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Council Section -->
<section class="my-5">
    <div class="container">
        <div class="text-center">
            <h1 class="text-dmb fw-bolder">Avvanz Advisory Council</h1>
            <h1 class="divider-center-25"></h1>
            <br>
            <p class="mt-2">Avvanz Advisory Council consists of global veteran leaders from multiple disciplines. The Council with diverse expertise strives to guide and mentor Avvanz in paving Avvanz’s way to success. The Council acts as a resource that provides industry-specific and market-specific domain knowledge that includes talent concerns, needs, best practices, and trends. The Council also offers unbiased insights and ideas purely from a third-party point of view and is not involved in the operations of Avvanz in any way.</p>
        </div>
        <!-- Council # -->
        <div class="my-5">
            <div class="text-center">
                <img src="{{ asset('images/Screenshot-2023-11-08-081712.jpg')}}" alt="" class="img-fluid rounded-circle">
                <h1 class="text-dmb fw-bolder">Salman Syed</h1>
                <h1 class="divider-center-25"></h1>
                <br>
            </div>    
            <div class="border border-dmb p-5">
                Salman brings over 20 years of leadership experience spent in the deep end of scaling and transforming businesses from private equity-owned businesses (First Advantage) to start-ups to Fortune 200 (Arrow Inc) and FTSE 100 (Sage Plc). As the Managing Director for UK and Western Europe at Thomas Cook Plc, he drove a turnaround of a £3 billion P&L with over 10,000 employees. As the EVP of Transformation at Sage Plc, he was directly responsible for the successful transformation of the business to a global, cloud-based SaaS business. He has directly been responsible for leading innovation as Head of Global Innovation at Premier Farnell (formerly a FTSE 250 and now acquired by Avnet a Fortune 200 company) and as the Chief Digital Officer for Capita’s People Services division. He is a purpose-driven leader who has worked and lived in many parts of the world including Singapore, Hong Kong, Japan, Canada, and the UK. He believes in the power of people, and inclusive culture and that strategy is simply what you DO to make the business achieve its goals.
            </div>
        </div>
    </div>

    <div class="container-fluid bg-mg py-5">
        <div class="container text-center text-white">
            <h1 class="fw-bolder">Avvanz’s Management Team</h1>
            <h1 class="divider-center-25"></h1>
            <p>Avvanz’s business is founded and led by an extremely experienced management team with decades of global experiences in the area of employee lifecycle management. The founders are Kannan Chettiar, Jan Espino and Alvin Caga.</p>
            <br>
            <img src="{{asset('images/management-team-768x714.png')}}" alt="">
        </div>
    </div>

    <div class="container">
        <!-- Council # -->
        <div class="my-5">
            <div class="text-center">
                <img src="{{ asset('images/Screenshot-2023-11-08-081712.jpg')}}" alt="" class="img-fluid rounded-circle">
                <h1 class="text-dmb fw-bolder">Salman Syed</h1>
                <h1 class="divider-center-25"></h1>
                <br>
            </div>    
            <div class="border border-dmb p-5">
                Salman brings over 20 years of leadership experience spent in the deep end of scaling and transforming businesses from private equity-owned businesses (First Advantage) to start-ups to Fortune 200 (Arrow Inc) and FTSE 100 (Sage Plc). As the Managing Director for UK and Western Europe at Thomas Cook Plc, he drove a turnaround of a £3 billion P&L with over 10,000 employees. As the EVP of Transformation at Sage Plc, he was directly responsible for the successful transformation of the business to a global, cloud-based SaaS business. He has directly been responsible for leading innovation as Head of Global Innovation at Premier Farnell (formerly a FTSE 250 and now acquired by Avnet a Fortune 200 company) and as the Chief Digital Officer for Capita’s People Services division. He is a purpose-driven leader who has worked and lived in many parts of the world including Singapore, Hong Kong, Japan, Canada, and the UK. He believes in the power of people, and inclusive culture and that strategy is simply what you DO to make the business achieve its goals.
            </div>
        </div>
    </div>
</section>

<!-- Floating Button -->
@include('layouts.floating')

<!-- Footer Section -->
@include('layouts.footer')

@endsection

@section('scripts')
    <script src="{{asset('js/home.js')}}"></script>
@endsection