@extends('layouts.master')

@section('title')
Cookie policy - Avvanz Global
@endsection

@section('content')

<!--  Navbar Section -->
@include('layouts.navbar')

<!-- Hero Section -->
<section class="bg-image">
    <div class="container">
        <div class="row text-white">
            <div class="col-md-7 offset-auto">
                <h1 class="fw-bolder display-5">
                    Cookie policy
                </h1>
                <h1 class="divider-start-25"></h1>
            </div>
        </div>
    </div>
</section>

<!-- Privacy Policy Section -->
<section class="container my-5 text-center">
    <div class="border-dmb p-5 text-start">
        <p class="fw-bolder">
            Last Updated: September 27, 2023
        </p>
        <ol>
            <li>
                <span class="fw-bolder">
                    Introduction
                </span>
                <p class="lead">
                    Welcome to www.avvanz.com (“we,” “us,” or “our”). This Cookie Policy explains how we use cookies and similar tracking technologies on our website. By using our website, you consent to the use of cookies as described in this policy.
                </p>
            </li>
            <li>
                <span class="fw-bolder">
                    What Are Cookies?
                </span>
                <p class="lead">
                    Cookies are small text files that are stored on your device when you visit a website. They are widely used to make websites work more efficiently and to provide information to website owners.
                </p>
            </li>
            <li>
                <span class="fw-bolder">
                    Types of Cookies We Use
                </span>
                <p class="lead mb-0">
                    We use the following types of cookies on our website:
                </p>
                <ul>
                    <li>
                        <b>Essential Cookies</b>: These cookies are necessary for the website to function properly. They enable core functionality such as security, network management, and accessibility. You cannot opt out of these cookies.
                    </li>
                    <li>
                        <b>Performance Cookies</b>: These cookies collect information about how visitors use our website, such as which pages they visit most often and any error messages they encounter. This information helps us improve the website’s performance.
                    </li>
                    <li>
                        <b>Functionality Cookies</b>: These cookies allow the website to remember choices you make (such as your language preference) and provide enhanced features. They may also be used to provide you with personalized content.
                    </li>
                    <li>
                        <b>Targeting/Advertising Cookies</b>: These cookies are used to deliver advertisements that are more relevant to you and your interests. They may also be used to limit the number of times you see an advertisement and measure the effectiveness of advertising campaigns.
                    </li>
                </ul>
            </li>
            <li>
                <span class="fw-bolder">
                    How We Use Cookies
                </span>
                <p class="lead mb-0">
                    We use cookies for the following purposes:
                </p>
                <ul>
                    <li>
                        To ensure the proper functioning of our website.
                    </li>
                    <li>
                        To analyze and improve the performance of our website.
                    </li>
                    <li>
                        To personalize your experience on our website.
                    </li>
                    <li>
                        To deliver targeted advertisements.
                    </li>
                </ul>
            </li>
            
            <li>
                <span class="fw-bolder">
                    Third-Party Cookies
                </span>
            </li>
            <p class="lead">
                We may also allow third-party service providers to use cookies on our website to collect information about your online activities over time and across different websites. These providers may include analytics and advertising companies. Please refer to the respective privacy policies of these third parties for more information about their practices.
            </p>
            <li>
                <span class="fw-bolder">
                    Managing Cookies
                </span>
            </li>
            <p class="lead">
                You have the option to manage your cookie preferences. You can typically do this through your web browser settings. Please note that disabling certain cookies may impact the functionality and features of our website.
            </p>
            <li>
                <span class="fw-bolder">
                    Changes to This Policy
                </span>
            </li>
            <p class="lead">
                We may update this Cookie Policy from time to time to reflect changes in our practices or for other operational, legal, or regulatory reasons. We encourage you to revisit this policy regularly to stay informed about our use of cookies.
            </p>
            <li>
                <span class="fw-bolder">
                    Contact Us
                </span>
            </li>
            <p class="fw-bolder">
                <span class="lead">
                    If you have any questions or concerns about this Cookie Policy or our use of cookies, please contact us at
                </span>
                consult@avvanz.com<span class="lead">.</span>
            </p>
        </ol>
    </div>
</section>

<!-- Floating Button -->
@include('layouts.floating')

<!-- Footer Section -->
@include('layouts.footer')

@endsection