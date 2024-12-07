@extends('Leadership.layouts.main')

@section('title')
Leadership: Signup
@endsection

@section('css')
<link rel="preload" href="{{ asset('images/homepage/homepageBg.webp') }}" as="image">
<link rel="stylesheet" href="{{ asset('css/homepage.css') }}">
@endsection()

@section('content')

<section class="container my-5">   
    <div class="row py-4 justify-content-center">
        <div class="col-md-10 col-lg-10">
            <div class="card shadow-lg rounded-lg p-4">
                <div id="response-message"></div>
                <form id="registerForm" method="POST" action="{{ route('leadership-register') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="row mb-4">
                        <!-- Name Field -->
                        <div class="col-md-12">
                            <label for="name" class="form-label text-dmb fw-bold">Name <span class="sup text-danger">*</span></label>
                            <input name="name" type="text" class="form-control form-control-lg" id="name" placeholder="Enter your name" value="{{ old('name') }}" required>
                            <div class="invalid-feedback" id="name-error"></div>
                        </div>
                    </div>
                
                    <div class="row mb-4">
                        <!-- Company Email -->
                        <div class="col-md-12">
                            <label for="company_email" class="form-label text-dmb fw-bold">Company Email</label>
                            <input name="company_email" type="email" class="form-control form-control-lg" id="company_email" placeholder="Enter your company email" value="{{ old('company_email') }}" required>
                            <div class="invalid-feedback" id="company_email-error"></div>
                        </div>
                    </div>
                
                    <div class="row mb-4">
                        <!-- Contact Number Field -->
                        <div class="col-md-12">
                            <label for="contact_number" class="form-label text-dmb fw-bold">Contact Number</label>
                            <input name="contact_number" type="text" class="form-control form-control-lg" id="contact_number" placeholder="Enter your contact number" value="{{ old('contact_number') }}" required>
                            <div class="invalid-feedback" id="contact_number-error"></div>
                        </div>
                    </div>
                
                    <div class="row mb-4">
                        <!-- Consent Checkbox -->
                        <div class="col-md-12">
                            <div class="form-check">
                                <input type="checkbox" name="consent" class="form-check-input" id="consent" value="1" required>
                                <label class="form-check-label" for="consent">I consent to the processing of my personal data</label>
                                <div class="invalid-feedback" id="consent-error"></div>
                            </div>
                        </div>
                    </div>
                
                    <!-- Submit Button -->
                    <div class="mb-3">
                        <button type="submit" class="btn btn-marigold-transition w-100 py-3">
                            <h4>Register Your Interest</h4>
                        </button>
                    </div>
                </form>                                             
            </div>
        </div>
    </div>
</section>

@endsection