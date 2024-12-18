@extends('Leadership.layouts.main')

@section('title')
Avvanz Leadership Breakthrough Summit
@endsection

@section('css')
<link rel="preload" href="{{ asset('images/homepage/homepageBg.webp') }}" as="image">
<link rel="stylesheet" href="{{ asset('css/homepage.css') }}">
@endsection

@section('content')

<!-- Hero Section -->
<section>
    <div class="padding-vertical">
        <div class="container-fluid p-0">
            <div class="container p-0">
                <div class="row g-0 text-white">
                    <!-- Left Column -->
                    <div class="col-md-7 d-flex flex-column">
                        <div class="bg-dmb flex-grow-1">
                            <div class="p-5">
                                <img 
                                    src="{{ asset('images/leadership/homapage/avvanzLogo.webp') }}"
                                    alt="Avvanz Logo"
                                    height="50"
                                    width="200"
                                    loading="lazy">
                                <h1 class="display-1 fw-bolder my-4">
                                    REDEFINE <br> LEADERSHIP
                                </h1>
                            </div>
                        </div>
    
                        <!-- Bottom Section with Background Color -->
                        <div class="bg-marigold py-3">
                            <div class="px-5">
                                <h4 class="fw-bolder">
                                    UNLOCK YOUR TRUE BUSINESS POTENTIAL.
                                </h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5 d-flex">
                        <img 
                            src="{{ asset('images/leadership/homapage/leadership-1.webp') }}" 
                            class="img-fluid w-100 h-100 object-fit-cover" 
                            alt="Leadership-1">
                    </div>
                </div>
            </div>
        </div>                              
    </div>    
</section>

<section>
    <div class="container padding-vertical">
        <div class="row">
            <div class="col-md-8">
                <h1 class="fw-bolder text-dmb display-5">
                    Join our Leadership Breakthrough Summit at Bintan
                </h1>
                <div class="divider-start-50"></div>
            </div>
        </div>
        <br>
        <p class="fs-4">
            A transformative <span class="fw-bolder text-dmb">3-day</span> retreat designed to equip leaders with the tools and insights to accelerate and future proof your business.
        </p>
        <div class="row my-3">
            <div class="offset-md-2 col-md-8">
                <a class="btn btn-lg btn-orange-border fw-bolder w-100" href="#target-section">
                    Exclusively Designed for SME Owners and Leaders
                </a>
            </div>
        </div>
        <div class="row mt-3">
            <div class="offset-md-2 col-md-4 d-flex align-items-center justify-content-center">
                <a href="{{ route('leadership-register') }}" class="btn btn-lg hero-button fw-bolder w-100">
                    REGISTER NOW!
                </a>
            </div>
            <div class="col-md-4 d-flex align-items-center justify-content-center">
                <div class="text-center">
                    <p class="text-dmb mb-0 fs-4 fw-bolder">
                        ( Limited to 20 Participants )
                    </p>
                </div>
            </div>
        </div>
        <div class="row my-3">
            <div class="offset-md-2 col-md-8">
                <h3 class="text-center text-dmb fw-bolder">
                    (Exclusive Early Bird Discount of SGD 300 till 31st December)
                </h3>
            </div>
        </div>
        <img src="{{ asset('images/leadership/homapage/leadership-2.webp') }}" class="img-fluid rounded" alt="Leadership-2">
    </div>
</section>

