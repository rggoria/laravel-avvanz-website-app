@extends('UATWEB.layouts.main')

@section('title')
Golf club managers to meet over money laundering concerns amid S$1 billion probe - Avvanz Global
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
                    Press and Media
                </h1>
                <h1 class="divider-start-25"></h1>
                <p>
                    <i class="fa fa-calendar"></i> September 4, 2023
                </p>
            </div>
        </div>
    </div>
</section>

<section class="container margin-vertical">
    <h1 class="display-5 fw-bolder">
        Golf club managers to meet over money laundering concerns amid S$1 billion probe
    </h1>
    <div class="text-center my-3">
        <img class="img-fluid w-50 h-50 transition-up rounded" src="{{ asset('images/resources/pressItems/press25-1.webp') }}" alt="press25-1">
    </div> 
    <p class="fw-bolder">
        September 04, 2023
    </p>
    <p class="fw-bolder">
        Article link: <a href="https://www.businesstimes.com.sg/singapore/golf-club-managers-meet-over-money-laundering-concerns-amid-s1-billion-probe" class="link-hover">https://www.businesstimes.com.sg/singapore/golf-club-managers-meet-over-money-laundering-concerns-amid-s1-billion-probe</a>
    </p>
    <p>
        THE Singapore Golf Association (SGA) has called for a meeting with managers of golf clubs and their compliance officers over money laundering concerns in the sector.
    </p>
    <p>
        The meeting on Wednesday (Aug 30) at the Singapore Island Country Club is to discuss the clubs’ risk of exposure to racketeering and other criminal activities.
    </p>
    <p>
        The Straits Times has reported that five of the 10 foreigners arrested in a recent anti-money laundering blitz, in which police took control of more than S$1 billion in assets, are members of Sentosa Golf Club. Several other individuals with links to those arrested are also members of the club, which has seen record prices for membership.
    </p>
    <p>
        In the invitation to the clubs, the SGA said: “With the increasing economic significance of golf, alongside various other sports, there has been a substantial surge in financial investment within this sector…
    </p>
    <p>
        “Unfortunately, a portion of this investment has become associated with criminal elements.”
    </p>
    <p>
        Speakers at the event will address money laundering trends, exploitative tactics and risks that are specific to the golfing scene. They will also tackle measures that communities can take to fend themselves against money laundering.
    </p>
    <p>
        The panellists include lawyers Sharon Chong and Chng Li Ling from RHTLaw Asia and <span class="text-marigold">Kannan Chettiar</span>, co-founder of human resource technology firm <a href="{{ route('home') }}" class="link-hover">Avvanz</a>, which specialises in background screening.
    </p>
    <p>
        Golf clubs typically limit their number of members, but most memberships can be traded like a commodity. Membership at golf clubs here starts at several thousands to hundreds of thousands of dollars.
    </p>
    <p>
        Sentosa Golf Club is among the most expensive here, and can cost locals about S$580,000 and foreigners up to S$990,000, according to club membership broker Active Golf Services.
    </p>
    <p>
        On its website, the club said that it has more than 1,600 members, who receive exclusive benefits, including access to two golf courses, major golf and club events and other facilities.
    </p>
    <p>
        A Sentosa Golf Club spokesperson said the club is committed to cooperating fully with the local authorities throughout the course of their investigation, but declined to comment further at this time.
    </p>
    <p>
        In the Aug 15 raid, police took control of assets, including gold bars, about 50 vehicles, more than 250 handbags, watches worth millions of dollars and other luxury goods. Orders have also been issued to block the sale of more than 100 properties linked to the case.
    </p>
    <p>
        The 10 suspects – aged between 31 and 44 – have been charged in court with various offences, including forgery, money laundering and resisting arrest. They hold passports from places such as China, Cambodia and Cyprus.
    </p>
    <p>
        Another 12 are assisting with the investigation, while eight others are on the run and have been placed on a wanted list as at Aug 19.
    </p>
    <p>
        More than 400 law enforcement officers were involved in the operation, which was conducted in exclusive enclaves like Bukit Timah, Sentosa and Orchard Road. <a href="https://www.straitstimes.com/singapore/golf-club-managers-to-meet-over-money-laundering-concerns-amid-1-billion-probe" class="link-hover">THE STRAITS TIMES</a>
    </p>
</section>

@endsection