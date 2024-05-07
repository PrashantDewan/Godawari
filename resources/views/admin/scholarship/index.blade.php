@extends('admin.layouts.master')
@section('title','Scholarship')
@section('content')
<div class="container-fluid">
    <div class="d-flex justify-content-end">
        <a href="{{route('admin.scholarship.create')}}" class="btn btn-primary my-2">Add Scholarship</a>
    </div>
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Scholarship Lists</h3>
        </div>

        <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>S.N</th>
                        <th>Details</th>
                        <th>Scholarship</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <?php $i = 1; ?>
                @foreach ($scholarship as $scholar)
                <tbody>
                    <tr>
                        <td>{{$i}}</td>
                        <td>{{$scholar->details}}</td>
                        <td>{{$scholar->scholarship}}</td>
                        <td><a href="{{route('admin.scholarship.edit',$scholar->id)}}" class="btn text-info"><i
                                    class="fa fa-edit"></i>Edit</a> |
                            <a href="{{route('admin.scholarship.delete',$scholar->id)}}" class="btn text-danger"><i
                                    class="fa fa-trash"></i>Delete</a>
                    </tr>
                </tbody>
                <?php $i++; ?>
                @endforeach

            </table>
        </div>
    </div>
</div>
@endsection
