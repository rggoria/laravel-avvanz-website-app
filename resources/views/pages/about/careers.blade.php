@extends('layouts.master')

@section('title')
Join Avvanz - Avvanz Global
@endsection

@section('content')

@section('css')
<link rel="stylesheet" href="{{ asset('css/about.css') }}">
@endsection()

<!--  Navbar Section -->
@include('layouts.navbar')

<!-- Hero Section -->
<div class="bg-image-2">
    <div class="container padding-vertical">
        <div class="row text-white">
            <div class="col-md-7 offset-auto">
                <h1 class="fw-bolder display-5">
                    Avvanz Careers
                </h1>
                <h1 class="divider-start-25"></h1>
                <p>
                    Join our Team
                </p>
            </div>
        </div>
    </div>
</div>

<!-- Join Section -->
<section class="container margin-vertical">
    <h1 class="text-center text-dmb display-5 fw-bolder">
        JOIN US NOW!
    </h1>
    <h1 class="text-center divider-center-25"></h1>
    <p class="text-center mt-2 text-black">
        To join us, please fill in the required information so that we connect with you soonest possible.
    </p>

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="p-4">
                <form>
                    <div class="mb-3">
                        <label for="name" class="form-label text-dmb fw-bolder">Name <span class="sup text-danger">*</span></label>
                        <input type="text" class="form-control" id="name" placeholder="Enter your name" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label text-dmb fw-bolder">Email <span class="sup text-danger">*</span></label>
                        <input type="email" class="form-control" id="email" placeholder="Enter your email" required>
                    </div>
                    <div class="mb-3">
                        <label for="contact" class="form-label text-dmb fw-bolder">Contact No. <span class="sup text-danger">*</span></label>
                        <input type="contact" class="form-control" id="contact" placeholder="Enter your contact no." required>
                    </div>
                    <div class="mb-3">
                        <label for="country" class="form-label text-dmb fw-bolder">Country <span class="sup text-danger">*</span></label>
                        <input type="country" class="form-control" id="country" placeholder="Enter your country" required>
                    </div>
                    <div class="mb-3">
                        <label for="experience" class="form-label text-dmb fw-bolder">Work Experience <span class="sup text-danger">*</span></label>
                        <select class="form-select form-select mb-3" name="experience" id="experience">
                            <option selected>Select Experience</option>
                            <option value="0">Fresher</option>
                            <option value="1">1+Year</option>
                            <option value="2">2+Year</option>
                            <option value="3">3+Year</option>
                            <option value="4">4+Year</option>
                            <option value="5">5 and Above</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="position" class="form-label text-dmb fw-bolder">Work Position <span class="sup text-danger">*</span></label>
                        <select class="form-select form-select mb-3" name="experience" id="experience">
                            <option selected>Select Position</option>
                            <option value="BS">Business Consultant</option>
                            <option value="SEC">Software Engineer Consultant</option>
                            <option value="ME">Marketing Executive</option>
                            <option value="JSE">Junior Software Engineer</option>
                            <option value="VA">Verification Associate</option>
                            <option value="LGS">Lead Generation Specialist</option>
                            <option value="TLC">Team Leader For Client Success</option>
                            <option value="CO">Compliance Officer</option>
                            <option value="CSE">Client Services Executive</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="formFile" class="form-label text-dmb fw-bolder">Upload your CV <span class="sup text-danger">*</span></label>
                        <input class="form-control" type="file" id="formFile">
                    </div>

                    <button type="submit" class="btn btn-marigold-transition w-100">submit</button>
                </form>
            </div>
        </div>
    </div>
</section>

