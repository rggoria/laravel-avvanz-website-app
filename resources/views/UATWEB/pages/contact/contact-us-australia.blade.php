@extends('UATWEB.layouts.main')

@section('title')
Contact Us Australia - Avvanz Global
@endsection

@section('css')
<link rel="preload" href="{{ asset('images/contact/background/contactMainBg.webp') }}" as="image">

<style>
    .bg-image-2 {
        background: url("../images/contact/background/contactMainBg.webp") no-repeat center;
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

    .progress-bar-container {
        margin-bottom: 20px;
        width: 100%;
    }

    .progress {
        background-color: #467E92;
        height: 10px;
        border-radius: 5px;
        width: 100%;
    }

    .progress-bar {
        background-color: #ee9b26;
        height: 10px;
        border-radius: 5px;
        transition: width 0.3s ease;
    }

    /* Form step container */
    .form-step {
        display: none;
    }

    /* Show active step */
    .form-step.active {
        display: block;
    }

    .form-buttons button {
        width: 100%; /* Default to full width */
    }

    .form-buttons .col-6 button {
        width: 100%; /* Ensure buttons are full-width in their container */
    }
</style>
@endsection

@section('content')

<!-- Hero Section -->
<section class="bg-image-2">
    <div class="container padding-vertical">
        <div class="row text-white">
            <div class="col-md-7 offset-auto">
                <h1 class="fw-bolder display-5">
                    Make confident hiring decisions
                </h1>
                <p>
                    Trusted by 3000+ companies for background clarity
                </p>
                <h1 class="divider-start-25"></h1>
            </div>
        </div>
    </div>
</section>

<section class="container margin-vertical text-center">
    <div class="container my-5 d-flex justify-content-center">
        <div class="card border-mg bg-mg p-5 text-start text-white w-75">
            <form action="{{ route('submit-contact-us-australia') }}" method="POST">
                @csrf
                <div class="progress-bar-container">
                    <div class="progress">
                        <div class="progress-bar" id="progressBar" style="width: 25%;"></div>
                    </div>
                </div>

                <!-- Page 1 -->
                <div class="form-step active" id="step1">
                    <p class="fs-4 fw-bolder">
                        What best defines your role in the company?
                        <span class="text-danger">*</span>
                    </p>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="role" id="role1" value="Owner/CEO/Founder">
                        <label class="form-check-label" for="role1">
                            I'm an Owner/CEO/Founder
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="role" id="role2" value="HR/Recruitment">
                        <label class="form-check-label" for="role2">
                            I'm in HR/Recruitment
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="role" id="role3" value="Employee">
                        <label class="form-check-label" for="role3">
                            I'm an employee in another area of the company
                        </label>
                    </div>
                    <br>
                    <div class="form-buttons">
                        <div class="row">
                            <div class="col-12">
                                <button type="button" class="btn btn-co" id="next1">Next</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Page 2 -->
                <div class="form-step" id="step2">
                    <p class="fs-4 fw-bolder">
                        What best describes your company?
                        <span class="text-danger">*</span>
                    </p>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="companySize" id="company1" value="Large">
                        <label class="form-check-label" for="company1">
                            Large-sized (100+ employees)
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="companySize" id="company2" value="Medium">
                        <label class="form-check-label" for="company2">
                            Medium-sized (20-99 employees)
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="companySize" id="company3" value="Small">
                        <label class="form-check-label" for="company3">
                            Small-sized (less than 20 employees)
                        </label>
                    </div>                    
                    <br>
                    <div class="form-buttons">
                        <div class="row">
                            <div class="col-6">
                                <button type="button" class="btn btn-light" id="prev2">Previous</button>
                            </div>
                            <div class="col-6">
                                <button type="button" class="btn btn-co" id="next2">Next</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Page 3 -->
                <div class="form-step" id="step3">
                    <p class="fs-4 fw-bolder">
                        What's your primary need?
                        <span class="text-danger">*</span>
                    </p>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="primaryNeed" id="need1" value="Employee Background Checks">
                        <label class="form-check-label" for="need1">
                            Employee Background Checks
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="primaryNeed" id="need2" value="International Background Checks">
                        <label class="form-check-label" for="need2">
                            International Background Checks
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="primaryNeed" id="need3" value="Workpass Requirement Background Checks">
                        <label class="form-check-label" for="need3">
                            Workpass Requirement Background Checks
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="primaryNeed" id="need4" value="Company Due Diligence">
                        <label class="form-check-label" for="need4">
                            Company Due Diligence
                        </label>
                    </div>                    
                    <br>
                    <div class="form-buttons">
                        <div class="row">
                            <div class="col-6">
                                <button type="button" class="btn btn-light" id="prev3">Previous</button>
                            </div>
                            <div class="col-6">
                                <button type="button" class="btn btn-co" id="next3">Next</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Page 4 -->
                <div class="form-step" id="step4">
                    <div class="mb-3">
                        <label for="name" class="form-label fs-4 fw-bolder">
                            Name
                            <span class="text-danger">*</span>
                        </label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label fs-4 fw-bolder">
                            Company email address
                            <span class="text-danger">*</span>
                        </label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email address" required>
                    </div>
                    <div class="mb-3">
                        <label for="phone" class="form-label fs-4 fw-bolder">
                            Phone number
                        </label>
                        <input type="text" class="form-control" id="phone" name="phone" placeholder="Enter your phone number">
                    </div>
                    <div class="mb-3">
                        <label for="companyName" class="form-label fs-4 fw-bolder">
                            Company name
                        </label>
                        <input type="text" class="form-control" id="companyName" name="companyName" placeholder="Enter your company name">
                    </div>
                    <div class="form-buttons">
                        <div class="row">
                            <div class="col-6">
                                <button type="button" class="btn btn-light" id="prev4">Previous</button>
                            </div>
                            <div class="col-6">
                                <button type="submit" class="btn btn-co">Get Started</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>

@endsection

@section('scripts')
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    let currentStep = 1;
    const totalSteps = 4;
    const steps = document.querySelectorAll('.form-step');
    const progressBar = document.getElementById('progressBar');

    function showStep(step) {
        steps.forEach((s, index) => {
            s.classList.remove('active');
            if (index === step - 1) {
                s.classList.add('active');
            }
        });

        // Update progress bar width
        const progressWidth = (step / totalSteps) * 100;
        progressBar.style.width = progressWidth + '%';

        // Button layout adjustments
        const prevBtnDiv = document.getElementById('prev' + step) ? document.getElementById('prev' + step).parentElement : null;
        const nextBtnDiv = document.getElementById('next' + step) ? document.getElementById('next' + step).parentElement : null;

        if (step === 1) {
            if (prevBtnDiv) prevBtnDiv.classList.add('d-none');
            if (nextBtnDiv) nextBtnDiv.classList.remove('col-6');
            if (nextBtnDiv) nextBtnDiv.classList.add('col-12'); // Full width
        } else {
            if (prevBtnDiv) prevBtnDiv.classList.remove('d-none');
            if (nextBtnDiv) nextBtnDiv.classList.remove('col-12');
            if (nextBtnDiv) nextBtnDiv.classList.add('col-6'); // 50% width
        }
    }

    // Validate Step 1
    function validateStep1() {
        const roleRadios = document.getElementsByName('role');
        for (let radio of roleRadios) {
            if (radio.checked) {
                return true;
            }
        }
        Swal.fire({
            title: 'Error!',
            text: 'Please select a role.',
            icon: 'error',
            confirmButtonText: 'Okay'
        });
        return false;
    }

    // Validate Step 2
    function validateStep2() {
        const companySizeRadios = document.getElementsByName('companySize');
        for (let radio of companySizeRadios) {
            if (radio.checked) {
                return true;
            }
        }
        Swal.fire({
            title: 'Error!',
            text: 'Please select your company size.',
            icon: 'error',
            confirmButtonText: 'Okay'
        });
        return false;
    }

    // Validate Step 3
    function validateStep3() {
        const primaryNeedRadios = document.getElementsByName('primaryNeed');
        for (let radio of primaryNeedRadios) {
            if (radio.checked) {
                return true;
            }
        }
        Swal.fire({
            title: 'Error!',
            text: 'Please select your primary need.',
            icon: 'error',
            confirmButtonText: 'Okay'
        });
        return false;
    }

    // Validate Step 4
    function validateStep4() {
        const name = document.getElementById('name').value.trim();
        const email = document.getElementById('email').value.trim();
        const phone = document.getElementById('phone').value.trim();
        const companyName = document.getElementById('companyName').value.trim();

        if (!name || !email) {
            alert('Please fill in all required fields.');
            return false;
        }

        return true;
    }

    document.getElementById('next1').addEventListener('click', () => {
        if (validateStep1()) {
            currentStep++;
            showStep(currentStep);
        }
    });

    document.getElementById('next2').addEventListener('click', () => {
        if (validateStep2()) {
            currentStep++;
            showStep(currentStep);
        }
    });

    document.getElementById('next3').addEventListener('click', () => {
        if (validateStep3()) {
            currentStep++;
            showStep(currentStep);
        }
    });

    document.getElementById('prev2').addEventListener('click', () => {
        if (currentStep > 1) {
            currentStep--;
            showStep(currentStep);
        }
    });

    document.getElementById('prev3').addEventListener('click', () => {
        if (currentStep > 1) {
            currentStep--;
            showStep(currentStep);
        }
    });

    document.getElementById('prev4').addEventListener('click', () => {
        if (currentStep > 1) {
            currentStep--;
            showStep(currentStep);
        }
    });

    // Initial step
    showStep(currentStep);

    $(document).ready(function() {
        // Handle form submission
        $('form').on('submit', function(e) {
            e.preventDefault();

            var formData = $(this).serialize();

            $.ajax({
                url: '{{ route('submit-contact-us-australia') }}', 
                method: 'POST',
                data: formData,
                success: function(response) {
                    if(response.status === 'success') {
                        Swal.fire({
                            title: 'Success!',
                            text: response.message,
                            icon: 'success',
                            confirmButtonText: 'Okay'
                        }).then(function() {
                        
                            $('form')[0].reset();

                            currentStep = 1;
                            showStep(currentStep);

                            progressBar.style.width = '25%';
                    });
                    }
                },
                error: function(xhr, status, error) {
                    Swal.fire({
                        title: 'Error!',
                        text: 'There was an error submitting the form. Please try again.',
                        icon: 'error',
                        confirmButtonText: 'Okay'
                    });
                }
            });
        });
    });
</script>
@endsection
