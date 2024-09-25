@extends('layouts.master')

@section('title')
Blog - Avvanz Global
@endsection

@section('content')

<!--  Navbar Section -->
@include('layouts.navbar')

<!-- Hero Section -->
<section class="bg-image-2">
    <div class="container padding-vertical">
        <div class="row text-white">
            <div class="col-md-7 offset-auto">
                <h1 class="fw-bolder display-5">
                    Blog
                </h1>
                <h1 class="divider-start-25"></h1>
                <p>
                    Subscribe now
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Blog Section -->
<section class="container margin-vertical" id="blog-section">
    @include('partials.blog_items', ['blogItems' => $blogItems])
</section>

<!-- Floating Button -->
@include('layouts.floating')

<!-- Footer Section -->
@include('layouts.footer')

@section('scripts')
<script>
    $(document).ready(function() {
        $('#blog-section').on('click', '.page-link', function(e) {
            e.preventDefault();  // Prevent default link behavior

            const page = $(this).data('page');  // Get the page number

            $.ajax({
                url: '{{ route("resources-1") }}',  // URL for the request
                type: 'GET',
                data: { page: page },  // Send the page number
                success: function(data) {
                    $('#blog-section').html(data);  // Replace content with the response
                },
                error: function(xhr) {
                    console.error('Error fetching data:', xhr);
                }
            });
        });
    });
</script>
@endsection

@endsection