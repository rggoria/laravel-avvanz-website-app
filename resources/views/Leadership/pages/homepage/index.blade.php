@extends('Leadership.layouts.main')

@section('title')
Leadership Breakthrough Summit
@endsection

@section('css')
<link rel="preload" href="{{ asset('images/homepage/homepageBg.webp') }}" as="image">
<link rel="stylesheet" href="{{ asset('css/homepage.css') }}">
@endsection()

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
                <br>
                <p>
                    A transformative <span class="fw-bolder text-dmb">3-day</span> retreat designed to equip leaders with the tools and insights to accelerate and future proof your business.
                </p>
            </div>
        </div>
        <div class="row">
            <div class="offset-md-2 col-md-8">
                <a class="btn btn-orange-border fw-bolder w-100" href="#target-section">
                    Exclusively Designed for SME Owners and Leaders
                </a>
            </div>
        </div>
        <div class="row mt-3">
            <div class="offset-md-2 col-md-4 d-flex align-items-center justify-content-center">
                <a href="{{ route('leadership-register') }}" class="btn hero-button fw-bolder w-100">
                    REGISTER NOW!
                </a>
            </div>
            <div class="col-md-4 d-flex align-items-center justify-content-center">
                <div class="text-center">
                    <p class="text-dmb mb-0">
                        ( Limited to 20 Participants )
                    </p>
                </div>
            </div>
        </div>        
        <div class="row mt-3">
            <div class="offset-md-2 col-md-8">
                <p class="text-center text-dmb">
                    (Exclusive Early Bird Discount of SGD 300 till November 30th)
                </p>
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
        <h1>
            The Experience
        </h1>
        <div class="row align-items-start">
            <div class="col-md-auto">
                <img src="{{ asset('images/about/avvanz_v_logo.webp')}}" 
                   style="width: 50px; height: 50px;" 
                   alt="Avvanz Logo"
                   class="d-block mx-auto"
                   loading="lazy">
            </div>
            <div class="col-md-10">
                <p class="fw-bolder">
                    3D2N Retreat in Luxury at Bintan
                </p>
                <p>
                    Experience rejuvenation at a serene venue with guided workshops, <span class="fw-bolder text-dmb">real business practitioner</span> - led sessions, and personalized coaching.
                </p>
            </div>
        </div>
        <div class="row align-items-start">
            <div class="col-md-auto">
                <img src="{{ asset('images/about/avvanz_v_logo.webp')}}" 
                   style="width: 50px; height: 50px;" 
                   alt="Avvanz Logo"
                   class="d-block mx-auto"
                   loading="lazy">
            </div>
            <div class="col-md-10">
                <p class="fw-bolder">
                    Exclusive Strategic Tools
                </p>
                <p>
                    Leverage the 5Ps Framework (People, Process, Profit, Product, Partners) to analyse and transform your business effectively.
                </p>
                <img src="{{ asset('images/leadership/homapage/leadership-3.png') }}" class="img-fluid" alt="Leadership-3">
            </div>
        </div>
        <div class="row align-items-start">
            <div class="col-md-auto">
                <img src="{{ asset('images/about/avvanz_v_logo.webp')}}" 
                   style="width: 50px; height: 50px;" 
                   alt="Avvanz Logo"
                   class="d-block mx-auto"
                   loading="lazy">
            </div>
            <div class="col-md-10">
                <p class="fw-bolder">
                    High-Impact Networking
                </p>
                <p>
                    Connect with SME owners, corporate leaders, and industry experts to build lasting professional relationships.
                </p>
            </div>
        </div>
        <div class="row align-items-start">
            <div class="col-md-auto">
                <img src="{{ asset('images/about/avvanz_v_logo.webp')}}" 
                   style="width: 50px; height: 50px;" 
                   alt="Avvanz Logo"
                   class="d-block mx-auto"
                   loading="lazy">
            </div>
            <div class="col-md-10">
                <p class="fw-bolder">
                    6 Months Post-Summit Support
                </p>
                <p>
                    Connect with SME owners, corporate leaders, and industry experts to build lasting professional relationships.
                </p>
                <img src="{{ asset('images/leadership/homapage/leadership-4.png') }}" class="img-fluid" alt="Leadership-4">
            </div>
        </div>
    </div>
</section>

<section class="container margin-vertical text-center text-white">
    <div class="row">
        <div class="offset-md-2 col-md-8">
            <a href="{{ route('leadership-itinerary') }}" class="btn hero-button fw-bolder w-100">
                Download the Full Itinerary Now
            </a>
        </div>
    </div>
</section>

