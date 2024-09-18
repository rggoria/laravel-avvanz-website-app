@extends('layouts.master')

@section('title')
Privacy Policy - Avvanz Global
@endsection

@section('css')
<link rel="preload" href="{{ asset('images/homepage/homepageBg.webp') }}" as="image">
<link rel="stylesheet" href="{{ asset('css/privacy.css') }}">
@endsection

@section('content')

<!--  Navbar Section -->
@include('layouts.navbar')

<!-- Hero Section -->
<section class="bg-image-2">
    <div class="container padding-vertical">
        <div class="row text-white">
            <div class="col-md-7 offset-auto">
                <h1 class="fw-bolder display-5">
                    Privacy Policy
                </h1>
                <h1 class="divider-start-25"></h1>
            </div>
        </div>
    </div>
</section>

<!-- Privacy Policy Section -->
<section class="container margin-vertical text-center">
    <div class="border-dmb section-padding text-start bg-mg text-white">
        <p>
            Avvanz is a global background screening and workforce solutions provider that recognizes the importance of privacy policies in every location where it operates. With the increasing number of data breaches and privacy concerns, Avvanz is committed to safeguarding the personal information of its clients and their employees.
        </p>
        <p>
            To ensure compliance with local laws and regulations, Avvanz has developed a comprehensive set of privacy policies that are tailored to each global location. These policies outline the types of personal information that Avvanz collects, how it is used, and how it is protected.
        </p>
        <p>
            Avvanz’s privacy policies are designed to be transparent and easy to understand. They provide clear explanations of how personal information is collected, used, and shared, as well as the rights of individuals to access, correct, and delete their personal data.
        </p>
        <p>
            In addition to complying with local laws and regulations, Avvanz also adheres to international privacy standards such as the General Data Protection Regulation (GDPR) in the European Union. Avvanz recognizes that data protection is a fundamental right and is committed to upholding the highest standards of privacy and security.
        </p>
        <p>
            Avvanz’s commitment to privacy extends beyond its own operations. The company also works closely with its clients to ensure that their privacy policies are up-to-date and in compliance with local laws and regulations. Avvanz provides guidance on best practices for data protection and offers training programs for employees on how to handle sensitive personal information.
        </p>
        <p>
            Overall, Avvanz recognizes that privacy is a critical issue for businesses operating in today’s global economy. By securing the importance of privacy policies on each global location, Avvanz is helping to protect the personal information of its clients and their employees, while also maintaining compliance with local laws and regulations.
        </p>
    </div>
</section>

<!-- Fraud Memo Section -->
<section class="bg-mg py-5">
    <div class="container">
        <div class="text-center">
            <h1 class="text-white fw-bolder display-5">
                Privacy Policy : Candidates
            </h1>
            <h1 class="divider-center-25"></h1>
        </div>
        <div class="d-grid gap-2 col-4 mx-auto my-4">
            <a href="{{ route('privacy-1') }}" class="btn btn-candidate">
                Philippines
            </a>
        </div>
        <div class="d-grid gap-2 col-4 mx-auto my-4">
            <a href="{{ route('privacy-2') }}" class="btn btn-candidate">
                Australia
            </a>
        </div>
        <div class="d-grid gap-2 col-4 mx-auto my-4">
            <a href="{{ route('privacy-3') }}" class="btn btn-candidate">
                Singapore
            </a>
        </div>
        <div class="d-grid gap-2 col-4 mx-auto my-4">
            <a href="{{ route('privacy-4') }}" class="btn btn-candidate">
                United States of America
            </a>
        </div>
        <div class="d-grid gap-2 col-4 mx-auto my-4">
            <a href="{{ route('privacy-5') }}" class="btn btn-candidate">
                United Kingdom
            </a>
        </div>
    </div>
</section>

<!-- Floating Button -->
@include('layouts.floating')

<!-- Footer Section -->
@include('layouts.footer')

@endsection