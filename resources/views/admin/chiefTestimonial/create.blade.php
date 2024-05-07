@extends('admin.layouts.master')
@section('title', "Add What Leader's Say")
@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Add What Leader's Say</h3>
                    </div>
                    <form action="{{ route('admin.testimonial.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <div class="form-group">
                                <label for="chief_name">Leader Name</label>
                                <input type="text" class="form-control @error('chief_name') is-invalid @enderror"
                                    id="chief_name" name="chief_name" placeholder="Leader Name"
                                    value="{{ old('cheif_name') }}">
                                @error('chief_name')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="chief_designation">Leader Designation</label>
                                <input type="text" class="form-control @error('chief_designation') is-invalid @enderror"
                                    name="chief_designation" placeholder="Leader Designation"
                                    value="{{ old('cheif_designation') }}">
                                @error('chief_designation')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="chief_testimonial">Leader Message</label>
                                <textarea type="test"
                                    class="form-control @error('chief_testimonial') is-invalid @enderror"
                                    name="chief_testimonial"
                                    placeholder="Leader Message">{{ old('chief_testimonial') }}</textarea>
                                @error('chief_testimonial')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="chief_image">Image</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" name="chief_image"
                                            class="custom-file-input @error('chief_image') is-invalid @enderror">
                                        <label class="custom-file-label" for="chief_image">Choose file</label>
                                    </div>
                                </div>
                                @error('chief_image')
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
