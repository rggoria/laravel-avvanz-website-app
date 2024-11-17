@extends('layouts.master')

@section('title')
Avvanz Tackles Employee Screening Challenges: Affordable, Compliant, and Comprehensive Background Checks Now Available In India - Avvanz Global
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
                    <i class="fa fa-calendar"></i> May 13, 2024
                </p>
            </div>
        </div>
    </div>
</section>

<section class="container margin-vertical">
    <h1 class="display-5 fw-bolder">
        Avvanz Tackles Employee Screening Challenges: Affordable, Compliant, and Comprehensive Background Checks Now Available In India
    </h1>
    <div class="text-center my-3">
        <img class="img-fluid w-50 h-50 transition-up rounded" src="{{ asset('images/resources/pressItems/press30-1.jpg') }}" alt="press30-1">
    </div> 
    <p>
        Avvanz, a leading HRTech and FinTech company, has officially launched in India, a move seen as significant for the Indian labor market due to its unique challenges in background screening, such as inaccurate information, time-consuming processes, and a lack of centralized data sources. With a proven track record of serving over 4000 companies globally, Avvanz offers comprehensive, compliant, and affordable solutions tailored to the Indian market. Headquartered in Singapore and with global offices, including a new one in Bengaluru, Karnataka, Avvanz will provide services such as Background Screening, Company Due Diligence, and Digital Economy Training to help Indian businesses and international companies with an Indian presence build a strong and secure workforce.
    </p>
    <p>
        <span class="fw-bolder">Kannan Chettiar, Founder and CEO of Avvanz</span>, stated, “Our expansion into India underscores our commitment to enhancing workplace safety and efficiency through cutting-edge technology and our robust solutions that leverage AI, RPA, IDVT, and Blockchain.” 
    </p>
    <p>
        <span class="fw-bolder">Marcellus Solomon, Head of Avvanz India</span>, added, “Our comprehensive background screening solutions address the specific concerns of Indian businesses. We ensure accuracy, speed, compliance, and affordability along with technology, enabling companies to make informed hiring decisions confidently.”
    </p>
    <p>
        Avvanz caters to various industries, including Banking, Financial Services, Technology, Education, BPO, Manufacturing, Retail, Healthcare, and Oil & Gas, and is ISO27001 and ISO27701 certified. The company’s holistic approach also supports B2B clients with due diligence and risk management, ensuring businesses hire the best talent and build a resilient workforce.
    </p>
    <p>
        For more detailed information, please take a look at the attached PDF file of the 
        <a href="{{ asset('files/resources/Avvanz-Press-Release-Report.pdf') }}" class="link-hover" target="_blank">
            Press Release Distribution Report
        </a>.
    </p>
    <div class="d-flex justify-content-center">
        <section class="mb-4 d-flex">
            <a
                class="btn text-white btn-floating m-1"
                style="background-color: #3b5998;"
                href="https://www.facebook.com/share_channel/?link=https%3A%2F%2Fwww.avvanz.com%2Favvanz-expands-global-reach%2F&app_id=966242223397117&source_surface=external_reshare&display&hashtag"
                target="_blank"
                role="button"
            >
                <i class="fab fa-facebook-f"></i>
            </a>
    
            <a
                class="btn text-white btn-floating m-1"
                style="background-color: #55acee;"
                href="https://x.com/intent/post?text=Before+entering+into+any+business+transaction+or+partnership%2C+it+is+essential+to+conduct+a+thorough+company+due+diligence.+https%3A%2F%2Fwww.avvanz.com%2Favvanz-expands-global-reach%2F"
                target="_blank"
                role="button"
            >
                <i class="fab fa-twitter"></i>
            </a>
            <a
                class="btn text-white btn-floating m-1"
                style="background-color: #0082ca;"
                href="https://www.linkedin.com/uas/login?session_redirect=https%3A%2F%2Fwww.linkedin.com%2FshareArticle%3Fmini%3Dtrue%26url%3Dhttps%3A%2F%2Fwww.avvanz.com%2Favvanz-expands-global-reach%2F%26title%3DAvvanz%2520Pte%2520ltd%2520Expands%2520its%2520Global%2520Reach%2520with%2520New%2520Office%2520Opening%2520in%2520Bengaluru%252C%2520India%2520-%2520Avvanz%2520Global%26summary%3DBefore%2520entering%2520into%2520any%2520business%2520transaction%2520or%2520partnership%2C%2520it%2520is%2520essential%2520to%2520conduct%2520a%2520thorough%2520company%2520due%2520diligence.%26source%3Dhttps%3A%2F%2Fwww.avvanz.com%2Favvanz-expands-global-reach%2F"
                target="_blank"
                role="button"
            >
                <i class="fab fa-linkedin-in"></i>
            </a>
        </section>
    </div> 
</section>

@endsection