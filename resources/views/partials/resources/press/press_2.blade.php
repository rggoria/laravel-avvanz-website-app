@extends('layouts.master')

@section('title')
Avvanz partners Epic Concepts - Avvanz Global
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
                    <i class="fa fa-calendar"></i> May 1, 2020
                </p>
            </div>
        </div>
    </div>
</section>

<section class="container margin-vertical">
    <h1 class="display-5 fw-bolder">
        Avvanz partners Epic Concepts
    </h1>
    <p>
        <a href="{{ route('home') }}" class="link-hover">Avvanz</a>, a Gold Medal awarded Background Screening company, with footprint around the globe, partners Epic Concepts in North America. Epic Concepts is a founding member of PBSA (then NAPBS) with a leading platform for background screening in the US. Epic Concepts is FCRA (Fair Credit Reporting Act)  compliant and supports several CRAs (Consumer Reporting Agencies) in the United States.
    </p>
    <p>
        Avvanz’s Managing Director and Co-Founder, Kannan Chettiar, commented, “We are excited that with our alliance with Epic Concepts, we can support more customers through their platform EZyCheck 3.0. Whilst they can help us with US checks, we can support them and their clients for all other international checks.” Avvanz’s Tech-enabled ScreenGlobal platform is capable of covering more than 150+ countries and conducting a myriad of checks (including Criminal checks, Social Media checks, Finance related checks, Education and Employment checks) quickly using automated workflows. John Francis based in Avvanz North America added that this powerful partnership will greatly add a tremendous value to all companies around the globe.
    </p>
    <p>
        John Francis added, “With Avvanz’s Tech-enabled <a href="https://www.avvanz.com/screenglobal/" class="link-hover">ScreenGlobal</a> platform that enables fast and compliant ordering of background checks along with Avvanz’s Digital Transformation expertise, we are looking forward to helping organizations of all sizes in Canada and US”. 
    </p>
    <p>
        Gary Dewitt, Founder of Epic Concepts, resonated similarly and reiterated, “Epic’s clients have international background screening requirements and now with Avvanz-Epic partnership, we will be able to serve our clients more efficiently with the latest in tools handling country specific  requirements”. 
    </p>
    <p>
        For more information, drop a note to <a href="mailto:consult@avvanz.com" class="link-hover">consult@avvanz.com</a>.
    </p>
</section>

@endsection