@extends('UATWEB.layouts.main')

@section('title')
Leadership in Education: In what areas schools can leverage disruptive technologies? - Avvanz Global
@endsection

@section('css')
<link rel="preload" href="{{ asset('images/resources/background/itemsBg.webp') }}" as="image">

<style>
    .bg-image-2 {
        background: url("../images/resources/background/itemsBg.webp") no-repeat center;
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
</style>
@endsection

@section('content')

<section class="bg-image-2">
    <div class="container padding-vertical">
        <div class="row text-white">
            <div class="col-md-7 offset-auto">
                <h1 class="fw-bolder display-5">
                    Conference Details
                </h1>
                <h1 class="divider-start-25"></h1>
                <p>
                    <i class="fa fa-calendar"></i> January 6, 2022
                </p>
            </div>
        </div>
    </div>
</section>

<section class="container margin-vertical">
    <h1 class="display-5 fw-bolder">
        Leadership in Education: In what areas schools can leverage disruptive technologies?
    </h1>
    <div class="text-center my-3">
        <img class="img-fluid w-50 h-50 transition-up rounded" src="{{ asset('images/resources/webinarItems/webinar23-1.png') }}" alt="webinar23-1">
    </div>
    <p class="fw-bolder">
        Following through our <a href="https://youtu.be/5IWLHeU8lC4" class="link-hover">first episode</a> of Leadership in Education series comes a casual fireside discussion among school leaders and talked about the topic: “In what areas schools can leverage disruptive technologies.”
    </p>
    <p class="fw-bolder">
        Our guests:
    </p>
    <p class="fw-bolder">
        – Karrie Dietz (Head of School, Stamford American School Hong Kong)
    </p>
    <p class="fw-bolder">
        – Mike Gilmour (Principal, Knightsbridge House International School)
    </p>
    <p class="fw-bolder">
        – Eugene Low (Head of Schools, The Grange Institution and International Preschool)
    </p>
    <p>
        They generously shared their thoughts and practices on disruptive technologies in their respective education setup.
    </p>
    <p>
        Here are some takeaways:
    </p>
    <ul>
        <li>
            Covid/pandemic pushed everyone to blended learning or adapt technology in education because it’s necessary but generally it’s important to have it sooner rather than later.
        </li>
        <li>
            There should be a balance on the way technology is being utilized.
        </li>
        <li>
            There are manual processes that can’t really be replaced by technology such as social emotional aspect of each student/educator.
        </li>
        <li>
            On a parent’s point of view the blended learning depicts a question if the children are learning enough?
        </li>
        <li>
            Technology isn’t that disruptive, it’s the way we use technology in different ways. – Karrie D.
        </li>
    </ul>
    <p class="fw-bolder">
        Watch the replay <a href="https://www.youtube.com/watch?v=KNrXp-p6XMI" class="link-hover">here</a>.
    </p>
</section>

@endsection