@extends('layouts.master')

@section('title')
MOM Verification - Avvanz Global
@endsection

@section('css')
<link rel="preload" href="{{ asset('images/homepage/homepageBg.webp') }}" as="image">
@endsection()

@section('content')

<!-- Hero Section -->
<section class="bg-image-2">
    <div class="container padding-vertical">
        <div class="row text-white">
            <div class="col-md-7 offset-auto">
                <h1 class="fw-bolder display-5">
                    Mandatory Checks for Singapore Work Passes
                </h1>
                <h1 class="divider-start-25"></h1>
                <p>
                    Contact us at mom.cs@avvanz.com or 6403 3836
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Singpaore Pass Section -->
<section class="bg-mg padding-vertical">
    <div class="container">
        <div class="row g-3">
            <div class="col-md-7 d-flex align-items-center">
                <div class="text-white">
                    <p>
                        From the 1st of September 2023, Ministry of Manpower (MOM) requires Employment Pass (EP) candidates (from any country) to pass a 2-stage eligibility framework:
                    </p>
                    <p>
                        <span class="fw-bold">Stage 1</span> – Qualifying salary
                    </p>
                    <p>
                        <span class="fw-bold">Stage 2</span> – COMPASS or Complementarity Assessment Framework
                    </p>
                    <p>
                        With the implementation of COMPASS, post-secondary diploma and above qualifications declared to MOM should be supported with a Verification Proof. This requirement applies to new EP applications from 1 September 2023, and renewals from 1 September 2024.
                    </p>
                </div>
            </div>
            <div class="col-md-5 d-flex align-items-center justify-content-center">
                <img
                    src="{{ asset('images/screen/singaporework.webp') }}"
                    alt="Singapore Work Image"
                    class="transition-up img-fluid rounded-3 w-auto h-auto"
                    loading="lazy">
            </div>
        </div>
    </div>
</section>

