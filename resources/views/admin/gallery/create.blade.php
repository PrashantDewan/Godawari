@extends('admin.layouts.master')
@section('title', 'Add Galley')
@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Add Gallery</h3>
                    </div>
                    <form action="{{ route('admin.gallery.store')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <div class="form-group">
                                <label for="gallery_name">Gallery Name</label>
                                <input type="text" class="form-control @error('gallery_name') is-invalid @enderror"
                                    name="gallery_name" value="{{ old('gallery_name') }}"
                                    placeholder="Enter Gallery Name">
                                @error('gallery_name')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="gallery_image">Gallery Image</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" name="gallery_image"
                                            class="custom-file-input @error('gallery_image') is-invalid @enderror">
                                        <label class="custom-file-label" for="gallery_image">Choose file</label>
                                    </div>
                                </div>
                                @error('gallery_image')
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