<!-- Careers Section -->
<section class="bg-afw py-5">
    <div class="container my-5">
        <h1 class="text-center text-dmb fw-bolder display-5">
            Avvanz Careers
        </h1>
        <h1 class="divider-center-25"></h1>
        <br>
        <div class="accordion accordion-flush border border-white text-white" id="accordionFlushExample">
            <!-- Role #1 -->
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                        Business Consultant (Digital Sales)
                    </button>
                </h2>
                <div id="flush-collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">
                        <p>
                            Avvanz, a fast growing HRTech + FinTech company, is looking for Business Consultants based in Singapore, Australia, United States of America and United Kingdom who will be privileged to attain challenging opportunities and a clear career path that will facilitate huge personal and professional development, as well as a competitive and rewarding compensation package.
                        </p>
                        <p class="text-co fw-bolder">
                            Job Scope / Principal Accountabilities:
                        </p>
                        <ul>
                            <li>
                                Strong Hunter who will call into Avvanz’s database of leads and/or generate own leads via market research –> Qualify prospect for a match against Avvanz’s solutions –> Set up appointments to understand prospect’s challenges and position Avvanz’s solutions accordingly –> Nurture and develop clients through engagement plans and activities –> Submit RFPs/Detailed proposals –> Convert to Opportunities –> Acquire as New Business –> Onboard and Retain new clients with strong account management. Manage the resolution of client feedback and queries and escalate to higher levels if needed. Evaluate client feedback to identify areas for improvement and recommend changes to enhance client experience.
                            </li>
                            <li>
                                Develop business development plan with critical success factors and KPIs and implement integrated marketing activities across digital channels within the allocated budgets. The strategic plan must be updated in line with market and industry trends.
                            </li>
                            <li>
                                Apply Consultative selling versus a product-oriented selling approach.
                            </li>
                            <li>
                                Consistently maintain Avvanz’s highly ethical and professional approach to all Clients.
                            </li>
                            <li>
                                Demonstrate and effectively articulate the value propositions of our services eventually sealing an amicable and revenue-generating partnership with the targeted clients. Develop and interpret financial models for business development opportunities identified.
                            </li>
                            <li>
                                Collaborate with other Functional Groups seamlessly to ensure Client expectations (which should have been set properly in the first place) are exceeded.
                            </li>
                            <li>
                                Ensure a healthy sales pipeline is maintained in the Zoho CRM. This is to aid in accurate forecasting of current and future business projections.
                            </li>
                        </ul>
                        <p class="text-co fw-bolder">
                            Job Requirements:
                        </p>
                        <ul>
                            <li>
                                Bachelor’s degree in Business Studies/Administration/Management, Marketing or any related field of study with more than 3 to 10 years of sales and business development experience in penetrating and selling into Fortune 500 or major corporate and / or regional MNCs. MBA is a plus
                            </li>
                            <li>
                                Proven ability to communicate confidently and effectively especially with Senior Management audience (CXOs, VPs, Directors, Senior Managers) and act proactively in a consultative business environment. Able to produce results both independently and as part of a team.
                            </li>
                            <li>
                                Outstanding relationship management capabilities with strong analytical and interpersonal skills.
                            </li>
                            <li>
                                High level of energy and self-driven initiative. The Sales characteristic preferred is a “Hunter” type. You have to be the type who craves a challenge and not afraid to push yourself outside your zone of comfort
                            </li>
                            <li>
                                Desire to work in a fast-paced, intensely deadline driven environment with rapidly shifting priorities.
                            </li>
                            <li>
                                Definite Plus if there are senior levels HR and/or Risk/Compliance contacts in Fortune 500 companies across multiple market verticals/segments.
                            </li>
                            <li>
                                Travelling might be required whenever needed.
                            </li>
                        </ul>
                        <p class="text-co fw-bolder">
                            Skills and Competencies:
                        </p>
                        <ul>
                            <li>
                                Insight-led Selling methodology ie Challenge-the-client-norms, re-educate the Clients and then position Avvanz’s value propositions.
                            </li>
                            <li>
                                Candidates with Information Services or Professional Services selling experiences highly preferred.
                            </li>
                            <li>
                                Excellent presentation skills.
                            </li>
                            <li>
                                “Hands-on” approach to challenges and solutions oriented.
                            </li>
                            <li>
                                Strong “soft skills” imbued with cross-cultural understanding of business across the APAC region.
                            </li>
                            <li>
                                Excellent oral and written skills in English is a MUST. Ability to speak other languages is a plus.
                            </li>
                            <li>
                                Proficient in word processing, presentation, database, email and online software. Experience in working with CRM like Salesforce, Siebel or Zoho is an added plus
                            </li>
                            <li>
                                Specific skills and competencies: Business development, Business needs analysis, Business negotiation, Networking, Sales strategy, Partnership management, Stakeholder management, Technical sales support, Market research, Interpersonal skills, Communication, Problem solving, Service orientation, Transdisciplinary thinking
                            </li>
                        </ul>
                        <p>
                            We offer 5-day work week and/or attractive commission package to the right candidate.
                        </p>
                        <p>
                            Interested persons, please apply with full resume by email to <a href="mailto:Kannan@avvanz.com" class="link-hover">Kannan@avvanz.com</a>.
                        </p>
                        <p>
                            Only Candidates who meet the above requirements and have strong achievements track records are invited to apply.
                        </p>
                        <p>
                            Please state in email subject line “Application for role of Business Consultant (Digital Sales)”
                        </p>
                        <p>
                            Personal Data collected will be used for recruitment-related purposes only.
                        </p>
                    </div>
                </div>
            </div>
            <!-- Role #2 -->
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                        Software Engineering Consultant
                    </button>
                </h2>
                <div id="flush-collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">
                        <p>
                            Avvanz, a fast growing HRTech + FinTech company, is looking for Software Engineering Consultant(s) based in Singapore who will help drive Avvanz’s Technology arm’s projects.
                        </p>
                        <p class="fw-bolder text-co">
                            Job Scope / Principal Accountabilities:
                        </p>
                        <ul>
                            <li>
                                Participate in discussions with stakeholders to understand user requirements
                            </li>
                            <li>
                                Analyse user and business requirements
                            </li>
                            <li>
                                Propose new technologies for cutting edge platform development
                            </li>
                            <li>
                                Manage design of software – Apply selected software design pattern to the design of software components or modules
                            </li>
                            <li>
                                Build applications including the front-end of applications through appealing visual design
                            </li>
                            <li>
                                Manage software construction processes
                            </li>
                            <li>
                                Develop and manage well-functioning databases and applications.
                            </li>
                            <li>
                                Write effective APIs and to integrate with partner platforms
                            </li>
                            <li>
                                Oversee software testing and test software to ensure responsiveness and efficiency.
                            </li>
                            <li>
                                Troubleshoot, debug and upgrade software.
                            </li>
                            <li>
                                Oversee security problems to software.
                            </li>
                            <li>
                                Create security and data protection settings.
                            </li>
                            <li>
                                Build features and applications with a mobile responsive design.
                            </li>
                            <li>
                                Write technical documentation.
                            </li>
                            <li>
                                Continues Integration, Automation, and testing on the product.
                            </li>
                            <li>
                                Programming / Scripting for integration & automation.
                            </li>
                            <li>
                                Offers technical consultation to clients to implement AI, Big Data, RPA, Blockchain solutions
                            </li>
                            <li>
                                Manage software management configuration (SCM)
                            </li>
                            <li>
                                KPIs measurement
                            </li>
                        </ul>
                        <p class="fw-bolder text-co">
                            Specific Skills and Competencies:
                        </p>
                        <p>
                            Agile software development, Applications developments, Applications integration, Applications support and enhancement, Business environment analysis, Business needs analysis, Configuration tracking, Data design, Emerging technology synthesis, Problem management, Software configuration, Software design, Software testing, Stakeholder management, Systems integration, Test planning, User interface design, Computational thinking, Problem solving, Lifelong learning, Communication, Teamwork
                        </p>
                    </div>
                </div>
            </div>
            <!-- Role #3 -->
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                        Marketing Executive
                    </button>
                </h2>
                <div id="flush-collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">
                        <p class="fw-bolder">
                            Position Title: Marketing Executive
                        </p>
                        <p class="fw-bolder">
                            Section & Department: Marketing
                        </p>
                        <p class="fw-bolder">
                            Immediate Head:
                        </p>
                        <p class="fw-bolder text-co">
                            Role Summary:
                        </p>
                        <p>
                            As a Marketing Executive, you’ll be instrumental in driving strategic marketing initiatives to promote Avvanz’s services and strengthen its brand presence. Responsibilities include campaign management, content creation, digital marketing, market research, lead generation, brand management, and performance tracking. Your role is essential in acquiring new clients, engaging target audiences, and achieving business objectives through effective marketing strategies and campaigns.
                        </p>
                        <p class="fw-bolder text-co">
                            Job Scope / Principal Accountabilities:
                        </p>
                        <ul>
                            <li>
                                Collaborate with the marketing team to develop and execute strategic marketing campaigns across various channels, including digital marketing, content marketing, social media marketing, and email marketing.
                            </li>
                            <li>
                                Conducting market research and competitive analysis to identify industry trends, customer preferences, and market opportunities.
                            </li>
                            <li>
                                Develop high-quality and engaging content, such as blog posts, articles, case studies, and white papers, that educate potential clients about the benefits of background screening and showcase Avvanz’s expertise.
                            </li>
                            <li>
                                Implementing digital marketing strategies to enhance online visibility, drive website traffic, and generate leads.
                            </li>
                            <li>
                                Manage Avvanz’s social media presence, creating and sharing engaging content, and fostering conversations with our target audience. You will stay up-to-date on social media trends and identify opportunities to expand our reach.
                            </li>
                            <li>
                                Develop and implement strategies to generate qualified leads through targeted marketing campaigns and online lead capture forms.
                            </li>
                            <li>
                                Track and analyze marketing campaign performance using marketing analytics tools. You will use data insights to measure success, identify areas for improvement, and optimize future campaigns.
                            </li>
                            <li>
                                Supporting brand development and management initiatives to enhance Avvanz’s brand awareness and reputation in the marketplace.
                            </li>
                            <li>
                                Maintain positive relationships with media outlets and identify opportunities to secure media coverage for Avvanz and its services.
                            </li>
                            <li>
                                Ensure related compliance requirements are addressed, e.g., privacy, security, and administrative regulations associated with Information and privacy management systems, are followed in Singapore HQ and the Philippines site.
                            </li>
                            <li>
                                Be vigilant to report possible security and privacy incidents as required through the ISO core team and department heads or email dpo@avvanz.com and iso@avvanz.com, and ensure appropriate risk mitigation and control processes are taken to avoid further risks.
                            </li>
                        </ul>
                        <p class="fw-bolder text-co">
                            Qualifications, Knowledge, Skills and Competencies required:
                        </p>
                        <ul>
                            <li>
                                Possess a bachelor’s degree in Marketing, Communications, or a related field.
                            </li>
                            <li>
                                Minimum 1-2 years of experience in marketing or a related field.
                            </li>
                            <li>
                                Strong understanding of marketing principles and best practices, with experience in digital marketing, content marketing, and social media marketing a plus.
                            </li>
                            <li>
                                Excellent communication and writing skills, with the ability to create clear, concise, and engaging content.
                            </li>
                            <li>
                                Analytical mindset with the ability to track and interpret marketing data.
                            </li>
                            <li>
                                A creative and results-oriented individual with a passion for marketing and brand awareness.
                            </li>
                            <li>
                                Proficient in Microsoft Office Suite and marketing automation tools (e.g., HubSpot, Mailchimp).
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- Role #4 -->
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">
                        Junior Software Engineer
                    </button>
                </h2>
                <div id="flush-collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">
                        <p class="fw-bolder">
                            Position Title: Junior Software Engineer
                        </p>
                        <p class="fw-bolder">
                            Section & Department: IT
                        </p>
                        <p class="fw-bolder">
                            Immediate Head: IT Manager
                        </p>
                        <p class="fw-bolder text-co">
                            Role Summary:
                        </p>
                        <p>
                            A Junior Software Engineer typically plays a foundational role within a software development team, supporting the design, development, testing, and maintenance of software systems. Additionally, you will test and troubleshoot software, implement security measures, and write technical documentation. Your contributions are essential for delivering high-quality, user-friendly web applications that support Avvanz’s services and drive business success.
                        </p>
                        <p class="fw-bolder text-co">
                            Job Scope / Principal Accountabilities:
                        </p>
                        <ul>
                            <li>
                                Participate in discussions with stakeholders to understand user requirements
                            </li>
                            <li>
                                Analyse user and business requirements
                            </li>
                            <li>
                                Propose new technologies for cutting edge platform development
                            </li>
                            <li>
                                Manage design of software – Apply selected software design pattern to the design of software components or modules
                            </li>
                            <li>
                                Build applications including the front-end of applications through appealing visual design
                            </li>
                            <li>
                                Manage software construction processes
                            </li>
                            <li>
                                Develop and manage well-functioning databases and applications.
                            </li>
                            <li>
                                Write effective APIs and to integrate with partner platforms
                            </li>
                            <li>
                                Oversee software testing and test software to ensure responsiveness and efficiency.
                            </li>
                            <li>
                                Troubleshoot, debug and upgrade software.
                            </li>
                            <li>
                                Oversee security problems to software.
                            </li>
                            <li>
                                Create security and data protection settings.
                            </li>
                            <li>
                                Build features and applications with a mobile responsive design.
                            </li>
                            <li>
                                Write technical documentation.
                            </li>
                            <li>
                                Continues Integration, Automation, and testing on the product.
                            </li>
                            <li>
                                Programming / Scripting for integration & automation.
                            </li>
                            <li>
                                Offers technical consultation to clients to implement AI, Big Data, RPA, Blockchain solutions
                            </li>
                            <li>
                                Manage software management configuration (SCM)
                            </li>
                            <li>
                                KPIs measurement
                            </li>
                            <li>
                                Ensure related compliance requirements are addressed, e.g., privacy, security, and administrative regulations associated with Information and privacy management systems, are followed in Singapore HQ and the Philippines site.
                            </li>
                            <li>
                                Be vigilant to report possible security and privacy incidents as required through the ISO core team and department heads or email dpo@avvanz.com and iso@avvanz.com, and ensure appropriate risk mitigation and control processes are taken to avoid further risks.
                            </li>
                        </ul>
                        <p class="fw-bolder text-co">
                            Qualifications, Knowledge, Skills and Competencies required:
                        </p>
                        <ul>
                            <li>
                                Bachelor’s degree in computer science, engineering, or a related technical field
                            </li>
                            <li>
                                Excellent knowledge of front-end web programming languages, such as HTML, CSS, JavaScript, and AngularJS, with ability to render server-side and client-side content
                            </li>
                            <li>
                                Excellent knowledge of one or more back-end programming languages (PHP, Java, jQuery, C#)
                            </li>
                            <li>
                                Familiarity with common programming design patterns and best practices
                            </li>
                            <li>
                                Experience with common web development tools and services, such as version control software, package managers, and CI/CD pipelines
                            </li>
                            <li>
                                Average communication skills – written or verbal
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- Role #5 -->
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFive" aria-expanded="false" aria-controls="flush-collapseFive">
                        Verification Associate
                    </button>
                </h2>
                <div id="flush-collapseFive" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">
                        <p class="fw-bolder">
                            Position Title: Verification Associate
                        </p>
                        <p class="fw-bolder">
                            Section & Department: Operations
                        </p>
                        <p class="fw-bolder">
                            Immediate Head: Team Leader for Operations
                        </p>
                        <p class="fw-bolder text-co">
                            Role Summary:
                        </p>
                        <p>
                            As a Verification Associate, you will be responsible for ensuring the accuracy and completeness of information through thorough verification processes. Your main duty will involve verifying various types of documents, such as employment history, educational qualifications, and professional certifications, to authenticate their validity. You will meticulously review provided documentation, conduct background checks, and communicate with relevant institutions or individuals to confirm the authenticity of the information provided. Additionally, you will maintain detailed records of verification activities and promptly report any discrepancies or inconsistencies discovered during the process.
                        </p>
                        <p class="fw-bolder text-co">
                            Job Scope / Principal Accountabilities:
                        </p>
                        <ul>
                            <li>
                                Manage inbound/outbound calls for Employment, Education, Reference and Address verification.
                            </li>
                            <li>
                                Maintain effective record keeping for all calls handled.
                            </li>
                            <li>
                                Point of contact to all parties involved (school, company, references, LGUs) in obtaining verification information
                            </li>
                            <li>
                                Guarantee daily, weekly and monthly goals are met
                            </li>
                            <li>
                                Analyze accuracy and completion of verified information.
                            </li>
                            <li>
                                Investigate and confirm reference credibility
                            </li>
                            <li>
                                Provide daily summary report on the status of checks that are beyond TAT.
                            </li>
                            <li>
                                Maintain an updated list of entities contact information
                            </li>
                            <li>
                                Monthly checking of vendor endorsements
                            </li>
                            <li>
                                Ensure to provide complete and valid attempts on all verifications, ensure that all necessary annexures are saved.
                            </li>
                            <li>
                                Ensure related compliance requirements are addressed, e.g., privacy, security, and administrative regulations associated with Information and privacy management systems, are followed in Singapore HQ and the Philippines site.
                            </li>
                            <li>
                                Be vigilant to report possible security and privacy incidents as required through the ISO core team and department heads or email dpo@avvanz.com and iso@avvanz.com, and ensure appropriate risk mitigation and control processes are taken to avoid further risks.
                            </li>
                        </ul>
                        <p class="fw-bolder text-co">
                            Qualifications, Knowledge, Skills and Competencies required:
                        </p>
                        <ul>
                            <li>
                                Bachelor’s degree in any related field.
                            </li>
                            <li>
                                One to two years work experience in background checking and verification is preferred.
                            </li>
                            <li>
                                Excellent attention to detail and accuracy in entering data.
                            </li>
                            <li>
                                Strong written and verbal communication skills.
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- Role #6 -->
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseSix" aria-expanded="false" aria-controls="flush-collapseSix">
                        Lead Generation Specialist
                    </button>
                </h2>
                <div id="flush-collapseSix" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">
                        <p class="fw-bolder">
                            Position Title: Lead Generation Specialist
                        </p>
                        <p class="fw-bolder">
                            Section & Department: Marketing
                        </p>
                        <p class="fw-bolder">
                            Immediate Head: Global Marketing Strategist
                        </p>
                        <p class="fw-bolder text-co">
                            Role Summary:
                        </p>
                        <p>
                            As a Lead Generation Specialist, your primary responsibility is to identify and engage potential leads to drive business growth. You will research and identify leads through various channels, conduct outreach campaigns tailored to their needs, qualify and segment leads based on predefined criteria, and nurture qualified leads over time. Collaboration with the sales team is crucial for seamless handoff and conversion. Additionally, you will track key metrics, analyze performance, and stay informed about industry trends to refine lead generation strategies.
                        </p>
                        <p class="fw-bolder text-co">
                            Job Scope / Principal Accountabilities:
                        </p>
                        <ul>
                            <li>
                                Prospect Identification: Research and identify potential leads through various channels, including online databases, social media, industry events, and referrals. Utilize lead generation software and tools to compile comprehensive lists of potential customers.
                            </li>
                            <li>
                                Outreach and Engagement: Conduct outreach campaigns via email, phone calls, social media, and other relevant channels to introduce our products/services to potential leads. Tailor messaging to address the specific needs and pain points of each prospect.
                            </li>
                            <li>
                                Qualification and Segmentation: Qualify leads based on predetermined criteria, ensuring they meet the company’s ideal customer profile. Segment leads based on factors such as industry, company size, and level of interest.
                            </li>
                            <li>
                                Lead Nurturing: Develop and implement lead nurturing strategies to maintain engagement with qualified leads over time. Provide relevant content, resources, and information to educate and build trust with potential customers.
                            </li>
                            <li>
                                Collaboration with Sales Team: Work closely with the sales team to ensure seamless handoff of qualified leads for further follow-up and conversion. Provide comprehensive lead profiles and context to sales representatives.
                            </li>
                            <li>
                                Analytics and Reporting: Track and analyze key performance metrics, including lead conversion rates, lead quality, and ROI of lead generation efforts. Generate regular reports to evaluate the effectiveness of lead generation strategies and make recommendations for improvement.
                            </li>
                            <li>
                                Market Research: Stay informed about industry trends, competitor activities, and emerging technologies to refine lead generation strategies.
                            </li>
                            <li>
                                Ensure related compliance requirements are addressed, e.g., privacy, security, and administrative regulations associated with Information and privacy management systems, are followed in Singapore HQ and the Philippines site.
                            </li>
                            <li>
                                Be vigilant to report possible security and privacy incidents as required through the ISO core team and department heads or email dpo@avvanz.com and iso@avvanz.com, and ensure appropriate risk mitigation and control processes are taken to avoid further risks.
                            </li>
                        </ul>
                        <p class="fw-bolder text-co">
                            By effectively executing your responsibilities and achieving the below KPIs, you will contribute to the overall success and profitability of the organization.
                        </p>
                        <ul>
                            <li>
                                Lead Volume: The total number of leads generated within a specific period.
                            </li>
                            <li>
                                Lead Quality: The measure of how likely a lead is to convert into a paying customer. This can be assessed based on factors like demographic information, behavior, and engagement level.
                            </li>
                            <li>
                                Conversion Rate: The percentage of leads that convert into qualified opportunities or customers. It’s calculated as (Number of Conversions / Number of Leads) * 100.
                            </li>
                            <li>
                                Cost per Lead (CPL): The amount spent to acquire each lead. It’s calculated as (Total Lead Generation Costs / Number of Leads).
                            </li>
                            <li>
                                Lead-to-Sales Qualified Lead (SQL) Ratio: The proportion of leads that meet the criteria to be considered Sales Qualified Leads.
                            </li>
                            <li>
                                Lead Velocity Rate (LVR): The rate at which the total number of leads is growing or declining over a specific period.
                            </li>
                            <li>
                                Time to Conversion: The average amount of time it takes for a lead to progress from the initial interaction to becoming a customer.
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- Role #7 -->
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseSeven" aria-expanded="false" aria-controls="flush-collapseSeven">
                        Team Leader for Client Success
                    </button>
                </h2>
                <div id="flush-collapseSeven" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">
                        <p class="fw-bolder">
                            Position Title: Team Leader for Client Success
                        </p>
                        <p class="fw-bolder">
                            Section & Department: Client Success
                        </p>
                        <p class="fw-bolder">
                            Immediate Head: Senior Operations Manager
                        </p>
                        <p class="fw-bolder text-co">
                            Role Summary:
                        </p>
                        <p>
                            As a Team Leader for Client Success, you will lead a dynamic team responsible for ensuring client satisfaction, retention, and success. Your role encompasses strategic planning, performance management, and proactive problem-solving to drive excellence in client service delivery. By actively participating in group planning, process improvement, and delegation of tasks, you play a vital role in shaping the success and growth of the Client Success department.
                        </p>
                        <p class="fw-bolder text-co">
                            Job Scope / Principal Accountabilities:
                        </p>
                        <ul>
                            <li>
                                Involvement in group planning, implementation, delegation of tasks, and decision-making.
                            </li>
                            <li>
                                Support process improvement and oversees performance of the Client Success department
                            </li>
                            <li>
                                Identify risks and challenges of the Client Success department and plan for resolutions
                            </li>
                            <li>
                                Communicate clear instructions to team members and gather team members’ feedback
                            </li>
                            <li>
                                Monitor team members’ performance to ensure the training they are being provided is efficient and identify any additional training needed.
                            </li>
                            <li>
                                Manage the flow of the group’s day-to-day activities
                            </li>
                            <li>
                                Manage top tier accounts and solve client escalations if any
                            </li>
                            <li>
                                Coaching and mentoring of team members
                            </li>
                            <li>
                                Ensure related compliance requirements are addressed, e.g., privacy, security, and administrative regulations associated with Information and privacy management systems, are followed in Singapore HQ and the Philippines site.
                            </li>
                            <li>
                                Be vigilant to report possible security and privacy incidents as required through the ISO core team and department heads or email dpo@avvanz.com and iso@avvanz.com, and ensure appropriate risk mitigation and control processes are taken to avoid further risks.
                            </li>
                        </ul>
                        <p class="fw-bolder text-co">
                            Qualifications, Knowledge, Skills and Competencies required:
                        </p>
                        <ul>
                            <li>
                                Prior experience in a team leadership role, preferably in client services or background screening
                            </li>
                            <li>
                                Strong understanding of background screening processes and regulations
                            </li>
                            <li>
                                Excellent communication and interpersonal skills
                            </li>
                            <li>
                                Ability to effectively manage and motivate a team
                            </li>
                            <li>
                                Proven track record of meeting or exceeding targets and KPIs
                            </li>
                            <li>
                                Experience in problem-solving and conflict resolution
                            </li>
                            <li>
                                Strong organizational and time management skills
                            </li>
                            <li>
                                Proficiency in relevant software and tools
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- Role #8 -->
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseEight" aria-expanded="false" aria-controls="flush-collapseEight">
                        Compliance Officer
                    </button>
                </h2>
                <div id="flush-collapseEight" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">
                        <p class="fw-bolder">
                            Position Title: Compliance Officer
                        </p>
                        <p class="fw-bolder">
                            Section & Department: Compliance
                        </p>
                        <p class="fw-bolder">
                            Immediate Head: CEO and Co-founder
                        </p>
                        <p class="fw-bolder text-co">
                            Role Summary:
                        </p>
                        <p>
                            As a Compliance Officer, your role revolves around developing and implementing audit and compliance programs to safeguard data and ensure regulatory adherence, following ISO 27001 standards. You assess control systems, identify improvement opportunities, and coordinate with the audit team to present findings to management. Additionally, you monitor compliance with policies and regulations, provide training and coaching to staff, and address compliance violations to uphold the integrity of our background screening services.
                        </p>
                        <p class="fw-bolder text-co">
                            Job Scope / Principal Accountabilities:
                        </p>
                        <ul>
                            <li>
                                Responsible for building, developing and implementing audit and compliance programs and policies in accordance with ISO 27001 to safeguard data and regularly assess the efficiency of control systems and recommend effective improvements.
                            </li>
                            <li>
                                Understand and follow workplace policies and procedures. Review and evaluate company procedures and reports to identify hidden risks or common issues
                            </li>
                            <li>
                                Coordinate with the audit team in developing audit reports; present audit reports to top management, as needed. Ensure compliance to information security and data privacy requirements
                            </li>
                            <li>
                                Identify processes, situations, etc., where organization is meeting requirements, as well as identify opportunities for improvement
                            </li>
                            <li>
                                Liaise with Human Resources to seek clarification on policy issues or queries
                            </li>
                            <li>
                                Attend client sessions and conduct internal calibration meetings with team members to align expectations and quality standards
                            </li>
                            <li>
                                Participate in calibration sessions to maintain consistency in internal evaluations
                            </li>
                            <li>
                                Assess each role’s interaction with customers against a set of quality standards, including subjective components such as soft skills and courtesy.
                            </li>
                            <li>
                                Ensuring that quality control processes comply with relevant regulatory requirements and industry standards.
                            </li>
                            <li>
                                Developing and implementing quality control processes and standards to ensure products or services meet or exceed client expectations.
                            </li>
                            <li>
                                Performing tests, experiments, or statistical analysis to identify weaknesses or areas for improvement in services and processes.
                            </li>
                            <li>
                                Maintain an educational program to continually develop personal skills of staff, training evaluation measures, training materials creation, simulations, and knowledge assessments
                            </li>
                            <li>
                                Assess training needs, learning styles, and customizes training approach to be the most effective based upon the participants and training contents
                            </li>
                            <li>
                                Deliver effective and efficient coaching, regular feedback sessions, triad and/or focus group discussions to drive quality performance improvements
                            </li>
                            <li>
                                Monitor compliance with laws, regulations, policies, contract and agreement obligations
                            </li>
                            <li>
                                Report and disclose compliance violations and implement appropriate improvement measures to prevent fraud, misconduct and abuse
                            </li>
                            <li>
                                Lead, manage, and oversee the Quality Control associates on their day to day tasks and identify departmental strategies to attain departmental goals
                            </li>
                            <li>
                                Ensure related compliance requirements are addressed, e.g., privacy, security, and administrative regulations associated with Information and privacy management systems, are followed in Singapore HQ and the Philippines site.
                            </li>
                            <li>
                                Be vigilant to report possible security and privacy incidents as required through the ISO core team and department heads or email dpo@avvanz.com and iso@avvanz.com, and ensure appropriate risk mitigation and control processes are taken to avoid further risks.
                            </li>
                            <p class="fw-bolder text-co">
                                Qualifications, Knowledge, Skills and Competencies required:
                            </p>
                            <ul>
                                <li>
                                    Bachelor’s degree in Business Management or any related field.
                                </li>
                                <li>
                                    One to two years work experience in ISO compliance
                                </li>
                                <li>
                                    Excellent attention to detail and accuracy in entering data.
                                </li>
                                <li>
                                    Strong written and verbal communication skills.
                                </li>
                            </ul>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- Role #9 -->
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseEight" aria-expanded="false" aria-controls="flush-collapseEight">
                        Client Services Executive
                    </button>
                </h2>
                <div id="flush-collapseEight" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">
                        <p class="fw-bolder">
                            Position Title: Client Services Executive
                        </p>
                        <p class="fw-bolder">
                            Section & Department: Client Success
                        </p>
                        <p class="fw-bolder">
                            Immediate Head: Team Leader for Client Success
                        </p>
                        <p class="fw-bolder text-co">
                            Role Summary:
                        </p>
                        <p>
                            As a Client Services Executive, you are the cornerstone of our client relationships, ensuring the seamless delivery of our services while driving client satisfaction and retention. Your role encompasses a diverse range of responsibilities, from monitoring cases and orders to conducting business reviews and ensuring compliance with client instructions. With a focus on proactive communication, problem-solving, and operational excellence, you play a vital role in ensuring the success of our clients and the effectiveness of our background screening processes.
                        </p>
                        <p class="fw-bolder text-co">
                            Job Scope / Principal Accountabilities:
                        </p>
                        <ul>
                            <li>
                                Cases and Orders monitoring
                            </li>
                            <li>
                                Orders integration
                            </li>
                            <li>
                                Turn-around time monitoring
                            </li>
                            <li>
                                Candidate chasing
                            </li>
                            <li>
                                Guarantee daily, weekly, and monthly goals are met
                            </li>
                            <li>
                                Analyze verified information for accuracy and completion
                            </li>
                            <li>
                                Investigate and confirm reference credibility
                            </li>
                            <li>
                                Maintaining a positive, empathetic, and professional attitude toward clients at all times.
                            </li>
                            <li>
                                Responding promptly to clients’ inquiries.
                            </li>
                            <li>
                                Communicating with clients through various channels.
                            </li>
                            <li>
                                Acknowledging and resolving clients’ complaints.
                            </li>
                            <li>
                                Knowing our ScreenGlobal Platform inside and out so that you can answer questions.
                            </li>
                            <li>
                                Onboarding new and existing clients
                            </li>
                            <li>
                                Conducting business review with the clients
                            </li>
                            <li>
                                Case creation and check out orders for clients requiring these services
                            </li>
                            <li>
                                Quality monitoring the checks and annexures before submitting the final report to the clients
                            </li>
                            <li>
                                Ensure that the client compliance tracker is updated on a daily basis
                            </li>
                            <li>
                                Abide to client instructions and ensure that instructions are relayed to operations team
                            </li>
                            <li>
                                Ensure related compliance requirements are addressed, e.g., privacy, security, and administrative regulations associated with Information and privacy management systems, are followed in Singapore HQ and the Philippines site.
                            </li>
                            <li>
                                Be vigilant to report possible security and privacy incidents as required through the ISO core team and department heads or email dpo@avvanz.com and iso@avvanz.com, and ensure appropriate risk mitigation and control processes are taken to avoid further risks.
                            </li>
                        </ul>
                        <p class="fw-bolder text-co">
                            Qualifications, Knowledge, Skills and Competencies required:
                        </p>
                        <ul>
                            <li>
                                Bachelor’s degree in any related field.
                            </li>
                            <li>
                                One to two years work experience in background checking and customer service is preferred.
                            </li>
                            <li>
                                Excellent attention to detail and accuracy in entering data.
                            </li>
                            <li>
                                Strong written and verbal communication skills.
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Floating Button -->
@include('layouts.floating')

<!-- Footer Section -->
@include('layouts.footer')

@endsection