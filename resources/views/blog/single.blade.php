
@extends('layouts.blogapp')

@section('css')
<link href="{{ asset('css/blog.css')}}" rel="stylesheet">
@endsection

@section('content')

  <nav class="navbar shadow fixed-top" id="contact-navbar" style="background-color:#444;">
    <div class="container ">
    <img src="{{ asset('img/assets/ver-colorful.png') }}" width="100" style="left:-9%; position: relative;" class="ver-colorful" alt="vertical colorful">
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
      <div class="collapse navbar-collapse" id="navbarResponsive">
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
      <ul class="navbar-nav lan-nav mx-auto" style="cursor:pointer">
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
  <h1 class="text-center font-weight-bold blog-title" style="font-size:  3rem !important;">{{ Str::upper($post->title) }}</h1>
    <img src="{{ asset('img/assets/colorful.png')}}" class="from-right hor-colorful" style="min-width:5%; right: 8%; top: 50%; height: 50%;"
      alt="horizontal colorful">
  </div>

  <div class="blog-container mt-5 ">
    <div class="row">

      <!-- blog -->
      <div class="col-md-12 order-md-2 blog-column shadow bg-white mx-auto mr-2">
            <div class="card-img">
            <img src="{{ asset($post->featured_image) }}" alt="{{ empty($post->featured_image) ? '' : $post->title }}" class="card-img-top border my-3 p-1">
              <p class="text-muted post-content-detail text-center ml-2">{{ $post->created_at->diffForHumans() }} - published by {{ $post->author->name }}
              </p>
            </div>

          <h2 class=" post-title display-4 p-2"> {{ $post->title }} </h2>

            <div class="p-3 post-content">
                    {!! $post->body !!}
            </div>
            <hr class="mx-auto mb-4 ml-4 w-75 shadow-sm">
            <p class="text-muted post-content-detail text-center ml-2">{{ $post->created_at->diffForHumans() }} - published by {{ $post->author->name }}
            <div class="col-md-12 order-md-1 blog-column px-0 ">
                <div class="tags  bg-white p-3">
                    <p class="px-2 my-4 ml-2 m-0 font-weight-bold"><i class="fa fa-tags mr-1"></i>Tags :
                      @foreach ($post->tags as $tag)
                        <a href="{{ route('blog.searchByTag', $tag->id) }}" class="ml-3 text-dark post-tags" style="text-decoration: none;">
                            <span class="bg-light p-3 small badge-pill border border-circle">{{$tag->name}}</span>
                        </a>
                    @endforeach
                    </p>
                 </div>



            </div>
             <div class="heading text-center">
                    <h4 class="h1 heading-title">Related Posts</h4>
                    <div class="heading-line">
                        <span class="short-line"></span>
                        <span class="long-line"></span>
                    </div>
                </div>
            <div class="card-columns w-75 mx-auto">
                @foreach($related_posts as $post)
                    <div class="card mx-auto w-100">
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
                        <div class="clearfix"></div>
                    </div>
                @endforeach
            </div>
            <hr class="mx-auto mb-4 ml-4 w-75 shadow-sm">

            <div class="clearfix"></div>

            <div class="comments">

                <div class="heading text-center">
                    <h4 class="h1 heading-title">Comments</h4>
                    <div class="heading-line">
                        <span class="short-line"></span>
                        <span class="long-line"></span>
                    </div>
                </div>
                @include('includes.disqus')
            </div>
        </div>
        <!-- Related posts -->


    </div>

    <div class="join-page-circle-1"></div>
    <div class="join-page-circle-2"></div>
    <div class="join-page-circle-3"></div>
  </div>

@endsection

@section('js')
{{-- <script id="dsq-count-scr" src="https://blogal-1.disqus.com/count.js" async></script> --}}

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
@endsection
