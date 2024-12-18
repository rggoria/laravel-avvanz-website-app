@extends('UATWEB.layouts.main')

@section('title')
Avvanz Partners ACCA Singapore - Avvanz Global
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
    <div class="container padding-vertical">
        <div class="row text-white">
            <div class="col-md-7 offset-auto">
                <h1 class="fw-bolder display-5">
                    Press and Media
                </h1>
                <h1 class="divider-start-25"></h1>
                <p>
                    <i class="fa fa-calendar"></i> March 22, 2021
                </p>
            </div>
        </div>
    </div>
</section>

<section class="container margin-vertical">
    <h1 class="display-5 fw-bolder">
        Avvanz Partners ACCA Singapore
    </h1>
    <p>
        Avvanz, an award-winning HRTech and FinTech company that offers Tech-enabled individual background checks, Company Due Diligence, KYC/AML, New Hire Onboarding and Government-funded Digital Transformation related Training and Development solutions has partnered with Association of Chartered Certified Accountants (ACCA) Singapore offering Digital Transformation courses to their membership base of over 7,800 members.
    </p>
    <p>
        Avvanz Managing Director, Kannan Chettiar explained that the Digital Transformation course would be beneficial to the accounting and finance community. He commented, “We are excited about this partnership. We will ensure that the workshops will allow a deeper understanding of Digital Transformation and complex technologies and allow the participants to apply their knowledge to their workplace as they embark on digital transformation journey for themselves and their companies.”
    </p>
    <p>
        Avvanz’s KYC/AML services, Background Checks and Company Due Diligence would be of high value to the ACCA members as well should they wish to run due diligence checks on companies they are auditing. 
    </p>
    <p>
        This win-win partnership will definitely benefit both Avvanz and ACCA.
    </p>
</section>

@endsection