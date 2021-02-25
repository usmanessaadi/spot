
<!DOCTYPE html>
<html lang="en">
<head lang="en">

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="The spot is a co-working space designed with the theme of a relaxed café that has hotdesks supporting start-up businesses, freelancers, entrepreneurs, art lovers and everyone else. It is located at the very heart of Marrakech in Gueliz where you are in close proximity to shops, restaurants and other convenience stores.">
  <meta name="author" content="The Awesome Spot">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>The Spot</title>

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


  <!-- Custom styles for this template -->
  {{-- <link href="{{ asset('css/admin.css') }}" rel="stylesheet"> --}}
  @yield('css')


</head>


<body class=" ">

     <div id="app">
        <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/dashboard') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                   {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">

                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

    </div>


<!-- Footer -->

<!-- End Footer -->


<!-- End Overlay Search -->

<!-- JS Script -->

 <!-- Bootstrap core JavaScript -->
  <script src="{{ asset('vendor/jquery/jquery.min.j') }}s"></script>
  <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

  <!-- Plugin JavaScript -->



  <!-- custom JavaScript -->
  <script src="{{ asset('js/admin.js') }}"></script>
  @yield('js')


<!-- ...end JS Script -->
</body>
</html>
