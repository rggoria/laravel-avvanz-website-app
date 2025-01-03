@extends('UATWEB.layouts.main')

@section('title')
About Us - Avvanz Global
@endsection

@section('content')

@section('css')
<link rel="preload" href="{{ asset('images/about/background/aboutMainBg.webp') }}" as="image">
<link rel="stylesheet" href="{{ asset('css/about.css') }}">

<style>
    .bg-image-2 {
        background: url("../images/about/background/aboutMainBg.webp") no-repeat center;
        background-size: cover;
        position: relative;
        min-height: 100px;
    }

    .bg-image-2::before {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(18, 71, 95, 0.8);
        z-index: 1;
    }

    .bg-image-2 .container {
        position: relative;
        z-index: 2;
    }

    @media (max-width: 767px) {
        #carouselPartnershipItems .carousel-inner .carousel-item > div {
            display: none;
        }

        #carouselPartnershipItems .carousel-inner .carousel-item > div:first-child {
            display: block;
        }
    }

    #carouselPartnershipItems .carousel-inner .carousel-item.active,
    #carouselPartnershipItems .carousel-inner .carousel-item-next,
    #carouselPartnershipItems .carousel-inner .carousel-item-prev {
        display: flex;
    }

    @media (min-width: 768px) {
        #carouselPartnershipItems .carousel-inner .carousel-item-end.active,
        #carouselPartnershipItems .carousel-inner .carousel-item-next {
            transform: translateX(33%); /* adjust thist base on the column max number */
        }

        #carouselPartnershipItems .carousel-inner .carousel-item-start.active, 
        #carouselPartnershipItems .carousel-inner .carousel-item-prev {
            transform: translateX(-33%); /* adjust thist base on the column max number */
        }
    }

    #carouselPartnershipItems .carousel-inner .carousel-item-end,
    #carouselPartnershipItems .carousel-inner .carousel-item-start { 
        transform: translateX(0);
    }
</style>

@endsection

<!-- Hero Section -->
<section class="bg-image-2">
    <div class="container padding-vertical">
        <div class="row text-white">
            <div class="col-md-7 offset-auto">
                <h1 class="fw-bolder display-5">
                    We Play Our Role
                </h1>
                <h1 class="divider-start-25"></h1>
                <p>
                    Know more about us
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Partner Section -->
<section class="container margin-vertical text-white">
    <div class="row g-3">
        <div class="col-md-3">
            <p class="fs-4 p-5 d-flex justify-content-center align-items-center bg-dmb fw-bolder text-center h-100 w-100">
                Vision, Mission & Core Values
            </p>
        </div>
        <div class="col-md-3">
            <p class="fs-4 p-5 d-flex justify-content-center align-items-center bg-marigold fw-bolder text-center h-100 w-100">
                Why Avvanz
            </p>
        </div>
        <div class="col-md-3">
            <p class="fs-4 p-5 d-flex justify-content-center align-items-center bg-dmb fw-bolder text-center h-100 w-100">
                Council of Advisor
            </p>
        </div>
        <div class="col-md-3">
            <p class="fs-4 p-5 d-flex justify-content-center align-items-center bg-marigold fw-bolder text-center h-100 w-100">
                Management Team
            </p>
        </div>
    </div>
</section>

