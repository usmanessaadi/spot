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
                <div class="card-header bg-warning text-white">
                    <span class="font-weight-bold">Update Information</span>
                    <i class="fa fa-plus-square fa-2x float-right "></i>
                </div>
                <div class="card-body">
                    {{--Create Post Form --}}
                    <form action="{{ route('events.update', ['event' => $event->id]) }}" method="POST" class="mt-4"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PATCH')
                        <div class="form-group row">
                            <label for="title" class="col-sm-2 col-form-label">title</label>
                            <div class="col-sm-10">
                                <input required type="text" name="title" id="title" class="form-control"
                                    value="{{ $event->title }}">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="description" class="col-sm-2 col-form-label">Content</label>
                            <div class="col-sm-10">
                                <textarea required rows="5" cols="5" name="description" id="description"
                                    class="form-control"
                                    placeholder="Add a content">{{ $event->description }}</textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="price" class="col-sm-2 col-form-label">Price</label>
                            <div class="col-sm-10">
                                <input required type="text" name="price" id="price" class="form-control"
                                    value="{{ $event->price }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="duration" class="col-sm-2 col-form-label">Duration</label>
                            <div class="col-sm-10">
                                <input required type="text" name="duration" id="duration" class="form-control"
                                    value="{{ $event->duration }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="date" class="col-sm-2 col-form-label">Day</label>
                            <div class="col-sm-10">
                                <input required type="text" name="date" id="date" class="form-control"
                                    value="{{ $event->date }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="featured" class="col-sm-2 col-form-label">Featured</label>
                            <div class="col-sm-10">
                                <input type="file" name="featured" class="d-none" id="featured">
                                <label for="featured" class="btn btn-outline-info"> Upload file </label> <span
                                    class="ml-2" id="filename">{{ $event->featured }}</span>
                            </div>
                        </div>

                        <button type="submit" class="btn btn-outline-info w-25 mx-auto float-right">Update
                            Event</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