<section>
    <div class="container padding-vertical">
        <h1 class="fw-bolder text-dmb display-5">
            Why Choose the Leadership Breakthrough Summit?
        </h1>
        <div class="divider-start-50"></div>
        <br>
        <h3 class="fw-bolder">
            The Experience
        </h3>
        <br>
        <div class="row align-items-start">
            <div class="col-md-1">
                <img src="{{ asset('images/about/avvanz_v_logo.webp')}}" 
                   style="width: 50px; height: 50px;" 
                   alt="Avvanz Logo"
                   class="d-block mx-auto"
                   loading="lazy">
            </div>
            <div class="col-md-11">
                <p class="fs-4 fw-bolder">
                    3D2N Retreat in Luxury at Bintan
                    &nbsp;<span class="text-danger">(Valued at $1,500)</span>
                </p>
                <p class="fs-4">
                    Experience rejuvenation at a serene venue with guided workshops, <span class="fw-bolder text-dmb">real business practitioner</span> - led sessions, and personalized coaching.
                </p>
            </div>
        </div>
        <div class="row align-items-start">
            <div class="col-md-1">
                <img src="{{ asset('images/about/avvanz_v_logo.webp')}}" 
                   style="width: 50px; height: 50px;" 
                   alt="Avvanz Logo"
                   class="d-block mx-auto"
                   loading="lazy">
            </div>
            <div class="col-md-11">
                <p class="fs-4 fw-bolder">
                    Exclusive Strategic Tools
                    &nbsp;<span class="text-danger">(Valued at $5,000)</span>
                </p>
                <p class="fs-4">
                    Leverage the 5Ps Framework (People, Process, Profit, Product, Partners) to analyse and transform your business effectively.
                </p>
                <img src="{{ asset('images/leadership/homapage/leadership-3.png') }}" class="img-fluid" alt="Leadership-3">
            </div>
        </div>
        <div class="row align-items-start">
            <div class="col-md-1">
                <img src="{{ asset('images/about/avvanz_v_logo.webp')}}" 
                   style="width: 50px; height: 50px;" 
                   alt="Avvanz Logo"
                   class="d-block mx-auto"
                   loading="lazy">
            </div>
            <div class="col-md-11">
                <p class="fs-4 fw-bolder">
                    High-Impact Networking
                </p>
                <p class="fs-4">
                    Connect with SME owners, corporate leaders, and industry experts to build lasting professional relationships.
                </p>
            </div>
        </div>
        <div class="row align-items-start">
            <div class="col-md-1">
                <img src="{{ asset('images/about/avvanz_v_logo.webp')}}" 
                   style="width: 50px; height: 50px;" 
                   alt="Avvanz Logo"
                   class="d-block mx-auto"
                   loading="lazy">
            </div>
            <div class="col-md-11">
                <p class="fs-4 fw-bolder">
                    6 Months Post-Summit Support
                    &nbsp;<span class="text-danger">(Valued at $3,000)</span>
                </p>
                <p class="fs-4">
                    Exclusive 6 months follow-up coaching for implementation
                </p>
                <img src="{{ asset('images/leadership/homapage/leadership-4.png') }}" class="img-fluid" alt="Leadership-4">
            </div>
        </div>
    </div>
</section>

<section class="container margin-vertical text-center text-white">
    <div class="row">
        <div class="offset-md-2 col-md-8">
            <a href="{{ route('leadership-itinerary') }}" class="btn btn-lg hero-button fw-bolder w-100">
                View the Full Itinerary Now
            </a>
        </div>
    </div>
</section>

