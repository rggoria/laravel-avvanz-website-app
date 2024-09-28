@extends('layouts.master')

@section('title')
UK DBS Checks - Avvanz Global
@endsection

@section('css')
<link rel="preload" href="{{ asset('images/homepage/homepageBg.webp') }}" as="image">
@endsection()

@section('content')

<section class="bg-image-2">
    <div class="container padding-vertical text-white">
        <h1 class="fw-bolder display-5">            
            UK DBS Checks
        </h1>
        <p>
            <i class="fa fa-calendar"></i> May 31, 2023
        </p>
    </div>
</section>

<section class="container margin-vertical">
    <div class="text-center">
        <img class="img-fluid w-50 h-50" src="{{ asset('images/resources/blogItems/blog18-1.webp') }}" alt="blog18-1">
    </div> 
    <p>
        DBS stands for Disclosure and Barring Service, which is a government agency in the UK that provides criminal record checks. The DBS check is a background check that is carried out on individuals who work or volunteer with vulnerable groups, such as children or elderly people.
    </p>
    <p>
        There are mainly three types of DBS checks:
    </p>
    <p>
        <span class="fw-bolder">Basic DBS check</span>: This checks for unspent convictions and conditional cautions.
    </p>
    <p>
        This criminal check method runs the candidate’s details to the Disclosure and Barring Service – Ministry of Interior to check for convictions and conditional cautions that are considered to be unspent under the terms of the Rehabilitation of Offenders Act 1974. This can also be conducted on candidates no longer living/working in England or Wales.
    </p>
    <p>
        Mandatory Requirements: 5 years address history with dates of stay, filled-out DBS Application form, E-Mail Address, Passport/National ID reflecting Full Name, DOB, Nationality, and Birth Town, Birth Certificate and Current Driving License.
    </p>
    <p>
        <span class="fw-bolder">Standard DBS check</span>: This checks for spent and unspent convictions, cautions, reprimands and final warnings.
    </p>
    <p>
        This method shows the candidate’s details of both spent and unspent convictions, cautions, reprimands, and warnings that are held on the Police National Computer, which are not subject to filtering (removal of protected convictions and cautions).
    </p>
    <p>
        A Standard DBS Check is suitable for certain roles which fit with the Standard DBS legislation – Eligibility guidance for standard DBS checks – (<a href="https://www.gov.uk/government/publications/dbs-check-eligible-positions-guidance" class="link-hover">https://www.gov.uk/government/publications/dbs-check-eligible-positions-guidance</a>). An individual cannot apply for a standard check by themselves. There must be a recruiting organization that needs the applicant to get the check.
    </p>
    <p>
        Mandatory Requirements: Passport/National ID reflecting Full Name, DOB, Nationality, and Birth Town, Birth Certificate, Current Driving License.
    </p>
    <p>
        <span class="fw-bolder">Enhanced DBS check</span>: This checks for the same as a standard check plus any additional information held by the police or other relevant information from local police forces.
    </p>
    <p>
        This method shows the full details of a criminal record (i.e. cautions, warnings, reprimands, and convictions – both spent and unspent), and also searches the children and vulnerable adults ‘barred list’ to see if the applicant is prohibited from working with these groups.
    </p>
    <p>
        Enhanced DBS checks must be conducted on anyone working with children, or vulnerable adults.
    </p>
    <p>
        The methodology of this check involves the candidate undergoing an online application, which will be assisted by a representative from a DBS-registered body. Once the application has been completed, it will be submitted by the representative to the DBS (Disclosure & Barring Service). The DBS will then dispatch a certificate to the address provided by the candidate.
    </p>
    <p>
        Through the online application, the candidate must present the required identity proofs and also indicate the mailing address in receiving the certificate once the Enhanced DBS check has been completed as all Enhanced DBS Certificates are issued through post mail.
    </p>
    <p>
        Note that Enhanced DBS Checks can only be carried out on candidates from England or Wales, who are being employed by companies based in England or Wales. If an overseas employer needs an Enhanced DBS Check to be done on a candidate who had lived in England or Wales, it can only be done by the candidate via a certificate of conduct issued by the Police. 
    </p>
    <p>
        Mandatory Requirements: Active e-mail address (for online application purposes) and identity proofs such as Passport/National ID reflecting Full Name, DOB, Nationality, and Birth Town, Birth Certificate and Current Driving License.
    </p>
    <p>
        Avvanz also offers Basic Disclosure Scotland Check, ICPC and Volunteer DBS Check. The screenshot below from our multi-award winning ScreenGlobal platform ( <a href="https://www.avvanz.com/screenglobal/" class="link-hover">https://www.avvanz.com/screenglobal/</a> ) shows the options. Feel free to contact us at <a href="mailto:consult@avvanz.com" class="link-hover">consult@avvanz.com</a> for more information. 
    </p>
    <div class="text-center">
        <img class="img-fluid w-50 h-50" src="{{ asset('images/resources/blogItems/blog18-2.png') }}" alt="blog18-2">
    </div> 
    <div class="my-5">
        <div id="response-message"></div>
        <form id="contact-form">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label text-dmb fw-bolder">Name <span class="sup text-danger">*</span></label>
                <input name="name" type="text" class="form-control" id="name" placeholder="Enter your name">
                <div id="name-error" class="invalid-feedback"></div>
            </div>
            <div class="mb-3">
                <label for="cname" class="form-label text-dmb fw-bolder">Company Name <span class="sup text-danger">*</span></label>
                <input name="cname" type="text" class="form-control" id="cname" placeholder="Enter your company name">
                <div id="cname-error" class="invalid-feedback"></div>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label text-dmb fw-bolder">Company Email <span class="sup text-danger">*</span></label>
                <input name="email" type="email" class="form-control" id="email" placeholder="Enter your company email">
                <div id="email-error" class="invalid-feedback"></div>
            </div>
            <div class="mb-3">
                <label for="contact" class="form-label text-dmb fw-bolder">Company Contact No. <span class="sup text-danger">*</span></label>
                <input name="contact" type="text" class="form-control" id="contact" placeholder="Enter your contact no.">
                <div id="contact-error" class="invalid-feedback"></div>
            </div>
            <div class="mb-3">
                <label for="subject" class="form-label text-dmb fw-bolder">Subject <span class="sup text-danger">*</span></label>
                <input name="subject" type="text" class="form-control" id="subject" placeholder="Enter your subject">
                <div id="subject-error" class="invalid-feedback"></div>
            </div>
            <div class="mb-3">
                <label for="message" class="form-label text-dmb fw-bolder">Message <span class="sup text-danger">*</span></label>
                <textarea name="message" class="form-control" id="message" rows="3" placeholder="Enter your message"></textarea>
                <div id="message-error" class="invalid-feedback"></div>
            </div>
            <div class="mb-3">
                <button type="submit" class="btn btn-marigold-transition w-100">Submit</button>
            </div>
        </form>
    </div>
    <p class="fw-bolder">
        What Checks to select?
    </p>
    <p>
        Employers or organizations can request DBS checks for their employees or volunteers as part of their safeguarding responsibilities.
    </p>
    <p>
        The type of check required depends on the role and level of contact an individual will have with vulnerable groups. For example, a basic DBS check may be sufficient for someone working in an administrative role, while an enhanced DBS check would be required for someone working closely with vulnerable individuals, such as a teacher or healthcare worker.
    </p>
    <p>
        If you need help to select, email us at <a href="mailto:consult@avvanz.com" class="link-hover">consult@avvanz.com</a>.
    </p>
    <p>
        For additional details, kindly refer to this link: <a href="{{ asset('files/resources/DBS-Checks.pdf') }}" class="link-hover">DBS Checks</a>.
    </p>
    <p class="fw-bolder">
        How to go about ordering?
    </p>
    <p>
        You can create a FREE Account at <a href="https://www.avvanz.com/screenglobal/" class="link-hover">https://www.avvanz.com/screenglobal/</a> and then start ordering Checks. 
    </p>
    <a href="https://youtu.be/ckP4hTUHKic" class="link-hover">https://youtu.be/ckP4hTUHKic</a>
    <p>
        Click on video above for a step-by-step process. 
    </p>
    <p>
        For a demo or more detailed information or a non-obligatory chat, drop us a note at <a href="mailto:consult@avvanz.com" class="link-hover">consult@avvanz.com</a>.
    </p>
    <div class="d-flex justify-content-center">
        <section class="mb-4 d-flex">
            <p class="fw-bolder m-1 align-content-center">
                Share this story:
            </p>
            <a
                class="btn text-white btn-floating m-1"
                style="background-color: #3b5998;"
                href="https://www.facebook.com/share_channel/?link=https%3A%2F%2Fwww.avvanz.com%2Fuk-dbs-checks%2F&app_id=966242223397117&source_surface=external_reshare&display&hashtag"
                target="_blank"
                role="button"
            >
                <i class="fab fa-facebook-f"></i>
            </a>
            <a
                class="btn text-white btn-floating m-1"
                style="background-color: #0082ca;"
                href="https://www.linkedin.com/uas/login?session_redirect=https%3A%2F%2Fwww.linkedin.com%2FshareArticle%3Fmini%3Dtrue%26url%3Dhttps%3A%2F%2Fwww.avvanz.com%2Fuk-dbs-checks%2F%26title%3DUK%2520DBS%2520Checks%2520-%2520Avvanz%2520Global%26summary%3D%26source%3Dhttps%3A%2F%2Fwww.avvanz.com%2Fuk-dbs-checks%2F"
                target="_blank"
                role="button"
            >
                <i class="fab fa-linkedin-in"></i>
            </a>
        </section>
    </div>
    <h1 class="fw-bolder display-5">
        UK DBS Checks
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
    $(document).ready(function() {
        $('#contact-form').on('submit', function(e) {
            e.preventDefault();
            $('.invalid-feedback').text('');
            $('#response-message').empty();
            $.ajax({
                type: 'POST',
                url: '{{ route('contact-send') }}',
                data: $(this).serialize(),
                success: function(response) {
                    $('#response-message').html('<p class="text-success">' + response.success + '</p>');
                    $('#contact-form')[0].reset(); // Reset form
                },
                error: function(xhr) {
                    if (xhr.status === 422) {
                        // Validation errors
                        $.each(xhr.responseJSON.errors, function(key, value) {
                            $('#' + key + '-error').text(value[0]).addClass('d-block');
                        });
                    } else {
                        $('#response-message').html('<p class="text-danger">An error occurred. Please try again.</p>');
                    }
                }
            });
        });
    });
</script>
@endsection

@endsection