@extends('layouts.app')

@section('content')
    <h3 class="my-2 text-muted font-weight-bold">Add a new post</h3>
    <hr class="mb-4 mt-1 w-25 float-left ml-4 shadow-lg">
    <div class="clearfix"></div>

    {{--add post card--}}
        <div class="card">
            <div class="card-header bg-info text-white">
                <span class="font-weight-bold">Fill Information</span>
                <i class="fa fa-plus-square fa-2x float-right "></i>
            </div>
            <div class="card-body">
                 {{--Create Post Form --}}
                <form action="{{ route('post.store') }}" method="POST" class="mt-4" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group row">
                        <label for="title" class="col-sm-2 col-form-label">Title</label>
                        <div class="col-sm-10">
                            <input required type="text" name="title" id="title" class="form-control" placeholder="Add a title">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="featured" class="col-sm-2 col-form-label">Featured</label>
                        <div class="col-sm-10">
                                <input type="file" required name="featured" class="" id="featured">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="content" class="col-sm-2 col-form-label">Content</label>
                        <div class="col-sm-10">
                            <textarea  rows="5" cols="5" name="body" id="content"  class="form-control tiny" placeholder="Add a content"></textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="tag" class="col-sm-2 col-form-label">Tag</label>
                        <div class="col-sm-10 my-auto">
                            @foreach($tags as $tag)
                                <div class="form-check form-check-inline">
                                    <label class="form-check-label">
                                        <input class="form-check-input" type="checkbox" name="tags[]" id="tag"
                                               value="{{ $tag->id }}"> {{ $tag->tag  }}
                                    </label>
                                </div>
                            @endforeach
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="category" class="col-sm-2 col-form-label">Categorie</label>
                        <div class="col-sm-10">
                            <select class="form-control" name="category_id" id="category_id">
                                @foreach($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->name  }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <button class="btn btn-outline-info w-25 mx-auto float-right" type="submit">Add Post</button>
                </form>
            </div>
        </div>
@endsection



@section('styles')

@endsection
@section('js')

@endsection
