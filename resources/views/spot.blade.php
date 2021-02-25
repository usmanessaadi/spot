@extends('layouts.app')

@section('css')
<meta name="csrf-token" content="{{ csrf_token() }}">
<!-- swipper -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.5.0/css/swiper.min.css">


<style>

</style>
@endsection

@section('content')

<nav class="navbar shadow fixed-top" id="contact-navbar" style="background-color:#466492;">

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
                    <a class="nav-link js-scroll-trigger" href="#particles-js">Home</a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link js-scroll-trigger" href="#perks-section">Services</a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link js-scroll-trigger" href="#pricing-section">Pricing</a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link js-scroll-trigger" href="#event-section">Events</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="#clients-section">Clients</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="{{route('webdev')}}">Solutions</a>
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
    <h1 class="head-text">Nothing Great is Ever Achieved Alone!</h1>
    <p class="text-center"> <a href="" data-target="#myModal" data-toggle="modal"> Join the community</a></p>
    <a href="#welcome-section" class="js-scroll-trigger">
        <img src="img/assets/scroller.png" class="scroller mt-5" width="24" alt="scroller">
    </a>
    <img src="img/assets/colorful.png" class="from-bottom-1  hor-colorful " alt="horizontal colorful">
    <a href="{{ route('blog') }}">
        <p class="to-about">Check Out Our Daily Blog</p>
    </a>
</div>


<!-- Welcome Section -->
<section id="welcome-section">
    <div class="container">
        <div class="row text-center justify-content-center mt-4">
            <h2 class="heading mt-5">Welcome to The Spot</h2>
            <p class="desc">The Spot is a community centre designed to be a beautiful space for start-up
                businesses,
                freelancers, entrepreneurs, art lovers and everyone else in Marrakech. The Spot strives to push you to
                achieve your full creative and productive potentials.</p>
        </div>
        <div class="row justify-content-center mt-5">
            <div class="card-group   service-cards">
                <div class="card co-working-left text-white p-2 service-card-item">
                    <div class="card-body">
                        <h5 class="card-title font-weight-bold mb-4">Co-working</h5>
                        <img src="img/assets/co-working.png" alt="co-working ">
                        <p class="card-text mt-4 px-5">A get together spot for skilled & innovative young enterpreneurs,
                            &
                            freelancers.</p>
                    </div>
                </div>
                <div class="card community-scale  text-white p-2 service-card-item">
                    <div class="card-body">
                        <h5 class="card-title font-weight-bold mb-4">Community</h5>
                        <img src="img/assets/community.png" alt="Community" class="mt-2">
                        <p class="card-text mt-5 px-5">Nothing great is ever achieved alone! Join the community.</p>
                    </div>
                </div>
                <div class="card creativity-right from-bottom-1 text-white p-2 service-card-item">
                    <div class="card-body">
                        <h5 class="card-title font-weight-bold mb-4">Creativity</h5>
                        <img src="img/assets/creativity.png" alt="Creativity" class="mt-2">
                        <p class="card-text mt-4 px-5">A spot to enhance your creativity through culture, art &
                            entertainment.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Perks Section -->