<section class="container my-5">
    <h1 class="text-center text-dmb fw-bolder display-5">
        Your Trusted Partner
    </h1>
    <h1 class="text-center divider-center-25"></h1>
    <p class="text-center mt-2 text-black lead">
        The Double Vs in Avvanz infer 2 strong messages:
    </p>

    <div class="row align-items-center">
        <div class="col-md-auto">
            <img src="{{ asset('images/about/avvanz_v_logo.webp')}}" 
               style="width: 50px; height: 50px;" 
               alt="Avvanz Logo"
               class="d-block mx-auto"
               loading="lazy">
        </div>
        <div class="col-md-10">
            <p class="lead">
                Avvanz closely aligns with vision, your goals, needs, and requirements and be your trusted partner.
            </p>
        </div>
    </div>
    <div class="row align-items-center">
        <div class="col-md-auto">
            <img src="{{ asset('images/about/avvanz_v_logo.webp')}}"
               style="width: 50px; height: 50px;" 
               alt="Avvanz Logo"
               class="d-block mx-auto"
               loading="lazy">
        </div>
        <div class="col-md-10">
            <p class="lead">
                In line with the meaning of Avvanz which is “advance”, Avvanz strives to ensure your advancement in strengthening your talent as an enormous Asset leading to sustainable profitable growth.
            </span>
        </div>
    </div>
    <div class="row justify-content-center align-items-center">
        <div class="col-lg-3 d-flex justify-content-center align-items-center my-5">
            <img
                src="{{ asset('images/about/aboutus1.webp') }}"
                width="250"
                height="350"
                alt="About Us Image 1"
                class="img-fluid rounded-3 transition-up"
                loading="lazy">
        </div>
        <div class="col-lg-9">
            <div>
                <p class="lead">
                    In today’s world, there is a global talent hunt for the right talents to “advance” organizations. Engaging, developing, motivating, and even retaining talents have become daunting for organizations. Henceforth, a robust and uniquely integrated solution is warranted.
                </p>
                <p class="lead">
                    Given that more than 30% of resumes have discrepancies, there’s an imperative need to ensure your hired talents are “safe” and of the highest level of integrity. The next immediate priority is to implement a flawlessly tight onboarding program to get the new hires integrated into the organization and become productive within the shortest possible time. Training the talents to be top contributors and developing them to enable organizations to surpass their KPIs (Key Performance Indicators) is highly critical to your organizational success.
                </p>
                <p class="lead">
                    Organizations need to work with different individuals or partners to build a powerful talent asset base. Henceforth, Avvanz’s strategic intent is to act as a 1-Point-Talent-Hub for all businesses.
                </p>
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
                    <h1 class="h1 fw-bolder display-5">
                        Led by Multi-Award winning Technopreneur
                    </h1>
                    <h1 class="divider-start-25"></h1>
                    <p class="lead">
                        Avvanz is a Singapore headquartered company with about 100 employees and a global presence in Asia, America, and Europe.
                    </p>
                    <p class="lead">
                        It is led by Multi-Award winning Technopreneur, Kannan Chettier who has had a successful 27-year career in leadership positions in Technology and Professional Services.
                    </p>
                    <p class="lead">
                        Connect with Kannan here: <a href="https://sg.linkedin.com/in/kannan-chettiar-19a2348" class="link-hover">https://sg.linkedin.com/in/kannan-chettiar-19a2348</a>.
                    </p>
                </div>
            </div>
            <div class="col-md-5 d-flex align-items-center justify-content-center">
                <img src="{{ asset('images/about/aboutus2.webp') }}"
                    width="450" 
                    height="300" 
                    alt="About Us Image 2" 
                    class="img-fluid rounded-3 transition-up"
                    loading="lazy">
            </div>
        </div>
    </div>
</section>
<section class="my-5">
    <div class="container">
        <h1 class="fw-bolder text-dmb display-5">
            Received Multi Awards
        </h1>
        <h1 class="divider-start-25"></h1>
        <br>
        <div class="row">
            <div class="col-md-7 d-flex align-items-center">
                <div>
                    <p class="lead">
                        Avvanz had 2000+ clients. 98% retention with 8 Global Offices, and 100 Employees across Asia, Europe, and America for over 20 different industries.
                    </p>
                    <p class="lead">
                        Received our accolades for Best Background Screening Provider (Gold), Technology Company of the Year, and Executive of the Year – Technology.
                    </p>
                    <ul class="list-unstyled">
                        </li>
                        <li class="d-flex align-items-start mb-2">
                            <i class="fas fa-check-circle text-co me-2 fs-6 mt-1 align-self-start"></i>
                            FinTech Certified, MOM- Approved
                        </li>
                        <li class="d-flex align-items-start mb-2">
                            <i class="fas fa-check-circle text-co me-2 fs-6 mt-1 align-self-start"></i>
                            PBSA Council ISO27001, and ISO27701 Certified
                        </li>
                        <li class="d-flex align-items-start mb-2">
                            <i class="fas fa-check-circle text-co me-2 fs-6 mt-1 align-self-start"></i>
                            Integrations to Leading ATS/HRMS Platforms
                        </li>
                        <li class="d-flex align-items-start mb-2">
                            <i class="fas fa-check-circle text-co me-2 fs-6 mt-1 align-self-start"></i>
                            Disruptive Tech products include
                        </li>
                        <li class="d-flex align-items-start mb-2">
                            <i class="fas fa-check-circle text-co me-2 fs-6 mt-1 align-self-start"></i>
                            Blockchain-enabled ScreenChain
                        </li>
                        <li class="d-flex align-items-start mb-2">
                            <i class="fas fa-check-circle text-co me-2 fs-6 mt-1 align-self-start"></i>
                            6 Global Offices
                        </li>
                        <li class="d-flex align-items-start mb-2">
                            <i class="fas fa-check-circle text-co me-2 fs-6 mt-1 align-self-start"></i>
                            Identity Verification for seamless verified access.
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-5 d-flex align-items-center justify-content-center">
                <img src="{{ asset('images/about/aboutus3.webp') }}" 
                    width="450" 
                    height="300" 
                    alt="About Us Image 3" 
                    class="img-fluid rounded-3 transition-up"
                    loading="lazy">
            </div>
        </div>
    </div>
