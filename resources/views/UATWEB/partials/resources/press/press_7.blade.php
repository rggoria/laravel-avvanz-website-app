@extends('UATWEB.layouts.main')

@section('title')
Avvanz Becomes FinTech Certified - Avvanz Global
@endsection

@section('css')
<link rel="preload" href="{{ asset('images/homepage/homepageBg.webp') }}" as="image">
@endsection()

@section('content')

<section class="bg-image-2">
    <div class="container padding-vertical">
        <div class="row text-white">
            <div class="col-md-7 offset-auto">
                <h1 class="fw-bolder display-5">
                    Press and Media
                </h1>
                <h1 class="divider-start-25"></h1>
                <p>
                    <i class="fa fa-calendar"></i> May 1, 2020
                </p>
            </div>
        </div>
    </div>
</section>

<section class="container margin-vertical">
    <h1 class="display-5 fw-bolder">
        Avvanz Becomes FinTech Certified
    </h1>
    <p>
        Avvanz, an award-winning global company, offering Background Checks, Company Due Diligence and EduTech solutions, is now <span class="fw-bolder">FinTech certified by Singapore FinTech Association</span>. Avvanz currently offers <a href="{{ route('screen-sub-5') }}" class="link-hover">KYC/AML Compliance Checks</a> to companies who need quick responses to below checks:
    </p>
    <ul>
        <li>
            Consolidated <span class="fw-bolder">AML</span> data sets with <span class="fw-bolder">Continuous Monitoring</span> capabilities. AML data can be retrieved in minutes. This dynamic global database covers Global Watchlist and Sanctions, Adverse Media, PEPs, Criminal Enforcements, Financial Compliance and Healthcare Sanctions.
        </li>
        <li>
            <span class="fw-bolder">Identity Verification (KYC)</span> – Passports and IDs from more than 150 countries can be verified using Machine Language technologies.
        </li>
        <li>
            Seamless integration via <span class="fw-bolder">RESTful APIs</span> to 3rd party platforms and client portals with customizable UX/UI. 
        </li>
        <li>
            Additional <a href="{{ route('screen-sub-2') }}" class="link-hover">Background Checks</a> to ensure your organization meets <span class="fw-bolder">compliance obligations</span> in whichever part of the globe your business sits in. 
        </li>
    </ul>
    <p>
        Kannan Chettiar, CEO of Avvanz, in addition to articulating the abovementioned features, also added that companies can now submit grants to benefit from these solutions. MAS Digital Acceleration Grant or DAG for short will benefit financial institutions and FinTech firms when they adopt Avvanz’s solutions to improve productivity, strengthen operational resilience, manage risks better and serve customers better. 
    </p>
    <p>
        For more information, drop a note to <a href="mailto:consult@avvanz.com" class="link-hover">consult@avvanz.com</a>.
    </p>
    <p>
        Source; SFA Directory:
    </p>
    <a href="https://directory.singaporefintech.org/directory/listing/background-checks-and-due-diligence-within-a-minute" class="link-hover">https://directory.singaporefintech.org/directory/listing/background-checks-and-due-diligence-within-a-minute</a>
</section>

@endsection