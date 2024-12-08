@extends('Leadership.layouts.main')

@section('title')
Leadership: Register
@endsection

@section('css')
<link rel="stylesheet" href="{{ asset('css/homepage.css') }}">
<link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.4.19/dist/sweetalert2.min.css" rel="stylesheet">
@endsection

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
                            <label for="name" class="form-label text-dmb fw-bold">
                                Name<span class="sup text-danger"> *</span>
                            </label>
                            <input name="name" type="text" class="form-control form-control-lg" id="name" placeholder="Enter your name" value="{{ old('name') }}">
                            <div class="invalid-feedback" id="name-error"></div>
                        </div>
                    </div>
                
                    <div class="row mb-4">
                        <!-- Company Email -->
                        <div class="col-md-12">
                            <label for="company_email" class="form-label text-dmb fw-bold">
                                Company Email<span class="sup text-danger"> *</span>
                            </label>
                            <input name="company_email" type="email" class="form-control form-control-lg" id="company_email" placeholder="Enter your company email" value="{{ old('company_email') }}">
                            <div class="invalid-feedback" id="company_email-error"></div>
                        </div>
                    </div>
                
                    <div class="row mb-4">
                        <!-- Contact Number Field -->
                        <div class="col-md-12">
                            <label for="contact_number" class="form-label text-dmb fw-bold">
                                Contact Number<span class="sup text-danger"> *</span>
                            </label>
                            <input name="contact_number" type="text" class="form-control form-control-lg" id="contact_number" placeholder="Enter your contact number" value="{{ old('contact_number') }}">
                            <div class="invalid-feedback" id="contact_number-error"></div>
                        </div>
                    </div>
                
                    <div class="row mb-4">
                        <!-- Consent Checkbox -->
                        <div class="col-md-12">
                            <div class="form-check">
                                <input type="checkbox" name="consent" class="form-check-input" id="consent" value="1">
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

@section('scripts')
<!-- SweetAlert2 CDN -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.4.19/dist/sweetalert2.all.min.js"></script>

<script>
$(document).ready(function() {
    $('#registerForm').on('submit', function(e) {
        e.preventDefault();

        var formData = new FormData(this);

        $.ajax({
            url: $(this).attr('action'),
            type: 'POST',
            data: formData,
            processData: false,
            contentType: false,
            success: function(response) {
                Swal.fire({
                    icon: 'success',
                    title: 'Success!',
                    text: response.message || 'Your registration was successful.',
                    confirmButtonText: 'OK'
                }).then((result) => {
                    if (result.isConfirmed) {
                        $('#registerForm')[0].reset();
                        $('.is-invalid').removeClass('is-invalid');
                        $('.invalid-feedback').text('');
                    }
                });
            },
            error: function(xhr) {
                var errors = xhr.responseJSON.errors;

                $('.invalid-feedback').text('');
                $('.is-invalid').removeClass('is-invalid');

                if (errors.name) {
                    $('#name-error').text(errors.name[0]);
                    $('#name').addClass('is-invalid');
                }
                if (errors.company_email) {
                    $('#company_email-error').text(errors.company_email[0]);
                    $('#company_email').addClass('is-invalid');
                }
                if (errors.contact_number) {
                    $('#contact_number-error').text(errors.contact_number[0]);
                    $('#contact_number').addClass('is-invalid');
                }
                if (errors.consent) {
                    $('#consent-error').text(errors.consent[0]);
                    $('#consent').addClass('is-invalid');
                }

                Swal.fire({
                    icon: 'error',
                    title: 'Oops!',
                    text: 'There was an issue with your submission. Please try again.',
                    confirmButtonText: 'OK'
                });
            }
        });
    });
});
</script>
@endsection