</section>

<!-- Vision & Mission Section -->
<section class="bg-mg p-5">
    <div class="container text-center text-white">
        <div class="row gy-3">
            <div class="col-sm-12 col-md-6 col-lg-6">
                <h1 class="fw-bolder display-5">
                    Vision
                </h1>
                <h1 class="divider-center-25"></h1>
                <br>
                <p class="text-wrap text-center lead">
                    To be clear number one choice for all organizations who care to hire the “right” and “safe” global talents and empower them to be able to achieve growth leaps.
                </p>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6">
                <h1 class="fw-bolder display-5">
                    Mission
                </h1>
                <h1 class="divider-center-25"></h1>
                <p class="text-wrap text-center lead">
                    Given the scarcity and difficulty of finding effective and productive talent, Avvanz strives to help organizations attain the human advantage by screening for the right talents to ensure they are calibrated to the highest levels of “safety” and “integrity”, onboarding them to integrate them quickly and developing them to achieve highest standards of excellence to ensure their organizations secure a revenue advantage.
                </p>
            </div>
        </div>
    </div>
    <div class="container text-white my-5">
        <h1 class="text-center fw-bolder display-5">
            Core Values CACTI
        </h1>
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
        <h1 class="text-dmb fw-bolder display-5">
            Make a Wise Choice
        </h1>
        <h1 class="divider-center-25"></h1>
        <p class="mt-2 lead">Are you facing these challenges?</p>
    </div>
    <ul>
        <li class="lead">
            <p>Did you know that out of every 10 resumes, at least 3 pose some form of discrepancies, fake credentials, inflated employment experiences, undeclared derogatory pasts, or disturbing social media footprint?</p>
        </li>
        <li class="lead">
            <p>Do you really know who you hire?</p>
        </li>
        <li class="lead">
            <p>Did you know that new joiners who are not properly onboarded and not continuously upskilled tend to leave the company within a year?</p>
        </li>
        <li class="lead">
            <p>As part of managing your employee lifecycle, do you struggle with having to work with different companies for Talent Screening, Talent Onboarding, and Talent Development?</p>
        </li>
    </ul>
</section>
<section class="my-5 bg-afw">
    <div class="container">
        <div class="row justify-content-center align-items-center">
            <div class="col-lg-8">
                <div>
                    <p class="lead">
                        Avvanz, a multi-award winning company, with a footprint across Asia, Americas, and EMEA, leverages disruptive technologies, to help more than 3000 companies across the globe, mitigate people-related risks through thorough background checks and develop them to surpass business KPIs through highly engaging and interactive training solutions to thrive in this Digital Era.
                    </p>
                    <p class="lead">
                        Avvanz can address your critical Talent Acquisition, Talent Management, and Talent Development needs. Avvanz provides a modular but integrated suite of solutions. Avvanz has nimble flexibility to be able to customize solutions for your organization.
                    </p>
                    <p class="lead">
                        Avvanz has an extremely strong region-specific ground knowledge that will fasten the proposition of appropriate solutions. Avvanz can deliver world-class quality at cost-effective price points within expected turn-around times.
                    </p>
                </div>
            </div>
            <div class="col-lg-4 d-flex justify-content-center align-items-center my-5">
                <img src="{{ asset('images/about/aboutus4.webp') }}" 
                    width="250" 
                    height="350" 
                    alt="About Us Image 4" 
                    class="img-fluid rounded-3 transition-up"
                    loading="lazy">
            </div>
        </div>
    </div>
</section>

