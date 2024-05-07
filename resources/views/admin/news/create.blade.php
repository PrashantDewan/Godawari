@extends('admin.layouts.master')
@section('title', 'Add News')
@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Add News</h3>
                    </div>
                    <form action="{{ route('admin.news.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label for="news_category_id">News Category</label>
                                        <select name="news_category_id"
                                            class="form-control @error('news_category_id') is-invalid @enderror"
                                            id="news_category_id">
                                            <option disabled selected>Select category </option>
                                            @foreach ($categories as $category)
                                            <option value="{{ $category->category_id }}" {!!
                                                old('news_category_id')==$category->category_id ? 'selected="selected"'
                                                : '' !!}>{{ $category->news_category }}
                                            </option>
                                            @endforeach
                                        </select>
                                        @error('news_category_id')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="subject">News Subject</label>
                                <input type="text" class="form-control @error('subject') is-invalid @enderror"
                                    name="subject" placeholder="Enter subject" value="{{ old('subject') }}">
                                @error('subject')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="news_description">News Description</label>
                                <textarea id="mytextarea" type="text"
                                    class="form-control @error('news_description') is-invalid @enderror"
                                    name="news_description"
                                    placeholder="News Description">{{ old('news_description') }}</textarea>
                                @error('news_description')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror

                            </div>
                            <div class="form-group">
                                <label for="date">Date</label>
                                <input type="date" class="form-control @error('date') is-invalid @enderror" name="date"
                                    placeholder="date" value="{{ old('date') }}">
                                @error('date')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="news_image">Image</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" name="news_image"
                                            class="custom-file-input @error('news_image') is-invalid @enderror">
                                        <label class="custom-file-label" for="news_image">Choose Image</label>
                                    </div>
                                </div>
                                @error('news_image')
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
