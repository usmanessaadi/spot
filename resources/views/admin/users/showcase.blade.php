@extends('layouts.app')

@section('content')
    <h3 class="my-2 text-muted font-weight-bold">Available Users
        <a href="{{ route('user.create') }}" class="btn btn-info  text-white float-right">
            add user <i class="fa fa-plus-square ml-1 fa-1x"></i>
        </a>
    </h3>

    <hr class="mb-4 mt-1 w-25 float-left ml-4 shadow-lg">
    <div class="clearfix"></div>

    <div class="card">
        <div class="table-responsive">
            <table class="table m-0 table-striped table-borderless table-light table-hover">
                <thead class="thead bg-warning">
                <tr class="text-center">
                    <th>avatar</th>
                    <th>Name</th>
                    <th>Permission</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                @if(count($users) == 0)
                    <td class="align-middle text-center text-muted bg-white" colspan="5" >No records to show</td>
                @endif
                @foreach($users as $user)
                    <tr class="text-center">
                        <td><img src="{{ asset('storage/avatars/'.$user->profile->avatar) }}" class="img-fuild" height="" width="40"  alt="{{ $user->avatar }}"></td>
                        <td class="align-middle">{{ $user->name }}</td>
                        <td class="align-middle">{{ $user->admin ? 'admin' : 'user' }}</td>
                        <td class="text-center">
                            <form id="deleteForm" class="" method="POST" action="{{ route('user.destroy', ['id' => $user->id]) }}">
                                @csrf
                                @method('DELETE')
                                <button href="submit" {{ Auth::user()->id == $user->id ? 'disabled' : '' }} class="btn btn-warning"><i class="fa fa-trash"></i> Trash</button>
                                <a href="{{ route('user.edit', ['id' => $user->id]) }}" class="btn text-white btn-primary">Edit</a>
                                {{--@if(Auth::user()->id == $user->id)--}}
                                    <a href="{{ route('user.toggle-admin', ['id' => $user->id]) }}"  class="btn text-white {{ Auth::user()->id == $user->id ? 'disabled' : '' }} {{ $user->admin ? 'btn-danger w-25' : 'btn-success w-25' }}"  >{{ $user->admin ? 'Revoke' : 'Grant' }}</a>
                                {{--@endif--}}
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
