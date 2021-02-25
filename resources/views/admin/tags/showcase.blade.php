@extends('layouts.app')

@section('content')
    <h3 class="my-2 text-muted font-weight-bold">Available Tags
        <a href="{{route('tag.create')}}" class="btn btn-info  text-white float-right">
            add tag <i class="fa fa-plus-square ml-1 fa-1x"></i>
        </a>
    </h3>
    <hr>
    <div class="clearfix"></div>

    <div class="card">
        <div class="table-responsive">
            <table class="table m-0 table-striped table-borderless table-light table-hover">
                <thead class="thead-dark">
                <tr class="text-center">
                    <th>#</th>
                    <th>Tag</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                @if(count($tags) == 0)
                    <td class="align-middle text-center text-muted bg-white" colspan="5" >No records to show</td>
                @endif
                @foreach($tags as $tag)
                    <tr class="text-center">
                        <td class="align-middle" scope="row">{{ $tag->id }}</td>
                        <td class="align-middle">{{ $tag->tag }}</td>
                        <td>
                            <form id="deleteForm" class="" method="POST" action="{{ route('tag.destroy', ['id' => $tag->id]) }}">
                                @csrf
                                @method('DELETE')
                                <button href="submit" class="btn btn-danger">Delete</button>
                                <a href="{{ route('tag.edit', ['id' => $tag->id]) }}" class="btn text-white btn-info">Edit</a>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>

@endsection
