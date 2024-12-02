@extends('UATWEB.layouts.main')

@section('title')
Why Avvanz Screen​ - Avvanz Global
@endsection

@section('css')
<link rel="preload" href="{{ asset('images/homepage/homepageBg.webp') }}" as="image">
@endsection()

@section('content')

<!-- Hero Section -->
<section class="bg-image-2">
    <div class="container padding-vertical">
        <div class="row text-white">
            <div class="col-md-7 offset-auto">
                <h1 class="fw-bolder display-5">
                    Why Avvanz Screen​
                </h1>
                <h1 class="divider-start-25"></h1>
                <p>
                    Reliable and accurate background checks
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Avvanz Screen​ Section -->
<section class="bg-mg padding-vertical text-white">
    <div class="container">
        <div class="row g-3">
            <div class="col-sm-12 col-md-12 col-lg-6 d-flex align-items-center justify-content-center">
                <img 
                    src="{{ asset('images/screen/whyavvanz.webp') }}" 
                    alt="Why Avvanz" 
                    width="350" 
                    height="300"
                    alt="About Us Image 3" 
                    class="transition-up rounded-3"
                    loading="lazy">
            </div>
            <div class="col-sm-12 col-md-12 col-lg-6 d-flex align-items-center text-center">
                <h5>
                    Avvanz helps more than 3000 companies across the globe mitigate risks due to wrongful hires through our multi-award-winning Screen Global Platform and our high-performance Avvanz Team.   
                </h5>
            </div>           
        </div>
    </div>
</section>

<!-- Health Rules Section -->
<section class="container my-5 text-center">
    <h4 class="fw-bolder text-dmb">
        Partnering with Avvanz for your Background Screening works in your best interest as we bring you the following highly differentiated value propositions:
    </h4>
    <br>
    <div class="row g-3">
        <!-- 1 -->
        <div class="col-6">
            <div class="p-5 d-flex justify-content-center align-items-center border-dmb h-100 w-100">
              <div class="text-center">
                <h4 class="fw-bolder text-dmb">Quick and hassle-free Account setup, Onboarding, and Ordering</h4>
                <p>
                    Talent Acquisition professionals (or HR) need to have candidates quickly and thoroughly screened so that they can hire them once they are cleared. Some Background Screening Vendors take very long to set up a new Account for clients, have cumbersome processes and documentation, and even charge them onboarding and setup fees. Potentially, it can take up to 2 weeks or more before the HR (or the Case Requestor who could also be self-screening individuals or contractors) can actually start ordering any case. Avvanz ScreenGlobal enables almost immediate ordering with all necessary documentation being requested within the ScreenGlobal.
                </p>
              </div>
            </div>
        </div>
        <!-- 2 -->
        <div class="col-6">
            <div class="p-5 d-flex justify-content-center align-items-center border-dmb h-100 w-100">
              <div class="text-center">
                <h4 class="fw-bolder text-dmb">Capability to screen candidates with a complex global background</h4>
                <p>
                    With globalization, talents study, live, and work in multiple countries. Some of the Background Screening Vendors might not be able to undertake a complete 360 view of such candidates. Avvanz has the global capability of providing more than 20 different checks covering 150+ countries spanning EMEA, Americas, and Asia. Our diverse array of checks can meet the screening requirements based on the risk, level, function, and accountability of the candidates. In ScreenGlobal, you can easily view the Scope of Checks, Source, Turnaround Time, and Price information.
                </p>
              </div>
            </div>
        </div>
        <!-- 3 -->
        <div class="col-6">
            <div class="p-5 d-flex justify-content-center align-items-center border-dmb h-100 w-100">
              <div class="text-center">
                <h4 class="fw-bolder text-dmb card-title">
                    Unlimited Attempts at Source
                </h4>
                <p class="card-body">
                    Most Background Screening Vendors limit attempts to about 3 to 5 whereas Avvanz offers unlimited attempts. Hence our “Unable To Verify” cases are very low as we can provide results at least 95% of the time.
                </p>
              </div>
            </div>
        </div>        
        <!-- 4 -->
        <div class="col-6">
            <div class="p-5 d-flex justify-content-center align-items-center border-dmb h-100 w-100">
              <div class="text-center">
                <h4 class="fw-bolder text-dmb">
                    Cost-effective at short turn-around-time
                </h4>
                <p>
                    Avvanz’s price, in addition to being cost-effective, includes consultancy on the right approach to background screening, onboarding, unlimited access (and IDs) to ScreenGlobal, Client Service hotline with quick response time, Professional Indemnity Insurance, applicant chasing, and Business Reports. Avvanz’s unique and highly automated screening workflow is “lean” with the elimination of unnecessary steps and that has helped to reduce our turn-around time (TAT) of the reports.
                </p>
              </div>
            </div>
        </div>
        <!-- 5 -->
        <div class="col-6">
            <div class="p-5 d-flex justify-content-center align-items-center border-dmb h-100 w-100">
              <div class="text-center">
                <h4 class="fw-bolder text-dmb">
                    Fully-documented Privacy Policy
                </h4>
                <p>
                    The <a href="{{ route('privacy-main') }}" class="link-hover fw-bold">Privacy Policy</a> can be viewed at Avvanz website.
                </p>
              </div>
            </div>
        </div>
    </div>
</section>

@endsection