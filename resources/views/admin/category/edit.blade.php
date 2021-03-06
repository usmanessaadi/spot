@extends('layouts.app')

@section('content')
    <h3 class="my-2 text-muted font-weight-bold">Edit Category</h3>
    <hr class="mb-4 mt-1 w-25 float-left ml-4 shadow-lg">

    <div class="clearfix"></div>
        {{--add post card--}}
        <div class="card">
            <div class="card-header bg-info text-white">
                <span class="font-weight-bold">Update Information</span>
                <i class="fa fa-plus-square fa-2x float-right "></i>
            </div>
            <div class="card-body">
                 {{--Create Post Form --}}
                <form action="{{ route('category.update', ['id' => $category->id]) }}" method="POST" class="mt-4">
                    @csrf
                    @method('PATCH')
                    <div class="form-group row">
                        <label for="name" class="col-sm-2 col-form-label">Name</label>
                        <div class="col-sm-10">
                            <input required type="text" name="name" id="name" class="form-control" value="{{ $category->name }}">
                        </div>
                    </div>
                    <button class="btn btn-outline-info w-25 mx-auto float-right" type="submit">Update Category</button>
                </form>
            </div>
        </div>
@endsection