<section id="perks-section" class="pt-2" style="height: fit-content;">
    <div class=" container">
        <div class="row text-center text-white justify-content-center mt-4">
            <h2 class="heading mt-5">Launch or Grow your Business</h2>
            <p class="desc">The Spot strives to push you to achieve your full creative and productive potentials. We
                believe our co-working space, fun zone and collaborative organizations provide the foundation for people
                and
                the community to do their best work</p>
        </div>
        <div class="perks bg-light membership-perks px-4 py-4 mt-5 shadow-lg">
            <div class="row m-0 p-4">
                <div class="col col-md-4 col-lg-2 my-2  text-center scale-icons">
                    <img src="img/icons/wifi.png" width="50" class="" alt="wifi">
                    <strong class="d-block my-3">Blazing Fast Internet</strong>
                </div>
                <div class="col col-md-4 col-lg-2 my-2  text-center scale-icons">
                    <img src="img/icons/print-scanner.png" width="50" class="" alt="print-scanner">
                    <strong class="d-block my-3">Printing & Scanning</strong>
                </div>
                <div class="col col-md-4 col-lg-2 my-2  text-center scale-icons">
                    <img src="img/icons/call booth.png" width="50" class="" alt="Call Booth">
                    <strong class="d-block my-3">Call Booth</strong>
                </div>
                <div class="col col-md-4 col-lg-2 my-2  text-center scale-icons">
                    <img src="img/icons/24.png" width="50" class="" alt="wifi">
                    <strong class="d-block my-3">24 X 7</strong>
                </div>
                <div class="col col-md-4 col-lg-2 my-2  text-center scale-icons">
                    <img src="img/icons/gaming.png" width="50" class="" alt="Gaming">
                    <strong class="d-block my-3">Gaming</strong>
                </div>
                <div class="col col-md-4 col-lg-2 my-2  text-center scale-icons">
                    <img src="img/icons/Hotdesk.png" width="50" class="" alt="Call Booth">
                    <strong class="d-block my-3">Hot Desk</strong>
                </div>

            </div>
            <div class="row m-0 p-4" style="">
                <div class="col col-md-4 col-lg-2  text-center scale-icons">
                    <img src="img/icons/library.png" width="50" class="" alt="library">
                    <strong class="d-block my-3">Participative library</strong>
                </div>
                <div class="col col-md-4 col-lg-2  text-center scale-icons">
                    <img src="img/icons/meeting-room.png" width="50" class="" alt="Meeting room">
                    <strong class="d-block my-3">Meeting Room</strong>
                </div>
                <div class="col col-md-4 col-lg-2  text-center scale-icons">
                    <img src="img/icons/events.png" width="50" class="" alt="events">
                    <strong class="d-block my-3">Events</strong>
                </div>
                <div class="col col-md-4 col-lg-2  text-center scale-icons">
                    <img src="img/icons/cleaning.png" width="50" class="" alt="cleaning">
                    <strong class="d-block my-3">Dialy Cleaning</strong>
                </div>
                <div class="col col-md-4 col-lg-2  text-center scale-icons">
                    <img src="img/icons/discounts.png" width="50" class="" alt="discounts">
                    <strong class="d-block my-3">Discounts</strong>
                </div>
                <div class="col col-md-4 col-lg-2  text-center scale-icons">
                    <img src="img/icons/drinks.png" width="50" class="" alt="drinks">
                    <strong class="d-block my-3">Drinks</strong>
                </div>
            </div>
            <div class="row m-0 p-4" style="">
                <div class="col col-md-4 col-lg-2  text-center scale-icons">
                    <img src="img/icons/webdev.png" width="50" class="" alt="webdev">
                    <strong class="d-block my-3">Web Developement</strong>
                </div>
                <div class="col col-md-4 col-lg-2  text-center scale-icons">
                    <img src="img/icons/webdesign.png" width="50" class="" alt="Web Design">
                    <strong class="d-block my-3">Web Design</strong>
                </div>
                <div class="col col-md-4 col-lg-2  text-center scale-icons">
                    <img src="img/icons/nap.png" width="50" class="" alt="nap">
                    <strong class="d-block my-3">Nap Space</strong>
                </div>
                <div class="col col-md-4 col-lg-2  text-center scale-icons">
                    <img src="img/icons/bikes.png" width="50" class="" alt="bikes">
                    <strong class="d-block my-3">Bikes</strong>
                </div>
                <div class="col col-md-4 col-lg-2  text-center scale-icons">
                    <img src="img/icons/art.png" width="50" class="" alt="art">
                    <strong class="d-block my-3">Art</strong>
                </div>
                <div class="col col-md-4 col-lg-2  text-center scale-icons">
                    <img src="img/icons/lockers.png" width="50" class="" alt="lockers">
                    <strong class="d-block my-3">Lockers</strong>
                </div>
            </div>

        </div>
</section>

