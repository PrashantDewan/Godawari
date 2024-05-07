@extends('admin.layouts.master')
@section('title', 'Add Notice')
@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-primary">


                    <div class="card-header">
                        <h3 class="card-title">Add Notice</h3>
                    </div>
                    <form action="{{ route('admin.notice.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Notice Subject</label>
                                <input type="text" class="form-control @error('subject') is-invalid @enderror"
                                    name="subject" value="{{ old('subject') }}" placeholder="Notice subject">
                                @error('subject')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Notice Description</label>
                                <textarea id="mytextarea"
                                    class="form-control @error('notice_description') is-invalid @enderror"
                                    name="notice_description"
                                    placeholder="Notice Description">{{ old('notice_description') }}</textarea>
                                @error('notice_description')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="exampleInputFile">Image</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" name="notice_image"
                                            class="custom-file-input @error('notice_image') is-invalid @enderror">
                                        <label class="custom-file-label" for="exampleInputFile">Choose Image</label>
                                    </div>
                                    @error('notice_image')
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
