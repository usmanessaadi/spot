@extends('layouts.app')

@section('content')
    <h3 class="my-2 text-muted font-weight-bold">Edit Settings</h3>
    <hr class="mb-4 mt-1 w-25 float-left ml-4 shadow-lg">

    <div class="clearfix"></div>
        {{--add post card--}}
        <div class="card">
            <div class="card-header bg-danger text-white">
                <span class="font-weight-bold">Update Information</span>
                <i class="fa fa-plus-square fa-2x float-right "></i>
            </div>
            <div class="card-body">
                 {{--Create Post Form --}}
                <form action="{{ route('settings.update')}}" method="POST" class="mt-4">
                    @csrf
                    @method('PATCH')
                    <div class="form-group row">
                        <label for="site_name" class="col-sm-2 col-form-label">Site Name</label>
                        <div class="col-sm-10">
                            <input required type="text" name="site_name" id="site_name" class="form-control" value="{{ $settings->site_name }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="address" class="col-sm-2 col-form-label">Address</label>
                        <div class="col-sm-10">
                            <input required type="text" name="address" id="address" class="form-control" value="{{ $settings->address }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="contact_number" class="col-sm-2 col-form-label">Contact Number</label>
                        <div class="col-sm-10">
                            <input required type="text" name="contact_number" id="contact_number" class="form-control" value="{{ $settings->contact_number }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="contact_email" class="col-sm-2 col-form-label">Contact Email</label>
                        <div class="col-sm-10">
                            <input required type="email" name="contact_email" id="contact_email" class="form-control" value="{{ $settings->contact_email }}">
                        </div>
                    </div>
                    <button class="btn btn-outline-danger w-25 mx-auto float-right" type="submit">Update Settings</button>
                </form>
            </div>
        </div>
@endsection