<!-- Partners Section -->
<section class="container my-5">
    <h1 class="text-center text-dmb display-5 fw-bolder">
        Discover Our Partners
    </h1>
    <h1 class="text-center divider-center-25"></h1>
    <p class="text-center mt-2 text-wrap text-justify">
        Connect with our trusted service providers and integration partners to streamline your background screening process.
    </p>
    <div class="row justify-content-center my-5">
        <div id="carouselPartnershipItems" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                @foreach ($trustedPartnerItems as $count => $item)
                    <button type="button" data-bs-target="#carouselPartnershipItems" data-bs-slide-to="{{ $count }}" 
                            class="{{ $count === 0 ? 'active' : '' }}" 
                            aria-current="{{ $count === 0 ? 'true' : 'false' }}" 
                            aria-label="Slide {{ $count + 1 }}">
                    </button>
                @endforeach
            </div>
            <div class="carousel-inner" aria-live="polite">
                @foreach ($trustedPartnerItems as $count => $item)
                    <div class="carousel-item {{ $count === 0 ? 'active' : '' }}" 
                         aria-label="Award image {{ $item }} - Slide {{ $count + 1 }} of {{ count($trustedPartnerItems) }}">
                        <div class="col-md-4">
                            <div class="card mx-3">
                                <div class="card-img">
                                    <img 
                                        src="{{ asset('images/screen/' . $item) }}" 
                                        class="img-fluid"
                                        alt="{{ "Award ". $item }} - Image {{ $count + 1 }} of {{ count($trustedPartnerItems) }}"
                                        loading="lazy">
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>            
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselPartnershipItems" data-bs-slide="prev" aria-label="Previous slide">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselPartnershipItems" data-bs-slide="next" aria-label="Next slide">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
</section>

<!-- Awards Section -->
<section class="bg-ji py-5">
    <div class="text-center">
        <h1 class="text-white fw-bolder display-5">
            Avvanz Awards
        </h1>
        <h1 class="divider-center-25"></h1>
    </div>
    <div class="container mt-5">

        <div class="row">
            <!-- Award 1 -->
            @foreach ( $awardItems as $item)
                <div class="col-md-4 mb-4">
                    <div class="d-flex flex-column" style="height: 32rem;">
                        <img
                            src="{{ asset('images/about/' . $item['image']) }}" 
                            class="card-img-top" 
                            alt="{{ $item['title'] }}"
                            loading="lazy">
                        <div class="card-body d-flex flex-column text-white text-center">
                            <p class="fs-5 fw-bolder card-title text-center">
                                {{ $item['title'] }}
                            </p>
                            <p class="card-text text-center flex-fill mt-3">
                                {{ $item['description'] }}
                            </p>
                            <a class="btn btn-orange-border" href="{{ route('aboutUsItem', ['title' => Str::slug($item['title'])]) }}">
                                Read Full Article
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

<section>
    <div class="container-fluid bg-mg py-5">
        <div class="container text-center text-white">
            <h1 class="fw-bolder display-5">
                Avvanz’s Management Team
            </h1>
            <h1 class="divider-center-25"></h1>
            <p class="lead my-3">
                Avvanz’s business is founded and led by an extremely experienced management team with decades of global experiences in the area of employee lifecycle management. The founders are Kannan Chettiar, Jan Espino and Alvin Caga.
            </p>
            <br>
            <picture>
                <source srcset="{{ asset('images/about/management.webp') }}" type="image/webp">
                <source srcset="{{ asset('images/about/management.webp') }}" type="image/webp">
                <img src="{{ asset('images/about/management.webp') }}" alt="Avvanz’s Management Team" class="img-fluid transition-up" width="500" height="500">
            </picture>          
        </div>
    </div>
</section>