<!-- pricing Section -->
<section id="pricing-section" style="height: fit-content;">
    <div class="container">
        <div class="row text-center justify-content-center">
            <h2 class="heading mt-5">Avails yourself </h2>
            <p class="desc">Choose from one of our well crafted packages and let the fun begin. We can't wait to welcome
                you.</p>
        </div>
        <div class="container mt-5">
            <div class="row justify-content-center">
                <div class="col-md-6 col-lg-4 col-sm-6 my-2 fade-out">
                    <div class="pricingTable blue ">
                        <svg x="0" y="0" viewBox="0 0 360 220">
                            <g>
                                <path fill="#4C90F8" d="M0.732,193.75c0,0,29.706,28.572,43.736-4.512c12.976-30.599,37.005-27.589,44.983-7.061
                                          c8.09,20.815,22.83,41.034,48.324,27.781c21.875-11.372,46.499,4.066,49.155,5.591c6.242,3.586,28.729,7.626,38.246-14.243
                                          s27.202-37.185,46.917-8.488c19.715,28.693,38.687,13.116,46.502,4.832c7.817-8.282,27.386-15.906,41.405,6.294V0H0.48
                                          L0.732,193.75z"></path>
                            </g>
                            <text transform="matrix(1 0 0 1 89.7256 116.2686)" fill="#fff"
                                font-size="40.4489">DRIYEF</text>
                        </svg>
                        <div class="pricing-content">
                            <h3 class="title">3 days per <br> week</h3>
                            <ul class="pricing-content">
                                <li>Wifi</li>
                                <li>Landline</li>
                                <li>Participative library</li>
                                <li>Domains</li>
                                <li>Front desk</li>
                            </ul>
                            <a href="#" class="pricingTable-signup" data-target="#myModal" data-toggle="modal">Book a
                                tour</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-sm-6 my-2 fade-out-1">
                    <div class="pricingTable red">
                        <svg x="0" y="0" viewBox="0 0 360 220">
                            <g>
                                <path fill="#BE4650" d="M0.732,193.75c0,0,29.706,28.572,43.736-4.512c12.976-30.599,37.005-27.589,44.983-7.061
                                          c8.09,20.815,22.83,41.034,48.324,27.781c21.875-11.372,46.499,4.066,49.155,5.591c6.242,3.586,28.729,7.626,38.246-14.243
                                          s27.202-37.185,46.917-8.488c19.715,28.693,38.687,13.116,46.502,4.832c7.817-8.282,27.386-15.906,41.405,6.294V0H0.48
                                          L0.732,193.75z"></path>
                            </g>
                            <text transform="matrix(1 0 0 1 89.7256 116.2686)" fill="#fff"
                                font-size="40.4489">L9AFEZE</text>
                        </svg>
                        <div class="pricing-content">
                            <h3 class="title">Driyef benefits <br> +</h3>
                            <ul class="pricing-content">
                                <li>Unlimitted access</li>
                                <li>Printer</li>
                                <li>Fun zone</li>
                                <li>Events</li>
                                <li>Scanner</li>
                            </ul>
                            <a href="#" class="pricingTable-signup" data-target="#myModal" data-toggle="modal">Book a
                                tour</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-sm-6 my-2  fade-out-2">
                    <div class="pricingTable yellow">
                        <svg x="0" y="0" viewBox="0 0 360 220">
                            <g>
                                <path fill="#FABD10" d="M0.732,193.75c0,0,29.706,28.572,43.736-4.512c12.976-30.599,37.005-27.589,44.983-7.061
                                          c8.09,20.815,22.83,41.034,48.324,27.781c21.875-11.372,46.499,4.066,49.155,5.591c6.242,3.586,28.729,7.626,38.246-14.243
                                          s27.202-37.185,46.917-8.488c19.715,28.693,38.687,13.116,46.502,4.832c7.817-8.282,27.386-15.906,41.405,6.294V0H0.48
                                          L0.732,193.75z"></path>
                            </g>
                            <!-- <text transform="matrix(1 0 0 1 69.7256 116.2686)" fill="#fff" font-size="78.4489">$20</text>
                    <text transform="matrix(0.9566 0 0 1 197.3096 83.9121)" fill="#fff" font-size="29.0829">.99</text>
                    <text transform="matrix(1 0 0 1 233.9629 115.5303)" fill="#fff" font-size="15.4128">/Month</text> -->

                            <text transform="matrix(1 0 0 1 89.7256 116.2686)" fill="#fff"
                                font-size="40.4489">M3ALEM</text>
                        </svg>
                        <div class="pricing-content">
                            <h3 class="title">L9afez benefits <br> +</h3>
                            <ul class="pricing-content">
                                <li>Unlimitted access</li>
                                <li>Bikes</li>
                                <li>Locker</li>
                                <li>Gaming</li>
                                <li>Meeting room</li>
                            </ul>
                            <a href="#" class="pricingTable-signup" data-target="#myModal" data-toggle="modal">Book a
                                tour</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4 col-sm-6 my-2 fade-out-3">
                    <div class="pricingTable dark">
                        <svg x="0" y="0" viewBox="0 0 360 220">
                            <g>
                                <path fill="#F8F9FA" d="M0.732,193.75c0,0,29.706,28.572,43.736-4.512c12.976-30.599,37.005-27.589,44.983-7.061
                                          c8.09,20.815,22.83,41.034,48.324,27.781c21.875-11.372,46.499,4.066,49.155,5.591c6.242,3.586,28.729,7.626,38.246-14.243
                                          s27.202-37.185,46.917-8.488c19.715,28.693,38.687,13.116,46.502,4.832c7.817-8.282,27.386-15.906,41.405,6.294V0H0.48
                                          L0.732,193.75z"></path>
                            </g>
                            <text transform="matrix(1 0 0 1 59.7256 116.2686)" fill="#555"
                                font-size="40.4489">ELPATRONE</text>
                        </svg>
                        <div class="pricing-content">
                            <h3 class="title">M3alem benefits +</h3>
                            <ul class="pricing-content">
                                <li>Printer</li>
                                <li>Breakfast</li>
                                <li>Workshop discount</li>
                                <li>24/7</li>
                                <li>Parking</li>
                            </ul>
                            <a href="#" class="pricingTable-signup" data-target="#myModal" data-toggle="modal">Book a
                                tour</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-sm-6 my-2 fade-out-4">
                    <div class="pricingTable green">
                        <svg x="0" y="0" viewBox="0 0 360 220">
                            <g>
                                <path fill="#3ECC6C" d="M0.732,193.75c0,0,29.706,28.572,43.736-4.512c12.976-30.599,37.005-27.589,44.983-7.061
                                          c8.09,20.815,22.83,41.034,48.324,27.781c21.875-11.372,46.499,4.066,49.155,5.591c6.242,3.586,28.729,7.626,38.246-14.243
                                          s27.202-37.185,46.917-8.488c19.715,28.693,38.687,13.116,46.502,4.832c7.817-8.282,27.386-15.906,41.405,6.294V0H0.48
                                          L0.732,193.75z"></path>
                            </g>
                            <text transform="matrix(1 0 0 1 69.7256 116.2686)" fill="#fff" font-size="40.4489">DAY
                                PASS</text>
                        </svg>
                        <div class="pricing-content">
                            <h3 class="title">Access 9am - 9pm</h3>
                            <ul class="pricing-content">
                                <li>Wifi</li>
                                <li>Front Desk</li>
                                <li>-</li>
                                <li>-</li>
                                <li>-</li>
                            </ul>
                            <a href="#" class="pricingTable-signup" data-target="#myModal" data-toggle="modal">Book a
                                tour</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-sm-6 my-2 fade-out-5">
                    <div class="pricingTable dark">
                        <svg x="0" y="0" viewBox="0 0 360 220">
                            <g>
                                <path fill="#555" d="M0.732,193.75c0,0,29.706,28.572,43.736-4.512c12.976-30.599,37.005-27.589,44.983-7.061
                                          c8.09,20.815,22.83,41.034,48.324,27.781c21.875-11.372,46.499,4.066,49.155,5.591c6.242,3.586,28.729,7.626,38.246-14.243
                                          s27.202-37.185,46.917-8.488c19.715,28.693,38.687,13.116,46.502,4.832c7.817-8.282,27.386-15.906,41.405,6.294V0H0.48
                                          L0.732,193.75z"></path>
                            </g>
                            <!-- <text transform="matrix(1 0 0 1 69.7256 116.2686)" fill="#fff" font-size="78.4489">$20</text>
                    <text transform="matrix(0.9566 0 0 1 197.3096 83.9121)" fill="#fff" font-size="29.0829">.99</text>
                    <text transform="matrix(1 0 0 1 233.9629 115.5303)" fill="#fff" font-size="15.4128">/Month</text> -->

                            <text transform="matrix(1 0 0 1 59.7256 116.2686)" fill="#fff" font-size="40.4489">WEEK
                                PASS</text>
                        </svg>
                        <div class="pricing-content">
                            <h3 class="title">One week access</h3>
                            <ul class="pricing-content">
                                <li>Wifi</li>
                                <li>Front Desk</li>
                                <li>-</li>
                                <li>-</li>
                                <li>-</li>
                            </ul>
                            <a href="#" class="pricingTable-signup" data-target="#myModal" data-toggle="modal">Book a
                                tour</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Events section -->
