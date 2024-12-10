@extends('UATWEB.layouts.main')

@section('title')
Continuous monitoring in Healthcare Employees can save more lives - Avvanz Global
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
                    <i class="fa fa-calendar"></i> March 22, 2021
                </p>
            </div>
        </div>
    </div>
</section>

<section class="container margin-vertical">
    <h1 class="display-5 fw-bolder">
        Continuous monitoring in Healthcare Employees can save more lives
    </h1>
    <p>
        In the healthcare industry, it’s not uncommon for employees to come in contact with patients that are undergoing treatment or recovering from any procedure. In fact, nurses and doctors are often responsible for administering care to these patients. However, if a nurse is struggling with fatigue or a doctor has been feeling stressed lately it can be easy for them to make mistakes when performing their duties which may lead to irreversible consequences. 
    </p>
    <p>
        Last year, the number of medical malpractice cases soared to as much as 900,000 globally. 
    </p>
    <p>
        Medical mistakes usually occur due to negligence on behalf of doctors and nurses who do not provide a suitable process of treatment and information, improper tests, misdiagnosis or incorrect findings about a person’s condition that ultimately result in complications or even death.  
    </p>
    <p>
        This is why continuously monitoring healthcare employees should be an important part of any hospital’s strategy in order to keep it’s customer network safe and healthy at all times.
    </p>
    <p>
        “The healthcare industry is a high-risk, fast-paced environment that has the potential to save lives every day. Continuously monitoring employees and their performance can be one of the most important factors in ensuring patient safety.”
    </p>
    <p>
        To address this, many companies adopt intermittent and front-end monitoring e.g. one time reference and background checks, annual performance reviews etc. However, such a monitoring system can only provide information at a given time. A more practical and effective approach is to adopt a Continuous workforce monitoring system and process that provides up-to-date performance checks and background screening capability for your workforce, so you can stay informed and are able to take action where necessary. 
    </p>
    <p>
        Below are some advantages of continuous workforce monitoring:
    </p>
    <ol>
        <li>
            Avoid the penalties related to costly employing sanctioned or excluded employees with better regulatory compliance
        </li>
        <li>
            Identify the real-time healthcare sanctions without delaying
        </li>
        <li>
            Additional protection against workplace accidents and misconduct
        </li>
        <li>
            Cyclical and periodic, random background checks to ensure healthcare professional’s compliance to the mandated standards
        </li>
    </ol>
    <p>
        Continuously Screening, recruiting, and training healthcare employees provide high-quality patient care that ensures their safety. Similarly, continuous workforce monitoring adds an extra layer of protection to help you create and maintain a safe workforce environment. Medical malpractice usually involves medical errors that are caused by human behaviors. 
    </p>
    <p>
        As the healthcare practice constantly evolves and advances, it’s important to still move one step ahead by systematically addressing the root cause of these practices by being proactive and fully accountable in the process.
    </p>
</section>

@endsection