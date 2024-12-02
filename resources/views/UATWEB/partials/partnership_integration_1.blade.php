@extends('UATWEB.layouts.main')

@section('title')
Avvanz Managing Director is Executive of the Year – HR Technology - Avvanz Global
@endsection

@section('content')

@section('css')
<link rel="preload" href="{{ asset('images/homepage/homepageBg.webp') }}" as="image">
<link rel="stylesheet" href="{{ asset('css/about.css') }}">
@endsection()

<!-- Environmental Section -->
<section class="bg-image-2">
    <div class="container padding-vertical">
        <div class="row text-white">
            <div class="col-md-7 offset-auto">
                <h1 class="fw-bolder display-5">
                    Partnership Integration
                </h1>
                <h1 class="divider-start-25"></h1>
                <p>
                    <i class="fa fa-calendar"></i> June 8, 2023
                </p>
            </div>
        </div>
    </div>
</section>

<section class="container margin-vertical">
    <h1 class="text-dmb display-5 fw-bolder">
        OneID and Avvanz Partnership: Revolutionizing Digital Identity Verification for Enhanced Security
    </h1>
    <h1 class="divider-ji"></h1>
    <div class="margin-vertical text-center">
        <img class="img-fluid" src="{{ asset('images/screen/achievement1-1.png') }}" alt="achievement1-1">
    </div>
    <h5 class="fw-bolder">
        OneID, the UK-based digital identity company, has today announced it has teamed up with HR tech and fintech firm, Avvanz, to enable frictionless employee screening and onboarding using identity technology.
    </h5>
    <p>
        Screening and onboarding new hires are critical parts of an Employee Lifecycle Management process. They can be cumbersome and time-consuming and hence leveraging technologies can help the process immensely reducing turnaround time whilst simplifying the process and staying compliant with the data privacy acts and other regulatory requirements.
    </p>
    <p>
        This is what Avvanz has done through its multi-award winning ScreenGlobal platform that helps more than 2,000 companies across the globe, mitigate people related risks. This platform provides an “Amazon-like” experience to easily order more than 20 types of background checks across 150+ countries. This expansive coverage helps give firms assurance in their background screening checks, regardless of where a candidate has previously studied, worked or lived in.
    </p>
    <p>
        A common challenge in the background screening industry is having absolute certainty in who an individual claims to be. The identity of a talent recruitment professional and/or a candidate needs to be confirmed so that false information does not enter the recruitment/screening process – essential for businesses remaining compliant with Data Privacy Acts.
    </p>
    <p>
        OneID® ‘s integration with Avvanz adds essential digital identity verification to Background Screening. This enables firms to digitally verify identities in just a few seconds, reducing recruitment times and speeding up onboarding. The service uses bank-verified data, meaning organizations can be confident that their applicants are who they say they are, right from the outset. It also improves the reliability and security of checks, providing a fast, safe, streamlined experience for both hiring organizations and applicants.
    </p>
    <p>
        OneID® is a certified Identity Service Provider (IDS) for Disclosure and Barring Service (DBS) checks that instantly gives firms low-cost ID verification for various screening checks that do not require ID documents to be scanned. By signing up and signing in via the OneID® journey, passwords will be a thing of the past for Avvanz users, making the screening process more streamlined and frictionless. The partnership also promotes inclusion by providing the ability to instantly verify the identity of circa 50 million UK citizens.
    </p>
    <p>
        Keith Mabbitt, Chief Customer Officer of OneID®, commented: “Screening is an important process for risk mitigation, but it is time-consuming, manual and not suited to the digital world we live in today. With Avvanz, we are providing firms with assurances on the identity of their applicants, while offering a faster, streamlined experience for applicants. This is just one of many use cases for our unique digital identity solution and we look forward to sharing the benefits with a wide range of sectors in the coming year.”
    </p>
    <p>
        Kannan Chettiar, CEO of Avvanz, commented: “It’s important that we embrace technologies that can streamline manual processes to make HR professionals’ lives easier. We believe identity technology has huge potential in this space and are looking forward to streamlining the screening of prospective candidates which will bring huge benefits to both hiring managers and applicants.”
    </p>
    <div class="row">
        <div class="col-4 d-flex align-items-center justify-content-center">
            <h1 class="fw-bolder text-dmb">
                About <br>Avvanz
            </h1>
        </div>
        <div class="col-8 bg-dmb p-5 justify-content-center align-content-center">
            <p class="text-white">
                Avvanz was established in April 2016 and now helps more than 2000 companies
                around the world mitigate people related risks. Avvanz has won multiple awards
                including “Best Background Screening Company” and “HRTech Company of the
                Year”. Avvanz has physical presence in Singapore, London, New York, Sydney,
                Manila and Chennai. Avvanz is also an active member of PBSA (Professional
                Background Screening Association).
            </p>
        </div>
    </div>
</section>

@endsection