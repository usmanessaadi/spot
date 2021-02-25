@extends('layouts.appauth')

@section('content')
<div class="container my-5">
    <div class="row ">
        <div class="col-lg-4  ">
            <div class="list-group shadow">
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

    <div class="card">
        <div class="table-responsive">
            <table class="table m-0 table-striped table-borderless table-light table-hover">
                <thead class="thead-dark">
                <tr class="text-center">
                    <th>featured</th>
                    <th>Name</th>
                    <th>Price</th>
                    <th>Duration</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                @if(count($events) == 0)
                    <td class="align-middle text-center text-muted bg-white" colspan="5" >No records to show</td>
                @endif
                @foreach($events as $event)
                    <tr class="text-center">
                        <td><img src="{{ asset('storage/images/events/'.$event->featured) }}" class="img-fuild" height="" width="50"  alt="{{ $event->featured }}"></td>
                        <td class="align-middle">{{ $event->title }}</td>
                        <td class="align-middle">{{ $event->price }}</td>
                        <td class="align-middle">{{ $event->duration }}</td>
                        <td>
                            <form id="deleteForm" class="" method="POST" action="{{ route('events.destroy', ['event' => $event->id]) }}">
                                @method('DELETE')
                                @csrf
                                <button href="submit" class="btn btn-warning"><i class="fa fa-trash"></i> Trash</button>
                                <a href="{{ route('events.edit', ['event' => $event->id]) }}" class="btn text-white btn-info">Edit</a>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>

</div>
@endsection
