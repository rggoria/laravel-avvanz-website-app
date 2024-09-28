@extends('layouts.master')

@section('title')
Webinar: Know Who You Hire - Avvanz Global
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
                    <i class="fa fa-calendar"></i> May 11, 2020
                </p>
            </div>
        </div>
    </div>
</section>

<section class="container margin-vertical">
    <h1 class="display-5 fw-bolder">
        Webinar: Know Who You Hire
    </h1>
    <div class="text-center">
        <img class="img-fluid w-50 h-50" src="{{ asset('images/resources/webinarItems/webinar7-1.jpg') }}" alt="webinar7-1">
    </div> 
    <p>
        This Webinar discusses strategies and techniques to help HR mitigate risks in making wrongful hires. It covers the following commonly asked questions:
    </p>
    <ul>
        <li>
            How can HR go about conducting background checks on candidates and existing employees?
        </li>
        <li>
            How can the some of the difficult-to-do checks like the following be done – criminal background checks in Singapore, Hong Kong, European countries, Thailand, Vietnam and bankruptcy checks in Singapore and so on?
        </li>
        <li>
            How do life insurance companies (and other organizations) check medical background? The video discusses Drug Testing checks as well. 
        </li>
        <li>
            How are education background checks done? <a href="https://www.avvanz.compress-release/can-i-fake-it-till-i-make-it/" class="link-hover">Click to watch this documentary</a> show where Avvanz is featured and Avvanz shows how the problem of certificate faking can be managed. 
        </li>
        <li>
            How a candidate will know if his/her background screening is done?
        </li>
        <li>
            How technology can be used to manage this otherwise painful and cumbersome background screening process?
        </li>
    </ul>
    <a href="https://www.youtube.com/watch?v=kkh5h7ATWw0" class="link-hover">
        Click to watch the Webinar.
    </a>
    <p>
        Drop us a note at <a href="mailto:consult@avvanz.com" class="link-hover">consult@avvanz.com</a> for any form of support you need. 
    </p>
</section>

@endsection