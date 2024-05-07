@extends('admin.layouts.master')
@section('title', 'Add Administrator')
@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-primary">


                    <div class="card-header">
                        <h3 class="card-title">Add Administrator</h3>
                    </div>
                    <form action="{{ route('admin.administrator.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <div class="form-group">
                                <label for="admin_name">Administrator Name</label>
                                <input type="text" class="form-control @error('admin_name') is-invalid @enderror"
                                    value="{{ old('admin_name') }}" name="admin_name" placeholder="Administrator Name">
                                @error('admin_name')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="admin_role">Administrator Role</label>
                                <textarea type="text"
                                    class="form-control @error('admin_role') is-invalid @enderror"
                                    name="admin_role"
                                    placeholder="Administrator role">{{ old('admin_role') }}</textarea>
                                @error('admin_role')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="phone">Phone Number</label>
                                <input type="text" class="form-control @error('phone') is-invalid @enderror"
                                    value="{{ old('phone') }}" name="phone" placeholder="Administrator Phone Number">
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