<section class="my-5 text-center">
    <div class="container text-center">
        <!-- Advisory # 4 -->
        <section class="my-5">
            <img 
                src="{{ asset('images/about/advisory4.webp')}}" 
                width="200" 
                height="200" 
                alt="Kannan Chettiar Image" 
                class="img-border-rounded-dmb"
                loading="lazy">
            <h1 class="text-dmb fw-bolder">
                Kannan Chettiar
            </h1>
            <h1 class="divider-center-25"></h1>
            <p class="fs-4 fw-bolder mt-3">
                CEO and Co-Founder
            </p>
            <div class="border-dmb p-5 my-5 text-start text-dmb">
                <p class="fw-bolder">
                    Kannan is an award-winning Global Leader with 27 years of experience in the Technology and Human Capital sectors spanning Asia, EMEA & Americas. Kannan’s Technopreneurship has earned him the “<span class="fw-bolder">Executive of the Year – Human Resources Technology</span>” award which is an extremely prestigious Management Excellence award from Singapore Business Review. Kannan has held management and leadership positions in First Advantage, Dell Computers, Future Electronics, Arrow Electronics (NY-listed), Farnell Group (London-listed), e2open (IBM-backed), and i-Sprint Innovations (Acer-backed). Kannan is also a Certified International Trainer with very high ratings from Fortune 500 Clients and an accredited Strength Scope Practitioner. Kannan regularly delivers Thought Leadership talks and Masterclasses in the region and constantly offers insights and perspectives in mainstream newspapers and trade publications. Kannan is proficient in several languages – he speaks fluent English, Tamil, elementary Mandarin, Malay, and Thai. An engineer by training, he holds an Honours degree in Electrical and Electronics Engineering from the Nanyang Technological University in Singapore and an MBA from the University of Birmingham in the UK. Kannan holds an Advanced Certificate in Training and Assessment as well.
                </p>
            </div>
        </section>
        <!-- Advisory # 5 -->
        <section class="my-5">
            <img 
                src="{{ asset('images/about/advisory5.webp')}}" 
                width="200" 
                height="200" 
                alt="Alvin Caga Image" 
                class="img-border-rounded-dmb"
                loading="lazy">
            <h1 class="text-dmb fw-bolder">
                Alvin Caga
            </h1>
            <h1 class="divider-center-25"></h1>
            <p class="fs-4 fw-bolder mt-3">
                Co-Founder
            </p>
            <div class="border-dmb p-5 my-5 text-start text-dmb">
                <p class="fw-bolder">
                    Alvin has more than 13 years of entrepreneurial experience focused on business development, sales & marketing, and operations. He co-built Vanguard Screening Solutions and developed it to become the top background screening provider in the Philippines. His sharp business acumen has helped craft Avvanz and other businesses including Vanguard Workforce Mobility and Tirta Resorts Management Group operate on top of their respective industries.  Prior to these, Alvin had a wealth of experience in handling top-notch customer service clientele with multinational companies in the fields of Business Process Outsourcing, IT Services, and Supply Chain Management. Alvin holds a Bachelor’s Degree in Business Administration (Major in Computer Applications) from De La Salle University – College of St. Benilde.
                </p>
            </div>
        </section>
        <!-- Advisory # 6 -->
        <section class="my-5">
            <img 
                src="{{ asset('images/about/advisory6.webp')}}" 
                width="200" 
                height="200" 
                alt="Jan Espino Image" 
                class="img-border-rounded-dmb"
                loading="lazy">
            <h1 class="text-dmb fw-bolder">
                Jan Espino
            </h1>
            <h1 class="divider-center-25"></h1>
            <p class="fs-4 fw-bolder mt-3">
                Co-Founder
            </p>
            <div class="border-dmb p-5 my-5 text-start text-dmb">
                <p class="fw-bolder">
                    Jan is also co-founder and the Chief Executive Officer of Vanguard Screening Solutions which is a sister company of Avvanz in the same group of companies. He has led Vanguard’s growth from a three-person startup to one of the biggest background screening companies with around 250 employees serving more than 300 companies mainly in the Philippines. Jan has been in the Background Screening industry for more than 10 years, including his stint as the Regional IT Leader of First Advantage Asia-Pacific. Prior to that, he had spent almost 9 years with the San Miguel Group, mostly with its IT subsidiary, SMITS, Inc., where he held various positions in Portfolio Management, Customer Support, Technology Planning, and Network Management.
                </p>
            </div>
        </section>
        <!-- Advisory # 7 -->
        <section class="my-5">
            <img 
                src="{{ asset('images/about/advisory7.webp')}}" 
                width="200" 
                height="200" 
                alt="Siang Tan Image" 
                class="img-border-rounded-dmb"
                loading="lazy">
            <h1 class="text-dmb fw-bolder">
                Siang Tan
            </h1>
            <h1 class="divider-center-25"></h1>
            <p class="fs-4 fw-bolder mt-3">
                Managing Director for Asia
            </p>
            <div class="border-dmb p-5 my-5 text-start text-dmb">
                <p class="fw-bolder">
                    Born and bred in Singapore, Siang is a consummate Sales professional having honed his skills with work experiences in FMCG with Fraser & Neeve and Unilever early in his career. Next came stints in IT sales leadership at Jebsen & Jessen and Dimension Data along with dives into entrepreneurship including F&B and most recently, cross-border payments partnership with WeChatPay. Siang holds a Bachelor of Commerce degree from Curtin University in Australia.
                </p>
            </div>
        </section>
        <!-- Advisory # 8 -->
        <section class="my-5">
            <img 
                src="{{ asset('images/about/advisory8.webp')}}" 
                width="200" 
                height="200" 
                alt="Marcellus Solomon Image" 
                class="img-border-rounded-dmb"
                loading="lazy">
            <h1 class="text-dmb fw-bolder">
                Marcellus Solomon
            </h1>
            <h1 class="divider-center-25"></h1>
            <p class="fs-4 fw-bolder mt-3">
                Director-Business consultancy
            </p>
            <div class="border-dmb p-5 my-5 text-start text-dmb">
                <p class="fw-bolder">
                    Marcellus is a seasoned business leader with a proven track record of driving strategic growth and delivering exceptional customer outcomes. With over a decade of experience in various leadership roles, his deep understanding of the local market and industry will be instrumental in mapping out Avvanz’s development and expansion.
                </p>
                <p class="fw-bolder">
                    Marcellus brings a wealth of experience in the background screening industry, having spent more than 12 years in the field. In his previous role, he played a pivotal part in tripling India’s revenue, establishing a global capability center with over 1000 employees, and ensuring operational excellence. He also demonstrated a commitment to innovation, developing product and service enhancements to improve the candidate and customer experience.
                </p>
                <p class="fw-bolder">
                    Prior to joining Avvanz, Marcellus held a variety of leadership and sales positions at prominent companies such as HireRight, First Advantage, Quest Diagnostics, Kelly Services, and ManpowerGroup.
                </p>
                <p class="fw-bolder">
                    Marcellus holds a Bachelor’s degree in Accounting and Finance from Osmania University, a Postgraduate Diploma in Management from VJIM, and has also completed a one-year Executive program in General Management from the Indian Institute of Management, Bangalore.
                </p>
            </div>
        </section>
        <!-- Advisory # 9 -->
        <section class="my-5">
            <img 
                src="{{ asset('images/about/advisory9.webp')}}" 
                width="200" 
                height="200" 
                alt="Christy Lim Image" 
                class="img-border-rounded-dmb"
                loading="lazy">
            <h1 class="text-dmb fw-bolder">
                Christy Lim
            </h1>
            <h1 class="divider-center-25"></h1>
            <p class="fs-4 fw-bolder mt-3">
                Head of Finance and Strategy Execution
            </p>
            <div class="border-dmb p-5 my-5 text-start text-dmb">
                <p class="fw-bolder">
                    A finance professional with 15 years of experience in analysis, financial management reporting and control. Christy’s qualifications include an MBA in Corporate Finance from Nottingham Trent University, UK; and she graduated with a BBA (Distinction) in Finance & Real Estate from the University of Oklahoma, USA. 
                </p>
                <p class="fw-bolder">
                    Prior to joining Avvanz, she held executive roles and had diverse working experience and exposure in MNCs across USA, Malaysia, and Singapore in oil and gas (CGG), chemical (Lanxess), manufacturing (Wearnes) and services industries (JPMorgan Chase & Co.).
                </p>
            </div>
        </section>
        <!-- Advisory # 10 -->
        <section class="my-5">
            <img
                src="{{ asset('images/about/advisory10.webp')}}" 
                width="200" 
                height="200" 
                alt="Jhoann Alberto Image" 
                class="img-border-rounded-dmb"
                loading="lazy">
            <h1 class="text-dmb fw-bolder">
                Jhoann Alberto
            </h1>
            <h1 class="divider-center-25"></h1>
            <p class="fs-4 fw-bolder mt-3">
                Senior Operations Manager
            </p>
            <div class="border-dmb p-5 my-5 text-start text-dmb">
                <p class="fw-bolder">
                    Jhoann has extensive experience in handling both operations and client success teams during her 10 years of experience in the background check industry. She is a graduate of Business Administration majoring in Office Management at the Polytechnic University of the Philippines. Prior to her role as the Senior Operations Manager, she was involved in and has led various departments including Finance, Vendor Management, and client care.
                </p>
                <p class="fw-bolder">
                    A professional with over a decade of expertise in the Background Screening Industry who is innovative, goal-oriented, and committed. She holds a Bachelor’s Degree in Office Administration and presently manages Operations, Client Success, and Vendor Management, three cross-functional divisions. Her skills contribute to ideas for ongoing team and product development to ensure better service quality, and she keeps Operations, Client Success, IT, and Sales in sync with a fierce desire to provide safe and secure hiring for your company.
                </p>
            </div>
        </section>
        <!-- Advisory # 11 -->
        <section class="my-5">
            <img 
                src="{{ asset('images/about/advisory11.webp')}}" 
                width="200" 
                height="200" 
                alt="Denisse Aisah Pangilinan Image" 
                class="img-border-rounded-dmb"
                loading="lazy">
            <h1 class="text-dmb fw-bolder">
                Denisse Aisah Pangilinan
            </h1>
            <h1 class="divider-center-25"></h1>
            <p class="fs-4 fw-bolder mt-3">
                Head of Human Resources
            </p>
            <div class="border-dmb p-5 my-5 text-start text-dmb">
                <p class="fw-bolder">
                    A passionate HR person dedicated to creating a positive corporate culture and employee experience that promotes continuous business growth and cultivates customer obsession. With more than 7 years of experience in HR and people operations, Aisah worked with international companies focused on customer service, talent acquisition, employee engagement, learning, and collaboration. She is a graduate of Business Administration majoring in Human Resources at Saint Louis University and is currently taking up a Master’s in Business Administration. After achieving the national certification in Human Resources Associate in the Philippines as a top-notch, Aisah has been certified as a Mental Health First Responder – advocating mental wellness not only in the workplace but also in the community. 
                </p>
            </div>
        </section>
        <!-- Advisory # 12 -->
        <section class="my-5">
            <img
                src="{{ asset('images/about/advisory12.webp')}}" 
                width="200" 
                height="200" 
                alt="Michael Santos Image" 
                class="img-border-rounded-dmb"
                loading="lazy">
            <h1 class="text-dmb fw-bolder">
                Michael Santos
            </h1>
            <h1 class="divider-center-25"></h1>
            <p class="fs-4 fw-bolder mt-3">
                Information Technology Manager
            </p>
            <div class="border-dmb p-5 my-5 text-start text-dmb">
                <p class="fw-bolder">
                    With over 18 years of diverse and hands-on experience in the IT industry, Mike has developed a comprehensive skill set spanning network management, system administration, software development, and IT project management. He is recognized for his technical expertise and ability to deliver high-impact solutions across a wide array of IT disciplines, making him a valuable asset in any organization.
                </p>
                <p class="fw-bolder">
                    Mike holds a <span class='fw-bolder'>Bachelor’s Degree in Electronics and Communication Engineering (ECE)</span>, where he gained a strong foundation in engineering principles. Over the years, he has supplemented his academic background with specialized certifications and training to stay ahead of industry trends. Notably, Mike has completed <span class="fw-bolder">Azure System Administration 101 & 104</span> courses, gaining in-depth knowledge in cloud infrastructure management, and has advanced skills in <span class="fw-bolder">VMware Administration, Wireless Technologies</span>, <span class="fw-bolder">OSP (Outside Plant)</span>, <span class="fw-bolder">Network Administration</span>, and <span class="fw-bolder">Data Center Administration</span>.
                </p>
                <p class="fw-bolder">
                    In addition to his broad technical expertise, Mike has spent the past <span class="fw-bolder">2 years specializing in IT Cloud Security</span>, focusing on securing cloud environments, managing risks, and ensuring the integrity and confidentiality of data in the cloud. His experience includes implementing robust security frameworks, conducting vulnerability assessments, and applying best practices for identity and access management (IAM), encryption, and compliance standards. Mike is adept at ensuring secure cloud architectures and mitigating security threats in dynamic and complex environments.
                </p>
                <p class="fw-bolder">
                    His background in <span class="fw-bolder">Data Center Administration</span> and <span class="fw-bolder">IT Project Management</span> complements his technical skills, enabling him to effectively manage large-scale infrastructure projects, from planning and design to implementation and optimization. Mike’s leadership in project management ensures alignment with organizational goals, budget constraints, and timelines, while maintaining a focus on scalability, performance, and security.
                </p>
                <p class="fw-bolder">
                    Throughout his career, Mike has proven himself as a versatile IT leader with a passion for solving complex technical challenges. He excels in designing innovative solutions, optimizing systems, and driving cloud security initiatives that meet the evolving needs of modern enterprises. Whether managing networks, securing cloud environments, or optimizing data centers, Mike’s results-oriented approach consistently delivers reliable, scalable, and secure IT solutions.
                </p>
            </div>
        </section>
    </div>