<!-- Accredited Rules Section -->
<section class="container my-5 text-center">
    <h4 class="fw-bolder text-dmb">
        Employers must ensure that their candidates’ qualifications are authentic and are awarded by accredited institutions.
    </h4>
    <br>
    <div class="row g-3">
        <div class="col-6">
            <div class="p-3 bg-bg h-100 w-100">
                <div class="text-start">
                    <p class="fw-bold text-center">
                        If Awarding institution cannot be found in MOM’s dropdown list, Avvanz will help provide:
                    </p>
                    <ul>
                        <li class="d-flex align-items-start mb-2">
                            <i class="fas fa-circle me-2 fs-6 mt-1 align-self-start"></i>
                            The Authenticity of the qualification by verifying directly with the institution to confirm that the candidate was awarded the qualification (Education Check)
                        </li>
                        <li class="d-flex align-items-start mb-2">
                            <i class="fas fa-circle me-2 fs-6 mt-1 align-self-start"></i>
                            Institution Accreditation Check to confirm that the institution is recognized by the countries’ local government authorities
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-6">
            <div class="p-3 bg-bg h-100 w-100">
                <div class="text-start">
                    <p class="fw-bold text-center">
                        If the Awarding institution can be found in MOM’s dropdown list, Avvanz will help provide:
                    </p>
                    <ul>
                        <li class="d-flex align-items-start mb-2">
                            <i class="fas fa-circle me-2 fs-6 mt-1 align-self-start"></i>
                            The Authenticity of the qualification by verifying directly with the institution to confirm that the candidate was awarded the qualification (Education Check)
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Video Section -->
<section class="bg-afw my-5 py-5">
    <div class="container">
        <div class="text-center">
            <h4 class="text-dmb fw-bolder">
                Watch the video guide to learn how easily you can place orders on Avvanz ScreenGlobal platform
            </h4>
            <br>
            <div class="ratio ratio-16x9">
                <iframe
                    data-src="https://www.youtube.com/embed/NoQk6ka-tCI?start=1"
                    title="YouTube video player"
                    allowfullscreen
                    class="lazy-frame">
                </iframe>
            </div>        
            <div class="mt-5 row">
                <div class="col-12 d-flex justify-content-center">
                    <div class="col-8 text-center">
                        <h4 class="text-dmb fw-bolder lead">
                            Do ensure you have the following ready when you order:
                        </h4>
                        <ul class="list-group text-start">
                            <li class="d-flex align-items-start mb-2">
                                <i class="fas fa-check-circle me-2 fs-5 align-self-start"></i>
                                Duly signed Letter of Consent (ScreenGlobal will pop up the document for you)
                            </li>
                            <li class="d-flex align-items-start mb-2">
                                <i class="fas fa-check-circle me-2 fs-5 align-self-start"></i>
                                Copy of passport
                            </li>
                            <li class="d-flex align-items-start mb-2">
                                <i class="fas fa-check-circle me-2 fs-5 align-self-start"></i>
                                Education certificate, marksheet, transcript (in English)
                            </li>
                            <li class="d-flex align-items-start mb-2">
                                <i class="fas fa-check-circle me-2 fs-5 align-self-start"></i>
                                Address of your Awarding Institution
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Work Section -->
<section class="container my-5">
    <h1 class="text-center text-dmb fw-bolder">Why work with Avvanz?</h1>
    <div class="container mt-5">
        <div class="row row-cols-sm-1 row-cols-md-1 row-cols-lg-5 g-4">
            <div class="col">
                <div class="h-100 bg-bs">
                    <div class="card-body text-center">
                        <i class="fas fa-user-circle" style="font-size: 4rem;"></i>
                        <p class="card-text">
                            Fast response and Quick turnaround time of Background checks with unlimited attempts
                        </p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="h-100 bg-lw">
                    <div class="card-body text-center">
                        <i class="fas fa-user-circle" style="font-size: 4rem;"></i>
                        <p class="card-text">
                            Through Due Diligence compliant with MOM's requirements and ISO27001 and ISO 27701 standards.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="h-100 bg-givry">
                    <div class="card-body text-center">
                        <i class="fas fa-user-circle" style="font-size: 4rem;"></i>
                        <p class="card-text">
                            FastCustomized solutions to suit your needs using our multi-award winning ScreenGlobal Platform
                        </p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="h-100 bg-pb">
                    <div class="card-body text-center">
                        <i class="fas fa-user-circle" style="font-size: 4rem;"></i>
                        <p class="card-text">
                            Education Verification Cost starts at $10 USD
                        </p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="h-100 bg-ds">
                    <div class="card-body text-center">
                        <i class="fas fa-user-circle" style="font-size: 4rem;"></i>
                        <p class="card-text">
                            Institution Verification Cost $70 USD
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="my-4">
            <p>
                Avvanz’s multi award winning <a href="https://www.avvanz.com/screenglobal/" class="link-hover">ScreenGlobal platform</a> is listed at No 1 in MOM’s trusted background screening companies list. We cover 150+ countries and will be able to help you with your Education and Institution Accreditation Check amongst 20 other types of <a href="{{ route('screen-sub-2') }}" class="link-hover">background checks</a>. ScreenGlobal is the only eCommerce platform that enables you to browse, select, order and monitor your checks in real-time.
            </p>
            <p>
                Completely hassle-free and peace of mind!
            </p>
            <p>
                Avvanz’s dedicated MOM Client Success Team (<a href="mailto:mom.cs@avvanz.com" class="link-hover">mom.cs@avvanz.com</a>) will hand hold you through every step of the way.
            </p>
        </div>
        <div class="d-grid gap-2 col-2 mx-auto my-4">
            <a href="{{ route('contact') }}" class="btn btn-marigold-transition">Contact Us</a>
        </div>
    </div>
</section>

<section class="bg-mg py-5">
    <div class="container text-center">
        <table class="table table-bordered text-white table-fixed">
            <thead class="bg-white">
                <tr>
                    <th colspan="3">
                        <img 
                            src="{{ asset('images/homepage/avvanzLogo.webp') }}"
                            alt="Avvanz Logo Image"
                            width="200"
                            width="150"
                            loading="lazy">
                        <br>
                        <span class="lead text-marigold fw-bold">
                            Checks Price and Turnaround Time (TAT) information
                        </span>
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        Asia Pacific <br>(Including Singapore, Australia, Philippines)
                    </td>
                    <td>
                        From 12 USD to 100 USD
                    </td>
                    <td>
                        TAT varies from 5 days to 14 days
                    </td>
                </tr>
                <tr>
                    <td>
                        EMEA <br>(Including Middle East, United Kingdom)
                    </td>
                    <td>
                        From 35 USD to 179 USD
                    </td>
                    <td>
                        TAT varies from 5 days to 14 days
                    </td>
                </tr>
                <tr>
                    <td>
                        America <br>(Including USA, Latin America)
                    </td>
                    <td>
                        From 20 USD to 93 USD
                    </td>
                    <td>
                        TAT varies from 5 days to 14 days
                    </td>
                </tr>
            </tbody>
        </table>
        <div class="text-white py-5">
            <p>
                For updated prices, please feel free to log in at <a href="https://www.avvanz.com/screenglobal/" class="link-hover">https://www.avvanz.com/screenglobal/</a>.
            </p>
        </div>
    </div>
</section>

@section('scripts')
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