@extends('layouts.app')

@section('content')
    <h3 class="my-2 text-muted font-weight-bold">Add a new User</h3>
    <hr class="mb-4 mt-1 w-25 float-left ml-4 shadow-lg">

    <div class="clearfix"></div>
        {{--add post card--}}
        <div class="card">
            <div class="card-header bg-light ">
                <span class="font-weight-bold">Fill Information</span>
                <i class="fa fa-plus-square fa-2x float-right "></i>
            </div>
            <div class="card-body">
                 {{--Create Post Form --}}
                <form action="{{ route('user.store') }}" method="POST" class="mt-4">
                    @csrf
                    <div class="form-group row">
                        <label for="name" class="col-sm-2 col-form-label">Name</label>
                        <div class="col-sm-10">
                            <input required type="text" name="name" id="name" class="form-control" placeholder="Insert a user name">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="email" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                            <input required type="email" name="email" id="email" class="form-control" placeholder="Insert a user email">
                        </div>
                    </div>
                    <button class="btn btn-outline-info w-25 mx-auto float-right" type="submit">Add User</button>
                </form>
            </div>
        </div>
@endsection
