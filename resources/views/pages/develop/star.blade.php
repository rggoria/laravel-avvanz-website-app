@extends('layouts.master')

@section('title')
Star Trainers - Avvanz Global
@endsection

@section('content')

<!--  Navbar Section -->
@include('layouts.navbar')

<!-- Hero Section -->
<section class="bg-image">
    <div class="container">
        <div class="row text-white">
            <div class="col-md-7 offset-auto">
                <h1 class="fw-bolder display-5">
                    Star Trainers
                </h1>
                <h1 class="divider-start-25"></h1>
                <p class="lead">
                    Thought Leaders, Industry Practitioners, Subject Matter Experts in Various Domains
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Star Trainers Section -->
<section class="container my-5 text-center">
    <!-- Star Trainer # 1 -->
    <section class="my-5">
        <img src="{{ asset('images/develop/normal_u11.svg')}}" alt="" class="img-fluid img-border-rounded-dmb h-25 w-25">
        <h1 class="text-dmb fw-bolder">
            Kevin Cottam, PCC, BSc
        </h1>
        <h1 class="divider-center-25"></h1>
        <p class="mt-2 fw-bolder">
            CEO, Global Nomad of Go Nomading Pte. Ltd
        </p>
        <div class="border-dmb p-5 text-start text-dmb">
            <p>
                Author of The Nomadic Mindset: Never Settle … for Too Long.
            </p>
            <p>
                Kevin empowers future-ready courageous leaders thru his Nomadic Leadership Program.
            </p>
            <ul class="list-group">
                <li class="d-flex align-items-start mb-2">
                    <i class="fas fa-circle me-2 fs-6 mt-1 align-self-start"></i>
                    Expand new leaders’ wisdom
                </li>
                <li class="d-flex align-items-start mb-2">
                    <i class="fas fa-circle me-2 fs-6 mt-1 align-self-start"></i>
                    Embrace a Nomadic Mindset so we can move on beyond management to leadership
                </li>
                <li class="d-flex align-items-start mb-2">
                    <i class="fas fa-circle me-2 fs-6 mt-1 align-self-start"></i>
                    Explore creativity through the Nomadic Mindset
                </li>
                <li class="d-flex align-items-start mb-2">
                    <i class="fas fa-circle me-2 fs-6 mt-1 align-self-start"></i>
                    Energize resilience through adaptation to create agile environments
                </li>
                <li class="d-flex align-items-start mb-2">
                    <i class="fas fa-circle me-2 fs-6 mt-1 align-self-start"></i>
                    Experience powerful executive presence through effective communication
                </li>
            </ul>
            <p>
                How: Executive coaching, speaking, facilitating, mentoring, partnering, authoring.
            </p>
        </div>
    </section>

    <!-- Star Trainer # 2 -->
    <section class="my-5">
        <img src="{{ asset('images/develop/normal_u15.svg')}}" alt="" class="img-fluid img-border-rounded-dmb h-25 w-25">
        <h1 class="text-dmb fw-bolder">
            Sylvia Fernandes
        </h1>
        <h1 class="divider-center-25"></h1>
        <p class="mt-2 fw-bolder">
            Founder of VIA Frontiers, a leading high-performance accelerator.
        </p>
        <div class="border-dmb p-5 text-start text-dmb">
            <p>
                Using the latest Neuro-Linguistic-Programming (NLP) methodologies, she helps sales teams and financial services companies reach elite levels of performance at record speeds.
            </p>
            <p class="fw-bolder">
                𝗩𝗲𝗿𝘀𝘂𝘀 𝗡𝗼𝗻-𝗡𝗟𝗣 𝗩𝗲𝗻𝗱𝗼𝗿𝘀:
            </p>
            <ul class="list-group">
                <li class="d-flex align-items-start mb-2">
                    <i class="fas fa-circle me-2 fs-6 mt-1 align-self-start"></i>
                    The Accelerated approach installs high-performance habits & mental wellness in self-sustaining individuals, hence it is cost-efficient because they do not have to work long-term with a coach.
                </li>
            </ul>
            <p class="fw-bolder">
                𝗩𝗲𝗿𝘀𝘂𝘀 𝗢𝘁𝗵𝗲𝗿 𝗡𝗟𝗣 𝗩𝗲𝗻𝗱𝗼𝗿𝘀:
            </p>
            <ul class="list-group">
                <li class="d-flex align-items-start mb-2">
                    <i class="fas fa-circle me-2 fs-6 mt-1 align-self-start"></i>
                    International experience. Worked with clients in both western and eastern regions of the globe. Also specializes in corporate coaching, the approach is customized to every organization, unlike one-size-fits-all solutions
                </li>
                <li class="d-flex align-items-start mb-2">
                    <i class="fas fa-circle me-2 fs-6 mt-1 align-self-start"></i>
                    Multicultural experience
                </li>
                <li class="d-flex align-items-start mb-2">
                    <i class="fas fa-circle me-2 fs-6 mt-1 align-self-start"></i>
                    18 years experience and 3000 clients track record
                </li>
                <li class="d-flex align-items-start mb-2">
                    <i class="fas fa-circle me-2 fs-6 mt-1 align-self-start"></i>
                    Training is solution-focused with a lean approach on less is more.
                </li>
                <li class="d-flex align-items-start mb-2">
                    <i class="fas fa-circle me-2 fs-6 mt-1 align-self-start"></i>
                    Multi-channel coaching -Delivers coaching programs via multiple mediums (offline and online) to maximize learning efficiency.
                </li>
            </ul>
        </div>
    </section>

    <!-- Star Trainer # 3 -->
    <section class="my-5">
        <img src="{{ asset('images/develop/normal_u22.svg')}}" alt="" class="img-fluid img-border-rounded-dmb h-25 w-25">
        <h1 class="text-dmb fw-bolder">
            Dr. Gleb Tsipurksy
        </h1>
        <h1 class="divider-center-25"></h1>
        <p class="mt-2 fw-bolder">
            Founder of VIA Frontiers, a leading high-performance accelerator.
        </p>
        <div class="border-dmb p-5 text-start text-dmb">
            <p>
                As the CEO of the training and consulting firm Disaster Avoidance Experts, training various leaders in these areas of expertise – cutting-edge behavioral science-based techniques in decision-making, cognitive bias risk management, future proofing, and related fields. “Master science-based best practices of Fortune 500 firms”
            </p>
            <p>
                Training experts on the following topics:
            </p>
            <ul class="list-group">
                <li class="d-flex align-items-start mb-2">
                    <i class="fas fa-circle me-2 fs-6 mt-1 align-self-start"></i>
                    Cutting-edge behavioral science-based techniques in decision making
                </li>
                <li class="d-flex align-items-start mb-2">
                    <i class="fas fa-circle me-2 fs-6 mt-1 align-self-start"></i>
                    Cognitive bias risk management
                </li>
                <li class="d-flex align-items-start mb-2">
                    <i class="fas fa-circle me-2 fs-6 mt-1 align-self-start"></i>
                    Future proofing-businesses
                </li>
            </ul>
            <p>
                Clients include Fortune 500 firms such as Aflac, Applied Materials, Entergy, Honda, IBM, Jones Lang LaSalle, Reckitt, Wells Fargo, and Xerox; large nonprofits such as the World Wildlife Fund; government agencies such as the Royal Canadian Mounted Police; as well as numerous middle-market companies and quickly-growing startups.
            </p>
        </div>
    </section>

    <!-- Star Trainer # 4 -->
    <section class="my-5">
        <img src="{{ asset('images/develop/normal_u23.svg')}}" alt="" class="img-fluid img-border-rounded-dmb h-25 w-25">
        <h1 class="text-dmb fw-bolder">
            Kannan Chettiar
        </h1>
        <h1 class="divider-center-25"></h1>
        <p class="mt-2 fw-bolder">
            CEO and Co-Founder Of Avvanz
        </p>
        <div class="border-dmb p-5 text-start text-dmb">
            <p>
                Award-winning Global Leader with 22 years of experience in the Technology and Human Capital sectors spanning across Asia, EMEA & North America. Awarded as “Executive of the Year – Human Resources Technology” for his technopreneurship.
            </p>
            <p>
                A Certified International Trainer with very high ratings from Fortune 500 Clients and an accredited StrengthScope Practitioner. He constantly delivers talks and speaking engagements on topics such as:
            </p>
            <ul class="list-group">
                <li class="d-flex align-items-start mb-2">
                    <i class="fas fa-circle me-2 fs-6 mt-1 align-self-start"></i>
                    Thought-leadership
                </li>
                <li class="d-flex align-items-start mb-2">
                    <i class="fas fa-circle me-2 fs-6 mt-1 align-self-start"></i>
                    Digital Transformation
                </li>
                <li class="d-flex align-items-start mb-2">
                    <i class="fas fa-circle me-2 fs-6 mt-1 align-self-start"></i>
                    Design-Thinking
                </li>
                <li class="d-flex align-items-start mb-2">
                    <i class="fas fa-circle me-2 fs-6 mt-1 align-self-start"></i>
                    Communication
                </li>
            </ul>
            <p>
                He is proficient in:
            </p>
            <ul class="list-group">
                <li class="d-flex align-items-start mb-2">
                    <i class="fas fa-circle me-2 fs-6 mt-1 align-self-start"></i>
                    English
                </li>
                <li class="d-flex align-items-start mb-2">
                    <i class="fas fa-circle me-2 fs-6 mt-1 align-self-start"></i>
                    Tamil,
                </li>
                <li class="d-flex align-items-start mb-2">
                    <i class="fas fa-circle me-2 fs-6 mt-1 align-self-start"></i>
                    Elementary Mandarin
                </li>
                <li class="d-flex align-items-start mb-2">
                    <i class="fas fa-circle me-2 fs-6 mt-1 align-self-start"></i>
                    Malay
                </li>
                <li class="d-flex align-items-start mb-2">
                    <i class="fas fa-circle me-2 fs-6 mt-1 align-self-start"></i>
                    Thai
                </li>
            </ul>
            <p>
                An engineer by training, he holds an Honours degree in Electrical and Electronics Engineering from the Nanyang Technological University in Singapore and a MBA from the University of Birmingham in the UK. Kannan holds an Advanced Certificate in Training and Assessment.
            </p>
        </div>
    </section>

</section>

<!-- Floating Button -->
@include('layouts.floating')

<!-- Footer Section -->
@include('layouts.footer')

@endsection