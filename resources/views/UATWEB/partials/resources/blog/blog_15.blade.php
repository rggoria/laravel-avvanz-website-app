@extends('UATWEB.layouts.main')

@section('title')
All you need to know about the NEW Workforce Screening Standard in Australia - Avvanz Global
@endsection

@section('css')
<link rel="preload" href="{{ asset('images/resources/background/itemsBg.webp') }}" as="image">

<style>
    .bg-image-2 {
        background: url("../images/resources/background/itemsBg.webp") no-repeat center;
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
</style>
@endsection

@section('content')

<section class="bg-image-2">
    <div class="container padding-vertical text-white">
        <h1 class="fw-bolder display-5">            
            How To Spot Red Flags When Interviewing A Candidate
        </h1>
        <p>
            <i class="fa fa-calendar"></i> March 10, 2022
        </p>
    </div>
</section>

<section class="container margin-vertical">
    <div class="text-center my-3">
        <img class="img-fluid w-50 h-50 transition-up rounded" src="{{ asset('images/resources/blogItems/blog15-1.jpg') }}" alt="blog15-1">
    </div> 
    <p>
        Avvanz’s 7 years of serving more than 2000 companies around the globe have enabled us to do offer some useful data analytics – Out of every 10 resumes at least 3 pose some form of resume fraud. These include inflated or even fake credentials (like education qualifications and inaccurate employment details), undeclared derogatory pasts (criminal, financial, and even identity-related), and disturbing social media footprints. A 2018 report by the NSW Independent Commission Against Corruption
        <a href="https://www.icac.nsw.gov.au/media-centre/media-releases/2018-media-releases/icac-recommends-nsw-public-sector-tighten-screening-practices-to-combat-employment-application-fraud-and-corruption" class="link-hover">https://www.icac.nsw.gov.au/media-centre/media-releases/2018-media-releases/icac-recommends-nsw-public-sector-tighten-screening-practices-to-combat-employment-application-fraud-and-corruption</a>
        states that 20% to 30% of job applications contain some form of false information.
    </p>
    <p>
        There are many high-profile examples of wrongful hires causing damage to the hiring organization and the stakeholders. A couple of examples are Veronica Hilda Theriault and Andrew Flanagan. These damages can be related to financial health, reputation, and even the morale of the employees.
    </p>
    <div class="text-center my-3">
        <img class="img-fluid w-50 h-50 transition-up rounded" src="{{ asset('images/resources/blogItems/blog15-2.png') }}" alt="blog15-2">
    </div> 
    <p>
        This calls for a thorough pre-employment background screening (and even on existing employees) which can be complex and cumbersome. A good reference framework is AS4811 or the Australian Standard for Workforce Screening. It outlines the process for implementing a thorough, consistent and efficient background screening process to mitigate people related risks.
    </p>
    <p>
        <span class="fw-bolder">AS4811 2006</span> version was mainly focused on security risks, identity and credentials.
    </p>
    <p>
        <span class="fw-bolder">AS4811:2022</span> standard also covers eligibility and suitability for employment. So clearly this new standard is wider in scope.
    </p>
    <p class="fw-bolder">
        Avvanz recommends that AS4811:2022 Standard for Background Check consists of:
    </p>
    <ul>
        <li>
            Identity Verification
        </li>
        <li>
            Right to Work Check
        </li>
        <li>
            Address Verification
        </li>
        <li>
            Employment Details Check
        </li>
        <li>
            Employment Performance Check (some call it Reference Check)
        </li>
        <li>
            Criminal Check
        </li>
        <li>
            Social Media Check
        </li>
    </ul>
    <p>
        <a href="{{ route('screen-sub-2') }}" class="link-hover">https://www.avvanz.com/background-checks/</a>
        gives you more details on Australia specific checks. For a fuller scope of the different types of checks covering 150+ countries, you can create a FREE Account at
        <a href="https://www.avvanz.com/screenglobal" class="link-hover">https://www.avvanz.com/screenglobal</a>.
        A sample of information on Australia Criminal Checks can be found here:
    </p>
    <div class="text-center my-3">
        <img class="img-fluid w-50 h-50 transition-up rounded" src="{{ asset('images/resources/blogItems/blog15-3.png') }}" alt="blog15-3">
    </div> 
    <p>
        Should you need any assistance with AS4811:2022, you can drop us an email at <span class="fw-bolder">consult@avvanz.com</span>.
    </p>
    <p class="fw-bolder">
        About Avvanz:
    </p>
    <p>
        Avvanz was established in April 2016 and now helps more than 2000 companies around the world mitigate people related risks. Avvanz has won multiple awards including “Best Background Screening Company” and “HRTech Company of the Year”. Avvanz has physical presence in Singapore, London, New York, Sydney, Manila and Chennai. Avvanz is also an active member of PBSA (Professional Background Screening Association).
    </p>
    <div class="d-flex justify-content-center">
        <section class="mb-4 d-flex">
            <p class="fw-bolder m-1 align-content-center">
                Share this story:
            </p>
            <a
                class="btn text-white btn-floating m-1"
                style="background-color: #3b5998;"
                href="https://www.facebook.com/share_channel/?link=https%3A%2F%2Fwww.avvanz.com%2Fall-you-need-to-know-about-the-new-workforce-screening-standard-in-australia%2F&app_id=966242223397117&source_surface=external_reshare&display&hashtag"
                target="_blank"
                role="button"
            >
                <i class="fab fa-facebook-f"></i>
            </a>
            <a
                class="btn text-white btn-floating m-1"
                style="background-color: #0082ca;"
                href="https://www.linkedin.com/uas/login?session_redirect=https%3A%2F%2Fwww.linkedin.com%2FshareArticle%3Fmini%3Dtrue%26url%3Dhttps%3A%2F%2Fwww.avvanz.com%2Fall-you-need-to-know-about-the-new-workforce-screening-standard-in-australia%2F%26title%3DAll%2520you%2520need%2520to%2520know%2520about%2520the%2520NEW%2520Workforce%2520Screening%2520Standard%2520in%2520Australia%2520-%2520Avvanz%2520Global%26summary%3D%26source%3Dhttps%3A%2F%2Fwww.avvanz.com%2Fall-you-need-to-know-about-the-new-workforce-screening-standard-in-australia%2F"
                target="_blank"
                role="button"
            >
                <i class="fab fa-linkedin-in"></i>
            </a>
        </section>
    </div>
    <h1 class="fw-bolder display-5">
        All you need to know about the NEW Workforce Screening Standard in Australia
    </h1>
    <div class="hstack gap-3 text-marigold">
        <div class="vr" style="width: 3px;"></div>
        <h1>
            Latest Blog
        </h1>
    </div>
</section>

@endsection