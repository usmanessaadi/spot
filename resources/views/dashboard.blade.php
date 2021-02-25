@extends('layouts.appauth')

@section('css')
  <link href="{{ asset('css/admin.css') }}" rel="stylesheet">
@endsection
@section('content')
<div class="container">
     <div class="uphero text-center w-100 mx-auto">

        <img width="80" class="mr-3" src="{{asset('img/logo.png')}}" alt="Logo " >
        <h1>Welcomd to The Spot Dashboard</h1>
    </div>
    <div class="row justify-content-center" id="mainDashboard">
        <div class="col-md-4">
            <a href="{{route('events.index')}}">
                <div class="card bg-warning shadow" style="">
                    <h1 class=" p-5 text-center text-dark ">Events Dashboard</h1>
                </div>
            </a>
        </div>
        <div class="col-md-4">
            <a href="/dashboard/wink">
                <div class="card bg-primary shadow" style="">
                    <h1 class="text-white p-5 text-center">Blog Dashboard</h1>
                 </div>
            </a>
        </div>
    </div>
</div>
<div></div>
@endsection
