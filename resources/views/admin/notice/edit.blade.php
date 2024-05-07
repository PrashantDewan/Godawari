@extends('admin.layouts.master')
@section('title', 'Edit Notice')
@section('content')
<section class="content">
    <div class="d-flex justify-content-end">
        <a class="btn btn-primary" href="{{route('admin.notice.index')}}">Back</a>
    </div>
    <div class="container-fluid mt-2">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Quick Example</h3>
                    </div>


                    <form action="{{ route('admin.notice.update', $notice->id) }}" method="post"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Notice Subject</label>
                                <input type="text" class="form-control @error('subject') is-invalid @enderror"
                                    value="{{$notice->subject}}" name="subject" placeholder="Enter subject">
                                @error('subject')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Notice Description</label>
                                <textarea id="mytextarea" type="text"
                                    class="form-control @error('notice_description') is-invalid @enderror"
                                    name="notice_description"
                                    placeholder="notice Description">{{$notice->notice_description}}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputFile">Image</label>
                                <div class="col-md-3 my-2">
                                    <img style="height: 70px; width:105px;" src="{{asset($notice->notice_image)}}"
                                        alt="">
                                </div>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" name="notice_image" class="custom-file-input">
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
