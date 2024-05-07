@extends('admin.layouts.master')
@section('title', 'Edit Executive Message')
@section('content')
<section class="content">
    <div class="d-flex justify-content-end">
        <a class="btn btn-primary my-2" href="{{route('admin.faculty.index')}}">Back</a>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Executive Message</h3>
                    </div>
                    <form action="{{ route('admin.faculty.update', $faculty->id) }}" method="post"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Executive Name</label>
                                <input type="text" class="form-control @error('faculty_name') is-invalid @enderror"
                                    value="{{$faculty->faculty_name}}" name="faculty_name" placeholder="Executive Name">
                                @error('faculty_name')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Executive Message</label>
                                <textarea type="text"
                                    class="form-control @error('faculty_message') is-invalid @enderror"
                                    name="faculty_message"
                                    placeholder="Executive Message">{{$faculty->faculty_message}}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Executive Position</label>
                                <input type="text" class="form-control @error('faculty_position') is-invalid @enderror"
                                    value="{{$faculty->faculty_position}}" name="faculty_position"
                                    placeholder="Executive Position">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputFile">Image</label>
                                <div class="col-md-3 my-2">
                                    <img style="height: 70px; width:105px;" src="{{asset($faculty->faculty_image)}}"
                                        alt="">
                                </div>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" name="faculty_image" class="custom-file-input">
                                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                    </div>
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
