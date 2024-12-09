@extends('UATWEB.layouts.main')

@section('title')
Avvanz wins GOLD Medal for Best Background Screening Provider - Avvanz Global
@endsection

@section('content')

@section('css')
<link rel="preload" href="{{ asset('images/resources/background/itemsBg.webp') }}" as="image">
<link rel="stylesheet" href="{{ asset('css/about.css') }}">

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
@endsection()

<section class="bg-image-2">
    <div class="container padding-vertical">
        <div class="row text-white">
            <div class="col-md-7 offset-auto">
                <h1 class="fw-bolder display-5">
                    Press and Media
                </h1>
                <h1 class="divider-start-25"></h1>
                <p>
                    <i class="fa fa-calendar"></i> December 3, 2018
                </p>
            </div>
        </div>
    </div>
</section>

<section class="container margin-vertical">
    <h1 class="text-dmb display-5 fw-bolder">
        Avvanz wins GOLD Medal for Best Background Screening Provider
    </h1>
    <p>
        Prestigious and well-known publication <i>Human Resources</i> held its annual HR Vendors of the Year 2018 on 30th November at Marriott in Singapore to celebrate the accomplishments and hard work of top HR solution providers. Over the past 13 years, Human Resources has established HR Vendors of the Year research and magazine as the industry standard for recognising the best HR solution providers across Asia. In the presence of nearly 400 guests, the huge gala event doled out awards in 33 different categories. The jury comprised regional HR practitioners from 16 global companies including Philips, DFS, DuPont, FedEx Express, Keppel, Mundipharma, Nestle, RedMart, Teledirect, Thales, Taiyo Nippon Sanso Holdings and Thermo Fisher Scientific. 
    </p>
    <div class="margin-vertical text-center">
        <img class="img-fluid" src="{{ asset('images/about/award2-1.jpeg') }}" alt="award2-1">
    </div>
    <p>
        In the Best Background Screening Provider category, Avvanz received the top <span class="fw-bolder">GOLD Medal</span> contending against other global background screening companies. Avvanz’s founders Kannan Chettiar, Jan Espino and Alvin Caga were exhilarated and commented that this was a huge endorsement for Avvanz though they are a younger organization than the other finalists. 
    </p>
    <div class="margin-vertical text-center">
        <img class="img-fluid" src="{{ asset('images/about/award2-2.jpeg') }}" alt="award2-2">
    </div>
    <p>
        Kannan, an award winning Technopreneur (by Singapore Business Review), who is also the Managing Director of Avvanz had this to say – “From day 1, Avvanz strived to differentiate ourselves from competition by leveraging technology. Our disruptive <a href="https://www.avvanz.com/screenglobal/" class="link-hover">ScreenGlobal</a> Platform has capability to conduct background checks across more than 100 countries within fast turn-around times. On top of that, we launched Platform TABS in August this year – AI-powered Talent Acquisition and Background Screening Platform. We also have blockchain in our pipeline and have further exciting developments coming up next year. We have more than 200 global clients now across all continents, thanks to ScreenGlobal and an extremely devoted team.”
    </p>
    <div class="row">
        <div class="col margin-vertical text-center">
            <img class="img-fluid" src="{{ asset('images/about/award2-3.jpg') }}" alt="award2-3">
        </div>
        <div class="col margin-vertical text-center">
            <img class="img-fluid" src="{{ asset('images/about/award2-4.jpg') }}" alt="award2-4">
        </div>
    </div>
    <p>
        Jan Espino further added that Avvanz’s uniquely competitive differentiators have enabled Avvanz to outpace competition whilst acquiring global brands amongst the portfolio of clients. Alvin Caga elaborated, “Avvanz turned pain points of HR and Candidates into product features and hence this huge success. We have lot more scope to contribute in background screening given that resume discrepancy is increasing beyond 30% now”. Both Jan and Alvin have years of experience in the background screening industry and with Kannan’s technology-based experience and perspectives, Avvanz wants to evolve into a global leader in this space. 
    </p>
    <p>
        Avvanz was also voted as Finalist in the Best Training Provider (Sales) category. 
    </p>
    <div class="row">
        <div class="col margin-vertical text-center">
            <img class="img-fluid" src="{{ asset('images/about/award2-5.jpeg') }}" alt="award2-5">
        </div>
        <div class="col margin-vertical text-center">
            <img class="img-fluid" src="{{ asset('images/about/award2-6.jpeg') }}" alt="award2-6">
        </div>
        <div class="col margin-vertical text-center">
            <img class="img-fluid" src="{{ asset('images/about/award2-7.jpeg') }}" alt="award2-7">
        </div>
    </div>
</section>

@endsection