@extends('layouts.app')

@section('content')
    @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    @endif
    <h3 class="my-2 text-muted font-weight-bold">Dashboard</h3>
    <hr class="mb-4 mt-1 w-25 float-left">
    <div class="clearfix"></div>
    <div class="row">

        <div class="col-md-3">
            <div class="card text-center">
                <div class="card-header bg-warning">Posts</div>

                <div class="card-body">
                        {{ $posts_count }}
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card text-center">
                <div class="card-header bg-primary text-white">Trashed</div>

                <div class="card-body">
                        {{ $trashedPosts_count }}
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card text-center">
                <div class="card-header bg-dark text-white">Categories</div>

                <div class="card-body">
                        {{ $categories_count }}
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card text-center">
                <div class="card-header bg-danger text-white">User</div>

                <div class="card-body">
                        {{ $users_count }}
                </div>
            </div>
        </div>


    </div>
@endsection
