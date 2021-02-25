@extends('layouts.app')

@section('content')
    <div class="card shadow">
        <div class="container emp-profile">
            <a href="{{ url()->previous()  }}"> <i class="fa fa-caret-left"></i><i class="fa fa-caret-left"></i></a>

            <form action="{{ route('profile.update',['id' => $user->profile->id]) }}" method="POST"  id="uploadform"  enctype="multipart/form-data">
                @csrf
                @method('PATCH')
                <div class="row">
                    <div class="col-md-4">
                        <div class="profile-img">
                            <img src="{{ asset('storage/avatars/'.$user->profile->avatar) }}" alt=""/>

                                <div class="file btn btn-lg btn-primary">
                                    Change Photo
                                    <input type="file" onchange="subit()" name="avatar"/>
                                </div>
                        </div>
                    </div>
                    <div class="col-md-8">

                            <div class="row">
                                <div class="col-md-4">
                                    <label>Name</label>
                                </div>
                                <div class="col-md-8">
                                    <input type="text" name="name" class="form-control form-control-sm" value="{{ $user->name }}"/>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <label for="name">Email</label>
                                </div>
                                <div class="col-md-8">
                                    <input id="email" type="text" name="email" class="form-control form-control-sm" value="{{ $user->email }}"/>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <label>New Password</label>
                                </div>
                                <div class="col-md-8">
                                    <input type="password" name="password" class="form-control form-control-sm" placeholder="*******"/>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <label>facebook</label>
                                </div>
                                <div class="col-md-8">
                                    <input id="text" type="text" name="facebook" class="form-control form-control-sm" value=" {{ old('facebook') == '' ? $user->profile->facebook : old('facebook')}}"/>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <label>Youtube</label>
                                </div>
                                <div class="col-md-8">
                                    <input id="text" type="text" name="youtube" class="form-control form-control-sm" value=" {{ $user->profile->youtube}}"/>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <label>About</label>
                                </div>
                                <div class="col-md-8">
                                    <textarea name="about" id="about" cols="25" class="form-control" rows="3">{{ $user->profile->about }}</textarea>
                                </div>
                            </div>


                    </div>
                </div>
                <div class="row">

                        <div class="col-md-12">
                            <div class="row align-items-center align-items-baseline">

                                <input type="submit" class="btn btn-outline-dark  mx-auto btn-block w-25 mt-4" value="submit">
                            </div>
                        </div>


                </div>
            </form>
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

@section('js')

    <script>

        function subit(){
            document.getElementById("uploadform").submit();// Form submission
        }
    </script>
@endsection
