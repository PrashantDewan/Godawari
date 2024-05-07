@extends('admin.layouts.master')
@section('title', 'Message From Executives')
@section('content')
<div class="container-fluid">
    <div class="d-flex justify-content-end">
        <a href="{{route('admin.faculty.create')}}" class="btn btn-primary my-2">Add Executive Message</a>
    </div>
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Executive Message List</h3>
        </div>

        <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>S.N</th>
                        <th>Executive Name</th>
                        <th>Executive Position</th>
                        <th>Executive Message</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <?php $i = 1; ?>
                @foreach ($faculties as $faculty)
                <tbody>
                    <tr>
                        <td>{{$i}}</td>
                        <td> {{$faculty->faculty_name}}</td>
                        <td> {{$faculty->faculty_position}}</td>
                        <td>{{$faculty->faculty_message}}</td>
                        <td><a href="{{route('admin.faculty.edit',$faculty->id)}}" class="btn text-info"><i
                                    class="fa fa-edit"></i>Edit</a> | <a
                                href="{{route('admin.faculty.delete',$faculty->id)}}" class="btn text-danger"><i
                                    class="fa fa-trash"></i>Delete</a> |
                            <a href="{{route('admin.faculty.show',$faculty->id)}}" class="btn text-info"><i
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
