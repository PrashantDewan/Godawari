@extends('admin.layouts.master')
@section('title', 'Add Scholarship')
@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Add Scholarship</h3>
                    </div>
                    <form action="{{ route('admin.scholarship.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label for="details">Details</label>
                                        <input type="text" name="details"
                                            class="form-control @error('details') is-invalid @enderror">
                                    </div>
                                    @error('details')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label for="scholarship">Scholarship</label>
                                        <input type="text" name="scholarship"
                                            class="form-control @error('scholarship') is-invalid @enderror">
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
