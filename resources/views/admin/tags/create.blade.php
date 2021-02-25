@extends('layouts.app')

@section('content')
    <h3 class="my-2 text-muted font-weight-bold">Add a new tag</h3>
    <hr class="mb-4 mt-1 w-25 float-left ml-4 shadow-lg">

    <div class="clearfix"></div>
        {{--add post card--}}
        <div class="card">
            <div class="card-header bg-success text-white">
                <span class="font-weight-bold">Fill Information</span>
                <i class="fa fa-plus-square fa-2x float-right "></i>
            </div>
            <div class="card-body">
                 {{--Create Post Form --}}
                <form action="{{ route('tag.store') }}" method="POST" class="mt-4">
                    @csrf
                    <div class="form-group row">
                        <label for="tag" class="col-sm-2 col-form-label">Tag</label>
                        <div class="col-sm-10">
                            <input required type="text" name="tag" id="tag" class="form-control" placeholder="Add a tag name">
                        </div>
                    </div>
                    <button class="btn btn-outline-success w-25 mx-auto float-right" type="submit">Add Tag</button>
                </form>
            </div>
        </div>
@endsection
