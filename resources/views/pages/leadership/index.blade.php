@extends('layouts.master')

@section('title')
Leadership Breakthrough Summit
@endsection

@section('css')
<link rel="preload" href="{{ asset('images/homepage/homepageBg.webp') }}" as="image">
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
                    alt="Placeholder Image"
                    class="img-fluid transition-up"
                    style="width: 300px; height: 300px;"
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

<section>
    REDEFINE
    LEADERSHIP
    UNLOCK YOUR TRUE BUSINESS POTENTIAL.
</section>

<hr>

<section>
A transformative 3-day retreat designed to equip leaders with the tools and
insights to accelerate and future proof your business.
REDEFINE
LEADERSHIP
UNLOCK YOUR TRUE BUSINESS POTENTIAL.
Exclusively Designed for SME Owners and Leaders
SECURE YOUR
SPOT NOW! ( Limited to 20 Participants )
(Exclusive Early Bird Discount of SGD 300 till November 30th)
</section>

<hr>

<section>
    Why Choose the Leadership Breakthrough Summit?
The Experience
3D2N Retreat in Luxury at Bintan
Experience rejuvenation at a serene venue with guided workshops, real business practitioner - led sessions, and personalized coaching.
Exclusive Strategic Tools
Leverage the 5Ps Framework (People, Process, Profit, Product, Partners) to analyse and transform your business effectively.
High-Impact Networking
Connect with SME owners, corporate leaders, and industry experts to build lasting professional relationships.
6 Months Post-Summit Support
Connect with SME owners, corporate leaders, and industry experts to build lasting professional relationships.
Download the Full Itinerary Now
</section>

<hr>

<section>
What You Will Achieve?
"From Vision to Victory: Accelerate and Future proof your Business."
Outcomes you can count on :
From Vision to Victory:
Accelerate and Future proof your Business.
Identify market challenges with guided assessments.
Develop actionable plans to safeguard profitability.
Apply frameworks to expand customer reach and revenue streams.
Leverage innovative strategies to amplify results.
Build sustainable strategies for long-term success.
Integrate new technologies and processes to stay ahead.
Sign Up Today and Save 
</section>

<section>
TAILORED FOR LEADERS LIKE YOU!
</section>

<hr>

<section>
Who Should Attend?
This summit is ideal for:
SME Owners navigating growth challenges in competitive markets.
Corporate Leaders aiming to foster innovation and team excellence.
Customized for Every Industry
Whether you're in technology, retail, manufacturing, or beyond, our frameworks adapt to your specific business context.
What Past Participants Say:
"The 5Ps framework completely transformed how I view my business. This isn’t just theory; it’s practical and impactful." – A 2023 Participant

<table>
    <th>
        <tr>
            <td>Ready to Transform Your Leadership?</td>
        </tr>
    </th>
    <tbody>
        <tr>
            <td colspan="3">
                Take Action – Your Journey Starts Here
            </td>
        </tr>
        <tr>
            <td>
                LOCATION
            </td>
            <td>
                DATES
            </td>
            <td>
                INVESTMENT
            </td>
        </tr>
        <tr>
            <td>
                BINTAN
            </td>
            <td>
                19th to 21st Feb 2025 
            </td>
            <td>
                SGD 6,888
                <br>
                (Early Bird Offer: SGD 6,588 until Nov 30th)
            </td>
        </tr>
    </tbody>
</table>
Join an exclusive session led by a panel of 7 global experts, including renowned leadership coaches, an AI specialist, the former MD of Thomas Cook, and a global marketing leader, all coming together to share their insights and expertise.
</section>

<hr>

<section>
How to Enroll:
Click “Sign Up Now” below.
Complete the secure registration form.
Receive your pre-summit materials and get ready for transformation!
SIGN UP NOW!
( Limited to 20 Participants )
</section>

@endsection