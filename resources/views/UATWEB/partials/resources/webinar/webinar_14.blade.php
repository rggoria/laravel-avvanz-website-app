@extends('UATWEB.layouts.main')

@section('title')
Joint Webinar: The 4th Industrial Revolution – How To Adapt Your Business To The Inevitable Digital Transformation - Avvanz Global
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
                    <i class="fa fa-calendar"></i> November 11, 2020
                </p>
            </div>
        </div>
    </div>
</section>

<section class="container margin-vertical">
    <h1 class="display-5 fw-bolder">
        Joint Webinar: The 4th Industrial Revolution – How To Adapt Your Business To The Inevitable Digital Transformation
    </h1>
    <div class="text-center my-3">
        <img class="img-fluid w-50 h-50 transition-up rounded" src="{{ asset('images/resources/webinarItems/webinar14-1.png') }}" alt="webinar14-1">
    </div>
    <p>
        Avvanz, in partnership with Justlogin, presented to close to 150 attendees on “How to Adapt your business to the Inevitable Digital Transformation”. 
    </p>
    <p>
        Digital Transformation is a often misunderstood term. It is a journey and not an end point. This Webinar clarifies the misconceptions around terminologies, walks you through the 9 dimensions including Blockchain, RPA, Big Data and AI, elaborates on critical skills needed to thrive in the digital economy and shows how you can utilise a 8-Steps Digital Transformation model to expedite your journey. 
    </p>
    <a href="https://offer.justlogin.com/digital-transformation-webinar-recording?utm_source=ActiveCampaign&utm_medium=email&utm_content=Webinar+On-Demand:+The+4th+Industrial+Revolution+-+How+to+Adapt+your+Business+to+the+Inevitable+Digital+Transformation&utm_campaign=AC464+04-11-2020+Avvanz+Webinar+Follow+Up+(Attended)" class="link-hover">Click here to watch the webinar.</a>
</section>

@endsection