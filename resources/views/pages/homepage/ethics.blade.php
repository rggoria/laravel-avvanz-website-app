@extends('layouts.master')

@section('title')
Ethics, Anti-bribery and Corruption - Avvanz Global
@endsection

@section('css')
<link rel="preload" href="{{ asset('images/homepage/homepageBg.webp') }}" as="image">
<link rel="stylesheet" href="{{ asset('css/about.css') }}">
@endsection()

@section('content')

<!-- Hero Section #1 -->
<section class="bg-image-2">
    <div class="container padding-vertical">
        <div class="row text-white">
            <div class="col-md-7 offset-auto">
                <h1 class="fw-bolder display-5">
                    Ethics, Anti-bribery and Corruption
                </h1>
                <h1 class="divider-start-25"></h1>
                <p>
                    Code of conduct
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Code Section -->
<section class="container-fluid bg-mg padding-vertical">
    <div class="container text-white">
        <div class="text-center">
            <h1 class="fw-bolder display-5">
                Code of Ethics and Legal Compliance (“Code”)
            </h1>
            <h1 class="divider-center-25"></h1>
        </div>
        <div class="mt-5">
            <p>
                Avvanz is committed to doing the right business the right way by acting honestly and fairly whilst upholding integrity, complying with laws and regulations and adhering to policies and procedures. This includes strict adherence to Personal Data Protection policies. Avvanz expects all employees to: Comply with all applicable legal requirements Demonstrate integrity in every business interaction Avoid engaging in any activity that involves even the appearance of impropriety.
            </p>
            <p>
                Anti-corruption laws prohibit payments for improper purposes. This includes corruption, bribery, extortion, or embezzlement, in any form. “Improper” refers to bribery acts with intention of obtaining or retaining an undue business advantage. Avvanz will document any use of Avvanz’s assets (including cash) for transparent traceability. Accurate records are critical to meeting legal, financial, and management obligations. Avvanz employees will never misstate facts, omit critical information, or modify records or reports in any way to mislead others, or assist others in doing so.
            </p>
            <p>
                Avvanz conducts activities in full compliance with the anti-corruption and anti-bribery laws of the country, or countries, in which we operate and with the United States Foreign Corrupt Practices Act (FCPA) and United Kingdom Bribery Act (UKBA).
            </p>
        </div>
    </div>
</section>

<!-- Communication Section -->
<section class="container my-5">
    <div class="row gy-5">
        <div class="col-md-7 d-flex align-items-center">
            <div>
                <h1 class="fw-bolder text-dmb display-5">
                    Code of Ethics, Training and Internal communication
                </h1>
                <h1 class="divider-start-25"></h1>
                <p class="mt-3">
                    Avvanz’s business standards include the Code of Conduct, Anti-Bribery and Corruption policies (“Code”). This applies to Avvanz’s employees as well as our fufilment partners, business partners and 3rd parties. These standards are communicated via this website as well as training webinars. Everyone is obligated to comply with this Code.
                </p>
                <p>
                    Avvanz employees are expected to hold fair business standards in business, consulting, sales, advertising and marketing. Avvanz will not seek business intelligence through illegal or unethical means.
                </p>
            </div>
        </div>
        <div class="col-md-5 d-flex align-items-center justify-content-center">
            <img
                src="{{ asset('images/about/health1.webp') }}"
                alt="Health Image 1"
                class="transition-up img-fluid rounded-3 w-auto h-auto"
                loading="lazy">
        </div>
    </div>
</section>

<!-- Discrimination Section -->
<section class="container-fluid my-5 bg-afw">
    <div class="container py-5">
        <div class="row gy-5">
            <div class="col-md-7 d-flex align-items-center">
                <div>
                    <h1 class="fw-bolder text-dmb display-5">
                        Labour & Human rights, Discrimination
                    </h1>
                    <h1 class="divider-start-25"></h1>
                    <p class="mt-3">
                        Avvanz ensures the human rights of workers and treats all employees and partners with dignity and respect as understood by the international community. Workplace Safety & Health guidelines have been documented here.
                    </p>
                    <p>
                        Avvanz does not discriminate against any worker based on race, colour, age, gender, pregnancy state, sexual orientation, ethnicity, disability, religion, political affiliation, union partnership, national origin, or marital status in hiring and employment practices such as applications for employment, promotions, rewards, access to training, job assignments, wages, benefits, discipline, termination, and retirement.
                    </p>
                    <p>
                        Avvanz commits to a workplace free of harassment, intimidation, blackmailing, sexual harassment, sexual abuse, corporal punishment, mental coercion, child labor, physical coercion, or verbal abuse.
                    </p>
                </div>
            </div>
            <div class="col-md-5 d-flex align-items-center justify-content-center">
                <img
                    src="{{ asset('images/about/health2.webp') }}"
                    alt="Health Image 2"
                    class="transition-up img-fluid rounded-3 w-auto h-auto"
                    loading="lazy">
            </div>
        </div>
    </div>
