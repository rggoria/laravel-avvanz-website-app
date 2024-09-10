@extends('layouts.master')

@section('title')
Global - Avvanz Global
@endsection

@section('css')
<link rel="stylesheet" href="{{ asset('css/homepage.css') }}">
@endsection()

@section('content')

<!-- Navbar Section #1 -->
@include('layouts.navbar')

<!-- Hero Section #1 -->
<section class="bg-image">
    <div class="container">
        <div class="row">
            <div class="col-md-6 order-2 order-md-1 d-flex align-items-center">
                <div class="text-white">
                    <h1 class="fw-bolder display-5">
                        We Screen & Strengthen your Human Assets
                    </h1>
                    <h1 class="divider-start-50"></h1>
                    <p class="lead">
                        Avvanz is a multi-award winning HRTech and FinTech company that helps more than 3000 companies around the globe mitigate people related risks through background checks and due diligence solutions and enhance their skills and competencies through highly interactive training solutions suited for the Digital Economy.
                    </p>
                    <a href="#" class="btn hero-button text-uppercase fw-bolder">Request a Demo</a>
                </div>
            </div>
            <div class="col-md-6 order-1 order-md-2 d-flex align-items-center justify-content-center">
                <img src="{{ asset('images/pages/hero.webp') }}" alt="Placeholder Image" class="transition-up">
            </div>
        </div>
    </div>
</section>
<section class="container my-5 text-center text-white">
    <div class="row">
        <div class="col-md-6 bg-dmb p-5">
            <h1 class="fw-bolder display-5">
                Screen
            </h1>
            <p class="lead">
                Background Checks, KYC/AML and Company Due Diligence
            </p>
            <a href="#" class="btn hero-screen-button fw-bolder text-uppercase">
                Click to know more
            </a>
        </div>
        <div class="col-md-6 bg-marigold p-5">
            <h1 class="fw-bolder display-5">
                Develop
            </h1>
            <p class="lead">
                F2F/Virtual LIVE Training, Coaching and Customized elearning
            </p>
            <a href="#" class="btn hero-develop-button fw-bolder text-uppercase">Click to know more</a>
        </div>
    </div>
</section>

<!-- Awards Section -->
<section class="container my-5">
    <h1 class="text-center text-dmb display-5 fw-bolder">
        Awards & Certification
    </h1>
    <h1 class="text-center divider-center-25"></h1>
    <div class="row g-3 m-5">
        <div class="col-md-6 p-3">
            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="{{ asset('images/pages/award1.png') }}" class="d-block w-100" alt="Award 1">
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('images/pages/award2.png') }}" class="d-block w-100" alt="Award 2">
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('images/pages/award3.png') }}" class="d-block w-100" alt="Award 3">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
        <div class="col-md-6 d-flex justify-content-center">
            <img src="{{ asset('images/pages/award4.png') }}" class="d-block w-75" alt="Award 4">
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
                <p class="lead">
                    As much as people are the biggest assets to your organization, the wrong people can pose the highest risks to your business. Hence, you need to identify the “right” and “safe” talents before onboarding them. Our Multi-award winning Avvanz ScreenGlobal will help you mitigate risks due to wrongful hires.
                </p>
                <a href="#" class="btn solution-button fw-bolder text-uppercase">Explore Solutions</a>
            </div>
        </div>
        <div class="col-lg-6 order-1 order-lg-2 d-flex align-items-center justify-content-center">
            <img src="{{ asset('images/pexels-jack-sparrow-5917727-1-scaled-1.png') }}" alt="Placeholder Image" class="transition-up solution-image">
        </div>
    </div>
</section>

<!-- Courses Section -->
<section class="bg-mg text-white p-5">
    <div class="row g-3">
        <div class="col-lg-6 d-flex align-items-center justify-content-center">
            <img src="{{ asset('images/people-working-as-team-company.png') }}" alt="Placeholder Image" class="transition-up solution-image">
        </div>
        <div class="col-lg-6 d-flex align-items-center">
            <div>
                <h3 class="fw-bold">
                    Do you want to be effectively onboard and upskill your employees?
                </h3>
                <p class="lead">
                    Avvanz will work closely with you to equip your human assets with skills and competencies to thrive in this Digital Economy whilst surpassing your business KPI’s.
                </p>
                <a href="#" class="btn btn-orange-border fw-bolder text-uppercase">Explore Courses</a>
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
    <p class="text-center mt-2 text-wrap text-justify lead">
        Connect with our trusted service providers and integration partners to streamline your background screening process.
    </p>
    <div class="swiper mySwiper my-5">
        <div class="swiper-wrapper my-5">
            <div class="swiper-slide">
                <img src="{{ asset('images/pages/partner1.png') }}" class="img-fluid" alt="Partner 1">
            </div>
            <div class="swiper-slide">
                <img src="{{ asset('images/pages/partner2.png') }}" class="img-fluid" alt="Partner 2">
            </div>
            <div class="swiper-slide">
                <img src="{{ asset('images/pages/partner3.png') }}" class="img-fluid" alt="Partner 3">
            </div>
            <div class="swiper-slide">
                <img src="{{ asset('images/pages/partner4.png') }}" class="img-fluid" alt="Partner 4">
            </div>
            <div class="swiper-slide">
                <img src="{{ asset('images/pages/partner5.png') }}" class="img-fluid" alt="Partner 5">
            </div>
            <div class="swiper-slide">
                <img src="{{ asset('images/pages/partner6.png') }}" class="img-fluid" alt="Partner 6">
            </div>
            <div class="swiper-slide">
                <img src="{{ asset('images/pages/partner7.png') }}" class="img-fluid" alt="Partner 7">
            </div>
            <div class="swiper-slide">
                <img src="{{ asset('images/pages/partner8.png') }}" class="img-fluid" alt="Partner 8">
            </div>
        </div>
        <div class="swiper-pagination"></div>
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
    </div>
</section>

<!-- Industry Section -->
<section class="bg-image text-center container-fluid">
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

<!-- Floating Button -->
@include('layouts.floating')

<!-- Footer Section -->
@include('layouts.footer')

@endsection

@section('scripts')
    <script src="{{ asset('js/swiper.js') }}"></script>
@endsection