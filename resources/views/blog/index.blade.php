
@extends('layouts.blogapp')

@section('css')
<link href="{{ asset('css/blog.css')}}" rel="stylesheet">

@endsection

@section('content')


  <nav class="navbar shadow fixed-top" id="contact-navbar" style="background-color:#444;">

    <div class="container ">
      <img src="{{asset('img/assets/ver-colorful.png')}}" width="100" style="left:-9%; position: relative;" class="ver-colorful" alt="vertical colorful">
         <a href="#" class="text-white small mx-auto m-1 font-weight-bold " data-target="#myModal" data-toggle="modal" style="opacity: .8;">BOOK NOW</a>
      <div class="nav-social">
            <a target="_blank" href="https://www.facebook.com/thespot.ma/"><i class="fab fa-facebook-f text-primary ml-2"></i></a>
            <a target="_blank" href="https://www.linkedin.com/company/thespot.ma"><i class="fab fa-linkedin text-danger ml-2"></i></a>
            <a target="_blank" href="#"><i class="fab fa-tripadvisor text-success ml-2"></i></a>
            <a target="_blank" href="https://www.instagram.com/thespot.ma/"><i class="fab fa-instagram text-warning ml-2"></i></a>
        </div>
    </div>
  </nav>
  <!-- Navigation -->

 <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand mx-0 js-scroll-trigger" href="{{route('blog')}}">
        <img src="{{ asset('img/assets/thespot_black.svg')}} " class=" c" id="logo" width="84" alt="">
      </a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive"
        aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse mx-auto" id="navbarResponsive">
        <ul class="navbar-nav mx-auto">
          <li class="nav-item  ">
            <a class="nav-link js-scroll-trigger" href="/">Home</a>
          </li>
          <li class="nav-item  ">
          <a class="nav-link js-scroll-trigger active" href="{{route('blog')}}"><span class="badge badge-pill badge-warning text-white"
                style="left:45% !important; top: -20% !important;">New</span>Blog</a>
          </li>

        </ul>
      </div>
      <ul class="navbar-nav lan-nav ml-auto" style="cursor:pointer">
        <div class="btn-group" role="group" aria-label="">
          <div class="btn-group" role="group">
            <div id="dropdownId" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <img src="{{ asset('img/assets/globe.svg')}} " class=" c" width="20" alt="lang" />
              <img src="{{ asset('img/assets/arrow.svg')}} " class=" c" class="ml-2" alt="arrow">
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
  <div id="particles-js" style="height:50vh !important;" class="header-section bg-dark">
    <p class="blog-title text-center font-weight-bold " style="font-size: 2.5rem !important;">
       {{ isset($title) ? $title : 'Discover Our Blog Topics'}}
    </p>
    <img src="{{asset('img/assets/colorful.png')}}" class="from-right hor-colorful" style="min-width:5%; right: 8%; top: 50%; height: 50%;"
      alt="horizontal colorful">
  </div>

  <div class="blog-container mt-5">
    <div class="row">

      <!-- blog -->
      <div class="col-md-9 blog-column">
        <div class="card-columns">
        @foreach($posts as $post)

            @if(empty($post->featured_image))
            <div class="card filled-card bg-primary text-white text-center p-3">
                <blockquote class="blockquote mb-0">
                  <a href="{{route('post.single',  $post->slug) }}">
                        <p>{{ $post->title }}</p>
                        <p class="card-text  small">{{ $post->excerpt }}</p>
                    </a>
                <footer class="blockquote-footer my-2">
                    <small>
                    {{ $post->created_at->diffForHumans() }} / by <cite title="Source Title">{{ $post->author->name }}</cite>
                    </small>
                </footer>
             </blockquote>
            </div>
            @else
             <div class="card">
              <a href="{{route('post.single',  $post->slug) }}">
                <div class="card-img">
                    <img src="{{ asset($post->featured_image) }}" alt="{{ $post->title }}" class="card-img-top border p-1">
                    <div class="overlay "></div>
                    <div class="overlay-details">
                        <h3> {{ $post->title }}</h3>
                        <p>{{ $post->created_at->diffForHumans() }} / by {{ $post->author->name }}</p>
                    </div>
                </div>
              </a>
                <div class="card-body">
                  <a href="{{route('post.single',  $post->slug) }}">
                    <h5 class="card-title  text-left font-weight-bold">{{ $post->title }}</h5>
                  </a>
                    <hr class="mx-auto w-50 bg-light">
                    <p class="card-text">
                        {{ $post->excerpt}}
                    </p>
                </div>
                <div class="card-activity p-3">
                    <div class="post-detail float-left">
                        <small class="text-muted">   {{ $post->created_at->diffForHumans() }} / by {{ $post->author->name }}
                        </small>
                    </div>
                    <div class="post-comment float-right  ml-3">
                        <i class="fa fa-comment text-danger" aria-hidden="true"></i>
                        <a onclick href="{{route('post.single',  $post->slug) }}#disqus_thread"></a>
                    </div>
                <div class="clearfix"></div>

                </div>
                <div class="clearfix"></div>
            </div>
            @endif
        @endforeach
        </div>
      </div>
      <!-- last posts -->
      <div class="col-md-3 blog-column px-0 ">

        <div class="categories bg-white py-3  border border-light">
            <p class="px-2 mt-4 ml-3 m-0 font-weight-bold">Tags</p>
            <hr class="float-left mx-2 ml-4 w-75 shadow-sm">
            <div class="clearfix"></div>
            <ul class="list-group">

            <form class="card border-0 card-sm" action='/blog/search' method="POST" role="search">
                @csrf
                <div class="card-body row no-gutters align-items-center">
                    <!--end of col-->
                    <div class="col mr-1">
                        <input class="form-control form-control form-control-borderless" type="search" placeholder="Search topics" name="query">
                    </div>
                    <!--end of col-->
                    <div class="col-auto">
                        <button class="btn btn btn-warning" type="submit">
                        <i class="fas fa-search ml-1 text-light"></i>
                        </button>
                    </div>
                    <!--end of col-->
                </div>
            </form>

                <a href="{{ route('blog') }}">
                  <li class="list-group-item d-flex border-top-0 justify-content-between align-items-center">
                    All
                  </li>
                </a>
              @foreach ($tags as $tag)
                <a href="{{ route('blog.searchByTag', $tag->id) }}">
                  <li class="list-group-item d-flex border-top-0 justify-content-between align-items-center">
                    {{ $tag->name }}
                  </li>
                </a>
              @endforeach
            </ul>

        </div>
        <div class="popular-posts bg-white border border-light">
                <p class="px-2 mt-4 ml-3 m-0 font-weight-bold">Popular Posts</p>
                <hr class="float-left mx-2 ml-4 w-75 shadow-sm">
                 <div class="clearfix"></div>

                @foreach ($last_posts as $last_post)
                <div class="media">
                    <a class="popular-post w-100 d-flex align-items-center p-2" href="{{route('post.single',  $last_post->slug) }}">
                        <img class="mr-2 img-fluid rounded" src="{{ asset($last_post->author->avatar)}}" alt="{{ $last_post->title }}">
                        <div class="media-body my-2">
                            <h6 class="mt-0 text-muted">{{ $last_post->title }}</h6>
                            <p class="text-muted  mb-0 small">{{ $last_post->created_at->toFormattedDateString()}}</p>
                        </div>
                    </a>
                </div>
                @endforeach
        </div>


      </div>

    </div>

    <div class="join-page-circle-1"></div>
    <div class="join-page-circle-2"></div>
    <div class="join-page-circle-3"></div>
  </div>

@endsection


@section('js')
  <script>
    $(window).scroll(function () {
      var scrollTop = $(window).scrollTop();
      // console.log("scrollTop>>>" + scrollTop);
      if (scrollTop == 0) {
        $(".join-page-circle-1").css({
          "left": "0vw"
        });
        $(".join-page-circle-2").css({
          "left": "60vw"
        });
        $(".join-page-circle-3").css({
          "right": "5vw"
        });
      } else {
        $(".join-page-circle-1").css({
          "left": ($(window).scrollTop() / 150) + "vw"
        });
        $(".join-page-circle-2").css({
          "left": (($(window).scrollTop() / 50)) + 60 + "vw"
        });
        $(".join-page-circle-3").css({
          "right": (($(window).scrollTop() / 20) + 5) + "vw"
        });
      }
    });

  </script>
  <script id="dsq-count-scr" src="//spot-3.disqus.com/count.js" async></script>
@endsection

