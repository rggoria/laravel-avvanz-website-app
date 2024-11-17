@extends('layouts.master')

@section('title')
Avvanz Announces Partnership With Dauntless Technology Solutions - Avvanz Global
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
                    <i class="fa fa-calendar"></i> February 29, 2024
                </p>
            </div>
        </div>
    </div>
</section>

<section class="container margin-vertical">
    <h1 class="display-5 fw-bolder">
        Avvanz Announces Partnership With Dauntless Technology Solutions
    </h1>
    <div class="text-center my-3">
        <img class="img-fluid w-50 h-50 transition-up rounded" src="{{ asset('images/resources/pressItems/press27-1.jpg') }}" alt="press27-1">
    </div> 
    <p>
        Background screening company, Avvanz, has announced its partnership with Dauntless Technology Solutions (DTS), headquartered in Bahrain and servicing companies across the Middle East.
    </p>
    <p>
        Given the rising discrepancies in CVs and resumes in the form of inflated employment credentials, fake certificates (including from fake degree/diploma mills), undeclared criminal/financial offences, and a disturbing social media footprint, it is critical to ensure all companies’ workforce and/or contractors have a high level of integrity and are safe to hire and onboard. Now that candidates have studied, worked and lived in several countries, background-checking them has become cumbersome and challenging.
    </p>
    <div class="text-center my-3">
        <img class="img-fluid w-50 h-50 transition-up rounded" src="{{ asset('images/resources/pressItems/press27-2.jpg') }}" alt="press27-2">
    </div>
    <p>
        Avvanz’s HRTech platform, <a href="https://www.avvanz.com/screenglobal/" class="link-hover">ScreenGlobal</a>, enables companies to easily order more than 20 types of background checks covering 150+ countries while being compliant with data privacy acts and other regulatory requirements. They also offer due diligence at a corporate level to ensure that the companies that are being chosen as suppliers and even acquisition targets can be screened quickly and efficiently with their first-ever eCommerce store styled platform, <a href="https://cdd-global.avvanz.com/login" class="link-hover">CDDGlobal</a>.
    </p>
    <p>
        Avvanz is headquartered in Singapore and serves more than 4000 companies globally through its offices in Singapore, the USA, the UK, Australia, the Philippines and soon in India. To learn more about these innovative solutions, please email DTS at <a href="mailto:info@dauntlesstech.me" class="link-hover">info@dauntlesstech.me</a>.
    </p>
</section>

@endsection