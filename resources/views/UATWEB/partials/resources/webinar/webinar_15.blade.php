@extends('UATWEB.layouts.main')

@section('title')
Panel Discussion: Talent Acquisition And Engagement Challenges Amidst The Pandemic - Avvanz Global
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
                    <i class="fa fa-calendar"></i> November 26, 2020
                </p>
            </div>
        </div>
    </div>
</section>

<section class="container margin-vertical">
    <h1 class="display-5 fw-bolder">
        Panel Discussion: Talent Acquisition And Engagement Challenges Amidst The Pandemic
    </h1>
    <div class="text-center my-3">
        <img class="img-fluid w-50 h-50 transition-up rounded" src="{{ asset('images/resources/webinarItems/webinar15-1.png') }}" alt="webinar15-1">
    </div>
    <p>
        Avvanz’s Panel Discussion along with Bank of Singapore, Singlife, Singapore Human Resources Institute (SHRI), OC Tanner and Justlogin, received an overwhelming attendance given the timely topics the panel delved into – ‘Talent Acquisition and Engagement Challenges Amidst the Pandemic’. 
    </p>
    <p>
        The panel discussed:
    </p>
    <ul>
        <li>
            While some companies are restructuring or even downsizing, others are  in short of critical talents especially in Tech areas. What are your specific Talent Acquisition challenges in this period?
        </li>
        <li>
            With more solid talents out there without jobs, do you think gig economy  or freelancing and part-time positions will increase? How about millennials and Gen Z including fresh graduates?
        </li>
        <li>
            Companies always see resume discrepancies related issues on the rise during recession period. How do you combat this? Note: Avvanz’s background checks show more than 35% resume discrepancies in such period. 
        </li>
        <li>
            Wrong talents not only pose business risks but even financial or  reputational risks. We can’t afford such wrongful hires in these times.  What are some of the measures you have taken to address this? Are traditional talent acquisition methods still working?
        </li>
        <li>
            What kind of redeployment strategies can a company take to prevent layoffs?
        </li>
        <li>
            Even after pandemic, several companies have vowed to continue with work from home arrangements. The response from workforce is mixed. What is your WFH vs BTO (Back To Office) strategy?
        </li>
        <li>
            How do you onboard new talents remotely and how do you ensure an inclusive company culture with remote talents?
        </li>
        <li>
            There’s been several mental health issues reported amidst this pandemic. In Avvanz, we do a variety of engagement events. How do you engage your staff especially those still on remote working arrangements?
        </li>
        <li>
            Has it been harder to measure and reward performance in these times especially with remote working arrangements?
        </li>
        <li>
            How can companies convince senior management to adopt the latest  technologies for Talent Acquisition and Talent Management?
        </li>
    </ul>
    <a href="https://www.youtube.com/watch?v=mnvRWKK4IoQ" class="link-hover">Click to watch the recording.</a>
    <p>
        Shoud you have any queries, feel free to reach out to us by emailing us at <a href="mailto:consult@avvanz.com" class="link-hover">consult@avvanz.com</a>.
    </p>
    <div class="text-center">
        <img class="img-fluid w-25 h-25" src="{{ asset('images/resources/webinarItems/webinar15-2.png') }}" alt="webinar15-2">
    </div>
</section>

@endsection