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
                <form id="consultationForm" method="POST" enctype="multipart/form-data">
                    @csrf
                    
                    <div class="mb-3">
                        <input type="text" class="form-control bg-afw" id="name" name="name" placeholder="Name" required style="height: 75px; text-align: center;" />
                    </div>
                    
                    <!-- Contact Number -->
                    <div class="mb-3">
                        <input type="text" class="form-control bg-afw" id="contact_number" name="contact_number" placeholder="Contact Number" required style="height: 75px; text-align: center;" />
                    </div>
                    
                    <!-- Company Email -->
                    <div class="mb-3">
                        <input type="text" class="form-control bg-afw" id="email" name="email" placeholder="Company Email" required style="height: 75px; text-align: center;" />
                    </div>
                    
                    <!-- Center placeholder using inline CSS -->
                    <script>
                        document.getElementById('name').style.setProperty('text-align', 'center');
                        document.getElementById('contact_number').style.setProperty('text-align', 'center');
                        document.getElementById('email').style.setProperty('text-align', 'center');
                    </script>                    
                
                    <!-- Consent Checkbox -->
                    <div class="form-check mb-3">
                        <input type="checkbox" class="form-check-input" id="consent" name="consent" required>
                        <label class="form-check-label" for="consent">I consent to the processing of my personal data</label>
                    </div>
                
                    <!-- Submit Button -->
                    <div class="mb-3">
                        <button type="submit" class="btn btn-marigold-transition w-100 py-3">
                            <h4>
                                Register Your Interest
                            </h4>
                        </button>
                    </div>
                
                    <!-- Hidden Inputs (to preserve functionality) -->
                    <input type="hidden" name="_name_" value="">
                    <input type="hidden" name="_lead_uuid" value="">
                    <input type="hidden" name="_uid" value="MaAC9uixBdZCFlqw4ORVKuVV1KcPafdd">
                    <input type="hidden" name="_redirect" value="https://training.avvanz.com/avvanz-leadership-retreat">
                </form>                                
            </div>
        </div>
    </div>
</section>

@endsection