<section class="container" id="target-section">
    <div class="py-4 justify-content-center">
        <div class="card shadow-lg rounded-lg p-4">
            <h1 class="text-center fw-bolder">
                Exclusively Designed for Business Owners and Leaders
            </h1>
            <br>
            <h3 class="text-marigold fw-bolder">
                Are You facing these challenges in your business?
            </h3>
            <ol>
                <li class="fs-4">
                    Difficulty in adapting to rapid market changes and economic volatility
                </li>
                <li class="fs-4">
                    Struggling to scale your business effectively
                </li>
                <li class="fs-4">
                    Finding it hard to innovate or differentiate from competitors
                </li>
                <li class="fs-4">
                    Feeling isolated in decision-making with sufficient peer support
                </li>
                <li class="fs-4">
                    Difficulties in attracting, retaining, and developing top talent
                </li>
                <li class="fs-4">
                    Inefficient use of resources leading to wasted potential and increased costs
                </li>
                <li class="fs-4">
                    Difficulty in maintaining a clear strategic focus amidst daily operational demands
                </li>
                <li class="fs-4">
                    Overwhelmed by the pace of technological change and its impact on the business
                </li>
                <li class="fs-4">
                    Managing the pressures of leadership without sacrificing personal well-being
                </li>
                <li class="fs-4">
                    Concerns about succession planning and leadership continuity.
                </li>
            </ol>                
            <p class="fs-4">
                In today’s fast-paced business environment, the challenges for SME leaders are more intense than ever. With constant change, increased competition, and new market dynamics, how can you ensure your business not only survives but thrives in the future?
            </p>
            <p class="fs-4">
                Welcome to the Leadership Breakthrough Summit @ Bintan – a unique 3-day retreat designed exclusively for Singapore’s SME business owners and leaders.
            </p>
            <p class="fs-4">
                This retreat is your opportunity to gain actionable insights, connect with like-minded peers, and develop a powerful strategy that will future-proof your business.
            </p>
        </div>
    </div>
</section>

