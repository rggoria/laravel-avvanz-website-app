@extends('layouts.master')

@section('title')
Company Due Diligence - Avvanz Global
@endsection

@section('content')

<!--  Navbar Section -->
@include('layouts.navbar')

<!-- Hero Section -->
<div class="bg-image">
    <div class="container padding-vertical">
        <div class="row text-white">
            <div class="col-md-7 offset-auto">
                <h1 class="fw-bolder display-5">
                    Company Due Diligence
                </h1>
                <h1 class="divider-start-25"></h1>
                <p>
                    Request more information
                </p>
            </div>
        </div>
    </div>
</div>

<!-- Fraud Memo Section -->
<section class="bg-mg padding-vertical">
    <div class="container">
        <div class="text-center">
            <h4 class="text-white fw-bolder">
                According to the Association of Certified Fraud Examiners, more than $3.5 Trillion is lost by businesses to frauds.
            </h4>
        </div>
    </div>
</section>

<!-- Due Diligence Section -->
<section class="p-5">
    <div class="container text-center">
        <div class="row gx-2">
            <div class="col-sm-12 col-md-12 col-lg-6">
                <p class="fw-bolder">
                    This calls for a thorough due diligence by Avvanz especially on companies who are going to be your :
                </p>
                <div class="text-start">
                    <ul class="list-unstyled">
                        @foreach ( $dueDiligenceItems as $items )
                            <li class="d-flex align-items-start mb-2">
                                <i class="fas fa-check-circle me-2 fs-6 mt-1 align-self-start"></i>
                                {{ $items }}
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="col-sm-12 col-md-12 col-lg-6">
                <p class="fw-bolder">
                    You can check for (not exhaustive):
                </p>
                <div class="text-start">
                    <ul class="list-unstyled">
                        @foreach ( $notExhaustiveItems as $items )
                            <li class="d-flex align-items-start mb-2">
                                <i class="fas fa-check-circle me-2 fs-6 mt-1 align-self-start"></i>
                                {{ $items }}
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Fraud Memo Section -->
<section class="bg-mg py-5">
    <div class="container">
        <div class="text-center text-white">
            <h1 class="fw-bolder">
                What is Company Due Diligence or CDD?
            </h1>
            <h1 class="divider-center-25"></h1>
            <div class="text-start mt-3">
                <p>
                    Company due diligence or CDD is the process of conducting a comprehensive review and analysis of a company’s operations, financial health, management structure, legal standing, and other important factors.
                </p>
                <p>
                    The purpose of CDD is to gather information and assess the risks and opportunities associated with a potential business transaction, such as a merger, acquisition, partnership, or investment.
                </p>
                <p>
                    The findings from the due diligence process are used to evaluate the target company’s financial and operational performance, identify any potential risks or liabilities, and determine the overall value of the company. This information is critical in making informed business decisions and negotiating the terms of the transaction.
                </p>
                <p>
                    Overall, CDD is an essential part of any business transaction, as it provides the necessary information to assess the risks and opportunities associated with a potential investment or partnership.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Company Due Diligence Section -->
<section class="bg-afw py-5">
    <div class="container">
        <div class="text-center">
            <h1 class="fw-bolder text-dmb">
                Why do Company Due Diligence?
            </h1>
            <h1 class="divider-center-25"></h1>
            <div class="row g-3 text-white py-5">
                @foreach($companyDiligenceItems as $item)
                    <div class="col-sm-12 col-md-12 col-lg-6">
                        <div class="p-3 bg-mg h-100 w-100">
                            <div class="text-start text-center">
                                <h4 class="fw-bold">
                                    {{ $item['title'] }}
                                </h4>
                                <p>
                                    {{ $item['description'] }}
                                </p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <p>
                Overall, CDD is an important part of making informed business decisions and protecting a company’s interests. It helps companies ensure that they are making sound investments, meeting regulatory requirements, and safeguarding their reputation.
            </p>
        </div>
    </div>
</section>

<!-- Avvanz help? Section -->
<section class="py-5">
    <div class="container">
        <div class="text-center">
            <h1 class="fw-bolder text-dmb">
                How can Avvanz help?
            </h1>
            <h1 class="divider-center-25"></h1>
            <p class="my-3">
                Avvanz can conduct CDD by leveraging its expertise in research, analysis, and risk assessment. This is the methodology undertaken by Avvanz in CDD:
            </p>
            <div class="row g-3 py-5">
                @foreach($avvanzHelpItems as $item)
                    <div class="col-sm-12 col-md-12 col-lg-6">
                        <div class="p-3 border-radius-dmb h-100 w-100">
                            <div class="text-start text-center">
                                <h4 class="fw-bold">
                                    {{ $item['title'] }}
                                </h4>
                                <p>
                                    {{ $item['description'] }}
                                </p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <p>
                Overall, Avvanz can leverage our expertise in research and analysis to conduct comprehensive company due diligence, helping clients make informed decisions about potential business opportunities while mitigating risks and ensuring regulatory compliance.
            </p>
            <div class="d-grid gap-2 col-2 mx-auto my-4">
                <a href="{{ route('contact') }}" class="btn btn-marigold-transition">Contact Us</a>
            </div>
        </div>
    </div>
</section>

<!-- Floating Button -->
@include('layouts.floating')

<!-- Footer Section -->
@include('layouts.footer')

@endsection