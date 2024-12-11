@extends('UATWEB.layouts.main')

@section('title')
Avvanz - Background Checks & Screening
@endsection

@section('css')
<link rel="preload" href="{{ asset('images/homepage/homepageBg.webp') }}" as="image">
<link rel="preload" href="{{ asset('images/homepage/homepage1.webp') }}" as="image">
<link rel="preload" href="{{ asset('images/homepage/leadership.webp') }}" as="image">
<link rel="stylesheet" href="{{ asset('css/homepage.css') }}">
@endsection()

@section('content')

<!-- Hero Section -->
<section class="bg-image-1">
    <div class="container padding-vertical">
        <div class="row">
            <div class="col-md-6 order-2 order-md-1">
                <div class="text-white">
                    <h1 class="fw-bolder display-5">
                        We Screen & Strengthen your Human Assets
                    </h1>
                    <div class="divider-start-50"></div>
                    <p>
                        Avvanz is a multi-award winning HRTech and FinTech company that helps more than 3000 companies around the globe mitigate people related risks through background checks and due diligence solutions and enhance their skills and competencies through highly interactive training solutions suited for the Digital Economy.
                    </p>
                    <a href="{{ route('contact') }}" class="btn hero-button fw-bolder">Request a Demo</a>
                </div>
            </div>
            <div class="col-md-6 order-1 order-md-2 justify-content-center align-content-center text-center">
                <img 
                    src="{{ asset('images/homepage/homepage1.webp') }}"
                    alt="Homepage Image 1"
                    class="img-fluid transition-up"
                    width="300"
                    height="300"
                    loading="lazy">
            </div>
        </div>            
    </div>
</section>

<section class="container margin-vertical text-center text-white">
    <div class="row">
        <div class="col-md-6 bg-dmb p-5">
            <h1 class="fw-bolder display-5">
                Screen
            </h1>
            <p>
                Background Checks, KYC/AML and Company Due Diligence
            </p>
            <a href="{{ route('screen-main') }}" class="btn hero-screen-button fw-bolder text-uppercase">
                Click to know more
            </a>
        </div>
        <div class="col-md-6 bg-marigold p-5">
            <h1 class="fw-bolder display-5">
                Develop
            </h1>
            <p>
                F2F/Virtual LIVE Training, Coaching and Customized elearning
            </p>
            <a href="{{ route('develop-main') }}" class="btn hero-develop-button fw-bolder text-uppercase">Click to know more</a>
        </div>
    </div>
</section>

<!-- Awards Section -->
<section class="container my-5">
    <h1 class="text-center text-dmb display-5 fw-bolder">
        Awards & Certification
    </h1>
    <h1 class="text-center divider-center-25"></h1>
    <div class="row g-5 my-5">
        <div class="col-sm-12 col-md-12 col-lg-6 d-flex justify-content-center align-items-center">
            <div class="swiper awardSwiper">
                <div class="swiper-wrapper my-5">              
                    <div class="swiper-slide">
                        <img
                            src="{{ asset('images/homepage/certification1.webp') }}"
                            class="img-fluid"
                            style="height: 200px; width:auto"
                            alt="Award 1"
                            loading="lazy">
                    </div>
                    <div class="swiper-slide">
                        <img
                            src="{{ asset('images/homepage/certification2.webp') }}"
                            class="img-fluid"
                            style="height: 200px; width:auto"
                            alt="Award 2"
                            loading="lazy">
                    </div>
                    <div class="swiper-slide">
                        <img
                            src="{{ asset('images/homepage/certification3.webp') }}"
                            class="img-fluid"
                            style="height: 200px; width:auto"
                            alt="Award 3"
                            loading="lazy">
                    </div>
                </div>
                <div class="swiper-pagination"></div>
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
            </div>    
        </div>
        <div class="col-sm-12 col-md-12 col-lg-6 d-flex justify-content-center align-items-center">
            <img
                src="{{ asset('images/homepage/certification4.webp') }}"
                class="img-fluid"
                style="height: 200px; width:auto"
                alt="Award 4"
                loading="lazy">
        </div>
    </div>
