@extends('admin.layouts.master')
@section('title', 'Edit Class')
@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Edit Class</h3>
                    </div>
                    <form action="{{ route('admin.classes.update',$class->class_id)}}" method="post"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <div class="form-group">
                                <label for="class_name">Class Name</label>
                                <input type="text" class="form-control @error('class_name') is-invalid @enderror"
                                    name="class_name" placeholder="Class Name" value="{{ $class->class_name }}">
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
