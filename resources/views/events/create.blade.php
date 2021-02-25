@extends('layouts.appauth')

@section('content')
<div class="container my-5">
    <div class="row ">
        <div class="col-lg-4">
            <div class="list-group position-fixed w-25">
                <a href="{{route('events.index')}}" class="list-group-item list-group-item-action"><i
                        class="fa fa-home mr-1"></i> events</a>
            </div>
        </div>
        <div class="col-lg-8">


            <h3 class="my-2 text-muted font-weight-bold">Available Events
                <a href="{{route('events.create')}}" class="btn btn-info  text-white float-right">
                    add event <i class="fa fa-pencil ml-1 fa-1x"></i>
                </a>
            </h3>
            <hr>
            <div class="clearfix"></div>

            <div class="card shadow">
                <div class="card-header bg-info text-white">
                    <span class="font-weight-bold">Fill Information</span>
                    <i class="fa fa-plus-square fa-2x float-right "></i>
                </div>
                <div class="card-body">
                    {{--Create Post Form --}}
                    <form action="{{ route('events.store') }}" method="POST" class="mt-4" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group row">
                            <label for="title" class="col-sm-2 col-form-label">Title</label>
                            <div class="col-sm-10">
                                <input required type="text" name="title" id="title" class="form-control"
                                    placeholder="Add a title">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="description" class="col-sm-2 col-form-label">Description</label>
                            <div class="col-sm-10">
                                <textarea rows="5" cols="5" name="description" id="description"
                                    class="form-control tiny" placeholder="Add a description"></textarea>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="price" class="col-sm-2 col-form-label">Price</label>
                            <div class="col-sm-10">
                                <input required type="text" name="price" id="price" class="form-control"
                                    placeholder="Add a price">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="duration" class="col-sm-2 col-form-label">Duration</label>
                            <div class="col-sm-10">
                                <input required type="text" name="duration" id="duration" class="form-control"
                                    placeholder="Add a duration">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="date" class="col-sm-2 col-form-label">Day</label>
                            <div class="col-sm-10">
                                <input required type="date" name="date" id="date" class="form-control"
                                    placeholder="Add a date">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="featured" class="col-sm-2 col-form-label">Featured</label>
                            <div class="col-sm-10">
                                <input type="file" required name="featured" class="" id="featured">
                            </div>
                        </div>
                        <button class="btn btn-outline-info w-25 mx-auto float-right" type="submit">Add Event</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