<section class="container" id="target-section">
    <div class="row py-4 justify-content-center">
        <div class="card shadow-lg rounded-lg p-4">
            <h1 class="text-center fw-bolder pb-5">
                Exclusively Designed for Business Owners and Leaders
            </h1>           
            <div class="col-md-10 col-lg-10">
                <h4 class="text-marigold fw-bolder">
                    Are You facing these challenges in your business?
                </h4>
                <ol>
                    <li>
                        Difficulty in adapting to rapid market changes and economic volatility
                    </li>
                    <li>
                        Struggling to scale your business effectively
                    </li>
                    <li>
                        Finding it hard to innovate or differentiate from competitors
                    </li>
                    <li>
                        Feeling isolated in decision-making with sufficient peer support
                    </li>
                    <li>
                        Difficulties in attracting, retaining, and developing top talent
                    </li>
                    <li>
                        Inefficient use of resources leading to wasted potential and increased costs
                    </li>
                    <li>
                        Difficulty in maintaining a clear strategic focus amidst daily operational demands
                    </li>
                    <li>
                        Overwhelmed by the pace of technological change and its impact on the business
                    </li>
                    <li>
                        Managing the pressures of leadership without sacrificing personal well-being
                    </li>
                    <li>
                        Concerns about succession planning and leadership continuity.
                    </li>
                </ol>
                <p>
                    In today’s fast-paced business environment, the challenges for SME leaders are more intense than ever. With constant change, increased competition, and new market dynamics, how can you ensure your business not only survives but thrives in the future?
                </p>
                <p>
                    Welcome to the Leadership Breakthrough Summit @ Bintan – a unique 3-day retreat designed exclusively for Singapore’s SME business owners and leaders.
                </p>
                <p>
                    This retreat is your opportunity to gain actionable insights, connect with like-minded peers, and develop a powerful strategy that will future-proof your business.
                </p>
            </div>
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
            <div class="col-md-8">
                <h1>
                    Outcomes you can count on:
                </h1>
                <ul>
                    <li class="d-flex align-items-start mb-2">
                        <i class="fas fa-check-circle me-2 fs-6 mt-1 text-primary align-self-start"></i>
                        Identify market challenges with guided assessments.
                    </li>
                    <li class="d-flex align-items-start mb-2">
                        <i class="fas fa-check-circle me-2 fs-6 mt-1 text-primary align-self-start"></i>
                        Develop actionable plans to safeguard profitability.
                    </li>
                    <li class="d-flex align-items-start mb-2">
                        <i class="fas fa-check-circle me-2 fs-6 mt-1 text-primary align-self-start"></i>
                        Apply frameworks to expand customer reach and revenue streams.
                    </li>
                    <li class="d-flex align-items-start mb-2">
                        <i class="fas fa-check-circle me-2 fs-6 mt-1 text-primary align-self-start"></i>
                        Leverage innovative strategies to amplify results.
                    </li>
                    <li class="d-flex align-items-start mb-2">
                        <i class="fas fa-check-circle me-2 fs-6 mt-1 text-primary align-self-start"></i>
                        Build sustainable strategies for long-term success.
                    </li>
                    <li class="d-flex align-items-start mb-2">
                        <i class="fas fa-check-circle me-2 fs-6 mt-1 text-primary align-self-start"></i>
                        Integrate new technologies and processes to stay ahead.
                    </li>
                </ul>
            </div>
            <div class="row">
                <div class="offset-md-2 col-md-8">
                    <a href="{{ route('leadership-register') }}" class="btn hero-button fw-bolder w-100">
                        Sign Up Today and Save SGD 300!
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="bg-afw">
    <div class="container padding-vertical">
        <h1 class="text-marigold text-center fw-bolder padding-vertical">
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
                        <p>
                            <span class="text-pb h4 fw-bolder">
                                Salman Syed
                            </span>
                            <br>
                            <span class="text-marigold fw-bolder">
                                Avvanz Advisory Council
                            </span>
                        </p>
                        <p>
                            With over 20 years of experience in scaling and transforming businesses, Salman has driven successful turnarounds and innovations in both private equity-owned businesses and Fortune 200 companies. He has a proven record of transforming companies like Thomas Cook Plc, Sage Plc, and Capita’s People Services division into industry leaders.
                        </p>
                        <p>
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
                        <p>
                            <span class="text-pb h4 fw-bolder">
                                Kannan Chettiar
                            </span>
                            <br>
                            <span class="text-marigold fw-bolder">
                                CEO and Co-Founder
                            </span>
                        </p>
                        <p>
                            An award-winning global leader with over 27 years of experience in technology and human capital sectors across Asia, EMEA, and the Americas. Recognized as “Executive of the Year – Human Resources Technology” by Singapore Business Review, Kannan has held senior positions in companies such as Dell, IBM-backed e2open, and Acer-backed i-Sprint Innovations.
                        </p>
                        <p>
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
                        <p class="fw-bolder">
                            <span class="text-pb h4 fw-bolder">
                                Danny Lee
                            </span>
                            <br>
                            <span class="text-marigold fw-bolder">
                                Founder and Managing Partner
                            </span>
                        </p>
                        <p>
                            With extensive experience in senior leadership roles across the APAC region, Danny excels in helping leaders and teams grow, communicate, and collaborate effectively. His corporate background enables him to empathize with leaders, encouraging them to think outside the box and push beyond their comfort zones.
                        </p>
                        <p>
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
                        <p class="fw-bolder">
                            <span class="text-pb h4 fw-bolder">
                                Charlene Ng
                            </span>
                            <br>
                            <span class="text-marigold fw-bolder">
                                Founder
                            </span>
                        </p>
                        <p>
                            A Productivity & Performance Expert, coaching and training mid-senior corporate executives to rediscover passion, purpose, and profit. Specializes in reducing stress, enhancing clarity, and eliminating burnout to drive personal and business growth.
                        </p>
                        <p>
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
                        <p class="fw-bolder">
                            <span class="text-pb h4 fw-bolder">
                                Nader Tadros
                            </span>
                            <br>
                            <span class="text-marigold fw-bolder">
                                Marketing Expert
                            </span>
                        </p>
                        <p>
                            International Digital First Sales & Marketing leader with a proven track record of building and optimizing teams in the dynamic Tech sector. Known for driving growth through strategic marketing and digital channel development across businesses of all sizes. Expertise includes Digital Sales & Marketing Leadership, International Sales, XaaS, IoT & Cloud Platforms, Hardware, Software, and eCommerce Strategy.
                        </p>
                        <p>
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
                        <p class="fw-bolder">
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
        <h1>
            This summit is ideal for:
        </h1>
        <ul>
            <li>
                SME Owners navigating growth challenges in competitive markets.
            </li>
            <li>
                Corporate Leaders aiming to foster innovation and team excellence.
            </li>
        </ul>
        <h1>
            Customized for Every Industry
        </h1>
        <p>
            Whether you're in technology, retail, manufacturing, or beyond, our frameworks adapt to your specific business context.
        </p>
        <h1>
            What Past Participants Say:
        </h1>
        <figure>
            <blockquote class="blockquote">
                <span class="fw-bolder text-dmb">
                    "The 5Ps framework completely transformed how I view my business. This isn’t just theory; it’s practical and impactful." 
                </span>
                <span class="blockquote-footer">
                    A 2023 Participant
                </span>
            </blockquote>
        </figure>          
        <table class="table table-bordered border-dmb">
            <thead class="border-dmb">
                <tr>
                    <th colspan="3" class="border-dmb bg-dmb text-white">
                        <h1 >
                            Ready to Transform Your Leadership?
                        </h1>
                    </th>
                </tr>
                <tr>
                    <th colspan="3">
                        Take Action – Your Journey Starts Here
                    </th>
                </tr>
            </thead>
            <tbody class="text-center fw-bolder">
                <tr>
                    <td class="border-dmb">
                        LOCATION
                    </td>
                    <td class="border-dmb">
                        DATES
                    </td>
                    <td class="border-dmb">
                        INVESTMENT
                    </td>
                </tr>
                <tr>
                    <td class="border-dmb text-marigold">
                        BINTAN
                    </td>
                    <td class="border-dmb text-marigold">
                        19th to 21st Feb 2025 
                    </td>
                    <td class="border-dmb text-marigold">
                        SGD 6,888
                        <br>
                        <span class="text-dark">
                            (Early Bird Offer: SGD 6,588 until Nov 30th)
                        </span>
                    </td>
                </tr>
            </tbody>
        </table>
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
            <li>
                Click “<span class="fw-bolder text-dmb">Sign Up Now</span>” below.
            </li>
            <li>
                Complete the secure registration form.
            </li>
            <li>
                Receive your pre-summit materials and get ready for transformation!
            </li>
        </ul>
        <div class="row mt-3">
            <div class="offset-md-2 col-md-4 d-flex align-items-center justify-content-center">
                <a href="{{ route('leadership-register') }}" class="btn hero-button fw-bolder w-100">
                    REGISTER NOW!
                </a>
            </div>
            <div class="col-md-4 d-flex align-items-center justify-content-center">
                <div class="text-center">
                    <p class="text-dmb mb-0">
                        ( Limited to 20 Participants )
                    </p>
                </div>
            </div>
        </div>        
    </div>
</section>

@endsection