</section>

<!-- Risk Assessment Section -->
<section class="container my-5">
    <div class="row gy-5">
        <div class="col-md-7 d-flex align-items-center">
            <div>
                <h1 class="fw-bolder text-dmb display-5">
                    Risk Assessment
                </h1>
                <h1 class="divider-start-25"></h1>
                <p class="mt-3">
                    Avvanz regularly carries out compliance risk assessments to ensure all business operations carry no risk of compliance breach. Avvanz has a whistleblowing hotline to report any such breaches anonymously. Avvanz will investigate promptly and thoroughly. Where appropriate, disciplinary action (that might include immediate termination) will be undertaken.
                </p>
            </div>
        </div>
        <div class="col-md-5 d-flex align-items-center justify-content-center">
            <img
                src="{{ asset('images/about/health1.webp') }}"
                alt="Health Image 1"
                class="transition-up img-fluid rounded-3 w-auto h-auto"
                loading="lazy">
        </div>
    </div>
</section>

<!-- Discrimination Section -->
<section class="container-fluid mt-5 bg-afw">
    <div class="container py-5">
        <div class="row gy-5">
            <div class="col-md-7">
                <h1 class="fw-bolder text-dmb display-5">
                    Privacy Policy
                </h1>
                <h1 class="divider-start-25"></h1>
                <div class="text-white mt-3">
                    <div class="accordion accordion-flush border border-white" id="accordionFlushExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                    Personal Data Protection
                                </button>
                            </h2>
                            <div id="flush-collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <p>
                                        Avvanz is the trading name of Avvanz Pte Ltd. with company registration number: [201608532H] (“Avvanz”).
                                    </p>
                                    <p>
                                        This policy sets out how Avvanz collects, uses, and discloses the personal information that we collect (i) from you and/or (ii) from our clients when we act as data intermediary (as defined in the Singapore Personal Data Protection Act 2012, as the same may be amended from time to time (“PDPA”)) for our clients in the performance of our services for our clients; as well as the security measures we take to protect your personal information. This policy is drawn up to meet the requirements of Singapore’s personal data protection laws. Please be advised that from time to time, we may update this policy especially to reflect any changes in the laws and hence if you wish to be informed of how we are protecting your personal information at any particular point in time, please review this policy at that time.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                                    How we collect your personal information?
                                </button>
                            </h2>
                            <div id="flush-collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <p>
                                        All the personal information we collect about you comes from you and/or from our clients when they place an order with us for the purchase of our services. We may also collect personal data of employees and/or candidates of our customers ONLY if our customers require us to receive the personal data from the relevant employee and/or candidate direct.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                                    What is personal information?
                                </button>
                            </h2>
                            <div id="flush-collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <p>
                                        Personal information is any information that can identify an individual or information about an identifiable individual, such as his/her telephone number, email address, NRIC number, home address, employment details, educational qualifications and transaction activity in relation to the purchase of services from us. A client may also furnish us with their bank account details and/or corporate credit card details to process a payment.
                                    </p>
                                    <p>
                                        For the purpose of this policy, “personal information” shall mean data, whether true or not, about an individual who can be identified (a) from that data; or (b) from that data and any other information to which Avvanz has or is likely to have access.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">
                                    What personal information do we collect?
                                </button>
                            </h2>
                            <div id="flush-collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <p>
                                        We may need to collect personal information about you when you register with us and/or place an order with us for the purchase of our services. If you wish to register with us and/or place an order for the purchase of services, regretfully, we would not be able to proceed with your registration or process your order without you furnishing to us the personal information required.
                                    </p>
                                    <p>
                                        If you voluntarily complete surveys, provide feedback, participate in any competitions run by Avvanz, participate in promotional events which Avvanz is participating in or organising, we may also collect personal information about you with your consent for the purposes made known to you at the time of collecting that personal information from you.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFive" aria-expanded="false" aria-controls="flush-collapseFive">
                                    Use of your personal information
                                </button>
                            </h2>
                            <div id="flush-collapseFive" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <p>
                                        We may collect your personal information to verify your order, to deliver the reports or other materials as result of the services you have bought from us and to manage your account with us. With your consent, we may also contact you by voice call, SMS/MMS and/or email about offers or other information relating to existing and/or new services which may be of interest to you, to conduct research about your opinion of our services, to conduct surveys, to invite you for promotional events which Avvanz is participating in or organizing.
                                    </p>
                                    <p>
                                        Avvanz does not rent, lease or sell to any third party its client list or any personal information it receives as a result of any service contracts it enters into with its clients.
                                    </p>
                                    <p>
                                        Avvanz may share your personal information with trusted third party service providers or relevant local authority and/or relevant local entity (that provides the relevant information in connection with the provision of part or all of the required screening services) to provide some or all of any required screening services, client support, to contact you for the purposes you have consented to and to help us with our website or operations. The third party service providers whom we engage by contract as our data processors will be contractually prohibited from using your personal information except to provide the required services to Avvanz and they are required by contract to maintain the confidentiality and security of your personal information.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseSix" aria-expanded="false" aria-controls="flush-collapseSix">
                                    Security of your personal information
                                </button>
                            </h2>
                            <div id="flush-collapseSix" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <p>
                                        Avvanz uses reasonable precautions to protect your personal information and store it securely including restricting access to your personal information. You should be aware however, that Avvanz cannot guarantee security as no method of transmission over the internet or method of electronic storage is completely secure. The third party service providers that Avvanz engages by contract as our data processors will also be contractually required to maintain the confidentiality and security of your personal data in line with the requirements of the Singapore personal data protections laws.
                                    </p>
                                    <p>
                                        Avvanz will not share your personal information with third parties other than those mentioned above except if required by law or a court order to do so.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseSeven" aria-expanded="false" aria-controls="flush-collapseSeven">
                                    Transfer of personal data outside Singapore
                                </button>
                            </h2>
                            <div id="flush-collapseSeven" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <p>
                                        Where Avvanz transfers your personal information to countries outside Singapore, Avvanz will take reasonable steps to ensure that appropriate levels of protection necessary to maintain the security of your personal information are required of the transferee and that any personal information is transferred and processed only in accordance with the requirements of the PDPA and any other applicable law.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseEight" aria-expanded="false" aria-controls="flush-collapseEight">
                                    Do Not Call Provisions
                                </button>
                            </h2>
                            <div id="flush-collapseEight" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <p>
                                        Avvanz will not send you any telemarketing messages or make any marketing calls to you if you have registered your Singapore telephone number with the respective DNC registers unless you have furnished us with your express consent to do so and/or unless it is business number.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseNine" aria-expanded="false" aria-controls="flush-collapseNine">
                                    Other websites
                                </button>
                            </h2>
                            <div id="flush-collapseNine" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <p>
                                        The Avvanz website may contain hyperlinks to other websites from time to time. The personal data protection and privacy practices and policies of this website may differ from those of Avvanz. Avvanz does not accept any responsibility or liability for such other practices and policies and recommends that you consult the privacy notices of those websites before you submit any personal information to any of those websites.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTen" aria-expanded="false" aria-controls="flush-collapseTen">
                                    Contact us
                                </button>
                            </h2>
                            <div id="flush-collapseTen" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <p>
                                        Please contact us if you have any questions about this privacy policy or about information we hold about you.
                                    </p>
                                    <p>
                                        As indicated above, the handling of certain personal information may be necessary to maintain your registration with us and/or for processing transactions relating to the purchase of services from us.
                                    </p>
                                    <p>
                                        Except for personal information that Avvanz received consequent upon the relevant contracts with our clients to provide screening services, in which case the data subject must contact the relevant client direct to amend any earlier consent the data subject has given, to check and/or to correct his/her personal data:
                                    </p>
                                    <p>
                                        (i) you may at any time contact us to withdraw consents given for the collection, use and/or disclosure of your personal data and we may advise you of the consequences of such withdrawal of consent(s), if any; and
                                    </p>
                                    <p>
                                        (ii) you may contact us if you wish to inform us of any changes to your personal information, check on the accuracy of the personal information we hold about you and request that corrections be made to such information – at no cost to you.
                                    </p>
                                    <p>
                                        You may contact our Data Protection Officer for any of the reasons stated above at Tel: [+65-68095398] or at Email: [DPO@avvanz.com].
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-5 d-flex align-items-center justify-content-center">
                <img 
                    src="{{ asset('images/about/health2.webp') }}"
                    alt="Health Image 2"
                    class="transition-up img-fluid rounded-3 w-auto h-auto"
                    loading="lazy">
            </div>
        </div>
    </div>
</section>

@endsection