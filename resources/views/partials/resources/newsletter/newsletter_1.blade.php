@extends('layouts.master')

@section('title')
Q3 Newsletter - Avvanz Global
@endsection

@section('css')
<link rel="preload" href="{{ asset('images/homepage/homepageBg.webp') }}" as="image">
<link rel="stylesheet" href="{{ asset('css/newsletter.css') }}">
@endsection()

@section('content')

<section class="container margin-vertical">
    <div class="text-center margin-vertical">
        <img class="img-fluid w-50 h-50" src="{{ asset('images/resources/newsletter1-1.png') }}" alt="newsletter1-1">
    </div>
    <p>
        Welcome to the Q3 edition of Avvanz’s newsletter! We’re excited to share the latest on background screening, compliance solutions, and company updates. Stay informed, stay ahead!
    </p>
</section>

<section class="container margin-vertical border shadow p-5">
   <h3 class="fw-bolder">
        Why Background Checks Are Essential
   </h3>
    <p>
        In today’s fast-paced business environment, the importance of making informed hiring decisions cannot be overstated. A thorough background check helps protect your organization, ensuring you hire trustworthy employees who will contribute to a positive work culture. Here are some key reasons why background checks are critical:
    </p>
    <div class="swiper mySwiper pb-5">
        <div class="swiper-wrapper my-5">
            @foreach ( $checkItems as $item )
                <div class="swiper-slide">
                    <div class="card border-radius-dmb text-center bg-dmb" style="height: 25rem;">                     
                        <div class="d-flex justify-content-center pt-5">
                            <div class="btn check-icon">
                                <i class="fas {{ $item['icon'] }}" style="font-size: 3rem;"></i>
                            </div>
                        </div>
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title fw-bolder text-marigold">
                                {{ $item['title'] }}
                            </h5>
                            <small class="card-text text-white mb-3">
                                {{ $item['description'] }}
                            </small>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="swiper-pagination"></div>
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
    </div>
    <p>
        Investing in comprehensive background screening helps you make smarter, safer hiring decisions while maintaining your company’s integrity and reputation.
        <a href="{{ route('screen-sub-2') }}" class="link-hover">To learn more about our background checks, click here</a>.
    </p>
</section>

<section class="container margin-vertical border shadow p-5">
    <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-7">
            <h3 class="fw-bolder">
                Customer Due Diligence (CDD)
            </h3>
             <p>
                Our <span class="fw-bolder">CDDGlobal</span> solution helps you to stay compliant with Anti-Money Laundering (AML) and Counter-Terrorism Financing (CTF) regulations. Services include:
             </p>
             <ul>
                <li>
                    <span class="fw-bolder">KYC Checks</span>:
                    Verify customer identities.
                </li>
                <li>
                    <span class="fw-bolder">Adverse Media Monitoring</span>:
                    Stay aware of potential risks.
                </li>
                <li>
                    <span class="fw-bolder">PEP Screening</span>:
                    Identify high-risk individuals.
                </li>
                <li>
                    <span class="fw-bolder">Ongoing Due Diligence</span>:
                    Maintain continuous compliance.
                </li>
             </ul>
             <a href="{{ route('screen-4') }}" class="link-hover">To Learn More about CDD, click here.</a>
        </div>
        <div class="col-sm-12 col-md-12 col-lg-5">
            <img class="img-fluid w-100 h-100" src="{{ asset('images/resources/newsletter1-2.jpg') }}" alt="newsletter1-2">
        </div>
    </div>
</section>

<section class="container margin-vertical border shadow p-5">
    <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-5">
            <img class="img-fluid w-100 h-100" src="{{ asset('images/resources/newsletter1-3.jpg') }}" alt="newsletter1-3">
        </div>
        <div class="col-sm-12 col-md-12 col-lg-7">
            <h3 class="fw-bolder">
                Product Updates
            </h3>
             <p>
                At Avvanz, we continuously enhance our services to meet your evolving needs. This quarter, we’re introducing:
             </p>
             <ul>
                <li>
                    <span class="fw-bolder">Improved User Interface</span>
                    in
                    <span class="fw-bolder">ScreenGlobal 3.0</span>
                    for a more seamless experience.
                </li>
                <li>
                    <span class="fw-bolder">Faster Turnaround Times</span>
                    on background checks and due diligence reports.
                </li>
                <li>
                    <span class="fw-bolder">Enhanced Security Features</span>
                    across all platforms to ensure data protection and compliance.
                </li>
                <li>
                    <span class="fw-bolder">Self-Screen</span>
                    capabilities, allowing candidates to proactively verify their own credentials before applying for roles.
                </li>
                <li>
                    <span class="fw-bolder">CDD Global</span>
                    (Company Due Diligence), ensuring comprehensive compliance checks and risk assessments for businesses worldwide.
                </li>
             </ul>
             <a href="{{ route('screen-4') }}" class="link-hover">To Learn More about CDD, click here.</a>
        </div>       
    </div>
</section>

