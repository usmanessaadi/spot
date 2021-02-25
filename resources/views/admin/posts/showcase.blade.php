@extends('layouts.app')

@section('content')
    <h3 class="my-2 text-muted font-weight-bold">Available Posts
        <a href="{{route('post.create')}}" class="btn btn-info  text-white float-right">
            add post <i class="fa fa-pencil ml-1 fa-1x"></i>
        </a>
        <a href="{{route('post.trashed')}}" class="btn btn-warning mr-2 float-right">
            Trashed posts <i class="fa fa-trash ml-1 fa-1x"></i>
        </a>
    </h3>
    <hr>
    <div class="clearfix"></div>

    <div class="card">
        <div class="table-responsive">
            <table class="table m-0 table-striped table-borderless table-light table-hover">
                <thead class="thead-dark">
                <tr class="text-center">
                    <th>featured</th>
                    <th>Name</th>
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
                        <td class="align-middle">{{ $post->category->name }}</td>
                        <td>
                            <form id="deleteForm" class="" method="POST" action="{{ route('post.destroy', ['id' => $post->id]) }}">
                                @csrf
                                @method('DELETE')
                                <button href="submit" class="btn btn-warning"><i class="fa fa-trash"></i> Trash</button>
                                <a href="{{ route('post.edit', ['id' => $post->id]) }}" class="btn text-white btn-info">Edit</a>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
