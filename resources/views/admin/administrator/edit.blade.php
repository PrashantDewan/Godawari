@extends('admin.layouts.master')
@section('title', 'Edit Administrator')
@section('content')
<section class="content">
    <div class="d-flex justify-content-end">
        <a class="btn btn-primary" href="{{route('admin.team.index')}}">Back</a>
    </div>
    <div class="container-fluid mt-2">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Edit Administrator</h3>
                    </div>


                    <form action="{{ route('admin.administrator.update', $team->id) }}" method="post"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <div class="form-group">
                                <label for="admin_name">Administrator Name</label>
                                <input type="text" class="form-control @error('admin_name') is-invalid @enderror"
                                    value="{{$team->admin_name}}" name="admin_name" placeholder="Administrator Name">
                                @error('admin_name')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="admin_role">Administrator Role</label>
                                <textarea type="text"
                                    class="form-control @error('admin_role') is-invalid @enderror"
                                    name="admin_role"
                                    placeholder="Administrator Role">{{$team->admin_role}}</textarea>
                                @error('admin_role')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="phone">Phone Number</label>
                                <input type="text" class="form-control @error('phone') is-invalid @enderror"
                                    value="{{$team->phone}}" name="phone" placeholder="Administrator Phone Number">
                                @error('phone')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
