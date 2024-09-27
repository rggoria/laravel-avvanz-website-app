@extends('layouts.master')

@section('title')
More Detailed Background Checks Needed Before Hiring - Avvanz Global
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
                    <i class="fa fa-calendar"></i> August 5, 2020
                </p>
            </div>
        </div>
    </div>
</section>

<section class="container margin-vertical">
    <h1 class="display-5 fw-bolder">
        More Detailed Background Checks Needed Before Hiring
    </h1>
    <a href="Source: https://www.straitstimes.com/forum/forum-more-detailed-background-checks-needed-before-hiring" class="link-hover">Source: https://www.straitstimes.com/forum/forum-more-detailed-background-checks-needed-before-hiring</a>
    <p>
        Recent reports of athletes who were abused by their coaches are troubling (<a href="Ex-national gymnast recalls fear of being punished for wrong moves" class="link-hover">Ex-national gymnast recalls fear of being punished for wrong moves</a>, Aug 2).
    </p>
    <p>
        As the chief executive officer of a <a href="{{ route('home') }}" class="link-hover">global background screening company</a>, I have seen how lapses in safeguarding can lead to problems, and this needs to be tightened by performing due diligence.
    </p>
    <p>
        From my experience, detailed checks including on a person’s criminal history, authenticity of relevant qualifications, civil litigation charges and even artificial intelligence-enabled social media checks have shown that about a third of the profiles have negative indicators.
    </p>
    <p>
        Social media screening can unveil sexually explicit content, potentially unlawful activities, violent behaviours, racism and/or demonstrations of intolerance.
    </p>
    <p>
        Companies in Singapore, unlike their global counterparts, lag in this area, and need to be more aware of the importance of background checks as part of recruitment to safeguard children, coaches or fellow employees.
    </p>
    <p>
        Kannan Chettiar, 
    </p>
    <p>
        CEO, Avvanz Pte Ltd
    </p>
</section>

@endsection