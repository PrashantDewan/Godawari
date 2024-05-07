@extends('admin.layouts.master')
@section('title', 'Event')
@section('content')
<div class="container-fluid">
    <div class="d-flex justify-content-end">
        <a href="{{ route('admin.event.create') }}" class="btn btn-primary my-2">Add Event</a>
    </div>
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Event Lists</h3>
        </div>

        <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>S.N</th>
                        <th>Event Date</th>
                        <th>Event Name</th>
                        <th>Event Description</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <?php $i = 1; ?>
                @foreach ($events as $event)
                <tbody>
                    <tr>
                        <td>{{ $i }}</td>
                        <td>{{ $event->date }}</td>
                        <td> {{ $event->event_name }}</td>
                        <td>{{ $event->event_description }}</td>
                        <td><a href="{{ route('admin.event.edit', $event->id) }}" class="btn text-info"><i
                                    class="fa fa-edit"></i>Edit</a>|<a
                                href="{{ route('admin.event.delete', $event->id) }}" class="btn text-danger"><i
                                    class="fa fa-trash"></i>Delete</a>|<a
                                href="{{ route('admin.event.show', $event->id) }}" class="btn text-info"><i
                                    class="fa fa-eye"></i>View</a>
                        </td>
                    </tr>
                </tbody>
                <?php $i++; ?>
                @endforeach
            </table>
        </div>
    </div>
</div>
@endsection
