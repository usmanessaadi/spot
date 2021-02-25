<!DOCTYPE html>
<html lang="en">

<head lang="en">

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description"
    content="The spot is a co-working space designed with the theme of a relaxed café that has hotdesks supporting start-up businesses, freelancers, entrepreneurs, art lovers and everyone else. It is located at the very heart of Marrakech in Gueliz where you are in close proximity to shops, restaurants and other convenience stores.">
  <meta name="author" content="The Awesome Spot">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>The Spot | Coworking Space Marrakech</title>

  <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "FAQPage",
      "mainEntity": [{
        "@type": "Question",
        "name": "What is this Spot ?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "The spot is a co-working space designed with the theme of a relaxed coffee that has hotdesks supporting start-up businesses, freelancers, entrepreneurs, art lovers and everyone else in Marrakech. It is located at the very heart of Marrakech in Gueliz where you are in close proximity to shops, restaurants and other convenience stores. We have designed The Spot in a style that urges you to achieve your full creative and productive potentials thanks to our fast and uninterrupted internet connection, quiet space and other small details that are here with the intent of putting you in a productive mood."
        }
      }, {
        "@type": "Question",
        "name": "Where is it?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "The Spot is the only co-working space that exists in Marrakech and it is located in Gueliz at N° 32, Rue Yugoslavie, Marrakech."
        }
      }, {
        "@type": "Question",
        "name": "What are the prices ?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "If you’re a student, we offer you an <b>Hour Pass</b> that lasts up to 3 hours of access at any time of the day (from 08:00 to 21:00) at a price of <b>30 MAD</b>. You may also have a full day access when you purchase a <b>Day Pass</b> for <b>50 MAD</b>. additionally, we offer you a <b>Week Pass</b> (from 08:00 to midnight) for <b>300 MAD</b> and a <b>Month Pass</b> for <b>1100 MAD</b> where you have access to our Spot from 08:00 to 00:00. However, if you are a regular person, we offer you an Hour Pass for the same price, a Day Pass for 70 MAD, a Week Pass for 450 MAD and a Month Pass for 1500 MAD."
        }
      }]
    }
  </script>

  <link rel="shortcut icon" href="{{ asset('img/assets/favicon.ico') }} " type="image/x-icon">
  <link rel="icon" href=" {{ asset('img/assets/favicon.ico') }}" type="image/x-icon">

  <!-- Bootstrap core CSS -->
  <link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  {{-- <link href="{{ asset('vendor/animate/animate.css"') }}" rel="stylesheet"> --}}



  <!-- fonts -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

  <link
    href="https://fonts.googleapis.com/css?family=Montserrat::400,300,300italic,400italic,700,700italic,900,900italic'"
    rel="stylesheet" type='text/css'>

  <!-- Custom fonts for this template -->
  <link href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">

  <!-- Plugin CSS -->
  <link href="{{ asset('vendor/magnific-popup/magnific-popup.css') }}" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="{{ asset('css/creative.css') }}" rel="stylesheet">
  @yield('css')


</head>


<body class=" ">


  @yield('content')


  <!-- Footer -->

  @include('includes.footer')
  <!-- End Footer -->


  <!-- End Overlay Search -->

  <!-- JS Script -->

  <!-- Bootstrap core JavaScript -->
  <script src="{{ asset('vendor/jquery/jquery.min.j') }}s"></script>
  <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

  <!-- Plugin JavaScript -->
  <script src="{{ asset('vendor/jquery-easing/jquery.easing.min.js') }}"></script>
  <script src="{{ asset('vendor/scrollreveal/scrollreveal.min.js') }}"></script>
  <script src="{{ asset('vendor/magnific-popup/jquery.magnific-popup.min.js') }}"></script>
  <script src="{{ asset('vendor/jquery/jquery.waypoints.min.js') }}"></script>

  <!-- particles.js lib - https://github.com/VincentGarreau/particles.js -->
  <script src="{{ asset('js/particles.min.js') }}"></script>


  <!-- custom JavaScript -->
  <script src="{{ asset('js/creative.js') }}"></script>
  @yield('js')


  <!-- ...end JS Script -->
</body>

</html>