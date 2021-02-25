

<!DOCTYPE html>
<html lang="en">
<head lang="en">

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="{{ isset($meta_description) ? $meta_description : 'The spot is a co-working space designed with the theme of a relaxed café that has hotdesks supporting start-up businesses, freelancers, entrepreneurs, art lovers and everyone else. It is located at the very heart of Marrakech in Gueliz where you are in close proximity to shops, restaurants and other convenience stores.'}}">
  <meta name="author" content="The Awesome Spot Team">


  <title>{{ isset($title) ? $title : 'The Spot Blog' }}</title>
  <link rel="shortcut icon" href="{{ asset('img/assets/favicon.ico') }} " type="image/x-icon">
  <link rel="icon" href=" {{ asset('img/assets/favicon.ico') }}" type="image/x-icon">

  <!-- Bootstrap core CSS -->
  <link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  {{-- <link href="{{ asset('vendor/animate/animate.css"') }}" rel="stylesheet"> --}}


  <!-- fonts -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

  <link href="https://fonts.googleapis.com/css?family=Montserrat::400,300,300italic,400italic,700,700italic,900,900italic'"
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
