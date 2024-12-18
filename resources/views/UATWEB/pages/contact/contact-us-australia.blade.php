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
    }

    .progress-bar {
        height: 10px;
        background-color: #007bff;
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
            width: 50%;
    }

    .form-buttons button.full-width {
        width: 100%;
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

<!-- Privacy Policy Section -->
<section class="container margin-vertical text-center">
    <div class="container mt-5">
        <div class="border-dmb p-5 text-start">
            <form id="multiStepForm">
                <!-- Progress Bar -->
                <div class="progress-bar-container">
                    <div class="progress">
                        <div class="progress-bar" id="progressBar" style="width: 25%;"></div>
                    </div>
                </div>

                <!-- Page 1 -->
                <div class="form-step active" id="step1">
                    <p>What best defines your role in the company?</p>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="role" id="role1">
                        <label class="form-check-label" for="role1">
                            I'm an Owner/CEO/Founder
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="role" id="role2" checked>
                        <label class="form-check-label" for="role2">
                            I'm in HR/Recruitment
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="role" id="role3">
                        <label class="form-check-label" for="role3">
                            I'm an employee in another area of the company
                        </label>
                    </div>
                    <div class="form-buttons">
                        <button type="button" class="btn btn-primary" id="next1">Next</button>
                    </div>
                </div>

                <!-- Page 2 -->
                <div class="form-step" id="step2">
                    <p>What best describes your company?</p>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="companySize" id="company1">
                        <label class="form-check-label" for="company1">
                            Large-sized (100+ employees)
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="companySize" id="company2" checked>
                        <label class="form-check-label" for="company2">
                            Medium-sized (20-99 employees)
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="companySize" id="company3">
                        <label class="form-check-label" for="company3">
                            Small-sized (less than 20 employees)
                        </label>
                    </div>
                    <div class="form-buttons">
                        <button type="button" class="btn btn-secondary" id="prev2">Previous</button>
                        <button type="button" class="btn btn-primary" id="next2">Next</button>
                    </div>
                </div>

                <!-- Page 3 -->
                <div class="form-step" id="step3">
                    <p>What's your primary need?</p>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="primaryNeed" id="need1">
                        <label class="form-check-label" for="need1">
                            Employee Background Checks
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="primaryNeed" id="need2" checked>
                        <label class="form-check-label" for="need2">
                            International Background Checks
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="primaryNeed" id="need3">
                        <label class="form-check-label" for="need3">
                            Workpass Requirement Background Checks
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="primaryNeed" id="need4">
                        <label class="form-check-label" for="need4">
                            Company Due Diligence
                        </label>
                    </div>
                    <div class="form-buttons">
                        <button type="button" class="btn btn-secondary" id="prev3">Previous</button>
                        <button type="button" class="btn btn-primary" id="next3">Next</button>
                    </div>
                </div>

                <!-- Page 4 -->
                <div class="form-step" id="step4">
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" id="name" placeholder="Enter your name">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Company email address</label>
                        <input type="email" class="form-control" id="email" placeholder="Enter your email address">
                    </div>
                    <div class="mb-3">
                        <label for="phone" class="form-label">Phone number</label>
                        <input type="text" class="form-control" id="phone" placeholder="Enter your phone number">
                    </div>
                    <div class="mb-3">
                        <label for="companyName" class="form-label">Company name</label>
                        <input type="text" class="form-control" id="companyName" placeholder="Enter your company name">
                    </div>
                    <div class="form-buttons">
                        <button type="button" class="btn btn-secondary" id="prev4">Previous</button>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>

@endsection

@section('scripts')
<script>
    // Progress bar logic
    let currentStep = 1;
    const totalSteps = 4;

    const steps = document.querySelectorAll('.form-step');
    const progressBar = document.getElementById('progressBar');
    
    // Show current step and update progress bar
    function showStep(step) {
        steps.forEach((s, index) => {
            s.classList.remove('active');
            if (index === step - 1) {
                s.classList.add('active');
            }
        });
        progressBar.style.width = (step / totalSteps) * 100 + '%';
    }

    // Event listeners for next/previous buttons
    document.getElementById('next1').addEventListener('click', () => {
        if (currentStep < totalSteps) {
            currentStep++;
            showStep(currentStep);
        }
    });
    document.getElementById('next2').addEventListener('click', () => {
        if (currentStep < totalSteps) {
            currentStep++;
            showStep(currentStep);
        }
    });
    document.getElementById('next3').addEventListener('click', () => {
        if (currentStep < totalSteps) {
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
</script>
@endsection