<section id="event-section">
    <div class=" container scale-icons ">
        <div class="row text-center mt-4">
            <h2 class="heading mt-5">Events</h2>
            <p class="desc">We provide a variety of events and programs to enhance the overall work experience</p>
        </div>
        <div class="swiper-container">
            <div class="swiper-wrapper">
                @if(count($events) != 0)
                @foreach($events as $event)
                <div class="swiper-slide">
                    <div class="row flex-row-reverse event-area mt-3  stylshadow-lg">
                        <div class="col-sm-12 col-md-5 p-0">
                            <img src="{{ asset('storage/images/events/'.$event->featured) }}"
                                class="img-fluid event-img" alt="event-pic">
                        </div>
                        <div class="col-sm-12 col-md-7 event-desc bg-white">
                            @if($loop->first)
                            <h2 class="event-heading mt-5">UP COMING EVENT <i class="fa text-danger fa-heart"
                                    aria-hidden="true"></i></h2>
                            @else
                            <h2 class="event-heading mt-5">PREVIOUS EVENTS <i class="fa text-danger fa-heart"
                                    aria-hidden="true"></i></h2>
                            @endif
                            <h3 class="event-name "> {{ $event->title }}</h3>
                            <p class="event-description mt-3 text-muted small">{{ $event->description }}</p>
                            <strong class="float-left  mt-4">At:
                                {{ Carbon\Carbon::parse($event->date)->format('l\\, jS F Y h:i A') }}</strong>
                            <strong class="float-right mt-4">Duration: {{ $event->duration }}</strong>
                        </div>
                    </div>
                </div>
                @endforeach
                @else
                <div class="swiper-slide">
                    <div class="row flex-row-reverse event-area mt-3  stylshadow-lg">
                        <div class="col-sm-12 col-md-5 p-0">
                            <img src="img/assets/karaoke-event.jpg" class="img-fluid event-img" alt="event-pic">
                        </div>
                        <div class="col-sm-12 col-md-7 event-desc bg-white">
                            <h2 class="event-heading mt-5">UP COMING EVENT <i class="fa text-danger fa-heart"
                                    aria-hidden="true"></i></h2>
                            <h3 class="event-name "> karaoke night</h3>
                            <p class="event-description mt-3 text-muted small">The Spot strives to push you to achieve
                                your
                                full creative
                                and
                                productive
                                potentials.
                                We believe our co-working space, fun zone and collaborative organizations provide the
                                foundation
                                for people
                                and the community to do their best work</p>
                            <strong class="float-left  mt-4">At: 07 PM - 7th March</strong>
                            <strong class="float-right mt-4">Duration: 4hours</strong>
                        </div>
                    </div>
                </div>
                @endif
            </div>
            <!-- Add Pagination -->
            <div class="swiper-pagination"></div>
        </div>
    </div>
    <div class="container-fluid p-0 m-0">

        <img src="img/assets/red-snake.png" alt="red snake" class=" red-snake img-fluid">
        <img src="img/assets/yellow-snake.png" alt="yellow snake" class="yellow-snake img-fluid">
    </div>
