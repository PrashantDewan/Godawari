@extends('admin.layouts.master')
@section('title', 'Edit Teacher')
@section('content')
<section class="content">
    <div class="d-flex justify-content-end">
        <a class="btn btn-primary" href="{{route('admin.teacher.index')}}">Back</a>
    </div>
    <div class="container-fluid mt-2">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Edit Teacher</h3>
                    </div>


                    <form action="{{ route('admin.teacher.update', $teacher->id) }}" method="post"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <div class="form-group">
                                <label for="teacher_name">Teacher Name</label>
                                <input type="text" class="form-control @error('teacher_name') is-invalid @enderror"
                                    value="{{$teacher->teacher_name}}" name="teacher_name" placeholder="Enter subject">
                                @error('teacher_name')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="subject">Subject</label>
                                <textarea type="text" class="form-control @error('subject') is-invalid @enderror"
                                    name="subject" placeholder="Teacher Subject">{{$teacher->subject}}</textarea>
                                @error('subject')
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
