@extends('layouts.master')

@section('title')
Workplace Safety & Health Guidelines
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
        <div class="row text-white">
            <div class="col-md-7 offset-auto">
                <h1 class="fw-bolder">Workplace Safety & Health Guidelines</h1>
                <h1 class="divider-start-25"></h1>
                <p>Follow safety guidelines</p>
            </div>
        </div>
    </div>
</div>

<!-- Health Protocol Section -->
<section class="container-fluid bg-mg py-5">
    <div class="container text-white">
        <h1 class="text-center fw-bolder">Strives to fully integrate health and safety</h1>
        <h1 class="text-center divider-center-25"></h1>
        <br>
        <p>
            Avvanz is a leading Technology-enabled provider of Screening, Onboarding and Developing solutions in professional services industry. We are committed to providing staff, contractors and visitors with a healthy and safe environment.
        </p>
        <p>
            This policy applies to the company premises, activities of the company and controlled equipment. The company strives to fully integrate health and safety into all aspects of its activities through a continuous improvement of processes. This is achieved by:
        </p>
        <ul class="list-unstyled">
            <li class="list-item">
                <i class="fas fa-check-circle list-icon"></i>
                Implementing and maintaining a framework that ensures the systematic management of health and safety throughout all sites and workplaces and compliance with legal and other requirements; and
            </li>
            <li class="list-item">
                <i class="fas fa-check-circle list-icon"></i>
                Setting measurable objectives and targets aimed at controlling higher risk activities and increasing awareness of health and safety.
            </li>
        </ul>
        <p>
            Our principal goal is to improve well-being, health and safety management and to eliminate injuries and illnesses at our workplaces. Our aim is to protect the inherent safety of all our employees, candidates, contractors, vendors and partners.
        </p>
        <br>
        <p>
            WSH Team is made up of Kannan Chettiar (Managing Director), Alvin Caga (Co-Founder) and Jhoann Alberto (Head of Client Services and Operations).
        </p>
        <br>
        <p>
            We commit to adhere to relevant legal requirements. Our duties and responsibilities will include ensuring well-being, safety and health at work. We commit to continuously enhancing and improving WSH performance, especially amidst Covid-19.
        </p>
    </div>
</section>

<!-- Health Rules Section -->
<section class="container my-5">
    <h1 class="fw-bolder text-dmb">Basic Safety and Health rules</h1>
    <h1 class="divider-start-25"></h1>
    <br>
    <div class="row">
        <div class="col-md-7 d-flex align-items-center">
            <div>
                <p>
                    All staff is briefed on WSH and Business Continuity Planning measures Eg) Emergency like floods, earthquakes or terrorist attacks. The Operations Centre is regularly inspected and audited. Regular safety talks are held as well to continuously educate the workforce. Everyone is accountable for their and their colleagues’ safety. Accountability is one of Avvanz’s core values.
                </p>
                <br>
                <p>
                    All staff is trained on Personal Data Privacy policies to safeguard employee and client-related data.
                </p>
                <br>
                <p class="fw-bold">
                    Basic Safety and Health rules include:
                </p>
                <ul class="list-unstyled">
                    <li class="list-item">
                        <i class="fas fa-check-circle list-icon"></i>
                        No smoking near areas where flammable materials are stored.
                    </li>
                    <li class="list-item">
                        <i class="fas fa-check-circle list-icon"></i>
                        No consumption of alcohol at work.
                    </li>
                    <li class="list-item">
                        <i class="fas fa-check-circle list-icon"></i>
                        No by-passing of emergency switch.
                    </li>
                    <li class="list-item">
                        <i class="fas fa-check-circle list-icon"></i>
                        Prompt reporting of all injuries.
                    </li>
                    <li class="list-item">
                        <i class="fas fa-check-circle list-icon"></i>
                        No playing of sports or games in the workplace area.
                    </li>
                    <li class="list-item">
                        <i class="fas fa-check-circle list-icon"></i>
                        Staff who contract contagious diseases including flu should work from home
                    </li>                  
                </ul>
            </div>
        </div>
        <div class="col-md-5 d-flex align-items-center justify-content-center">
            <img src="{{ asset('images/about-us-img-3-768x512.webp') }}" alt="Placeholder Image" class="transition-up img-fluid rounded-3 w-auto h-auto">
        </div>
    </div>
</section>

<!-- Risk Assessment Section -->
<section class="container-fluid my-5 bg-afw">
    <div class="container py-5">
        <h1 class="fw-bolder text-dmb">Risk Assessment</h1>
        <h1 class="divider-start-25"></h1>
        <br>
        <div class="row">
            <div class="col-md-7 d-flex align-items-center">
                <div>             
                    <p class="fw-bold">
                        Risk Assessment includes:
                    </p>
                    <ul class="list-unstyled">
                        <li class="list-item">
                            <i class="fas fa-check-circle list-icon"></i>
                            The team consists of Managing Director, Operations and Client Services, and Safe Management Officer.
                        </li>
                        <li class="list-item">
                            <i class="fas fa-check-circle list-icon"></i>
                            All work activities and operations layouts are documented.
                        </li>
                        <li class="list-item">
                            <i class="fas fa-check-circle list-icon"></i>
                            Potential workplace safety and personal health risks are identified. This also includes any vendors or subcontractors in Avvanz’s premises.
                        </li>
                        <li class="list-item">
                            <i class="fas fa-check-circle list-icon"></i>
                            The probability of each risk happening, Seriousness level, and Contingency Plans have been mapped out Eg) the First Aid kit.
                        </li>
                        <li class="list-item">
                            <i class="fas fa-check-circle list-icon"></i>
                            The aim is to eliminate or mitigate the risks.
                        </li>
                        <li class="list-item">
                            <i class="fas fa-check-circle list-icon"></i>
                            Risk Assessment records and documented and reviewed regularly.
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

