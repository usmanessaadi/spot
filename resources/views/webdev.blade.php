@extends('layouts.app')

@section('css')
<meta name="csrf-token" content="{{ csrf_token() }}">
<!-- swipper -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.5.0/css/swiper.min.css">
<link href="{{ asset('css/webdev.css') }}" rel="stylesheet">
<style>

</style>
@endsection

@section('content')

<nav class="navbar shadow fixed-top" id="contact-navbar" style="background-color:#222;">

    <div class="container ">
        <img src="img/assets/ver-colorful.png" width="100" style="left:-9%; position: relative;" class="ver-colorful"
            alt="vertical colorful">
        <a href="#" class="text-white small mx-auto m-1 font-weight-bold " data-target="#myModal" data-toggle="modal"
            style="opacity: .8;">BOOK NOW</a>
        <!-- Button trigger modal -->
        {{-- <button class="btn btn-primary btn-lg" data-target="#myModal" data-toggle="modal" type="button">
            Book a tour !
        </button> --}}
        <div class="nav-social">
            <a target="_blank" href="https://www.facebook.com/thespot.ma/"><i
                    class="fab fa-facebook-f text-primary ml-2"></i></a>
            <a target="_blank" href="https://www.linkedin.com/company/thespot.ma"><i
                    class="fab fa-linkedin text-danger ml-2"></i></a>
            <a target="_blank" href="#"><i class="fab fa-tripadvisor text-success ml-2"></i></a>
            <a target="_blank" href="https://www.instagram.com/thespot.ma/"><i
                    class="fab fa-instagram text-warning ml-2"></i></a>
        </div>
    </div>
</nav>
<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
    <div class="container">
        <a class="navbar-brand mx-0 js-scroll-trigger" href="#particles-js">
            <img src="img/assets/thespot_black.svg" class=" c" id="logo" width="84" alt="">
        </a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
            data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse  mx-auto" style="transform:translateX(-20px);" id="navbarResponsive">
            <ul class="navbar-nav  mx-auto">
                <li class="nav-item ">
                <a class="nav-link js-scroll-trigger" href="{{route('index')}}">Home</a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link js-scroll-trigger" href="#welcome-section">About</a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link js-scroll-trigger" href="#dev-section">Services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="#clients-section">Clients</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="#footer-section">Contact</a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link js-scroll-trigger" style="position: relative;" href="{{ route('blog') }}"><span
                            class="badge badge-pill badge-warning text-white"
                            style="left:-10% !important; top: -20% !important;">New</span>Blog</a>
                </li>

            </ul>
        </div>
        <ul class="navbar-nav lan-nav ml-auto" style="cursor:pointer">
            <div class="btn-group" role="group" aria-label="">
                <div class="btn-group" role="group">
                    <div id="dropdownId" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img src="img/assets/globe.svg" class="c" width="20" alt="lang" />
                        <img src="img/assets/arrow.svg" class="c" class="ml-2" alt="arrow">
                    </div>

                    <div class="dropdown-menu dropdown-menu-tip-nw" aria-labelledby="dropdownId">
                        <a class="dropdown-item" href="#">En</a>
                        <a class="dropdown-item" href="#">Fr</a>
                    </div>
                </div>
            </div>
        </ul>
    </div>
</nav>

<!-- Header section -->
<div id="particles-js" class="header-section">
    <h1 class="head-text">All-in-one online marketing solutions to help you grow your business</h1>
    <p class="text-center font-weigt-bold small"><span style="color:#a0ce4e;">Web Design, </span><span
            style="color:#00bea3;">API Development </span>& <span style="color:#f1894c">Seo</span>.</p>
    <a href="#footer-section" class="btn cta-btn js-scroll-trigger">Get in touch</a>
    <a href="#welcome-section" class="js-scroll-trigger">
        <img src="img/assets/scroller.png" class="scroller mt-5" alt="scroller">
    </a>
</div>


<!-- Welcome Section -->
<section id="welcome-section">
    <div class="container text-center d-flex flex-column justify-content-center align-items-center mt-5">
            <img src="{{asset('img/line.png')}}" height="100" class="line text-center " alt="line">
            <h2 class="heading mt-5">The Web Spot - professional web design services at affordable prices</h2>
            <p class="desc">Do you have trouble reaching your clients and customers online? Poor web design might be the
                reason why! We live in a digital era where everything can be done on the Internet. Modern users value
                their time. They go online to shop and book services, and if they cannot locate your company on the SERP
                or struggle to find their way around your website – you are losing money.
            </p>
            <p class="desc">The Web Spot offers a wide range of <b>web development services</b> that will help you put your
                business on the map and start making a profit. Our staff comprises of experienced specialists in the
                field of web and mobile app development, SEO promotion, web design, 3D rendering, and creating
                promotional movies. Your website is your online business card. Develop your brand with the web spot Web to
                stay ahead of the competition!
            </p>
            <img src="{{asset('img/line.png')}}" height="100" class="line text-center mt-5" alt="line">
    </div>
