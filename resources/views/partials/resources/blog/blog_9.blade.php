@extends('layouts.master')

@section('title')
Diamond Rules of Entrepreneurship - Avvanz Global
@endsection

@section('css')
<link rel="preload" href="{{ asset('images/homepage/homepageBg.webp') }}" as="image">
@endsection()

@section('content')

<section class="bg-image-2">
    <div class="container padding-vertical text-white">
        <h1 class="fw-bolder display-5">            
            Diamond Rules of Entrepreneurship
        </h1>
        <p>
            <i class="fa fa-calendar"></i> December 15, 2021
        </p>
    </div>
</section>

<section class="container margin-vertical">
    <div class="text-center">
        <img class="img-fluid w-50 h-50" src="{{ asset('images/resources/blogItems/blog9-1.jpg') }}" alt="blog9-1">
    </div> 
    <p>
        In this age of technological advancement, Entrepreneurship can be overwhelming. Sometimes, what seems easy to some can be hard for others, and vice versa. What if there’s a guide that can help you determine the positive attitudes of success, and how you can be more effective in running your business?
    </p>
    <p>
        For start-ups the first five (5) years are the most challenging because it makes or breaks your company in terms of operations, cashflows, and many more. A little guide can help you get the proper disposition. In this article, we will give you a free copy of an e-book authored by our CEO, Kannan Chettiar. 
    </p>
    <p>
        Motivated by his career shift from employee to entrepreneur, and his experiences so far with Avvanz, we bring you “D.I.A.M.O.N.D Rules of Entrepreneurship” by Kannan Chettiar. 
    </p>
    <p>
        Take a closer look on the following:
    </p>
    <ul>
        <li>
            What are the rules of entrepreneurship?
        </li>
        <li>
            How can you manage your time more efficiently?
        </li>
        <li>
            How do you cope with overwhelm?
        </li>
        <li>
            How to manage your growing team?
        </li>
        <li>
            and many more
        </li>
    </ul>
    <p>
        Send in your details below and click DOWNLOAD to access your free copy!
    </p>
    <div class="row margin-vertical">
        <div class="col-6">
            <div class="text-center">
                <img class="img-fluid w-50 h-50" src="{{ asset('images/resources/blogItems/blog9-2.png') }}" alt="blog9-2">
            </div>
        </div>
        <div class="col-6">
            <form action="https://drive.google.com/file/d/1ad0GQGsBJY-PUdXgBYldgFBfA7iQGBeJ/view?usp=sharing" method="get">
                <div class="mb-3">
                    <input type="text" class="form-control" name="name" placeholder="Name" required>
                </div>
                <div class="mb-3">
                    <input type="text" class="form-control" name="organization" placeholder="Organization" required>
                </div>
                <div class="mb-3">
                    <input type="email" class="form-control" name="email" placeholder="Email" required>
                </div>
                <button type="submit" class="btn btn-primary w-100">Submit</button>
            </form>
        </div>
    </div>
    <div class="d-flex justify-content-center">
        <section class="mb-4 d-flex">
            <p class="fw-bolder m-1 align-content-center">
                Share this story:
            </p>
            <a
                class="btn text-white btn-floating m-1"
                style="background-color: #3b5998;"
                href="https://www.facebook.com/share_channel/?link=https%3A%2F%2Fwww.avvanz.com%2Fdiamond-rules-of-entrepreneurship%2F&app_id=966242223397117&source_surface=external_reshare&display&hashtag"
                target="_blank"
                role="button"
            >
                <i class="fab fa-facebook-f"></i>
            </a>
            <a
                class="btn text-white btn-floating m-1"
                style="background-color: #0082ca;"
                href="https://www.linkedin.com/uas/login?session_redirect=https%3A%2F%2Fwww.linkedin.com%2FshareArticle%3Fmini%3Dtrue%26url%3Dhttps%3A%2F%2Fwww.avvanz.com%2Fdiamond-rules-of-entrepreneurship%2F%26title%3DDiamond%2520Rules%2520of%2520Entrepreneurship%2520-%2520Avvanz%2520Global%26summary%3D%26source%3Dhttps%3A%2F%2Fwww.avvanz.com%2Fdiamond-rules-of-entrepreneurship%2F"
                target="_blank"
                role="button"
            >
                <i class="fab fa-linkedin-in"></i>
            </a>
        </section>
    </div>
    <h1 class="fw-bolder display-5">            
        Diamond Rules of Entrepreneurship
    </h1>
    <div class="hstack gap-3 text-marigold">
        <div class="vr" style="width: 3px;"></div>
        <h1>
            Latest Blog
        </h1>
    </div>
</section>

@endsection