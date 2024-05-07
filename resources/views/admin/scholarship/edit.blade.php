@extends('admin.layouts.master')
@section('title', 'Edit Scholarship')
@section('content')
<section class="content">
    <div class="d-flex justify-content-end">
        <a class="btn btn-primary" href="{{route('admin.scholarship.index')}}">Back</a>
    </div>
    <div class="container-fluid mt-2">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Edit Scholarship</h3>
                    </div>


                    <form action="{{ route('admin.scholarship.update',$scholarship->id) }}" method="post"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label for="details">Detail</label>
                                        <input type="text" name="details"
                                            class="form-control @error('details') is-invalid @enderror"
                                            value="{{ $scholarship->details }}">

                                    </div>
                                    @error('details')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                    <div class="form-group">
                                        <label for="news_category">Scholarship</label>
                                        <input type="text" name="scholarship"
                                            class="form-control @error('scholarship') is-invalid @enderror"
                                            value="{{ $scholarship->scholarship }}">

                                    </div>
                                    @error('scholarship')
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
