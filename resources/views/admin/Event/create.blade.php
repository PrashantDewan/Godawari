@extends('admin.layouts.master')
@section('title', 'Add Event')
@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-primary">


                    <div class="card-header">
                        <h3 class="card-title">Add Event</h3>
                    </div>
                    <form action="{{ route('admin.event.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <div class="form-group">
                                <label for="event_name">Event Name</label>
                                <input type="text" class="form-control @error('event_name') is-invalid @enderror"
                                    value="{{ old('event_name') }}" name="event_name" placeholder="Enter Event">
                                @error('event_name')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="event_description">Event Description</label>
                                <textarea type="text"
                                    class="form-control @error('event_description') is-invalid @enderror"
                                    name="event_description"
                                    placeholder="Event Description">{{ old('event_description') }}</textarea>
                                @error('event_description')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="date">Date</label>
                                <input type="date" class="form-control @error('date') is-invalid @enderror"
                                    value="{{ old('date') }}" name="date" placeholder="Date">
                                @error('date')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="event_image">Event Image</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" name="event_image"
                                            class="custom-file-input @error('event_image') is-invalid @enderror">
                                        <label class="custom-file-label" for="event_image">Choose Image</label>
                                    </div>
                                </div>
                                @error('event_image')
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
