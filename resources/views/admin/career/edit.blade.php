@extends('admin.layouts.master')
@section('title', 'Edit Career')
@section('content')
<section class="content">
    <div class="d-flex justify-content-end">
        <a class="btn btn-primary" href="{{route('admin.career.index')}}">Back</a>
    </div>
    <div class="container-fluid mt-2">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Edit career</h3>
                    </div>


                    <form action="{{ route('admin.career.update', $career->career_id) }}" method="post"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <div class="form-group">
                                <label for="position">Career Position</label>
                                <input type="text" class="form-control @error('position') is-invalid @enderror"
                                    value="{{$career->position}}" name="position" placeholder="Enter subject">
                                @error('position')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="criteria">Career Criteria</label>
                                <textarea id="mytextarea" type="text"
                                    class="form-control @error('criteria') is-invalid @enderror" name="criteria"
                                    placeholder="Career Criteria">{{$career->criteria}}</textarea>
                                @error('criteria')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="date">Submission Date</label>
                                <input type="date" class="form-control @error('date') is-invalid @enderror"
                                    value="{{$career->date}}" name="date" placeholder="date">
                                @error('date')
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