</section>

<!-- Solution Section -->
<section class="container my-5 py-5">
    <div class="row g-3">
        <div class="col-lg-6 order-2 order-lg-1 d-flex align-items-center">
            <div>
                <h3 class="fw-bold text-co">
                    Searching for an automated compliant background screening solution?
                </h3>
                <p>
                    As much as people are the biggest assets to your organization, the wrong people can pose the highest risks to your business. Hence, you need to identify the “right” and “safe” talents before onboarding them. Our Multi-award winning Avvanz ScreenGlobal will help you mitigate risks due to wrongful hires.
                </p>
                <a href="{{ route('screen-main') }}" class="btn solution-button fw-bolder text-uppercase">Explore Solutions</a>
            </div>
        </div>
        <div class="col-lg-6 order-1 order-lg-2 d-flex align-items-center justify-content-center">
            <img
                src="{{ asset('images/homepage/homepage2.webp') }}"
                alt="Homepage Image 2"
                class="transition-up image-horizontal-display"
                loading="lazy">
        </div>
    </div>
</section>

<!-- Courses Section -->
<section class="bg-mg text-white p-5">
    <div class="container">
        <div class="row g-3">
            <div class="col-lg-6 d-flex align-items-center justify-content-center">
                <img
                    src="{{ asset('images/homepage/homepage3.webp') }}"
                    alt="Homepage Image 3"
                    class="transition-up image-horizontal-display"
                    loading="lazy">
            </div>
            <div class="col-lg-6 d-flex align-items-center">
                <div>
                    <h3 class="fw-bold">
                        Do you want to be effectively onboard and upskill your employees?
                    </h3>
                    <p>
                        Avvanz will work closely with you to equip your human assets with skills and competencies to thrive in this Digital Economy whilst surpassing your business KPI’s.
                    </p>
                    <a href="{{ route('develop-main') }}" class="btn btn-orange-border fw-bolder text-uppercase">Explore Courses</a>
                </div>
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
    <div class="swiper mySwiper">
        <div class="swiper-wrapper my-5">
            @foreach ( $trustedPartnerItems as $count => $item )
                <div class="swiper-slide">
                    <img
                        src="{{ asset('images/screen/' . $item) }}"
                        width="300"
                        height="200"
                        alt="Partner Image {{ $count }}"
                        loading="lazy">
                </div>
            @endforeach
        </div>
        <div class="swiper-pagination"></div>
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
    </div>
</section>

