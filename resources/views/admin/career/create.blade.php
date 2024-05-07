@extends('admin.layouts.master')
@section('title', 'Add Career')
@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-primary">


                    <div class="card-header">
                        <h3 class="card-title">Add Carrer</h3>
                    </div>
                    <form action="{{ route('admin.career.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <div class="form-group">
                                <label for="position">Career Position</label>
                                <input type="text" class="form-control @error('position') is-invalid @enderror"
                                    value="{{ old('position') }}" name="position" placeholder="Enter Career Position">
                                @error('position')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="criteria">Career Criteria</label>
                                <textarea id="mytextarea" type="text"
                                    class="form-control @error('criteria') is-invalid @enderror" name="criteria"
                                    placeholder="Career Description">{{ old('criteria') }}</textarea>
                                @error('criteria')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="date">Submission Date</label>
                                <input type="date" class="form-control @error('date') is-invalid @enderror"
                                    value="{{ old('date') }}" name="date" placeholder="Submission Date">
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