</section>

<!-- Testimonials -->
<section id="testimonials-section" style="height: fit-content !important; ">
    <div class=" container">
        <div class="row text-center justify-content-center mt-4">
            <h2 class="heading mt-5">Testimonials</h2>
            <p class="desc"> Far far away, behind the word mountains, far from the countries Vokalia and Consonantia,
                here
                is what people feel about us .</p>
        </div>
    </div>

    <div class=" pb-5 position-relative testimonial-area container-fluid">
        <div id="testo-container" class="carousel slide position-relative container testomonial-container"
            data-ride="carousel">
            <!-- Indicators -->
            <ul class="carousel-indicators">
                <li data-target="#testo-container" data-slide-to="0" class="active"></li>
                <li data-target="#testo-container" data-slide-to="1" class=""></li>
            </ul>

            <!-- The slideshow -->
            <div class="carousel-inner">
                <div class="carousel-item active arousel-item-next carousel-item-left">
                    <div class="d-flex">
                        <div class="col-lg-4 col-sm-12 col-12 d-flex flex-column ">
                            <a href="#" class="introduce pb-3">
                                <div class="flex-column-1 ">
                                    <p class="pr-2 pl-3 pt-4">The new Spot location is excellent with a terrific view.
                                        Super fast internet! the Spot is the spot to be if you want to work or study in
                                        a productive environment. </p>
                                </div>
                                <div class="flex-column-2 d-flex">
                                    <div class="pic p1"></div>
                                    <div class="information  flex-column pl-3 pt-2">
                                        <p>- Sahar Elhallak</p>
                                        <p class="text-gray">Founder At Home In Morocco</p>
                                    </div>
                                </div>
                                <span></span>
                            </a>
                        </div>
                        <div class="col-lg-4 col-sm-12 col-12 d-flex flex-column ">
                            <a href="#" class="introduce pb-3">
                                <div class="flex-column-1 ">
                                    <p class="pr-2 pl-3 pt-4">Concept unique... Équipe jeune et active... Internet très
                                        haute débit... Vraiment l'espace idéal pour se concentrer à réaliser ces projets
                                    </p>
                                </div>
                                <div class="flex-column-2 d-flex">
                                    <div class="pic p2"></div>
                                    <div class="information  flex-column pl-3 pt-2">
                                        <p>- Chibi Hafid</p>
                                        <p class="text-gra y">Manager at Bastet</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-4 col-sm-12 col-12 d-flex flex-column">
                            <a href="#" class="introduce pb-3">
                                <div class="flex-column-1 ">
                                    <p class="pr-2 pl-3 pt-4">Best co-working space in Marrakech if not the world. The
                                        team are so helpful and The Spot has everything you need to be productive. Super
                                        fast internet, comfortable working spaces and a beautiful terrace. I wouldn't
                                        want to work anywhere else. Than you so much!</p>
                                </div>
                                <div class="flex-column-2 d-flex">
                                    <div class="pic p3"></div>
                                    <div class="information  flex-column pl-3 pt-2">
                                        <p>Lisa Simpson</p>
                                        <p class="text-gray">Fashion Designer</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item carousel-item-next carousel-item-left">
                    <div class="d-flex">
                        <div class="col-lg-4 col-sm-12 col-12 d-flex flex-column ">
                            <a href="#" class="introduce pb-3">
                                <div class="flex-column-1 ">
                                    <p class="pr-2 pl-3 pt-4">An outstanding place to be.Lots of fun and mostly good
                                        people. If you happen you are in Marrakech and looking for a place to escape the
                                        daily routine The Youth Spot is the right place for you.</p>
                                </div>
                                <div class="flex-column-2 d-flex">
                                    <div class="pic p4"></div>
                                    <div class="information  flex-column pl-3 pt-2">
                                        <p>- Kamal Akaya</p>
                                        <p class="text-gray">Outreach Coordinator at Ait Ourir Bridge Center</p>
                                    </div>
                                </div>
                                <span></span>
                            </a>
                        </div>
                        <div class="col-lg-4 col-sm-12 col-12 d-flex flex-column ">
                            <a href="#" class="introduce pb-3">
                                <div class="flex-column-1 ">
                                    <p class="pr-2 pl-3 pt-4">Excellent place to work in. I Highly recommend !
                                        Everything has been thought of. Bravo and thank you</p>
                                </div>
                                <div class="flex-column-2 d-flex">
                                    <div class="pic p5"></div>
                                    <div class="information  flex-column pl-3 pt-2">
                                        <p>- Hala Moubarak</p>
                                        <p class="text-gray">Owner and Founder at Fast Google Hotel Solutions</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-4 col-sm-12 col-12 d-flex flex-column">
                            <a href="#" class="introduce pb-3">
                                <div class="flex-column-1 ">
                                    <p class="pr-2 pl-3 pt-4">The vibe, the people & the art you feel like where you
                                        need to be. Creativity is at the center of it . You won't be dispointed.</p>
                                </div>
                                <div class="flex-column-2 d-flex">
                                    <div class="pic p6"></div>
                                    <div class="information  flex-column pl-3 pt-2">
                                        <p>Mehdi EL Ghaly</p>
                                        <p class="text-gray">Story-Teller</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>


            </div>
            <!-- Left and right controls -->
            <a class="carousel-control-prev" href="#testo-container" data-slide="prev" style="opacity: 1; left: -10%;">
                <i class="fas fa-chevron-left" style="color:#5969f6; font-size:30px;"></i>
            </a>
            <a class="carousel-control-next p-0" href="#testo-container" data-slide="next"
                style="opacity: 1; transform: rotate(-180deg); right: -10%;">
                <i class="fas fa-chevron-left" style="color:#5969f6; font-size:30px;"></i>
            </a>
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

