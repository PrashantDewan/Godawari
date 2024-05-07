@extends('admin.layouts.master')
@section('title', 'Teacher')
@section('content')
<div class="container-fluid">
    <div class="d-flex justify-content-end">
        <a href="{{ route('admin.teacher.create') }}" class="btn btn-primary my-2">Add Teacher</a>
    </div>
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Teacher Lists</h3>
        </div>

        <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>S.N</th>
                        <th>Teacher Name</th>
                        <th>Subject</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <?php $i = 1; ?>
                @foreach ($teachers as $teacher)
                <tbody>
                    <tr>
                        <td>{{ $i }}</td>
                        <td> {{ $teacher->teacher_name }}</td>
                        <td>{{ $teacher->subject }}</td>
                        <td><a href="{{ route('admin.teacher.edit', $teacher->id) }}" class="btn text-info"><i
                                    class="fa fa-edit"></i>Edit</a>|<a
                                href="{{ route('admin.teacher.delete', $teacher->id) }}" class="btn text-danger"><i
                                    class="fa fa-trash"></i>Delete</a>
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
