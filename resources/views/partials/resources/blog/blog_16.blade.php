@extends('layouts.master')

@section('title')
AFP Checks - Avvanz Global
@endsection

@section('css')
<link rel="preload" href="{{ asset('images/homepage/homepageBg.webp') }}" as="image">
@endsection()

@section('content')

<section class="bg-image-2">
    <div class="container padding-vertical text-white">
        <h1 class="fw-bolder display-5">            
            AFP Checks
        </h1>
        <p>
            <i class="fa fa-calendar"></i> May 9, 2023
        </p>
    </div>
</section>

<section class="container margin-vertical">
    <div class="text-center my-3">
        <img class="img-fluid w-50 h-50 transition-up rounded" src="{{ asset('images/resources/blogItems/blog16-1.webp') }}" alt="blog16-1">
    </div> 
    <p>
        AFP or Australian Federal Police Checks or National Police Checks are critical checks amongst other background checks for employers to assess a candidate and his/her suitability to a role.
    </p>
    <p>
        This check will reveal any <span class="fw-bolder">disclosable court outcomes and pending charges as recorded by all Australian police databases and in conjunction with spent convictions legislation. </span>
    </p>
    <p class="fw-bolder">
        AFP Checks are usually required for purposes such as:
    </p>
    <ul>
        <li>
            Recruiting for Federal Government departments
        </li>
        <li>
            Legislation or regulatory requirements 
        </li>
        <li>
            Industry specific compliance requirements like BFSI or Banking, Finance and Insurance
        </li>
        <li>
            International employment
        </li>
        <li>
            A general recruitment practice to avoid any wrongful hires
        </li>
    </ul>
    <p class="fw-bolder">
        Documents required include:
    </p>
    <ul>
        <li>
            Completely filled AFP Form
        </li>
        <li>
            Additional guides such as the 100 points identification system are included in the AFP Form to check if the IDs provided by the candidate comply with the criminal check requirement (as one ID will not suffice entirely) and Avvanz will provide complete guidance in filling this out.
        </li>
    </ul>
    <p>
        Avvanz’s AFP Checks are obtained directly from the Australian Federal Police and Avvanz’s multi-award winning Background Screening Platform – ScreenGlobal – <a href="https://www.avvanz.com/screenglobal" class="link-hover">https://www.avvanz.com/screenglobal</a> – allows you to easily order checks online and deliver the Final Report to you via email. (Below is a screenshot from ScreenGlobal). 
    </p>
    <p>
        With Avvanz’s help, you can cut all hassle and to-and-fro timewasters. 
    </p>
    <div class="bg-afw p-5">
        <p>
            This check obtains information directly from the Australian Federal Police and will reveal any disclosable court outcomes and pending charges as recorded by all Australian Police Service databases and in conjunction with spend convictions legislation.
        </p>
        <p>
            Turn-Around Time is +/- 18 business days.
        </p>
        <p>
            Documents needed:
        </p>
        <ul>
            <li>
                Completely filled AFP(Australian Federal Police) Form
            </li>
            <li>
                Additional guides such as the ‘100 points identification’ system are included in the AFP Form to check if the IDs provided by the candidate comply with the criminal check requirement (as one ID will not suffer entirely) and a guide can be found at the end of the document to serve as an aid in filling out the code number field(top left box in AFP Application Form)
            </li>
        </ul>
        <p>
            Other options available for which you need to select in the subchecks if you want to add them:
        </p>
        <ol>
            <li>
                Banned Persons Check
            </li>
        </ol>
    </div>
    <p>
        Avvanz has prepared a video that details the entire process of obtaining an AFP Check. 
    </p>
    <div class="ratio ratio-16x9">
        <iframe
            data-src="https://www.youtube.com/embed/5eJqLw6jRsk?start=1"
            title="YouTube video player"
            allowfullscreen
            class="lazy-frame">
        </iframe>
    </div>
    <p>
        For more detailed information or a non-obligatory chat, drop us a note at <a href="mailto:consult@avvanz.com" class="link-hover">consult@avvanz.com</a>.
    </p>
    <div class="d-flex justify-content-center">
        <section class="mb-4 d-flex">
            <p class="fw-bolder m-1 align-content-center">
                Share this story:
            </p>
            <a
                class="btn text-white btn-floating m-1"
                style="background-color: #3b5998;"
                href="https://www.facebook.com/share_channel/?link=https%3A%2F%2Fwww.avvanz.com%2Fafp-checks%2F&app_id=966242223397117&source_surface=external_reshare&display&hashtag"
                target="_blank"
                role="button"
            >
                <i class="fab fa-facebook-f"></i>
            </a>
            <a
                class="btn text-white btn-floating m-1"
                style="background-color: #0082ca;"
                href="https://www.linkedin.com/uas/login?session_redirect=https%3A%2F%2Fwww.linkedin.com%2FshareArticle%3Fmini%3Dtrue%26url%3Dhttps%3A%2F%2Fwww.avvanz.com%2Fafp-checks%2F%26title%3DAFP%2520Checks%2520-%2520Avvanz%2520Global%26summary%3D%26source%3Dhttps%3A%2F%2Fwww.avvanz.com%2Fafp-checks%2F"
                target="_blank"
                role="button"
            >
                <i class="fab fa-linkedin-in"></i>
            </a>
        </section>
    </div>
    <h1 class="fw-bolder display-5">
        AFP Checks
    </h1>
    <div class="hstack gap-3 text-marigold">
        <div class="vr" style="width: 3px;"></div>
        <h1>
            Latest Blog
        </h1>
    </div>
</section>

@section('scripts')
<script>
    document.addEventListener("DOMContentLoaded", function() {
        const iframes = document.querySelectorAll('iframe.lazy-frame');
        const observer = new IntersectionObserver((entries, observer) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const iframe = entry.target;
                    iframe.src = iframe.getAttribute('data-src');
                    iframe.classList.remove('lazy-frame');
                    observer.unobserve(iframe);
                }
            });
        });

        iframes.forEach(iframe => {
            observer.observe(iframe);
        });
    });
</script>
@endsection

@endsection