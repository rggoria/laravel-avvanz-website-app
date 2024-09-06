@extends('layouts.master')

@section('title')
Join Avvanz - Avvanz Global
@endsection

@section('content')

@section('css')
<link rel="stylesheet" href="{{ asset('css/about.css') }}">
@endsection()

{{-- Navbar Section --}}
@include('layouts.navbar')

<!-- Hero Section -->
<div class="bg-image">
    <div class="container">
        <div class="row text-white">
            <div class="col-md-7 offset-auto">
                <h1 class="fw-bolder">Avvanz Careers</h1>
                <h1 class="divider-start-25"></h1>
                <p>Join our Team</p>
            </div>
        </div>
    </div>
</div>

<!-- Join Section -->
<section class="container my-5">
    <h1 class="text-center text-dmb fw-bolder">JOIN US NOW!</h1>
    <h1 class="text-center divider-center-25"></h1>
    <p class="text-center mt-2 text-black">To join us, please fill in the required information so that we connect with you soonest possible.</p>

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
                    
                    <button type="submit" class="btn btn-form-submit w-100">submit</button>
                </form>
            </div>
        </div>
    </div>
</section>

<!-- Careers Section -->
<section class="bg-afw py-5">
    <div class="container my-5">
        <h1 class="text-center text-dmb fw-bolder">Avvanz Careers</h1>
        <h1 class="divider-center-25"></h1>
        <br>
        <div class="accordion accordion-flush border border-white text-white" id="accordionFlushExample">
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                        Business Consultant (Digital Sales)
                    </button>
                </h2>
                <div id="flush-collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">
                        We craft and deliver solutions that address customers’ current and possibly future pain points and challenges. We focus our energy, attention, and thinking on how to make every interaction with our customers simple, intuitive, fast, and efficient with a highly charged passion.
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                        Software Engineering Consultant
                    </button>
                </h2>
                <div id="flush-collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">
                        Our Team members act as entrepreneurs in their areas of influence with a sense of shared ownership and shared leadership.
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                        Marketing Executive
                    </button>
                </h2>
                <div id="flush-collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">
                        <p>We encourage synergy amongst our departments to keep our goals aligned to deliver service excellence.</p>
                        <p>We support each other and believe in diversity of talents, ideas, and perspectives.</p>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">
                        Junior Software Engineer
                    </button>
                </h2>
                <div id="flush-collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">
                        <p>We foster a culture of innovation and think multi-dimensionally to be change agents and transform our space.</p>
                        <p>We invest in our business and in ourselves to enhance our processes, knowledge, skills, and competencies to be future-ready.</p>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFive" aria-expanded="false" aria-controls="flush-collapseFive">
                        Verification Associate
                    </button>
                </h2>
                <div id="flush-collapseFive" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">
                        <p>We think and act with integrity to stay reliable and maintain the trust given to us by our clients and colleagues.</p>
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