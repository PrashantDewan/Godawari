@extends('admin.layouts.master')
@section('title', 'Add Classes')
@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Add Classes</h3>
                    </div>
                    <form action="{{ route('admin.classes.store')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <div class="form-group">
                                <label for="file_name">Class Name</label>
                                <input type="text" class="form-control @error('class_name') is-invalid @enderror"
                                    name="class_name" placeholder="Enter Class Name">
                                @error('class_name')
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
