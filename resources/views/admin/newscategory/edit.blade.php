@extends('admin.layouts.master')
@section('title', 'Edit news Category')
@section('content')
<section class="content">
    <div class="d-flex justify-content-end">
        <a class="btn btn-primary" href="{{route('admin.news.category.index')}}">Back</a>
    </div>
    <div class="container-fluid mt-2">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Edit News Category</h3>
                    </div>


                    <form action="{{ route('admin.news.category.update',$news_category->category_id) }}" method="post"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label for="news_category">News Category</label>
                                        <input type="text" name="category_name" id="category_name"
                                            class="form-control @error('category_name') is-invalid @enderror"
                                            value="{{ $news_category->news_category }}">

                                    </div>
                                    @error('category_name')
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
