@extends('layouts.master')

@section('title')
General Information Security Policy - Avvanz Global
@endsection

@section('content')

<!--  Navbar Section -->
@include('layouts.navbar')

<!-- Hero Section -->
<section class="bg-image-2">
    <div class="container padding-vertical">
        <div class="row text-white">
            <div class="col-md-7 offset-auto">
                <h1 class="fw-bolder display-5">
                    POLICY STATEMENT
                </h1>
                <h1 class="divider-start-25"></h1>
                <p>
                    INFORMATION SECURITY (ISMS) AND PRIVACY INFORMATION (PIMS)
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Privacy Policy Section -->
<section class="container margin-vertical text-center">
    <div class="border-dmb p-5 text-start">
        <p>
            "<span class="fw-bolder">Avvanz</span>" is committed to preserving the confidentiality, integrity, and availability of Information, and the protection of privacy. The company is committed to complying with the applicable legal and regulatory requirements and continually improving the information security and privacy management system and the Information security and privacy performance. We shall ensure:
        <p>
            The company is committed to complying with the applicable legal and regulatory requirements and continually improving the information security and privacy management system and the Information security and privacy performance.
        </p>
        <p class="fw-bolder">
            We shall ensure:
        </p>
        <ul>
            <li>
                Confidentiality of information, including personal data through preserving authorized restrictions on information access and disclosure, including means for protecting the privacy and proprietary information;
            </li>
            <li>
                The Integrity of all business processes, information assets, and supporting IT assets and operations, through protection from unauthorized modification or destruction; and
            </li>
            <li>
                Availability of all business processes, information assets, and supporting IT assets and processes, to authorized users, when needed, with timely and reliable access to and use of information while supporting information-sharing needs and PII processing needs.
            </li>
            <li>
                Effective implementation and maintenance of policies and procedures in various information security and privacy-related areas.
            </li>
            <li>
                Uphold to continually improve the information security and privacy management system and the Information security and privacy performance.
            </li>
            <li>
                Provide information security and privacy-related training for all employees.
            </li>
        </ul>
        <p>
            This policy and its supporting policies and procedures shall be reviewed at least once a year to ensure continuity, suitability, adequacy, effectiveness, and alignment with the company’s strategic direction.
        </p>
        <p>
            The policy shall be communicated to all employees and other interested parties (if necessary)”.
        </p>
    </div>
</section>

<!-- Floating Button -->
@include('layouts.floating')

<!-- Footer Section -->
@include('layouts.footer')

@endsection