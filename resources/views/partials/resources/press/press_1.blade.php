@extends('layouts.master')

@section('title')
Drug Testing and Health Screening - Avvanz Global
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
                    <i class="fa fa-calendar"></i> February 20, 2020
                </p>
            </div>
        </div>
    </div>
</section>

<section class="container margin-vertical">
    <h1 class="display-5 fw-bolder">
        Drug Testing and Health Screening
    </h1>
    <p>
        In view of the increasing number of requests from clients for Drug Screening, Avvanz has added “Drug Testing and Health Screening” checks to the current diverse array of <a href="{{ route('screen-sub-2') }}" class="link-hover">background checks</a>. Companies nowadays conduct the drug checks in addition to other thorough vetting checks like criminal related checks, financial related checks, education and employment, social media checks and identity related checks. Drug testing checks for illicit drugs to ensure the workers employed from all over the globe are in peak mental condition to fulfill the job requirements. The other reason is to assure the safety of the rest of the workforce.
    </p>
    <p>
        Saliva, blood, urine and even hair-based tests can be conducted either in an appointed clinic or a collection laboratory. Co-founder of Avvanz, Mr Alvin Caga, added that Avvanz is gradually adding more countries where these checks can be done. According to him, the panel of checks can be customized for clients and the most commonly requested panel includes testing for Amphetamines, Barbiturates, Marijuana, Cocaine, Benzodiazepines, Opiates, PCP (Phencyclidine) and Methadone. 
    </p>
    <p>
        Since companies already do Health Screening which can be an hassle to manage, these options are also there for Avvanz’s clients to order at ScreenGlobal platform –<a href="https://www.avvanz.com/screenglobal/" class="link-hover">https://www.avvanz.com/screenglobal/</a>. 
    </p>
    <p>
        For more information, drop a note to <a href="mailto:consult@avvanz.com" class="link-hover">consult@avvanz.com</a>.
    </p>
</section>

@endsection