@extends('admin.layouts.master')
@section('title', 'classes')
@section('content')
<div class="container-fluid">
    <div class="d-flex justify-content-end">
        <a href="{{route('admin.classes.create')}}" class="btn btn-primary my-2">Add class</a>
    </div>
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">class List</h3>
        </div>

        <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>S.N</th>
                        <th>class Name</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <?php $i = 1; ?>
                @foreach ($classes as $class)
                <tbody>
                    <tr>
                        <td>{{$i}}</td>
                        <td>{{$class->class_name}}</td>
                        <td><a href="{{route('admin.classes.edit',$class->class_id)}}" class="btn text-info"><i
                                    class="fa fa-edit"></i>Edit</a> | <a
                                href="{{route('admin.classes.delete',$class->class_id)}}" class="btn text-danger"><i
                                    class="fa fa-trash"></i>Delete</a></td>
                    </tr>
                </tbody>
                <?php $i++; ?>
                @endforeach
            </table>
        </div>
    </div>
</div>
@endsection
