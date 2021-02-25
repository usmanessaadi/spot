@extends('layouts.app')

@section('content')
    <h3 class="my-2 text-muted font-weight-bold"><a href="{{ url()->previous()  }}"> << </a> Update Post </h3>
    <hr class="mb-4 mt-1 w-25 float-left ml-4 ">

    <div class="clearfix"></div>
        {{--add post card--}}
        <div class="card shadow">
            <div class="card-header bg-info text-white">
                <span class="font-weight-bold">Update Information</span>
                <i class="fa fa-plus-square fa-2x float-right "></i>
            </div>
            <div class="card-body">
                 {{--Create Post Form --}}
                <form action="{{ route('post.update', ['id' => $post->id]) }}" method="POST" class="mt-4" enctype="multipart/form-data">
                    @csrf
                    @method('PATCH')
                    <div class="form-group row">
                        <label for="title" class="col-sm-2 col-form-label">title</label>
                        <div class="col-sm-10">
                            <input required type="text" name="title" id="title" class="form-control" value="{{ $post->title }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="featured" class="col-sm-2 col-form-label">Featured</label>
                        <div class="col-sm-10">
                            <input type="file" name="featured"  class="d-none" id="featured">
                            <label for="featured" class="btn btn-outline-info"> Upload file </label> <span class="ml-2" id="filename">{{ $post->featured }}</span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="body" class="col-sm-2 col-form-label">Content</label>
                        <div class="col-sm-10">
                            <textarea required rows="5" cols="5" name="body" id="body" class="form-control" placeholder="Add a content">{{ $post->body }}</textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="tag" class="col-sm-2 col-form-label">Tag</label>
                        <div class="col-sm-10 my-auto">
                            @foreach($tags as $tag)
                                <div class="form-check form-check-inline">
                                    <label class="form-check-label">
                                        <input class="form-check-input" type="checkbox"  name="tags[]" id="tag" value="{{ $tag->id }}"
                                            @foreach($post->tags as  $t)
                                                @if($tag->id == $t->id)
                                                    checked
                                                @endif
                                            @endforeach
                                        > {{ $tag->tag  }}
                                    </label>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="category" class="col-sm-2 col-form-label">Category</label>
                        <div class="col-sm-10">
                            <select class="form-control" name="category_id" id="category_id">
                                @foreach($categories as $category)
                                    <option value="{{ $category->id }}" {{ $post->category->name == $category->name ? "selected" : '' }}>{{ $category->name  }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-outline-info w-25 mx-auto float-right" >Update Post</button>
                </form>
            </div>
        </div>
@endsection

@section('js')

@endsection
