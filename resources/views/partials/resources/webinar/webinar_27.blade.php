@extends('layouts.master')

@section('title')
Quickiebinar Part 1: Leadership – with Zubin Zack - Avvanz Global
@endsection

@section('css')
<link rel="preload" href="{{ asset('images/homepage/homepageBg.webp') }}" as="image">
@endsection()

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
                    <i class="fa fa-calendar"></i> June 2, 2023
                </p>
            </div>
        </div>
    </div>
</section>

<section class="container margin-vertical">
    <h1 class="display-5 fw-bolder">
        Quickiebinar Part 1: Leadership – with Zubin Zack
    </h1>
    <div class="text-center">
        <img class="img-fluid w-50 h-50" src="{{ asset('images/resources/webinarItems/webinar27-1.png') }}" alt="webinar27-1">
    </div>
    <p>
        As we approach 2023, leaders across industries are facing a rapidly changing landscape and an ever-increasing set of challenges. From navigating the ongoing pandemic to adapting to new technologies and shifting consumer demands, the list of priorities for leaders can seem daunting. 
    </p>
    <p>
        That’s why we’re excited to share this webinar hosted by Kannan Chettiar and Zubin Zack, where they discussed the top focus areas for leaders in 2023. With years of experience working with some of the world’s most successful companies, Chettiar and Zack will be sharing their insights on what leaders need to be thinking about in order to stay ahead of the curve.
    </p>
    <p>
        Whether you’re a CEO, a manager, or just starting out on your leadership journey, this webinar is sure to provide valuable insights that you can apply to your own work. So mark your calendars and join us for this exciting event!
    </p>
    <p>
        Watch the webinar <a href="https://youtu.be/RU09DnNEWlw" class="link-hover">here</a>.
    </p>
</section>

@endsection