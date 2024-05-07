@extends('admin.layouts.master')
@section('title', 'Add Executive Message')
@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-primary">


                    <div class="card-header">
                        <h3 class="card-title">Add Executive Message</h3>
                    </div>
                    <form action="{{ route('admin.faculty.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Executive Name</label>
                                <input type="text" class="form-control @error('faculty_name') is-invalid @enderror"
                                    name="faculty_name" value="{{ old('faculty_name') }}" placeholder="Executive Name">
                                @error('faculty_name')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Executive Message</label>
                                <textarea class="form-control @error('faculty_message') is-invalid @enderror"
                                    name="faculty_message"
                                    placeholder="Executive Message">{{ old('faculty_message') }}</textarea>
                                @error('faculty_message')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Executive Position</label>
                                <textarea class="form-control @error('faculty_position') is-invalid @enderror"
                                    name="faculty_position"
                                    placeholder="Executive Position">{{ old('faculty_position') }}</textarea>
                                @error('faculty_position')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="exampleInputFile">Image</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" name="faculty_image"
                                            class="custom-file-input @error('faculty_image') is-invalid @enderror">
                                        <label class="custom-file-label" for="exampleInputFile">Choose Image</label>
                                    </div>
                                    @error('faculty_image')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
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
