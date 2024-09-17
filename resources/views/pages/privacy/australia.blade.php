@extends('layouts.master')

@section('title')
Privacy Policy: Candidate (Australia) - Avvanz Global
@endsection

@section('css')
<link rel="stylesheet" href="{{ asset('css/privacy.css') }}">
@endsection

@section('content')

<!--  Navbar Section -->
@include('layouts.navbar')

<!-- Hero Section -->
<section class="bg-image">
    <div class="container padding-vertical">
        <div class="row text-white">
            <div class="col-md-7 offset-auto">
                <h1 class="fw-bolder display-5">
                    Privacy Policy: Candidate (Australia)
                </h1>
                <h1 class="divider-start-25"></h1>
            </div>
        </div>
    </div>
</section>

<!-- Privacy Policy Section -->
<section class="container my-5 text-center">
    <div class="border-dmb bg-mg p-5 text-start text-white">
        <p>
            Avvanz, as a global background screening and workforce solutions provider, places paramount importance on safeguarding personal information and ensuring compliance with laws and regulations, including the Australian Privacy Principles (APPs). Avvanz’s commitment to privacy aligns with the following aspects of the APPs:
        </p>
        <ol>
            <li class="fw-bolder h5">
                Transparent Privacy Policies (APP 1)
            </li>
            <p>
                Avvanz has developed a comprehensive set of privacy policies tailored to each global location in which it operates. These policies are designed to be transparent and easy to understand, providing clear explanations of how personal information is collected, used, and shared.
            </p>
            <li class="fw-bolder h5">
                Collection and Use of Personal Information (APP 3)
            </li>
            <p>
                Avvanz outlines in its privacy policies the types of personal information it collects and how this information is used. In the process of delivering services to our valued clients, we may gather pertinent and essential personal data required for the tasks entrusted to us. In most instances, our clients will furnish us with the necessary information for processing background screening, as they obtained it from their candidate/applicant.
            </p>
            <li class="fw-bolder h5">
                Security of Personal Information (APP 11)
            </li>
            <p>
                Avvanz is committed to upholding the highest standards of privacy and security, ensuring that personal information is protected from unauthorized access, disclosure, and misuse. This aligns with APP 11’s requirement to take reasonable steps to protect personal information.
            </p>
            <li class="fw-bolder h5">
                Access and Correction (APP 12 and 13)
            </li>
            <p>
                Avvanz’s privacy policies acknowledge the rights of individuals to access, correct, and delete their personal data. Individuals/clients may request information regarding the personal information that we may hold or request that we update such information by emailing dpo@avvanz.com or by phoning +65-68095398. We will respond to such requests within 30 days from receipt of the individual’s enquiry.
            </p>
            <li class="fw-bolder h5">
                Retention of Personal Information
            </li>
            <p>
                Generally, we retain personal information for a maximum of 7 years or per client instructions; it is stored and processed in systems to which our clients have access. Any data we store serves the sole purpose of delivering services to our clients for applicant/candidate background screening. All information is stored and transmitted securely.
            </p>
            <p>
                We adhere to a clean desk policy and refrain from printing information in hard copy. All our work is conducted within the framework of our Information Security and Privacy Information Management System.
            </p>
            <li class="fw-bolder h5">
                Utilization of Personal Information
            </li>
            <p>
                We do not employ an individual’s personal data for any purpose other than the original collection purpose. We will not use the collected data for any other purpose without first obtaining the individual’s consent unless required or authorized by law. In cases where we are obligated to share an individual’s personal information with a third party during the course of our duties, we first ensure that the organization complies with the Privacy Act of 1988 by reviewing its privacy policy.
            </p>
            <li class="fw-bolder h5">
                International Privacy Standards
            </li>
            <p>
                In addition to complying with local laws, Avvanz adheres to international privacy standards, such as the General Data Protection Regulation (GDPR) in the European Union, the Philippine Data Privacy Act and the Singapore Personal Data Protection Act. This demonstrates Avvanz’s commitment to maintaining a high level of data protection and aligns with the APPs’ goal of protecting personal information.
            </p>
            <li class="fw-bolder h5">
                Training and Best Practices (APP 1)
            </li>
            <p>
                Avvanz offers training programs for employees on handling sensitive personal information, emphasizing best practices for data protection.
            </p>
            <li class="fw-bolder h5">
                Data Breach Notification (APP 11)
            </li>
            <p>
                In the unlikely event of a data breach that may result in serious harm as defined by the Australian Privacy Principles (APP 11), we will promptly notify affected individuals and the Office of the Australian Information Commissioner (OAIC) via our PIC or clients as required by law.
            </p>
            <li class="fw-bolder h5">
                Contact Information
            </li>
            <p>
                If you have any questions, concerns, or requests related to your personal information or our privacy practices, please reach out to:
            </p>
        </ol>
        <p class="fw-bolder h5 mt-3">
            The Data Protection Officer
        </p>
        <p>
            Address: 1 Wallich St., #14-01 Guoco Tower, Singapore 078881
        </p>
        <p>
            Email Address: <a href="mailto:dpo@avvanz.com" class="link-hover">dpo@avvanz.com</a>
        </p>
        <p>
            Phone Number: +65-68095398
        </p>
        <span class="fw-bolder my-5 h5">
            Changes to This Policy
        </span>
        <p>
            We may update this Privacy Policy from time to time to reflect changes in our practices or legal requirements. The most recent version will always be available on our website.
        </p>
        <p>
            Avvanz’s commitment to privacy and its tailored privacy policies align well with the Australian Privacy Principles (APPs) and other international privacy standards. This proactive approach not only ensures compliance but also enhances data protection for its clients and their employees in today’s global business environment.
        </p>
    </div>
</section>

<!-- Floating Button -->
@include('layouts.floating')

<!-- Footer Section -->
@include('layouts.footer')

@endsection