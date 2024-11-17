@extends('layouts.master')

@section('title')
Special APAC COVID-19 Webinar Panel Discussion - Avvanz Global
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
                    <i class="fa fa-calendar"></i> July 25, 2020
                </p>
            </div>
        </div>
    </div>
</section>

<section class="container margin-vertical">
    <h1 class="display-5 fw-bolder">
        Special APAC COVID-19 Webinar Panel Discussion
    </h1>
    <div class="text-center my-3">
        <img class="img-fluid w-50 h-50 transition-up rounded" src="{{ asset('images/resources/webinarItems/webinar10-1.png') }}" alt="webinar10-1">
    </div> 
    <p>
        The webinar kicks off with CV Check’s CEO, Rod Sherwood, sharing some insights on the impact of the pandemic on the background screening market in New Zealand and Australia and follow with a panel of screening experts covering a series of questions relevant to PBSA members during this time.
    </p>
    <p>
        Moderator: Summa McCosker, from Peoplecheck, a HireRight company
    </p>
    <p>
        Presenters: <span class="fw-bolder">Kannan Chettiar, Avvanz, Singapore</span>; Chetan Desai, SecureSearch, India; Rod Sherwood, CVCheck, Australia; Milo Zhou, Sterling Risq, China; Shania Shoukat, ITGS Group, Gulf region.
    </p>
    <p>
        Kannan Chettiar speaks about benefits of technology amidst Covid-19 as well as the impact of disruptive technologies on background screening industry. 
    </p>
    <p>
        Questions discussed:
    </p>
    <ol>
        <li>
            What are some of the key issues that have arisen in APAC countries resulting from COVID-19?
        </li>
        <li>
            What are some of the impacts on economies and the screening markets in general?
        </li>
        <li>
            How have, and are, background screening companies in the various regions dealing with these issues and how do you see the screening industry adapting to keep themselves efficient and relevant amidst continued uncertainties?
        </li>
        <li>
            How do you advise clients on whether to run a background check during a pandemic environment, especially when cost cutting, business survival is top of mind?
        </li>
        <li>
            What are some of the trends you have observed amongst our clients and candidates now and as we return to our new “normal”?
        </li>
        <li>
            How are screening companies in locations where the technology infrastructure is not as stable as others, helping their candidates?
        </li>
        <li>
            How has the pandemic effected the ability to obtain verifications and public record checks in the various regions?
        </li>
        <li>
            Have there been closures and delays and how did you communicate these to your customers?  
        </li>
        <li>
            How do you think technology has and continues to help companies amidst COVID-19 and how can that be stretched to background screening companies?
        </li>
        <li>
            What are some of the key security considerations with the remote workforce considering the sensitive data we handle?
        </li>
        <li>
            What kind of emerging technologies we should leverage now and moving forward? 
        </li>
        <li>
            How do you see the background screening environment in your country evolving in the face of a possible prolonged impact?
        </li>
    </ol>
    <div class="text-center my-3">
        <img class="img-fluid w-50 h-50 transition-up rounded" src="{{ asset('images/resources/webinarItems/webinar10-2.png') }}" alt="webinar10-2">
    </div> 
    <p>
        To access this Webinar, please log into PBSA and access Webinar Library as below:
    </p>
    <div class="text-center my-3">
        <img class="img-fluid w-50 h-50 transition-up rounded" src="{{ asset('images/resources/webinarItems/webinar10-3.png') }}" alt="webinar10-3">
    </div> 
</section>

@endsection