</section>

<!-- Dev Section -->
<section id="dev-section" class="mt-5">
    <div class="container text-white text-center pt-3 pb-5">
        <div class="row text-center justify-content-center mt-4">
            <h2 class="heading mt-5">Solutions</h2>
            <p class="desc">The Spot is a community centre designed to be a beautiful space for start-up
                businesses,
                freelancers, entrepreneurs, art lovers and everyone else in Marrakech. The Spot strives to push you to
                achieve your full creative and productive potentials.</p>
        </div>
        <div class="row justify-content-center mt-5 dev-services">
            <div class="col-md-3">
                <img src="img/website.svg" alt="website creation">
                <p class="font-weight-bold mt-3">Website Creation</p>
            </div>
            <div class="col-md-3 middle-service">
                <img src="img/api.svg" alt="api dev">
                <p class="font-weight-bold mt-3">API Development</p>

            </div>
            <div class="col-md-3">
                <img src="img/design.svg" alt="graphic design">
                <p class="font-weight-bold mt-3">Graphic Design</p>

            </div>
        </div>
    </div>
</section>


{{-- Client Section --}}
<section id="clients-section">
    <div class="container">
        <div class="row text-center justify-content-center">
            <h2 class="heading mt-5">Clients & Partners</h2>
            <p class="desc">We work closely with a wide range of clients from different sectors and regions across
                public sector, private sector and local and national governments.</p>
        </div>
        <div class="banner container">
            <div class="client-group">
                <div class="one-fourth">
                    <div class="client logo-one"></div>
                    <h4><span>Veylinx</span></h4>
                </div>
                <div class="one-fourth">
                    <div class="client logo-two"></div>
                    <h4><span>Remote Year</span>
                        <h4>
                </div>
                <div class="one-fourth">
                    <div class="client logo-three"></div>
                    <h4><span>Mapillary</span></h4>
                </div>
                <div class="one-fourth">
                    <div class="client logo-four"></div>
                    <h4><span>Predictable Patient System</span></h4>
                </div>
                <div class="one-fourth">
                    <div class="client logo-nine"></div>
                    <h4><span>Google</span></h4>
                </div>
                <div class="one-fourth">
                    <div class="client logo-ten"></div>
                    <h4><span>U.S. Department of State </span></h4>
                </div>
            </div>
            <div class="client-group">
                <div class="one-fourth">
                    <div class="client logo-five"></div>
                    <h4><span>Airbnb</span></h4>
                </div>
                <div class="one-fourth">
                    <div class="client logo-six"></div>
                    <h4><span>Marketcube</span>
                        <h4>
                </div>
                <div class="one-fourth">
                    <div class="client logo-seven"></div>
                    <h4><span>UN Environment</span></h4>
                </div>
                <div class="one-fourth">
                    <div class="client logo-eight"></div>
                    <h4><span>Bitmex</span></h4>
                </div>
                <div class="one-fourth">
                    <div class="client logo-eleven"></div>
                    <h4><span>Wikipedia</span></h4>
                </div>
                <div class="one-fourth">
                    <div class="client logo-twelve"></div>
                    <h4><span>Bitmex</span></h4>
                </div>
            </div>
        </div>

    </div>
</section>


