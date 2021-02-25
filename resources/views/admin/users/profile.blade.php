@extends('layouts.app')

@section('content')

    <div class="card shadow">
        <div class="container emp-profile">
                <div class="row">
                    <div class="col-md-4">
                        <div class="profile-img">
                            <img src="{{ asset('storage/avatars/'.$user->profile->avatar) }}" alt=""/>

                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="profile-head">
                            <h5>
                                {{ $user->name }}
                            </h5>
                            <h6>
                                <p>{{ $user->admin ? 'admin' : 'user' }}</p>
                            </h6>
                            <p class="proile-rating">RANKINGS : <span>8/10</span></p>
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Info</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">About</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <a href="{{ route('profile.edit', ['id' => $user->profile->id]) }}" class="btn float-right btn-outline-light"><i
                                class="fa fa-pencil text-dark"></i></a>
                    </div>
                </div>
                <div class="row">

                    <div class="col-md-8 my-2 offset-md-2">
                        <div class="tab-content profile-tab" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>User Id</label>
                                    </div>
                                    <div class="col-md-6">
                                        <p>{{ $user->id }}</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Name</label>
                                    </div>
                                    <div class="col-md-6">
                                        <p>{{ $user->name }}</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Email</label>
                                    </div>
                                    <div class="col-md-6">
                                        <p>{{ $user->email }}</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Permession</label>
                                    </div>
                                    <div class="col-md-6">
                                        <p>{{ $user->admin ? 'admin' : 'user' }}</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Join since</label>
                                    </div>
                                    <div class="col-md-6">
                                        <p>{{ date('d-m-Y', strtotime($user->created_at)) }}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>facebook</label>
                                    </div>
                                    <div class="col-md-6">
                                        <a href="{{ $user->profile->facebook }}"><p>{{ $user->profile->facebook }}</p></a>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Youtube</label>
                                    </div>
                                    <div class="col-md-6">
                                        <a href="{{ $user->profile->youtube }}"><p>{{ $user->profile->youtube }}</p></a>

                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>About</label>
                                    </div>
                                    <div class="col-md-6">
                                        <p class="text-muted">{{ $user->profile->about }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
    </div>

@endsection


@section('styles')
    <style>
        .emp-profile{
        padding: 3%;
        margin-top: 3%;
        margin-bottom: 3%;
        border-radius: 0.5rem;
        background: #fff;
        }
        .profile-img{
        text-align: center;
        }
        .profile-img img{
        width: 70%;
        height: 100%;
        }
        .profile-img .file {
        position: relative;
        overflow: hidden;
        margin-top: -20%;
        width: 70%;
        border: none;
        border-radius: 0;
        font-size: 15px;
        background: #212529b8;
        }
        .profile-img .file input {
        position: absolute;
        opacity: 0;
        right: 0;
        top: 0;
        }
        .profile-head h5{
        color: #333;
        }
        .profile-head h6{
        color: #0062cc;
        }
        .profile-edit-btn{
        border: none;
        border-radius: 1.5rem;
        width: 70%;
        padding: 2%;
        font-weight: 600;
        color: #6c757d;
        cursor: pointer;
        }
        .proile-rating{
        font-size: 12px;
        color: #818182;
        margin-top: 5%;
        }
        .proile-rating span{
        color: #495057;
        font-size: 15px;
        font-weight: 600;
        }
        .profile-head .nav-tabs{
        margin-bottom:5%;
        }
        .profile-head .nav-tabs .nav-link{
        font-weight:600;
        border: none;
        }
        .profile-head .nav-tabs .nav-link.active{
        border: none;
        border-bottom:2px solid #0062cc;
        }
        .profile-work{
        padding: 14%;
        margin-top: -15%;
        }
        .profile-work p{
        font-size: 12px;
        color: #818182;
        font-weight: 600;
        margin-top: 10%;
        }
        .profile-work a{
        text-decoration: none;
        color: #495057;
        font-weight: 600;
        font-size: 14px;
        }
        .profile-work ul{
        list-style: none;
        }
        .profile-tab label{
        font-weight: 600;
        }
        .profile-tab p{
        font-weight: 600;
        color: #0062cc;
        }
    </style>
@endsection
