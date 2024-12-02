@extends('UATWEB.layouts.main')

@section('title')
Quickiebinar Part 2: Leadership – with Ariya Chittasy - Avvanz Global
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
                    Conference Details
                </h1>
                <h1 class="divider-start-25"></h1>
                <p>
                    <i class="fa fa-calendar"></i> June 6, 2023
                </p>
            </div>
        </div>
    </div>
</section>

<section class="container margin-vertical">
    <h1 class="display-5 fw-bolder">
        Quickiebinar Part 2: Leadership – with Ariya Chittasy
    </h1>
    <div class="text-center my-3">
        <img class="img-fluid w-50 h-50 transition-up rounded" src="{{ asset('images/resources/webinarItems/webinar28-1.png') }}" alt="webinar28-1">
    </div>
    <p>
        In a recent webinar, Ariya and Kannan addressed the challenges that tech companies face when it comes to fundraising, and offered insights on how to navigate through them.
    </p>
    <p>
        The webinar provided valuable insights for tech companies navigating the complex world of fundraising. By understanding the challenges they face and staying informed about the latest trends and best practices, companies can increase their chances of securing funding and achieving their goals.
    </p>
    <p>
        Watch the webinar <a href="https://youtu.be/B3ejjezuYfg" class="link-hover">here</a>.
    </p>
    <p class="fw-bolder">
        Ariya Chittasy
    </p>
    <p>
        Ariya is at work to empower the future of entrepreneurship. Before becoming a Director at Engenesis Ventures, he built 4 companies over 8 years, including one awarded Fastest Growing Company Asia-Pacific (Business Excellence Awards 2014) and another growing into a 55+ person company in under 2 years. He thrives on materialising ideas into real businesses. He works with visionaries and innovators to create tech-based companies that serve the world. Through state-of-the-art technology builds, access to investor networks and leading growth strategies, he works to bring new technology ventures to the market faster, leaner and with less risk.
    </p>
</section>

@endsection