@extends('UATWEB.layouts.main')

@section('title')
Education Industry: Overcoming Leadership And HR Challenges - Avvanz Global
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
                    Conference Details
                </h1>
                <h1 class="divider-start-25"></h1>
                <p>
                    <i class="fa fa-calendar"></i> January 6, 2022
                </p>
            </div>
        </div>
    </div>
</section>

<section class="container margin-vertical">
    <h1 class="display-5 fw-bolder">
        Education Industry: Overcoming Leadership And HR Challenges
    </h1>
    <div class="text-center my-3">
        <img class="img-fluid w-50 h-50 transition-up rounded" src="{{ asset('images/resources/webinarItems/webinar21-1.png') }}" alt="webinar21-1">
    </div>
    <p class="fw-bolder">
        Overcoming Leadership and HR Challenges in the Modern International School Environment
    </p>
    <p class="fw-bolder">
        Our Distinguished Speakers:
    </p>
    <ul>
        <li>
            Dr. Kevin House – Director of Education for Dulwich College International and Associate Professor in Practice, Durham University
        </li>
        <li>
            Stuart McLay – Director of Education Quality Assurance & Accreditation at Vinschool Education System
        </li>
        <li>
            Moderator is Peter Liddell, Chief Operating Officer at Schrole Group
        </li>
    </ul>
    <p class="fw-bolder">
        Watch the replay <a href="https://youtu.be/5IWLHeU8lC4" class="link-hover">here</a>.
    </p>
    <p class="fw-bolder">
        We talked about the following:
    </p>
    <ul>
        <li>
            What changed in the education sector in the past 18 months of pandemic?
        </li>
        <li>
            What are the parent’s utmost concerns in the current environment and what steps can be taken to address them?
        </li>
        <li>
            What innovations, skills and approaches will educators need to remain relevant in what will continue to be a very competitive market in trying to attract/employ/retain talent?
        </li>
        <li>
            We touched up on a meta-analysis of what international teacher dispositions, values and beliefs have been shown to have the greatest impact in the classroom.
        </li>
    </ul>
</section>

@endsection