<!-- Industry Section -->
<section class="bg-image-1 text-center container-fluid py-5">
    <h1 class="text-center text-white fw-bolder">In-depth Industry Expertise</h1>
    <h1 class="text-center industry-divider"></h1>
    <div class="container mt-5">
        <div class="row g-3">
            <div class="col-lg-4 p-1">
                <div class="card-display card-border">
                    <div class="card-content p-5">
                        <div class="card-body d-flex flex-column align-items-center text-center">
                            <div class="card-icon d-flex justify-content-center align-items-center">
                                <i class="fas fa-shopping-cart"></i>
                            </div>
                            <h5 class="card-title fw-bold mt-5">Banking, Financial Services & Insurance</h5>
                        </div>
                    </div>
                    <div class="card-description">
                        <p>Financial compliance requires specific background checks for various risk based roles.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 p-1">
                <div class="card-display card-border">
                    <div class="card-content p-5">
                        <div class="card-body d-flex flex-column align-items-center text-center">
                            <div class="card-icon d-flex justify-content-center align-items-center">
                                <i class="fas fa-shopping-cart"></i>
                            </div>
                            <h5 class="card-title fw-bold mt-5">Retail</h5>
                        </div>
                    </div>
                    <div class="card-description">
                        <p>Fast Hiring and Effective Onboarding are critical on top of the thorough background checks to address financial losses due to stock loss.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 p-1">
                <div class="card-display card-border">
                    <div class="card-content p-5">
                        <div class="card-body d-flex flex-column align-items-center text-center">
                            <div class="card-icon d-flex justify-content-center align-items-center">
                                <i class="fas fa-shopping-basket"></i>
                            </div>
                            <h5 class="card-title fw-bold mt-5">Fast Moving Consumer Goods and Manufacturing</h5>
                        </div>
                    </div>
                    <div class="card-description">
                        <p>Due to generally quick staff turnover, Fast Hiring, Effective Onboarding and Engaging Training solutions are key.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 p-1">
                <div class="card-display card-border">
                    <div class="card-content p-5">
                        <div class="card-body d-flex flex-column align-items-center text-center">
                            <div class="card-icon d-flex justify-content-center align-items-center">
                                <i class="fas fa-laptop"></i>
                            </div>
                            <h5 class="card-title fw-bold mt-5">Technology</h5>
                        </div>
                    </div>
                    <div class="card-description">
                        <p>Due to war for talent and inherent risk due to wrongful hires, thorough background checks and continuous learning and development solutions are required.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 p-1">
                <div class="card-display card-border">
                    <div class="card-content p-5">
                        <div class="card-body d-flex flex-column align-items-center text-center">
                            <div class="card-icon d-flex justify-content-center align-items-center">
                                <i class="fas fa-stethoscope"></i>
                            </div>
                            <h5 class="card-title fw-bold mt-5">Healthcare</h5>
                        </div>
                    </div>
                    <div class="card-description">
                        <p>Customized Pre-employment Sceening, Regular re-screening and Continuous Monitoring solutions are needed for the various medical professionals depending on the compliance requirements.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 p-1">
                <div class="card-display card-border">
                    <div class="card-content p-5">
                        <div class="card-body d-flex flex-column align-items-center text-center">
                            <div class="card-icon d-flex justify-content-center align-items-center">
                                <i class="fas fa-users"></i>
                            </div>
                            <h5 class="card-title fw-bold mt-5">Business Process Outsourcing</h5>
                        </div>
                    </div>
                    <div class="card-description">
                        <p>Ensure the right people are placed in the various roles which pose different levels of risks and thus warrant different types of background checks.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 p-1">
                <div class="card-display card-border">
                    <div class="card-content p-5">
                        <div class="card-body d-flex flex-column align-items-center text-center">
                            <div class="card-icon d-flex justify-content-center align-items-center">
                                <i class="fas fa-user-graduate"></i>
                            </div>
                            <h5 class="card-title fw-bold mt-5">Education</h5>
                        </div>
                    </div>
                    <div class="card-description">
                        <p>Safeguarding and Child Protection guidelines require different mix of background checks on the various roles. Higher level educational institutions pose varying complexities and hence a right background screening methodology needs to be adopted.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 p-1">
                <div class="card-display card-border">
                    <div class="card-content p-5">
                        <div class="card-body d-flex flex-column align-items-center text-center">
                            <div class="card-icon d-flex justify-content-center align-items-center">
                                <i class="fas fa-water"></i>
                            </div>
                            <h5 class="card-title fw-bold mt-5">Oil & Gas</h5>
                        </div>
                    </div>
                    <div class="card-description">
                        <p>Inhouse staff and Site workers pose different types of risks and hence a varied background screening, onboarding and training framework needs to be implemented.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 p-1">
                <div class="card-display card-border">
                    <div class="card-content p-5">
                        <div class="card-body d-flex flex-column align-items-center text-center">
                            <div class="card-icon d-flex justify-content-center align-items-center">
                                <i class="fas fa-lightbulb"></i>
                            </div>
                            <h5 class="card-title fw-bold mt-5">Others</h5>
                        </div>
                    </div>
                    <div class="card-description">
                        <p>Avvanz provides customized solutions for all other industries given our in-depth domain expertise across all these industries.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@section('scripts')
    @vite('resources/js/homepageSwiper.js')
@endsection

@endsection