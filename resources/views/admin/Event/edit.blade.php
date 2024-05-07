@extends('admin.layouts.master')
@section('title', 'Edit Event')
@section('content')
<section class="content">
    <div class="d-flex justify-content-end">
        <a class="btn btn-primary" href="{{route('admin.event.index')}}">Back</a>
    </div>
    <div class="container-fluid mt-2">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Edit Event</h3>
                    </div>


                    <form action="{{ route('admin.event.update', $event->id) }}" method="post"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <div class="form-group">
                                <label for="event_name">Event Subject</label>
                                <input type="text" class="form-control @error('event_name') is-invalid @enderror"
                                    value="{{$event->event_name}}" name="event_name" placeholder="Enter subject">
                                @error('event_name')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="event_description">Event Description</label>
                                <textarea type="text"
                                    class="form-control @error('event_description') is-invalid @enderror"
                                    name="event_description"
                                    placeholder="Event Description">{{$event->event_description}}</textarea>
                                @error('event_description')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="date">Notice Date</label>
                                <input type="date" class="form-control @error('date') is-invalid @enderror"
                                    value="{{$event->date}}" name="date" placeholder="date">
                                @error('date')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="exampleInputFile">Event Image</label>
                                <div class="col-md-3 my-2">
                                    <img style="height: 70px; width:105px;" src="{{asset($event->event_image)}}" alt="">
                                </div>
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
