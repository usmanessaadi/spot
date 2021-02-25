@extends('layouts.app')

@section('content')
    <h3 class="my-2 text-muted font-weight-bold">Available Categories
        <a href="{{route('category.create')}}" class="btn btn-info  text-white float-right">
            add Category <i class="fa fa-plus-square ml-1 fa-1x"></i>
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
                    <th>Name</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                @if(count($categories) == 0)
                    <td class="align-middle text-center text-muted bg-white" colspan="5" >No records to show</td>
                @endif
                @foreach($categories as $category)
                    <tr class="text-center">
                        <td class="align-middle" scope="row">{{ $category->id }}</td>
                        <td class="align-middle">{{ $category->name }}</td>
                        <td>
                            <form id="deleteForm" class="" method="POST" action="{{ route('category.destroy', ['id' => $category->id]) }}">
                                @csrf
                                @method('DELETE')
                                <button href="submit" class="btn btn-danger">Delete</button>
                                <a href="{{ route('category.edit', ['id' => $category->id]) }}" class="btn text-white btn-info">Edit</a>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>

@endsection
