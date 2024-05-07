@extends('admin.layouts.master')
@section('title', 'Edit Alumni')
@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Edit Alumni</h3>
                    </div>
                    <form action="{{ route('admin.alumni.update',$alumni->id)}}" method="post"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <div class="form-group">
                                <label for="alumni_name">Alumni Name</label>
                                <input type="text" class="form-control @error('alumni_name') is-invalid @enderror"
                                    name="alumni_name" value="{{ $alumni->alumni_name }}"
                                    placeholder="Enter Alumni Name">
                                @error('alumni_name')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="batch">Alumni Batch</label>
                                <input type="text" class="form-control @error('batch') is-invalid @enderror"
                                    name="batch" value="{{ $alumni->batch }}" placeholder="Enter Alumni Batch">
                                @error('batch')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="alumni_testimonial">Alumni Testimonial</label>
                                <textarea type="test"
                                    class="form-control @error('alumni_testimonial') is-invalid @enderror"
                                    name="alumni_testimonial"
                                    placeholder="Enter Testimonial">{{ $alumni->alumni_testimonial }}</textarea>
                                @error('alumni_testimonial')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="alumni_image">Image</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" name="alumni_image"
                                            class="custom-file-input @error('alumni_image') is-invalid @enderror">
                                        <label class="custom-file-label" for="alumni_image">Choose file</label>
                                    </div>
                                </div>
                                @error('alumni_image')
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