</section>

<!-- Council Section -->
<section class="my-5 text-center">
    <div class="container text-center">
        <h1 class="text-dmb fw-bolder display-5">
            Avvanz Advisory Council
        </h1>
        <h1 class="divider-center-25"></h1>
        <br>
        <p class="mt-2 lead">
            Avvanz Advisory Council consists of global veteran leaders from multiple disciplines. The Council with diverse expertise strives to guide and mentor Avvanz in paving Avvanz’s way to success. The Council acts as a resource that provides industry-specific and market-specific domain knowledge that includes talent concerns, needs, best practices, and trends. The Council also offers unbiased insights and ideas purely from a third-party point of view and is not involved in the operations of Avvanz in any way.
        </p>

        <!-- Advisory # 1 -->
        <section class="my-5">
            <img 
                src="{{ asset('images/about/advisory1.webp')}}" 
                width="200" 
                height="200" 
                alt="Salman Syed Image" 
                class="img-border-rounded-dmb"
                loading="lazy">
            <h1 class="text-dmb fw-bolder">
                Salman Syed
            </h1>
            <h1 class="divider-center-25"></h1>
            <div class="border-dmb p-5 my-5 text-start text-dmb">
                <p class="fw-bolder">
                    Salman brings over 20 years of leadership experience spent in the deep end of scaling and transforming businesses from private equity-owned businesses (First Advantage) to start-ups to Fortune 200 (Arrow Inc) and FTSE 100 (Sage Plc). As the Managing Director for UK and Western Europe at Thomas Cook Plc, he drove a turnaround of a £3 billion P&L with over 10,000 employees. As the EVP of Transformation at Sage Plc, he was directly responsible for the successful transformation of the business to a global, cloud-based SaaS business. He has directly been responsible for leading innovation as Head of Global Innovation at Premier Farnell (formerly a FTSE 250 and now acquired by Avnet a Fortune 200 company) and as the Chief Digital Officer for Capita’s People Services division. He is a purpose-driven leader who has worked and lived in many parts of the world including Singapore, Hong Kong, Japan, Canada, and the UK. He believes in the power of people, and inclusive culture and that strategy is simply what you DO to make the business achieve its goals.
                </p>
            </div>
        </section>

        <!-- Advisory # 2 -->
        <section class="my-5">
            <img 
                src="{{ asset('images/about/advisory2.webp')}}" 
                width="200" 
                height="200" 
                alt="Chia Hock Lai Image" 
                class="img-border-rounded-dmb"
                loading="lazy">    
            <h1 class="text-dmb fw-bolder">
                Chia Hock Lai
            </h1>
            <h1 class="divider-center-25"></h1>
            <div class="border-dmb p-5 my-5 text-start text-dmb">
                <p class="fw-bolder">
                    Chia Hock Lai has nearly two decades of experience in the financial and technology industry, having worked in Singapore’s GovTech and NTUC Income. An alumnus of NUS and NTU, he is the founding president of the Singapore Fintech Association, a founding board member of the Global Fintech Institute, and co-chairman of the Blockchain Association Singapore.
                </p>
                <p class="fw-bolder">
                    He is a council member of and strategic advisor to numerous fintech startups and organizations, such as ASEAN AFIN, IEEE C/BDL, Singapore Sichuan Trade & Investment Committee, IBF, and a Fellow of the Singapore University of Social Science (SUSS). He frequently speaks on topics related to fintech and blockchain at international events and universities.
                </p>
            </div>
        </section>

        <!-- Advisory # 3 -->
        <section class="my-5">
            <img 
                src="{{ asset('images/about/advisory3.webp')}}" 
                width="200" 
                height="200" 
                alt="David Wee Image" 
                class="img-border-rounded-dmb"
                loading="lazy">
            <h1 class="text-dmb fw-bolder">
                David Wee
            </h1>
            <h1 class="divider-center-25"></h1>
            <div class="border-dmb p-5 my-5 text-start text-dmb">
                <p class="fw-bolder">
                    David has spent 3 decades of his career in diverse organizations that include government agencies (National Productivity Board and Bank Negara’s ICLIF), MNCs (GE and J&J), and conglomerates (SinarMas Group). He has served in Chief Talent Officer and Chief Human Resources Officer roles across the globe.
                </p>
                <p class="fw-bolder">
                    He has managed GE’s Executive Leadership Programmes in Crotonville, New York; led leadership centres in Brussels, Hong Kong, London, Mumbai, Sydney, Singapore, and Tokyo and served as a consultant to many Asian organizations that include Garuda Airlines, Samsung, Wipro, and Bank Negara. David holds degrees and certificates from the National University of Singapore, INSEAD, University of Michigan, and MIT’s Sloan Business School. He was co-author of Lights, Camera, and Action and served in an editorial capacity for the Productivity Digest and the Singapore Productivity Casebook. He has spoken at numerous conferences and delivered workshops across the world including the renowned American Society for Training and Development in Denver, Colorado. He also serves as a Board Advisor for the Institute of Advance Studies in Complex Choices.
                </p>
            </div>
        </section>
    </div>
</section>

@endsection

@section('scripts')
    <script>
        let items = document.querySelectorAll('#carouselPartnershipItems .carousel-item');
    
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