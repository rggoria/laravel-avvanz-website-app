@extends('UATWEB.layouts.main')

@section('title')
1st ever “Amazonified” Company Due Diligence (CDD) Platform - Avvanz Global
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
            1st ever “Amazonified” Company Due Diligence (CDD) Platform
        </h1>
        <p>
            <i class="fa fa-calendar"></i> May 31, 2023
        </p>
    </div>
</section>

<section class="container margin-vertical">
    <div class="text-center my-3">
        <img class="img-fluid w-50 h-50 transition-up rounded" src="{{ asset('images/resources/blogItems/blog19-1.webp') }}" alt="blog19-1">
    </div> 
    <p>
        We from Avvanz are extremely excited to announce the launch of our new product  <a href="https://cdd-global.avvanz.com/login" class="link-hover">CDDGlobal</a> – Your Global solution for Company Due Diligence.
    </p>
    <p>
        Avvanz, as you know, already offers Individual level Background Checks (be in Candidate or Employee or Contractor) through our multi-award winning <a href="https://www.avvanz.com/screenglobal/" class="link-hover">ScreenGlobal</a> platform that enables you to easily order more than 20 types of background checks across 150+ countries. 
    </p>
    <p>
        In today’s fast-paced business world, it is crucial for organizations to conduct thorough due diligence before entering into any business relationship. Conducting Due Diligence on other companies has not been an easy task especially if the companies have multi-country background and complex relationships. There is no one-size-fits-all approach to Company Due Diligence. Understanding what kind of due diligence to do, what parameters to check for and how to assess them can be onerous and cumbersome. 
    </p>
    <p>
        Hence the idea behind CDDGlobal – A Company Due Diligence Platform that offers a suite of configurable options to help you mitigate risks and make informed decisions while conducting business with other entities. CDDGlobal makes it really easy to browse, select and order the right CDD packages and the target companies could be in any part of the world – just like buying products on Amazon (or any ecommerce site). Our CDD solutions will help to perform background checks, assess potential risks and compliance issues, and verify the authenticity of the companies you are dealing with.
    </p>
    <p>
        One of the key features of CDDGlobal is its ability to provide real-time information on any company, including its financial standing, legal history, and reputation in the market. This information is critical for companies to assess the risks associated with doing business with a particular entity.
    </p>
    <p class="fw-bolder">
        In CDDGlobal, You can check for (not exhaustive):
    </p>
    <ul>
        <li>
            Potential business partners
        </li>
        <li>
            Potential Joint-Venture, Merger or Acquisition companies
        </li>
        <li>
            Vendors or Sub-Contractors
        </li>
        <li>
            Investment targets – Pre-investment and Post-investment due diligence
        </li>
        <li>
            Investors or Funding companies
        </li>
        <li>
            Customers (KYC – Know Your Customer)
        </li>
        <li>
            Channel partners including distributors, resellers and sales agents
        </li>
        <li>
            Avvanz is an ISO 27001 and 27701 Certified company and we understand the importance of data privacy and security. Therefore, CDDGlobal is designed to comply with all relevant data protection regulations, ensuring that sensitive information is protected at all times.
        </li>
    </ul>
    <div class="text-center my-3">
        <img class="img-fluid w-50 h-50 transition-up rounded" src="{{ asset('images/resources/blogItems/blog19-2.png') }}" alt="blog19-2">
    </div> 
    <p>
        The launch of CDD comes at a time when businesses are facing increasing pressure to conduct due diligence on their partners and suppliers. With the rise of globalization and the increasing complexity of business relationships, it has become more important than ever for companies to have a reliable way to evaluate their counterparts. We are confident that CDDGlobal  will be a valuable asset for any company looking to protect its interests and reputation in the market.
    </p>
    <p>
        For a non-obligatory chat or a demo, drop us a note at <a href="mailto:consult@avvanz.com" class="link-hover">consult@avvanz.com</a>.
    </p>
    <div class="d-flex justify-content-center">
        <section class="mb-4 d-flex">
            <p class="fw-bolder m-1 align-content-center">
                Share this story:
            </p>
            <a
                class="btn text-white btn-floating m-1"
                style="background-color: #3b5998;"
                href="https://www.facebook.com/share_channel/?link=https%3A%2F%2Fwww.avvanz.com%2F1st-ever-amazonified-company-due-diligence-cdd-platform%2F&app_id=966242223397117&source_surface=external_reshare&display&hashtag"
                target="_blank"
                role="button"
            >
                <i class="fab fa-facebook-f"></i>
            </a>
            <a
                class="btn text-white btn-floating m-1"
                style="background-color: #0082ca;"
                href="https://www.linkedin.com/uas/login?session_redirect=https%3A%2F%2Fwww.linkedin.com%2FshareArticle%3Fmini%3Dtrue%26url%3Dhttps%3A%2F%2Fwww.avvanz.com%2F1st-ever-amazonified-company-due-diligence-cdd-platform%2F%26title%3D1st%2520ever%2520%25E2%2580%259CAmazonified%25E2%2580%259D%2520Company%2520Due%2520Diligence%2520%2528CDD%2529%2520Platform%2520-%2520Avvanz%2520Global%26summary%3D%26source%3Dhttps%3A%2F%2Fwww.avvanz.com%2F1st-ever-amazonified-company-due-diligence-cdd-platform%2F"
                target="_blank"
                role="button"
            >
                <i class="fab fa-linkedin-in"></i>
            </a>
        </section>
    </div>
    <h1 class="fw-bolder display-5">
        1st ever “Amazonified” Company Due Diligence (CDD) Platform
    </h1>
    <div class="hstack gap-3 text-marigold">
        <div class="vr" style="width: 3px;"></div>
        <h1>
            Latest Blog
        </h1>
    </div>
</section>

@endsection