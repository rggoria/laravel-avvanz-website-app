@extends('UATWEB.layouts.main')

@section('title')
Avvanz – Best Background Screening Provider - Avvanz Global
@endsection

@section('content')

@section('css')
<link rel="preload" href="{{ asset('images/resources/background/itemsBg.webp') }}" as="image">
<link rel="stylesheet" href="{{ asset('css/about.css') }}">

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
@endsection()

<section class="bg-image-2">
    <div class="container padding-vertical">
        <div class="row text-white">
            <div class="col-md-7 offset-auto">
                <h1 class="fw-bolder display-5">
                    Press and Media
                </h1>
                <h1 class="divider-start-25"></h1>
                <p>
                    <i class="fa fa-calendar"></i> October 12, 2017
                </p>
            </div>
        </div>
    </div>
</section>

<section class="container margin-vertical">
    <h1 class="text-dmb display-5 fw-bolder">
        Avvanz – Best Background Screening Provider
    </h1>
    <p>
        HumanResources Magazine is a leading magazine for HR community in Asia with a circulation of more than 30,000. It is the most-read publication in Malaysia, Singapore and Hong Kong. HumanResources hosts the prestigious HR Vendors of the Year awards annually with various categories covering Talent Acquisition, Background Screening, Training and Development, Predictive Assessments and Compensation & Benefits.  
    </p>
    <p>
        One of the HR Vendors of the Year 2017 finalists under the <span class="fw-bolder">Best Background Screening Provider</span> category is <a href="{{ route('home') }}" class="link-hover">Avvanz</a>, a Technology based Employee Lifecycle Management company. Avvanz has been nominated along with other global veterans. To this, Kannan Chettiar, Managing Director of Avvanz, ecstatically remarked, “This is an enormous endorsement for Avvanz as we are relatively a younger player compared to the other 4 players. I believe this has been made possible due to Avvanz’s unique Technology based Background Screening Platform whereby our clients have been able to order background checks in a minute within an extremely fast turnaround time. In a short space of time, we have onboarded a large base of clients across multiple market segments.” He added that this credit goes to Avvanz’s clients who have nominated Avvanz for this category.
    </p>
    <p>
        Avvanz has proved that they can disrupt the traditionally long order-to-report cycle via a completely seamless and easy to use platform. Kannan likens Avvanz’s ScreenGlobal Platform experience to ordering an item off Amazon or Alibaba. Avvanz’s other unique differentiators include faster turnaround-time, stringent information security framework, privacy data policy compliant framework and a comprehensive indemnity insurance cover.
    </p>
    <p class="fw-bolder">
        What is Background Checks and Why is it important?
    </p>
    <p>
        Studies have shown that more than 30% of resumes have discrepancies, underpinning the need for a completely thorough <span class="fw-bolder">Background Screening and Due Diligence</span> process to sieve out the wrong hires who can be detrimental to your organization. Character reference checks are not sufficient as they are not neutral and can be biased. Candidates and employees have to be calibrated to the highest level of “integrity” and “security” to avoid reduced productivity, fraud related costs, reputational damages and even a decline in shareholder earnings.
    </p>
    <p>
        Background checks can be perceived to be complex. Avvanz provides innovative background check solutions for both pre-employment and in-employment screening. As critical as it is to ensure organizations hire “safe” and “trustworthy” talents, it’s equally important that existing talents are continuously checked as well to protect organization’s assets. Background checks and verifications include Adverse Media, Global Watchlist and Sanctions, Social Media Screening, Sex Offenders Registry, Criminal, Civil Litigation, Conflicting Directorships, Bankruptcy, Financial Regulatory, Credit, Identity, Address, Education, Professional Qualifications, Employment Details and Employment Performance. To understand more about the checks, 
        <a href="{{ route('screen-sub-2') }}" class="link-hover">please click here</a>.
    </p>
    <p>
        To view HumanResources list of Finalists, please click on 
        <a href="https://www.humanresourcesonline.net/voty-awards/2017/sg/finalists/" class="link-hover">https://www.humanresourcesonline.net/voty-awards/2017/sg/finalists/</a>
        or
        <a href="https://www.humanresourcesonline.net/events/hr-vendors-of-the-year-awards-singapore-finalists-announced?utm_campaign=20171014_hrsaturday&utm_medium=email&utm_source=Malaysia&utm_content=mostp" class="link-hover">here</a>. 
    </p>
</section>

@endsection