<!-- Covid-19 Section -->
<div class="container py-5 text-center">
    <h1 class="fw-bolder text-dmb">Specific measures in relation to Covid-19</h1>
    <h1 class="divider-center-25"></h1>
    <br>
    <img src="{{asset('images/management-team-768x714.png')}}" alt="" class="img-fluid">
    <div class="row py-5">
        <div class="col">
            <ul class="list-unstyled text-start">
                <li class="list-item">
                    <i class="fas fa-check-circle list-icon"></i>
                    The workforce has been split into Team A and Team B in each country of operation. Team A and Team B alternate working in Avvanz offices.
                </li>
                <li class="list-item">
                    <i class="fas fa-check-circle list-icon"></i>
                    Employees who do not necessarily need to go into the office continue to work from home (telecommuting).
                </li>
                <li class="list-item">
                    <i class="fas fa-check-circle list-icon"></i>
                    Between Team A and Team B, there is no cross-deployment.
                </li>
                <li class="list-item">
                    <i class="fas fa-check-circle list-icon"></i>
                    Employees who are unwell must not go to work at Avvanz offices.
                </li>
                <li class="list-item">
                    <i class="fas fa-check-circle list-icon"></i>
                    They have been encouraged to see a doctor immediately and where possible, visit only one clinic.
                </li>
                <li class="list-item">
                    <i class="fas fa-check-circle list-icon"></i>
                    Employees have been educated not to socialize with colleagues within and outside of the workplace.
                </li>
                <li class="list-item">
                    <i class="fas fa-check-circle list-icon"></i>
                    Employees are not allowed to congregate at all common spaces like entrances, lobbies, and pantries.
                </li>
            </ul>
        </div>
        <div class="col">
            <ul class="list-unstyled text-start">
                <li class="list-item">
                    <i class="fas fa-check-circle list-icon"></i>
                    Working and break hours are staggered.
                </li>
                <li class="list-item">
                    <i class="fas fa-check-circle list-icon"></i>
                    Everyone has been instructed to keep a safe distance of at least 1 meter at all times.
                </li>
                <li class="list-item">
                    <i class="fas fa-check-circle list-icon"></i>
                    At all times, employees wear masks and observe good sanitation and hygiene.
                </li>
                <li class="list-item">
                    <i class="fas fa-check-circle list-icon"></i>
                    Avvanz offices including all spaces and equipment are frequently disinfected.
                </li>
                <li class="list-item">
                    <i class="fas fa-check-circle list-icon"></i>
                    Health checks and protocols have been implemented – Temperature is taken twice daily for all workforce.
                </li>
                <li class="list-item">
                    <i class="fas fa-check-circle list-icon"></i>
                    SafeEntry is used to record the entry of all visitors.
                </li>
                <li class="list-item">
                    <i class="fas fa-check-circle list-icon"></i>
                    All personnel must make a health declaration before entering offices.
                </li>
            </ul>
        </div>
    </div>
</div>

<!-- Monitoring Section -->
<section class="container-fluid mt-5 bg-afw">
    <div class="container py-5">
        <h1 class="fw-bolder text-dmb">Monitoring of WSH performance</h1>
        <h1 class="divider-start-25"></h1>
        <br>
        <p>
            Monitoring of WSH performance
        </p>
        <br>
        <p class="fw-bold">
            Key metrics include:
        </p>
        <div class="row">
            <div class="col-md-7 d-flex align-items-center">
                <div>             
                    <p class="fw-bold">
                        Risk Assessment includes:
                    </p>
                    <ul class="list-unstyled">
                        <li class="list-item">
                            <i class="fas fa-check-circle list-icon"></i>
                            Incidents reported and reported late. Note: If any fatal accidents or diseases, Avvanz will inform the Ministry of Manpower.
                        </li>
                        <li class="list-item">
                            <i class="fas fa-check-circle list-icon"></i>
                            Medical leave trends.
                        </li>
                        <li class="list-item">
                            <i class="fas fa-check-circle list-icon"></i>
                            Findings from inspections and audits
                        </li>
                        <li class="list-item">
                            <i class="fas fa-check-circle list-icon"></i>
                            Employee feedback
                        </li>                
                    </ul>
                    <p>
                        Should an incident happen, Root Cause Analysis (RCA) will be undertaken followed by an action plan which is intended to ensure no recurrence of such an incident.
                    </p>
                    <br>
                    <p>
                        By Kannan Chettiar, Managing Director of Avvanz
                    </p>
                    <br>
                    <p>
                        27th May 2020
                    </p>
                </div>                
            </div>
            <div class="col-md-5 d-flex align-items-center justify-content-center">
                <img src="{{ asset('images/about-us-img-3-768x512.webp') }}" alt="Placeholder Image" class="transition-up img-fluid rounded-3 w-auto h-auto">
            </div>
        </div>
    </div>
</section>

<!-- Floating Button -->
@include('layouts.floating')

<!-- Footer Section -->
@include('layouts.footer')

@endsection