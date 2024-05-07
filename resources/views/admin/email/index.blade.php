@extends('admin.layouts.master')
@section('title','Bulk Email')
@section('content')
<section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-primary">


                        <div class="card-header">
                            <h3 class="card-title">Send Bulk Email</h3>
                        </div>
                        <form action="{{ route('admin.email.send') }}" method="post">
                            @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="subject">SUbject</label>
                                    <input type="text" class="form-control @error('subject') is-invalid @enderror" value="{{ old('subject') }}"
                                        name="subject" placeholder="Enter Event">
                                    @error('subject')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="content">Event Description</label>
                                    <textarea type="text" class="form-control @error('content') is-invalid @enderror" name="content"
                                        placeholder="Event Description">{{ old('content') }}</textarea>
                                    @error('content')
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
