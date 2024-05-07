@extends('admin.layouts.master')
@section('title', 'Add Files')
@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Add File</h3>
                    </div>
                    <form action="{{ route('admin.download.store')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <div class="form-group">
                                <label for="file_name">File Name</label>
                                <input type="text" class="form-control @error('file_name') is-invalid @enderror"
                                    name="file_name" value="{{ old('file_name') }}" placeholder="Enter File Name">
                                @error('file_name')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="file">File</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" name="file"
                                            class="custom-file-input @error('file') is-invalid @enderror">
                                        <label class="custom-file-label" for="file">Choose file</label>
                                    </div>
                                </div>
                                @error('file')
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
