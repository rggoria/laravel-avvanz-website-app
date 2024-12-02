@extends('UATWEB.layouts.main')

@section('title')
AVVANZ is awarded as HR Technology Company of the Year 2021 - Avvanz Global
@endsection

@section('css')
<link rel="preload" href="{{ asset('images/homepage/homepageBg.webp') }}" as="image">
@endsection()

@section('content')

<section class="bg-image-2">
    <div class="container padding-vertical text-white">
        <h1 class="fw-bolder display-5">            
            AVVANZ is awarded as HR Technology Company of the Year 2021
        </h1>
        <p>
            <i class="fa fa-calendar"></i> July 12, 2021
        </p>
    </div>
</section>

<section class="container margin-vertical">
    <div class="text-center my-3">
        <img class="img-fluid w-50 h-50 transition-up rounded" src="{{ asset('images/resources/blogItems/blog7-1.jpg') }}" alt="blog7-1">
    </div> 
    <p>
        Closing off the 2021 <span class="fw-bolder">South-East Asia Business awards, Apac-Insider</span> gives opportunities to businesses from different sectors to showcase unparalleled expertise, from manufacturing and exporting to technology and agriculture.
    </p>
    <p>
        Undergoing deliberate and careful nominations, AVVANZ takes pride and honor to be awarded as this year’s <span class="fw-bolder">(2021) HR Technology Company of the Year – Singapore</span>.
    </p>
    <p>
        Despite the challenges from the previous year (2020), South-East Asia remains an international player for global trade, business development and innovation. Exhibiting business excellence for the past year, South-East Asia Business Awards 2021 supplements our mission to help organizations attain the human advantage in order to achieve the highest standards of excellence. 
    </p>
    <p>
        As we slowly rise and thrive for our full recovery, innovation and digital transformation is a progress that everyone should take part of. And here at Avvanz, we leverage Technologies to enhance your human assets. 
    </p>
    <div class="d-flex justify-content-center">
        <section class="mb-4 d-flex">
            <p class="fw-bolder m-1 align-content-center">
                Share this story:
            </p>
            <a
                class="btn text-white btn-floating m-1"
                style="background-color: #3b5998;"
                href="https://www.facebook.com/share_channel/?link=https%3A%2F%2Fwww.avvanz.com%2Favvanz-is-awarded-as-hr-technology-company-of-the-year-2021%2F&app_id=966242223397117&source_surface=external_reshare&display&hashtag"
                target="_blank"
                role="button"
            >
                <i class="fab fa-facebook-f"></i>
            </a>
            <a
                class="btn text-white btn-floating m-1"
                style="background-color: #0082ca;"
                href="https://www.linkedin.com/uas/login?session_redirect=https%3A%2F%2Fwww.linkedin.com%2FshareArticle%3Fmini%3Dtrue%26url%3Dhttps%3A%2F%2Fwww.avvanz.com%2Favvanz-is-awarded-as-hr-technology-company-of-the-year-2021%2F%26title%3DAVVANZ%2520is%2520awarded%2520as%2520HR%2520Technology%2520Company%2520of%2520the%2520Year%25202021%2520-%2520Avvanz%2520Global%26summary%3D%26source%3Dhttps%3A%2F%2Fwww.avvanz.com%2Favvanz-is-awarded-as-hr-technology-company-of-the-year-2021%2F"
                target="_blank"
                role="button"
            >
                <i class="fab fa-linkedin-in"></i>
            </a>
        </section>
    </div>
    <div class="hstack gap-3 text-marigold">
        <div class="vr" style="width: 3px;"></div>
        <h1>
            Latest Blog
        </h1>
    </div>
</section>

@endsection