<!-- FAQ section -->
<section id="faq-section" class="my-5 bg-light py-5">
    <div class="container">
        <div class="row  d-flex  align-items-center">
            <div class="col-md-5">
                <h2 class="heading my-5 faq-title">General Questions</h2>
                <p class="faq-desc">The Spot dedicates one of its corners to Artists and art lovers. Monthly art
                    exhibitions and
                    artistic meetings will be organized. The gallery is open to all talented artists. To be featured,
                    please
                    send
                    us a portfolio and a short description of your work. Our team will contact you should you be
                    selected.
                </p>
            </div>
            <div class="col-md-6 offset-md-1">
                <div class="tab-content" id="faq-tab-content">
                    <div class="tab-pane show active" id="tab1" role="tabpanel" aria-labelledby="tab1">
                        <div class="accordion" id="accordion-tab-1">
                            <div class="card">
                                <div class="card-header bg-info" style="background-color: #466492 !important"
                                    id="accordion-tab-1-heading-1">
                                    <h5>
                                        <button class="btn btn-link text-white" type="button" data-toggle="collapse"
                                            data-target="#accordion-tab-1-content-1" aria-expanded="false"
                                            aria-controls="accordion-tab-1-content-1">What is this “Spot” ?</button>
                                    </h5>
                                </div>
                                <div class="collapse show" id="accordion-tab-1-content-1"
                                    aria-labelledby="accordion-tab-1-heading-1" data-parent="#accordion-tab-1">
                                    <div class="card-body">
                                        <p>The spot is a co-working space designed with the theme of a relaxed café that
                                            has hotdesks supporting start-up businesses, freelancers, entrepreneurs, art
                                            lovers and everyone else in Marrakech. It is located at the very heart of
                                            Marrakech in Gueliz where you are in close proximity to shops, restaurants
                                            and other convenience stores. We have designed The Spot in a style that
                                            urges you to achieve your full creative and productive potentials thanks to
                                            our fast and uninterrupted internet connection, quiet space and other small
                                            details that are here with the intent of putting you in a productive mood.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header bg-info" style="background-color: #466492 !important"
                                    id="accordion-tab-1-heading-2">
                                    <h5>
                                        <button class="btn btn-link text-white" type="button" data-toggle="collapse"
                                            data-target="#accordion-tab-1-content-2" aria-expanded="false"
                                            aria-controls="accordion-tab-1-content-2">Where is it ?</button>
                                    </h5>
                                </div>
                                <div class="collapse" id="accordion-tab-1-content-2"
                                    aria-labelledby="accordion-tab-1-heading-2" data-parent="#accordion-tab-1">
                                    <div class="card-body">
                                        <p>The Spot is the only co-working space that exists in Marrakech and it is
                                            located in Gueliz at N° 32, Rue Yugoslavie, Marrakech.</p> <br />
                                            <p><strong>GPS Location </strong>
                                                <a
                                                    href="https://wego.here.com/directions/mix//The-Spot,-N%C2%B0-32,-Rue-Yugoslavie,-Marrakech,-40025-Marrakesh,-Morocco:e-eyJuYW1lIjoiVGhlIFNwb3QiLCJhZGRyZXNzIjoiTlx1MDBiMCAzMiwgUnVlIFl1Z29zbGF2aWUsIE1hcnJha2VjaCwgTWFyb2MsIE1hcnJha2VjaCIsImxhdGl0dWRlIjozMS42MzYzNzAwMDg4MzYsImxvbmdpdHVkZSI6LTguMDE0NTQyNDYwNDQxNiwicHJvdmlkZXJOYW1lIjoiZmFjZWJvb2siLCJwcm92aWRlcklkIjoyODcyMTk0NTQ5Njc1MzR9?map=31.63637,-8.01454,15,normal&fb_locale=fr_FR"
                                                    class="btn btn-light ml-5" target="_blank"> Get Direction</a>
                                                </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header bg-info" style="background-color: #466492 !important"
                                    id="accordion-tab-1-heading-3">
                                    <h5>
                                        <button class="btn btn-link text-white" type="button" data-toggle="collapse"
                                            data-target="#accordion-tab-1-content-3" aria-expanded="false"
                                            aria-controls="accordion-tab-1-content-3">  What are the prices ?</button>
                                    </h5>
                                </div>
                                <div class="collapse" id="accordion-tab-1-content-3"
                                    aria-labelledby="accordion-tab-1-heading-3" data-parent="#accordion-tab-1">
                                    <div class="card-body">
                                        <p>AIf you’re a student, we offer you an <b>Hour Pass</b> that lasts up to 3 hours of access at any time of the day (from 08:00 to 21:00) at a price of <b>30 MAD</b>. You may also have a full day access when you purchase a <b>Day Pass</b> for <b>50 MAD</b>. additionally, we offer you a <b>Week Pass</b> (from 08:00 to midnight) for <b>300 MAD</b> and a <b>Month Pass</b> for <b>1100 MAD</b> where you have access to our Spot from 08:00 to 00:00. However, if you are a regular person, we offer you an Hour Pass for the same price, a Day Pass for 70 MAD, a Week Pass for 450 MAD and a Month Pass for 1500 MAD.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection


@section('js')


<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $('#contact_us').on('submit', function (e) {
        let host = "{{URL::to('/')}}";

        e.preventDefault();
        $.ajax({
            type: "POST",
            url: host + '/contact',
            data: $(this).serialize(),
            success: function (Response) {
                $(".messages").append(
                    '<div class="alert alert-success alert-dismissible fade show" role="alert">                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>' +
                    Response.msg + '</div>')
            },
            error: function (xhr, textStatus, error) {
                $(".messages").append(
                    '<div class="alert alert-warning alert-dismissible fade show" role="alert">                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>' +
                    JSON.parse(xhr.responseText)["error"] + '</div>')
            }
        });

    });

</script>

<!--Start of Tawk.to Script-->
<script type="text/javascript">
    var Tawk_API = Tawk_API || {},
        Tawk_LoadStart = new Date();
    (function () {
        var s1 = document.createElement("script"),
            s0 = document.getElementsByTagName("script")[0];
        s1.async = true;
        s1.src = 'https://embed.tawk.to/5de2dfd843be710e1d1fef91/default';
        s1.charset = 'UTF-8';
        s1.setAttribute('crossorigin', '*');
        s0.parentNode.insertBefore(s1, s0);
    })();

</script>
<!--End of Tawk.to Script-->
@endsection