<section class="container margin-vertical">
    <div class="row">
       <div class="col">
            <div class="p-5 shadow border h-100">
                <img
                    src="{{ asset('images/resources/newsletter1-4.jpg') }}"
                    class="img-fluid"
                    alt="newsletter1-4"
                    loading="lazy">
                <div class="d-flex flex-column margin-vertical">
                    <h5 class="fw-bolder text-dmb">
                        Industry Insights
                    </h5>
                    <p>
                        Stay ahead of HR and compliance trends with our Industry Reports.
                    </p>
                    <p>
                        Get insights on global regulatory changes to stay competitive and navigate evolving compliance requirements.
                    </p>     
                </div>
                <div class="d-grid gap-2 col-4 mx-auto mb-4">
                    <a href="{{ route('home') }}" class="btn bg-marigold text-white">Donwload Here</a>
                </div>    
            </div>
       </div>
       <div class="col">
            <div class="p-5 shadow border h-100">
                <img
                    src="{{ asset('images/resources/newsletter1-5.png') }}"
                    class="img-fluid"
                    alt="newsletter1-5"
                    loading="lazy">
                <div class="d-flex flex-column margin-vertical">
                    <h5 class="fw-bolder text-dmb">
                        Company Updates
                    </h5>
                    <p>
                        Avvanz is proud to be part of the
                        <span class="fw-bolder">Monetary Authority of Singapore (MAS) Panel</span>,
                        alongside our existing roles on the
                        <span class="fw-bolder">MOM (Ministry of Manpower)</span>
                        and
                        <span class="fw-bolder">ECDA (Early Childhood Development Agency) Panels</span>.
                    </p>    
                </div>     
            </div>
        </div>
    </div>
</section>

<section class="container margin-vertical border shadow p-5">
    <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-6">
            <div class="ratio ratio-16x9">
                <iframe
                    data-src="https://www.youtube.com/embed/9k6rzRQN54E?start=1"
                    title="YouTube video player"
                    allowfullscreen
                    class="lazy-frame">
                </iframe>
            </div>
        </div>
        <div class="col-sm-12 col-md-12 col-lg-6 d-flex justify-content-center align-items-center">
            <div>
                <h1 class="fw-bolder text">
                    FEATURED:
                </h1>
                <p>
                    In this webinar, Avvanz announces the opening of its new office in India, expanding its global presence to better serve the region.
                    <a href="{{ route('resources-4') }}" class="link-hover">For more webinars, click here</a>.
                </p>
            </div>
        </div>          
    </div>
</section>

<section class="bg-image-1 margin-vertical">
    <div class="container padding-vertical">
        <div class="row bg-dark p-3 rounded text-white">
            <div class="col-sm-12 col-md-12 col-lg-7">
                <h1 class="fw-bolder">
                    Leadership Breakthrough Summit
                </h1>
                 <p>
                    Join us in this 3-day retreat on November 20-22, 2024
                 </p>
                 <ul>
                    <li>
                        Elevate your skills,
                    </li>
                    <li>
                        Connect with visionaries, and
                    </li>
                    <li>
                        Unlock your leadership potential
                    </li>
                 </ul>
                 <a href="https://training.avvanz.com/avvanz-leadership-retreat/" class="link-hover">Register Here</a>
            </div>
            <div class="col-sm-12 col-md-12 col-lg-5">
                <img class="img-fluid w-100 h-100 rounded" src="{{ asset('images/resources/newsletter1-6.webp') }}" alt="newsletter1-5">
            </div>
        </div>          
    </div>
</section>

<section class="container margin-vertical">
    <h1 class="text-center text-marigold fw-bolder display-5">
        Latest Events
    </h1>
    <div class="row">
        <div class="col">
            <div class="card-display">
                <div class="card-content">
                    <div class="card-body d-flex flex-column align-items-center text-center">
                        <img class="img-fluid" src="{{ asset('images/resources/newsletter1-3.jpg') }}" alt="newsletter1-3">
                    </div>
                </div>
                <div class="card-description">
                    <p>Due to generally quick staff turnover, Fast Hiring, Effective Onboarding and Engaging Training solutions are key.</p>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card-display">
                <div class="card-content">
                    <div class="card-body d-flex flex-column align-items-center text-center">
                        <img class="img-fluid" src="{{ asset('images/resources/newsletter1-3.jpg') }}" alt="newsletter1-3">
                    </div>
                </div>
                <div class="card-description">
                    <p>Due to generally quick staff turnover, Fast Hiring, Effective Onboarding and Engaging Training solutions are key.</p>
                </div>
            </div>
        </div>
    </div>     
</section>

@section('scripts')
    <script src="{{ asset('js/newsletterSwiper.js') }}"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const iframes = document.querySelectorAll('iframe.lazy-frame');
            const observer = new IntersectionObserver((entries, observer) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        const iframe = entry.target;
                        iframe.src = iframe.getAttribute('data-src');
                        iframe.classList.remove('lazy-frame');
                        observer.unobserve(iframe);
                    }
                });
            });
    
            iframes.forEach(iframe => {
                observer.observe(iframe);
            });
        });
    </script>
@endsection

@endsection