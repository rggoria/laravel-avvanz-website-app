@extends('layouts.master')

@section('title')
All you need to know about the British Standard for Security Screening - Avvanz Global
@endsection

@section('css')
<link rel="preload" href="{{ asset('images/homepage/homepageBg.webp') }}" as="image">
@endsection()

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
        <img class="img-fluid w-50 h-50 transition-up rounded" src="{{ asset('images/resources/blogItems/blog13-1.jpg') }}" alt="blog13-1">
    </div> 
    <p>
        Avvanz’s 7 years of serving more than 2000 companies around the globe has enabled us tooffer some useful data analytics – Out of every 10 resumes at least 3 pose some form of resume frauds. These include inflated or even fake credentials (like education qualifications and inaccurate employment details), undeclared derogatory pasts (criminal, financial and even identity related) and disturbing social media footprint.
    </p>
    <div class="text-center my-3">
        <img class="img-fluid w-50 h-50 transition-up rounded" src="{{ asset('images/resources/blogItems/blog13-2.png') }}" alt="blog13-2">
    </div>
    <p>
        Hence a thorough background checks or a screening framework needs to be in place – not just on new joiners but even on contractors and employees. What checks should be undertaken? Any guidelines out there? A good reference is BS7858.
    </p>
    <p class="fw-bolder">
        What is BS7858? 
    </p>
    <p>
        The British Standards Institution&#39;s (BSI) BS7858 Standard is a code of practice that details best practices and guidelines for the security screening of individuals employed in a secure environment. It is also used where security screening is beneficial to the public. The standard, which was introduced in 2013, was updated in September 2019 and is now considered the industry standard for all employment screening. Just so everyone is clear – A secure environment is one in which people, things, or property are well protected. This category includes data security, sensitive service contracts, and private records. It addresses auxiliary personnel, acquisitions and transfers, and contractor and subcontractors If your organization follows the BS7858 Standard, you can provide a high level of assurance to your stakeholders, such as customers, employees, shareholders, regulators, and auditors, that you have taken the necessary precautions to reduce the risk of data breaches and hiring someone who should not be handling personal, confidential, and sensitive data by having your employees undergo BS7858 screening.
    </p>
    <p class="fw-bolder">
        What checks should be conducted?
    </p>
    <p>
        The standard is a comprehensive approach that includes mandatory checks alongside supplementary screening solutions  that provide a rounded assessment of a person’s financial background, criminal history and global footprint. 
    </p>
    <p class="fw-bolder">
        Avvanz’s recommendations are:
    </p>
    <ol>
        <li>
            ID Verification
        </li>
        <li>
            Address Verification (Last 5 Years)
        </li>
        <li>
            Right To Work
        </li>
        <li>
            Criminal Records (Basic or even Enhanced DBS Checks or specific roles)
        </li>
        <li>
            Last 5 (For critical or high-risk roles, you should stretch it to Last 10 Years) Years of Employment Details with coverage on employment gaps
        </li>
        <li>
            Financial Probity Checks that include Credit Check and Bankruptcy Check
        </li>
        <li>
            Conflicting Directorship Check
        </li>
        <li>
            Global Watchlist and Sanctions
        </li>
    </ol>
    <p>
        Certain mandatory documents might be required along with signed GDPR compliant Consent Letters like Utility bills, bank statements, and correspondence including 1 character reference covering a gap in employment. The information gathered as part of the BS7858 is kept for 7 years after the end of employment.
    </p>
    <p class="fw-bolder">
        How can Avvanz help?
    </p>
    <p>
        <a href="{{ route('screen-sub-2') }}" class="link-hover">https://www.avvanz.com/background-checks/gives</a> you more details on UK specific checks.
    </p>
    <p>
        For a fuller scope of the different types of checks covering 150+ countries, you can create a FREE Account at <a href="https://www.avvanz.com/screenglobal" class="link-hover">https://www.avvanz.com/screenglobal</a>. A sample of information on UK
    </p>
    <p>
        Criminal Checks can be found here:
    </p>
    <div class="text-center my-3">
        <img class="img-fluid w-50 h-50 transition-up rounded" src="{{ asset('images/resources/blogItems/blog13-3.png') }}" alt="blog13-3">
    </div>
    <p>
        Should you need any assistance with BS7858:2019, you can drop us an email at
    </p>
    <p class="fw-bolder">
        consult@avvanz.com.
    </p>
    <p>
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
                href="https://www.facebook.com/share_channel/?link=https%3A%2F%2Fwww.avvanz.com%2Fall-you-need-to-know-about-the-british-standard-for-security-screening%2F&app_id=966242223397117&source_surface=external_reshare&display&hashtag"
                target="_blank"
                role="button"
            >
                <i class="fab fa-facebook-f"></i>
            </a>
            <a
                class="btn text-white btn-floating m-1"
                style="background-color: #0082ca;"
                href="https://www.linkedin.com/uas/login?session_redirect=https%3A%2F%2Fwww.linkedin.com%2FshareArticle%3Fmini%3Dtrue%26url%3Dhttps%3A%2F%2Fwww.avvanz.com%2Fall-you-need-to-know-about-the-british-standard-for-security-screening%2F%26title%3DAll%2520you%2520need%2520to%2520know%2520about%2520the%2520British%2520Standard%2520for%2520Security%2520Screening%2520-%2520Avvanz%2520Global%26summary%3D%26source%3Dhttps%3A%2F%2Fwww.avvanz.com%2Fall-you-need-to-know-about-the-british-standard-for-security-screening%2F"
                target="_blank"
                role="button"
            >
                <i class="fab fa-linkedin-in"></i>
            </a>
        </section>
    </div>
    <h1 class="fw-bolder display-5">
        All you need to know about the British Standard for Security Screening
    </h1>
    <div class="hstack gap-3 text-marigold">
        <div class="vr" style="width: 3px;"></div>
        <h1>
            Latest Blog
        </h1>
    </div>
</section>

@endsection