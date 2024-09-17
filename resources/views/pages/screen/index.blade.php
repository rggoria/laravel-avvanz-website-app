@extends('layouts.master')

@section('title')
Screen - Avvanz Global
@endsection

@section('content')

<!--  Navbar Section -->
@include('layouts.navbar')

<!-- Hero Section -->
<section class="bg-image">
    <div class="container padding-vertical">
        <div class="row hero-min-height-2 text-white">
            <div class="col-md-7 offset-auto">
                <h1 class="fw-bolder display-5">
                    Screen
                </h1>
                <h1 class="divider-start-25"></h1>
                <p>
                    Know more about risk mitigation
                </p>
            </div>
        </div>
    </div>
</section>

<section class="container margin-vertical">
    <h1 class="text-center text-dmb fw-bolder">
        Ensure that the “right” and “safe” talents are identified before hiring.
    </h1>
    <h1 class="text-center divider-center-25"></h1>
</section>

<!-- Background Checks Section -->
<section class="bg-mg">
    <div class="container py-5 text-white">
        <h1 class="fw-bolder display-5">
            Background Checks
        </h1>
        <h1 class="divider-start-25"></h1>
        <div class="row g-3 py-3">
            <div class="col-md-7 d-flex align-items-center">
                <div>
                    <p>
                        People are the biggest business assets to any organization. On the same token, people can pose the biggest business risks and these risks have to be mitigated to avoid consequential damages to the organizations.
                    </p>
                    <p>
                        Organizations need to ensure that the “right” and “safe” talents are identified before hiring. Unfortunately, organizations still adhere to the age-old practice of character reference checks with references provided by the candidates and all of us know that this practice is quite a pointless exercise. It is to be noted that risks can also arise from existing employees not just new joiners.
                    </p>
                    <p>
                        Studies and our research have shown that more than 30% of CVs or Resumes have some form of discrepancies – Fake credentials, inflated employment experiences, undeclared offenses/derogatory pasts or even disturbing social media footprint.
                    </p>
                    <p>
                        Hence the need for a thorough pre-employment or in-employment background checks (or background screening or vetting) to be undertaken on candidates or employees. There are more than 20 types of background checks that can be conducted. What specific checks need to be selected really depends on the risks associated with their functions or roles by industry.
                    </p>
                    <p>
                        Click here to find out more about the different types of Background Checks and the Process <a href="{{ route('screen-1') }}" class="link-hover">https://www.avvanz.com/background-screening/</a>.
                    </p>
                </div>
            </div>
            <div class="col-md-5 d-flex align-items-center justify-content-center">
                <img
                    src="{{ asset('images/screen/screen1.webp') }}"
                    alt="Screen Image 1"
                    class="transition-up img-fluid rounded-3 w-auto h-auto"
                    loading="lazy">
            </div>
        </div>
    </div>
</section>

<!-- Company Dilegence Section -->
<section class="my-5">
    <div class="container">
        <h1 class="fw-bolder display-5">
            Company Due Diligence
        </h1>
        <h1 class="divider-start-25"></h1>
        <div class="row g-3 py-3">
            <div class="col-md-7 d-flex align-items-center">
                <div>
                    <p>
                        Just like how you can conduct background checks on individuals, you can vet companies too. These companies can be your partners or clients or vendors or even investment targets.
                    </p>
                    <p>
                        Click here to find more about the different types of Company Due Diligence checks <a href="{{ route('screen-4') }}" class="link-hover">https://www.avvanz.com/company-due-diligence/</a>.
                    </p>
                    <p>
                        For a non-obligatory consultation, email us at <a href="mailto:consult@avvanz.com" class="link-hover">consult@avvanz.com</a>.
                    </p>
                </div>
            </div>
            <div class="col-md-5 d-flex align-items-center justify-content-center">
                <img
                    src="{{ asset('images/screen/screen2.webp') }}"
                    alt="Screen Image 2"
                    class="transition-up img-fluid rounded-3 w-auto h-auto"
                    loading="lazy">
            </div>
        </div>
    </div>
</section>

<!-- Floating Button -->
@include('layouts.floating')

<!-- Footer Section -->
@include('layouts.footer')

@endsection