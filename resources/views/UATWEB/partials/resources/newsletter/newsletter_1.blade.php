@extends('UATWEB.layouts.main')

@section('title')
Q3 Newsletter - Avvanz Global
@endsection

@section('css')
<link rel="preload" href="{{ asset('images/homepage/homepageBg.webp') }}" as="image">
<link rel="stylesheet" href="{{ asset('css/newsletter.css') }}">

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
@endsection()

@section('content')

<section class="container margin-vertical">
    <div class="text-center margin-vertical">
        <img class="img-fluid w-50 h-50 transition-up" src="{{ asset('images/resources/newsletter1-1.png') }}" alt="newsletter1-1">
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
    <div class="row justify-content-center my-5">
        <div id="carouselCheckItems" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                @foreach ($checkItems as $count => $item)
                    <button type="button" data-bs-target="#carouselCheckItems" data-bs-slide-to="{{ $count }}" class="{{ $count === 0 ? 'active' : '' }}" aria-current="{{ $count === 0 ? 'true' : 'false' }}" aria-label="Slide {{ $count + 1 }}"></button>
                @endforeach
            </div>
            <div class="carousel-inner" role="listbox">
                @foreach ($checkItems as $count => $item)
                    <div class="carousel-item {{ $count === 0 ? 'active' : '' }}">
                        <div class="col-md-4">
                            <div class="card mx-3 border-radius-dmb text-center bg-dmb" style="height: 25rem;">                     
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
                    </div>
                @endforeach
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselCheckItems" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselCheckItems" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
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
    <div class="row gy-3">
        <div class="col-sm-12 col-md-12 col-lg-6">
            <div class="card-display">
                <div class="card-content">
                    <div class="card-body d-flex flex-column align-items-center text-center">
                        <img class="img-fluid h-100 w-100" src="{{ asset('images/resources/newsletter1-7.png') }}" alt="newsletter1-7">
                    </div>
                </div>
                <div class="card-description">                   
                    <p>
                        <span class="fw-bolder">Job Fair</span>
                        <br>
                        Avvanz during the Job Fair at National Teacher's College. Over 60 companies and HR executives has attended, an excellent opportunity to connect and explore new career possibilities.
                    </p>
                </div>
            </div>
        </div>
        <div class="col-sm-12 col-md-12 col-lg-6">
            <div class="card-display">
                <div class="card-content">
                    <div class="card-body d-flex flex-column align-items-center text-center">
                        <img class="img-fluid h-100 w-100" src="{{ asset('images/resources/newsletter1-8.jpeg') }}" alt="newsletter1-8">
                    </div>
                </div>
                <div class="card-description">
                    <p>
                        <span class="fw-bolder">Avvanz Midyear Party</span>
                        <br>
                        Avvanz recently hosted its Midyear Party, bringing together the team for a day of fun, connection, and celebration. The event featured an exciting program filled with games, performances, and inspiring speeches.
                    </p>
                </div>
            </div>
        </div>
        <div class="col-sm-12 col-md-12 col-lg-6">
            <div class="card-display">
                <div class="card-content">
                    <div class="card-body d-flex flex-column align-items-center text-center">
                        <img class="img-fluid h-100 w-100" src="{{ asset('images/resources/newsletter1-9.png') }}" alt="newsletter1-9">
                    </div>
                </div>
                <div class="card-description">
                    <p>
                        <span class="fw-bolder">Art Jam Event</span>
                        <br>
                        The event was a fantastic display of creativity and teamwork, showcasing the diverse talents within our team. To top it off, special prizes were awarded to the winners, making the event even more memorable!
                    </p>
                </div>
            </div>
        </div>
        <div class="col-sm-12 col-md-12 col-lg-6">
            <div class="card-display">
                <div class="card-content">
                    <div class="card-body d-flex flex-column align-items-center text-center">
                        <img class="img-fluid h-100 w-100" src="{{ asset('images/resources/newsletter1-10.png') }}" alt="newsletter1-10">
                    </div>
                </div>
                <div class="card-description">
                    <p>
                        <span class="fw-bolder">Career Fair</span>
                        <br>
                        Avvanz participating in the Career Fair at National Teacher's College from July 31 to August 1. This exciting event brought together over 600 students providing a fantastic opportunity for networking and career growth.
                    </p>
                </div>
            </div>
        </div>
    </div>     
</section>

<section class="container margin-vertical">
    <a class="d-flex justify-content-center" href="https://backgroundchecks.avvanz.com/info/">
        <img class="img-fluid w-25 h-25" src="{{ asset('images/resources/newsletter1-11.png') }}" alt="newsletter1-11">
    </a>
    <p class="text-center">
        Know More about Avvanz:
    </p>
    <div class="d-flex justify-content-center flex-row gap-3">
        <a class="btn social-facebook" href="https://www.facebook.com/AvvanzGlobal/" target="_blank" aria-label="Facebook">
            <i class="fab fa-facebook"></i>
        </a>
        <a class="btn social-youtube" href="https://www.youtube.com/channel/UC0GtKhkOvAZCQoA141KDyoA" target="_blank" aria-label="YouTube">
            <i class="fab fa-youtube"></i>
        </a>
        <a class="btn social-linkedin" href="https://www.linkedin.com/company/avvanz/" target="_blank" aria-label="LinkedIn">
            <i class="fab fa-linkedin-in"></i>
        </a><a class="btn social-instagram" href="https://www.instagram.com/avvanz_/" target="_blank" aria-label="Instagram">
            <i class="fab fa-instagram"></i>
        </a>
    </div>
</section>

@endsection

@section('scripts')
    <script>
        let items = document.querySelectorAll('#carouselCheckItems .carousel-item');
    
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