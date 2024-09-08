@extends('layouts.master')

@section('title')
Contact Us - Avvanz Global
@endsection

@section('content')

<!--  Navbar Section -->
@include('layouts.navbar')

<!-- Hero Section -->
<section class="bg-image">
    <div class="container">
        <div class="row text-white">
            <div class="col-md-7 offset-auto">
                <h1 class="fw-bolder display-5">
                    Contact Us
                </h1>
                <h1 class="divider-start-25"></h1>
                <p class="lead">
                    Feel free to send us a message. We would like to hear it from you!
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Global Section -->
<section class="container my-5">
    <div class="text-center">
        <h1 class="text-dmb fw-bolder display-5">
            Avvanz Global Offices
        </h1>
        <h1 class="divider-center-25"></h1>
    </div>
    <div class="row g-3 py-5">
        <div class="col-sm-12 col-md-6 col-lg-4 mb-4">
            <a href="#" class="text-decoration-none">
                <div class="card">
                    <!-- Card Header with Google Maps -->
                    <div class="card-header">
                        <iframe
                            class="map-frame"
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3153.233295080981!2d-122.4111700846811!3d37.78349977975786!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8085808cb2d9a29d%3A0x8bb1f1d67a4d4e8e!2s1600+Pine+St%2C+San+Francisco%2C+CA+94109!5e0!3m2!1sen!2sus!4v1631137658101!5m2!1sen!2sus"
                            allowfullscreen=""
                            loading="lazy"></iframe>
                    </div>

                    <!-- Card Body with Address Details -->
                    <div class="card-body">
                        <h5 class="card-title">Location Details</h5>
                        <p class="card-text">
                            <strong>Address:</strong><br>
                            1600 Pine Street, San Francisco, CA 94109, USA
                        </p>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-sm-12 col-md-6 col-lg-4 mb-4">
            <div class="card w-100 h-100">
                <!-- Card Header with Google Maps -->
                <div class="card-header p-0">
                    <iframe
                        class="w-100"
                        style="height: 300px; border: 0;"
                        src="https://maps.google.com/maps?q=31st%20Floor%2C%20Virspacio%20Coworkspaces%2C%20One%20San%20Miguel%20Avenue%20Building%2C%20San%20Miguel%20Avenue%20corner%2C%20Shaw%20Blvd%20Ortigas%20Center%2C%20Pasig%20City&amp;t=m&amp;z=15&amp;output=embed&amp;iwloc=near"
                        loading="lazy"
                        allowfullscreen=""
                        title="Google Maps Location"></iframe>
                </div>

                <!-- Card Body with Address Details and Button -->
                <div class="card-body d-flex flex-column justify-content-between">
                    <h5 class="card-title">Location Details</h5>
                    <p class="card-text">
                        <strong>Address:</strong><br>
                        31st Floor, Virspacio Coworkspaces, One San Miguel Avenue Building, San Miguel Avenue corner, Shaw Blvd Ortigas Center, Pasig City
                    </p>
                    <a href="https://www.google.com/maps/dir/?api=1&destination=31st+Floor,+Virspacio+Coworkspaces,+One+San+Miguel+Avenue+Building,+San+Miguel+Avenue+corner,+Shaw+Blvd+Ortigas+Center,+Pasig+City"
                        class="btn btn-primary mt-3"
                        target="_blank">Get Directions</a>
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