<!-- Gallery section -->
<section id="gallery-section">
    <div class="container">
        <div class="row  text-center  mt-4">
            <h2 class="heading mt-5">Gallery</h2>
            <p class="desc">The Spot dedicates one of its corners to Artists and art lovers. Monthly art exhibitions and
                artistic meetings will be organized. The gallery is open to all talented artists. To be featured, please
                send
                us a portfolio and a short description of your work. Our team will contact you should you be selected.
            </p>
        </div>
    </div>
    {{-- Gallery --}}
    <div class="container-gal px-0 mt-3">
        {{-- gallery header --}}
        <div class="gallery-heading">
            <!-- logo -->
            <img src="img/logo.png" class=" p-1" width="40" alt="logo">

            <!-- title -->
            <span class=" heading-text ml-4">We share momentums</span>

            <!-- pagination -->
            <div class="pagination mr-3 text-white d-inline">
                <span id="left" class=""> <i class="fas fa-arrow-alt-circle-left"></i></span>
                <span id="right"> <i class="fas fa-arrow-alt-circle-right"></i></span>
            </div>
        </div>

        {{-- gallery media --}}
        <div class="gallery-section " id="gallery">
            {{-- row one --}}
            <div class="row m-0 flex-row flex-nowrap">
                {{-- image --}}
                <div class="p-0 col-12 col-sm-6 col-md-4">
                    <a href="{{asset('img/gallery/img1.jpg')}}">
                        <div class="card card-block img-item" id="card">
                            <img src="{{asset('img/gallery/img1.jpg')}}" class="img-fluid" alt="">
                            <div class="img-overlay">
                                <i class="material-icons img-icon">search</i>
                            </div>
                        </div>
                    </a>
                </div>

                {{-- video --}}
                <div class="p-0 col-12 col-sm-6 col-md-4">
                    <a href="https://www.youtube.com/watch?v=ywp0MUKlRtU" class="mfp-iframe">
                        <div class="card card-block vid-item">
                            <div class="img-overlay"></div><img src="{{asset('img/gallery/video1.png')}}"
                                class="img-fluid" alt="">
                            <div class="row m-0 video-card-caption">
                                <div class="col-3 mr-4">
                                    <i class="material-icons vid-icon"> play_arrow</i>
                                </div>
                                <div class="col-3">
                                    <p><strong>Bettsier Uzeel</strong> <br />
                                        <span class="sub-title">Be a co-workersaaaa</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                {{-- quote --}}
                <div class="p-0 col-12 col-sm-6 col-md-4">
                    <div class="card card-block" id="card">
                        <div
                            class="quote text-white text-center d-flex justify-content-center align-items-center flex-column ">
                            <img src="img/quotation.png" class="mx-auto mb-4" alt="">
                            <p class="w-75 mx-auto ">
                                Life is short, work somewhere <br> awesome.
                            </p>

                        </div>
                    </div>
                </div>

                {{-- image --}}
                <div class="p-0 col-12 col-sm-6 col-md-4">
                    <a href="{{asset('img/gallery/img4.jpg')}}">
                        <div class="card card-block img-item">
                            <img src="{{asset('img/gallery/img4.jpg')}}" class="img-fluid" alt="">
                            <div class="img-overlay">
                                <i class="material-icons img-icon">search</i>
                            </div>
                        </div>
                    </a>
                </div>

                {{-- image --}}
                <div class="p-0 col-12 col-sm-6 col-md-4">
                    <a href="{{asset('img/gallery/img5.jpg')}}">
                        <div class="card card-block img-item">
                            <img src="{{asset('img/gallery/img5.jpg')}}" class="img-fluid" alt="">
                            <div class="img-overlay">
                                <i class="material-icons img-icon">search</i>
                            </div>
                        </div>
                    </a>
                </div>

                {{-- image --}}
                <div class="p-0 col-12 col-sm-6 col-md-4">
                    <a href="{{asset('img/gallery/img6.jpg')}}">
                        <div class="card card-block img-item">
                            <img src="{{asset('img/gallery/img6.jpg')}}" class="img-fluid" alt="">
                            <div class="img-overlay">
                                <i class="material-icons img-icon">search</i>
                            </div>
                        </div>
                    </a>
                </div>
            </div>

            {{-- row two --}}
            <div class="row m-0 flex-row flex-nowrap">

                {{-- image --}}
                <div class="p-0 col-12 col-sm-6 col-md-4">
                    <a href="{{asset('img/gallery/img3.jpg')}}">
                        <div class="card card-block img-item">
                            <img src="{{asset('img/gallery/img3.jpg')}}" class="img-fluid" alt="">
                            <div class="img-overlay">
                                <i class="material-icons img-icon">search</i>
                            </div>
                        </div>
                    </a>
                </div>

                {{-- image --}}
                <div class="p-0 col-12 col-sm-6 col-md-4">
                    <a href="{{asset('img/gallery/img2.jpg')}}">
                        <div class="card card-block img-item">
                            <img src="{{asset('img/gallery/img2.jpg')}}" class="img-fluid" alt="">
                            <div class="img-overlay">
                                <i class="material-icons img-icon">search</i>
                            </div>
                        </div>
                    </a>
                </div>

                {{-- image --}}
                <div class="p-0 col-12 col-sm-6 col-md-4">
                    <a href="{{asset('img/gallery/img9.jpg')}}">
                        <div class="card card-block img-item">
                            <img src="{{asset('img/gallery/img9.jpg')}}" class="img-fluid" alt="">
                            <div class="img-overlay">
                                <i class="material-icons img-icon">search</i>
                            </div>
                        </div>
                    </a>
                </div>

                {{-- quote --}}
                <div class="p-0 col-12 col-sm-6 col-md-4">
                    <div class="card card-block" id="card">
                        <div class="quote text-white text-center d-flex justify-content-center align-items-center flex-column"
                            style="background: #BC2728">
                            <img src="img/quotation.png" class="mx-auto mb-4" alt="">
                            <p class="w-75 mx-auto ">
                                Co-working: Seek Growing<br> Together.
                            </p>
                        </div>
                    </div>
                </div>

                {{-- image --}}
                <div class="p-0 col-12 col-sm-6 col-md-4">
                    <a href="{{asset('img/gallery/img7.jpg')}}">
                        <div class="card card-block img-item">
                            <img src="{{asset('img/gallery/img7.jpg')}}" class="img-fluid" alt="">
                            <div class="img-overlay">
                                <i class="material-icons img-icon">search</i>
                            </div>
                        </div>
                    </a>
                </div>

                {{-- image --}}
                <div class="p-0 m-0 col-12 col-sm-6 col-md-4">
                    <a href="{{asset('img/gallery/img8.jpg')}}">
                        <div class="card card-block img-item">
                            <img src="{{asset('img/gallery/img8.jpg')}}" class="img-fluid" alt="">
                            <div class="img-overlay">
                                <i class="material-icons img-icon">search</i>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>

        {{-- gallery scroll bar --}}
        <div class="row scroll" id="scrollbar"></div>

        {{-- gallery footer empty! --}}
        <div class="gallery-footer py-2"></div>

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
<script src="{{ asset('js/js.js') }}"></script>

<!-- swiper -->
<script src="{{ asset('js/swiper.min.js') }}"></script>
{{-- <script src="{{ asset('js/slick.js') }}"></script> --}}

<script>
    var swiper = new Swiper('.swiper-container', {
        pagination: {
            el: '.swiper-pagination',
            dynamicBullets: true,
        },
        autoplay: {
            delay: 3000,
        },
    });

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