<section>
    <div class="container padding-vertical">
        <div class="row">
            <div class="col-md-8">
                <h1 class="fw-bolder text-dmb display-5">
                    What You Will Achieve?
                </h1>
                <div class="divider-start-50"></div>
            </div>
        </div>
    </div>
    <div class="container-fluid bg-afw w-100">
        <div class="container padding-vertical">
            <figure class="text-center">
                <blockquote class="blockquote text-dmb fw-bolder">
                    <h1 class="fw-bolder">"From Vision to Victory:</h1>
                    <h1 class="fw-bolder">Accelerate and Future proof your Business."</h1>
                </blockquote>
            </figure>
        </div>
    </div>
    <div class="container padding-vertical">
        <div class="row">
            <div class="col-md-10 col-lg-10">
                <h1 class="fw-bolder">
                    Outcomes you can count on:
                </h1>
                <ul>
                    <li class="d-flex align-items-start mb-2">
                        <i class="fas fa-check-circle me-2 fs-6 mt-1 text-primary align-self-center"></i>
                        <span class="fs-4">
                            Identify market challenges with guided assessments.
                        </span>
                    </li>
                    <li class="d-flex align-items-start mb-2">
                        <i class="fas fa-check-circle me-2 fs-6 mt-1 text-primary align-self-center"></i>
                        <span class="fs-4">
                            Develop actionable plans to safeguard profitability.
                        </span>
                    </li>
                    <li class="d-flex align-items-start mb-2">
                        <i class="fas fa-check-circle me-2 fs-6 mt-1 text-primary align-self-center"></i>
                        <span class="fs-4">
                            Apply frameworks to expand customer reach and revenue streams.
                        </span>
                    </li>
                    <li class="d-flex align-items-start mb-2">
                        <i class="fas fa-check-circle me-2 fs-6 mt-1 text-primary align-self-center"></i>
                        <span class="fs-4">
                            Leverage innovative strategies to amplify results.
                        </span>
                    </li>
                    <li class="d-flex align-items-start mb-2">
                        <i class="fas fa-check-circle me-2 fs-6 mt-1 text-primary align-self-center"></i>
                        <span class="fs-4">
                            Build sustainable strategies for long-term success.
                        </span>
                    </li>
                    <li class="d-flex align-items-start mb-2">
                        <i class="fas fa-check-circle me-2 fs-6 mt-1 text-primary align-self-center"></i>
                        <span class="fs-4">
                            Integrate new technologies and processes to stay ahead.
                        </span>
                    </li>
                </ul>
            </div>
            <div class="row">
                <div class="offset-md-2 col-md-8">
                    <a href="{{ route('leadership-register') }}" class="btn btn-lg hero-button fw-bolder w-100">
                        Sign Up Today and Save SGD 300!
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="bg-afw">
    <div class="container padding-vertical">
        <h1 class="text-marigold text-center fw-bolder pb-3">
            Meet the Enablers
        </h1>
        <div class="row g-5">
            <div class="col-md-6">
                {{-- Enabler 1 --}}
                <div class="row align-items-start">
                    <div class="col-lg-4">
                        <img 
                            src="{{ asset('images/leadership/enablers/enablers-1.avif')}}" 
                            style="width: 150px; height: 150px;" 
                            alt="Kannan Chettiar Image" 
                            class="d-block mx-auto img-border-rounded-afw"
                            loading="lazy">
                    </div>
                    <div class="col-lg-8">
                        <p class="fs-4">
                            <span class="text-pb h4 fw-bolder">
                                Salman Syed
                            </span>
                            <br>
                            <span class="text-marigold fw-bolder">
                                Avvanz Advisory Council
                            </span>
                        </p>
                        <p class="fs-4">
                            With over 20 years of experience in scaling and transforming businesses, Salman has driven successful turnarounds and innovations in both private equity-owned businesses and Fortune 200 companies. He has a proven record of transforming companies like Thomas Cook Plc, Sage Plc, and Capita’s People Services division into industry leaders.
                        </p>
                        <p class="fs-4">
                            Salman believes in the power of inclusive culture and strategic execution to achieve business goals.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                {{-- Enabler 2 --}}
                <div class="row align-items-start">
                    <div class="col-lg-4">
                        <img 
                            src="{{ asset('images/leadership/enablers/enablers-2.webp')}}" 
                            style="width: 150px; height: 150px;" 
                            alt="Kannan Chettiar Image" 
                            class="d-block mx-auto img-border-rounded-afw"
                            loading="lazy">
                    </div>
                    <div class="col-lg-8">
                        <p class="fs-4">
                            <span class="text-pb h4 fw-bolder">
                                Kannan Chettiar
                            </span>
                            <br>
                            <span class="text-marigold fw-bolder">
                                CEO and Co-Founder
                            </span>
                        </p>
                        <p class="fs-4">
                            An award-winning global leader with over 27 years of experience in technology and human capital sectors across Asia, EMEA, and the Americas. Recognized as “Executive of the Year – Human Resources Technology” by Singapore Business Review, Kannan has held senior positions in companies such as Dell, IBM-backed e2open, and Acer-backed i-Sprint Innovations.
                        </p>
                        <p class="fs-4">
                            He is a certified international trainer with a stellar track record among Fortune 500 clients.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                {{-- Enabler 3 --}}
                <div class="row align-items-start">
                    <div class="col-lg-4">
                        <img 
                            src="{{ asset('images/leadership/enablers/enablers-3.avif')}}" 
                            style="width: 150px; height: 150px;" 
                            alt="Kannan Chettiar Image" 
                            class="d-block mx-auto img-border-rounded-afw"
                            loading="lazy">
                    </div>
                    <div class="col-lg-8">
                        <p class="fs-4">
                            <span class="text-pb h4 fw-bolder">
                                Danny Lee
                            </span>
                            <br>
                            <span class="text-marigold fw-bolder">
                                Founder and Managing Partner
                            </span>
                        </p>
                        <p class="fs-4">
                            With extensive experience in senior leadership roles across the APAC region, Danny excels in helping leaders and teams grow, communicate, and collaborate effectively. His corporate background enables him to empathize with leaders, encouraging them to think outside the box and push beyond their comfort zones.
                        </p>
                        <p class="fs-4">
                            As a CliftonStrengths Coach, he helps teams discover their individual talents, fostering better alignment and higher performance.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                {{-- Enabler 4 --}}
                <div class="row align-items-start">
                    <div class="col-lg-4">
                        <img 
                            src="{{ asset('images/leadership/enablers/enablers-4.avif')}}" 
                            style="width: 150px; height: 150px;" 
                            alt="Kannan Chettiar Image" 
                            class="d-block mx-auto img-border-rounded-afw"
                            loading="lazy">
                    </div>
                    <div class="col-lg-8">
                        <p class="fs-4">
                            <span class="text-pb h4 fw-bolder">
                                Charlene Ng
                            </span>
                            <br>
                            <span class="text-marigold fw-bolder">
                                Founder
                            </span>
                        </p>
                        <p class="fs-4">
                            A Productivity & Performance Expert, coaching and training mid-senior corporate executives to rediscover passion, purpose, and profit. Specializes in reducing stress, enhancing clarity, and eliminating burnout to drive personal and business growth.
                        </p>
                        <p class="fs-4">
                            With expertise in bodyfulness through Reiki and TRE® (Tension & Trauma Release Exercise), passionate about educating others on how the body processes stress and transforms through sensory perceptions, influencing mind-body actions in the pursuit of goals.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                {{-- Enabler 5 --}}
                <div class="row align-items-start">
                    <div class="col-lg-4">
                        <img 
                            src="{{ asset('images/leadership/enablers/enablers-5.avif')}}" 
                            style="width: 150px; height: 150px;" 
                            alt="Kannan Chettiar Image" 
                            class="d-block mx-auto img-border-rounded-afw"
                            loading="lazy">
                    </div>
                    <div class="col-lg-8">
                        <p class="fs-4">
                            <span class="text-pb h4 fw-bolder">
                                Nader Tadros
                            </span>
                            <br>
                            <span class="text-marigold fw-bolder">
                                Marketing Expert
                            </span>
                        </p>
                        <p class="fs-4">
                            International Digital First Sales & Marketing leader with a proven track record of building and optimizing teams in the dynamic Tech sector. Known for driving growth through strategic marketing and digital channel development across businesses of all sizes. Expertise includes Digital Sales & Marketing Leadership, International Sales, XaaS, IoT & Cloud Platforms, Hardware, Software, and eCommerce Strategy.
                        </p>
                        <p class="fs-4">
                            Holds an MBA from the University of Chicago Booth School of Business, blending strong strategic and analytical skills with hands-on experience.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                {{-- Enabler 6 --}}
                <div class="row align-items-start">
                    <div class="col-lg-4">
                        <img 
                            src="{{ asset('images/leadership/enablers/enablers-6.avif')}}" 
                            style="width: 150px; height: 150px;" 
                            alt="Kannan Chettiar Image" 
                            class="d-block mx-auto img-border-rounded-afw"
                            loading="lazy">
                    </div>
                    <div class="col-lg-8">
                        <p class="fs-4">
                            <span class="text-pb h4 fw-bolder">
                                Coming Soon
                            </span>
                            <br>
                            <span class="text-marigold fw-bolder">
                                Future Speaker to be announced
                            </span>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container padding-vertical">
        <div class="row g-0 text-white">
            <div class="col-md-7 d-flex flex-column">
                <div class="bg-dmb flex-grow-1">
                    <div class="d-flex justify-content-center align-items-center p-5 h-100">
                        <h1 class="fw-bolder my-5">
                            TAILORED FOR LEADERS LIKE YOU!
                        </h1>
                    </div>
                </div>
            </div>            
            <div class="col-md-5 d-flex">
                <img 
                    src="{{ asset('images/leadership/homapage/leadership-5.webp') }}" 
                    class="img-fluid w-100 h-100 object-fit-cover" 
                    alt="Leadership-1">
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container padding-vertical">
        <h1 class="fw-bolder text-dmb display-5">
            Who Should Attend?
        </h1>
        <div class="divider-start-25"></div>
        <br>
        <h1 class="fw-bolder">
            This summit is ideal for:
        </h1>
        <ul>
            <li class="fs-4">
                SME Owners navigating growth challenges in competitive markets.
            </li>
            <li class="fs-4">
                Corporate Leaders aiming to foster innovation and team excellence.
            </li>
        </ul>
        <h1 class="fw-bolder">
            Customized for Every Industry
        </h1>
        <p class="fs-4">
            Whether you're in technology, retail, manufacturing, or beyond, our frameworks adapt to your specific business context.
        </p>
        <h1 class="fw-bolder">
            What Past Participants Say:
        </h1>
        <figure>
            <blockquote class="blockquote">
                <span class="fw-bolder text-dmb">
                    "The 5Ps framework completely transformed how I view my business. This isn’t just theory; it’s practical and impactful." 
                </span>
                <span class="blockquote-footer fs-4">
                    A 2023 Participant
                </span>
            </blockquote>
        </figure>          
        <table class="table table-bordered border-dmb">
            <thead class="border-dmb">
                <tr>
                    <th colspan="3" class="border-dmb bg-dmb text-white">
                        <h1 class="fw-bolder">
                            Ready to Transform Your Leadership?
                        </h1>
                    </th>
                </tr>
                <tr>
                    <th colspan="3">
                        <h3 class="fw-bolder">
                            Take Action – Your Journey Starts Here
                        </h3>
                    </th>
                </tr>
            </thead>
            <tbody class="text-center fw-bolder">
                <tr>
                    <td class="border-dmb fs-4">
                        LOCATION
                    </td>
                    <td class="border-dmb fs-4">
                        DATES
                    </td>
                    <td class="border-dmb fs-4">
                        INVESTMENT
                    </td>
                </tr>
                <tr>
                    <td class="border-dmb text-marigold fs-4">
                        BINTAN
                    </td>
                    <td class="border-dmb text-marigold fs-4">
                        19th to 21st Feb 2025 
                    </td>
                    <td class="border-dmb text-marigold fs-4">
                        SGD 6,888
                        <br>
                        <span class="text-dark">
                            (Early Bird Offer: SGD 6,588 until 31st December)
                        </span>
                    </td>
                </tr>
            </tbody>
        </table>
        <p class="fs-4 text-danger">
            Whether you're in technology, retail, manufacturing, or beyond, our frameworks adapt to your specific business context.
        </p>
    </div>
    <div class="container-fluid bg-lw w-100">
        <div class="container padding-vertical">
            <div class="row align-items-center">
                <div class="col-md-1 text-center">
                    <i class="fas fa-info-circle text-marigold fs-1"></i>
                </div>
                <div class="col-md-11">
                    <figure class="text-start">
                        <blockquote class="blockquote text-dmb fw-bolder">
                            <h1 class="fw-bolder my-5">
                                Join an exclusive session led by a panel of 7 global experts, including renowned leadership coaches, an AI specialist, the former MD of Thomas Cook, and a global marketing leader, all coming together to share their insights and expertise.
                            </h1>
                        </blockquote>
                    </figure>
                </div>
            </div>
        </div>        
    </div>
</section>

<section>
    <div class="container padding-vertical">
        <h1 class="fw-bolder display-5">
            How to Enroll:
        </h1>
        <div class="divider-start-25"></div>
        <br>
        <ul>
            <li class="fs-4">
                Click “<span class="fw-bolder text-dmb">REGISTER NOW</span>” below.
            </li>
            <li class="fs-4">
                Complete the secure registration form.
            </li>
            <li class="fs-4">
                Receive your pre-summit materials and get ready for transformation!
            </li>
        </ul>
        <div class="row mt-3">
            <div class="offset-md-2 col-md-4 d-flex align-items-center justify-content-center">
                <a href="{{ route('leadership-register') }}" class="btn btn-lg hero-button fw-bolder w-100">
                    REGISTER NOW!
                </a>
            </div>
            <div class="col-md-4 d-flex align-items-center justify-content-center">
                <div class="text-center">
                    <p class="text-dmb mb-0 fs-4 fw-bolder">
                        ( Limited to 20 Participants )
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection