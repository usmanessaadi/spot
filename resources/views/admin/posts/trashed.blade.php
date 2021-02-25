@extends('layouts.app')

@section('content')
    <h3 class="my-2 text-muted font-weight-bold">Trashed Posts</h3>
    <hr class="mb-4 mt-1 w-25 float-left ml-4 shadow-lg">
    <div class="clearfix"></div>

    <div class="card">
        <div class="table-responsive">
            <table class="table m-0 table-striped table-borderless table-light table-hover">
                <thead class="thead-dark">
                <tr class="text-center">
                    <th>featured</th>
                    <th>Name</th>
                    <th>Content</th>
                    <th>Category</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                @if(count($posts) == 0)
                    <td class="align-middle text-center text-muted bg-white" colspan="5" >No records to show</td>
                @endif
                @foreach($posts as $post)
                    <tr class="text-center">
                        <td><img src="{{ asset('storage/images/'.$post->featured) }}" class="img-fuild" height="" width="50"  alt="{{ $post->featured }}"></td>
                        <td class="align-middle">{{ $post->title }}</td>
                        <td class="align-middle text-truncate" style="max-width: 150px">{{ $post->body }}</td>
                        <td class="align-middle">{{ $post->category->name }}</td>
                        <td>
                            <form id="deleteForm" class="" method="POST" action="{{ route('post.kill', ['id' => $post->id]) }}">
                                @csrf
                                @method('DELETE')
                                <button href="submit" class="btn btn-danger">Destroy</button>
                                <a href="{{ route('post.restore', ['id' => $post->id]) }}" class="btn btn-light">Restore</a>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
