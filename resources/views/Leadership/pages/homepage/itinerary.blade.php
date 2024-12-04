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
        <div class="card shadow-lg rounded-lg p-4">
            <h1 class="text-center fw-bolder pb-5">
                What to Expect at the Retreat?    
            </h1>   
            <div class="col-md-10 col-lg-10">
                {{-- Day 1 --}}
                <h4 class="text-marigold fw-bolder">
                    Day 1: Self-Awareness and Strategic Foundations
                </h4>
                <ul class="list-unstyled">
                    <li>
                        <span class="fw-bolder">
                            Arrival & Ice-Breaker:
                        </span> Begin with a warm welcome and engaging ice-breaker activities designed to build connections and set the tone for collaboration.
                    </li>
                    <li>
                        <span class="fw-bolder">
                            Workshop:
                        </span> “Know yourself” Dive deep into self-awareness with personality assessments (e.g., DEFI personality test) and leadership surveys to understand your strengths and leadership style.
                    </li>
                    <li>
                        <span class="fw-bolder">
                            Network Speed Dating:
                        </span> Rotate every 5 minutes to introduce yourself and discuss takeaways with other leaders.
                    </li>
                    <li>
                        <span class="fw-bolder">
                            Workshop:
                        </span> “Defend, Accelerate, Transform (DAT)” Learn the DAT framework to protect your core business, accelerate growth, and transform for future success.
                    </li>
                    <li>
                        <span class="fw-bolder">
                            Evening Reflection:
                        </span> Guided meditation to unwind and internalize the day’s lessons.
                    </li>
                </ul>
                {{-- Day 2 --}}
                <h4 class="text-marigold fw-bolder">
                    Day 2: Deep Dive into Strategic Growth and Innovation
                </h4>
                <ul class="list-unstyled">
                    <li>
                        <span class="fw-bolder">
                            Morning Exercise and Meditation:
                        </span> Start your day with a rejuvenating yoga and meditation session.
                    </li>
                    <li>
                        <span class="fw-bolder">
                            Workshop:
                        </span> “DAT and the 5Ps Framework” Apply the DAT framework to the 5Ps of your business. Leverage AI to accelerate and transform your business. Identify opportunities for growth and innovation.
                    </li>
                    <li>
                        <span class="fw-bolder">
                            Business Simulation and Immersive Experiences:
                        </span> Participate in higher-order thinking games and simulations to enhance problem-solving skills.
                    </li>
                    <li>
                        <span class="fw-bolder">
                            Evening Networking:
                        </span> Enjoy a BBQ seafood dinner, informal networking, and share personal leadership stories around a campfire.
                    </li>
                </ul>
                {{-- Day 3 --}}
                <h4 class="text-marigold fw-bolder">
                    Day 3: Action Planning and Commitment to Change
                </h4>
                <ul class="list-unstyled">
                    <li>
                        <span class="fw-bolder">
                            Workshop:
                        </span> “Action Planning” Leverage all the insights and learnings to create a detailed three-year plan for your business. This will involve initiatives and action plans based on the DAT framework and 5Ps.
                    </li>
                    <li>
                        <span class="fw-bolder">
                            1-on-1 Coaching Clinics:
                        </span> Receive personalized coaching from experts to refine your strategy and ensure a successful implementation.
                    </li>
                    <li>
                        <span class="fw-bolder">
                            Feedback and Commitment Session:
                        </span> Collect feedback on the retreat’s impact and solidify your commitment to achieving your action plan.
                    </li>
                    <li>
                        <span class="fw-bolder">
                            Evening Networking:
                        </span> Enjoy a BBQ seafood dinner, informal networking, and share personal leadership stories around a campfire.
                    </li>
                </ul>
                <p class="fw-bolder">
                    <u>
                        Transform Your Business with Clear Outcomes and Benefits
                    </u>
                </p>
                <ol>
                    <li>
                        <span class="fw-bolder">
                            Access to Expert Insights:
                        </span> Gain invaluable knowledge from industry leaders Kannan and Salman, who will guide you through the latest strategies in leadership and business transformation.
                    </li>
                    <li>
                        <span class="fw-bolder">
                            Build a Like-Minded Community:
                        </span> Join a network of business leaders who are on a similar journey, fostering collaboration, support, and shared growth.
                    </li>
                    <li>
                        <span class="fw-bolder">
                            Practical, Actionable Tools:
                        </span> Walk away with a personalized three-year plan and proprietary tools that will help you drive growth, manage change, and future-proof your business.
                    </li>
                </ol>
            </div>
        </div>
    </div>
</section>

@endsection