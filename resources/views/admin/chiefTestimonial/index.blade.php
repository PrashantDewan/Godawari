@extends('admin.layouts.master')
@section('title',"What Leader's Say")
@section('content')
<div class="container-fluid">
    <div class="d-flex justify-content-end">
        <a href="{{route('admin.testimonial.create')}}" class="btn btn-primary my-2">Add Leader's Message</a>
    </div>
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Leader's Message Lists</h3>
        </div>

        <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>S.N</th>
                        <th>Leader Name</th>
                        <th>Leader Designation</th>
                        <th>Leader Message</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <?php $i = 1; ?>
                @foreach ($testimonials as $testimonial)


                <tbody>
                    <tr>
                        <td>{{$i}}</td>
                        <td>{{$testimonial->chief_name}}</td>
                        <td> {{$testimonial->chief_designation}}</td>
                        <td>{{$testimonial->chief_testimonial}}</td>
                        <td><a href="{{route('admin.testimonial.edit',$testimonial->id)}}" class="btn text-info"><i
                                    class="fa fa-edit"></i>Edit</a>|
                            <a href="{{route('admin.testimonial.delete',$testimonial->id)}}" class="btn text-danger"><i
                                    class="fa fa-trash"></i>Delete</a>|
                            <a href="{{route('admin.testimonial.show',$testimonial->id)}}" class="btn text-info"><i
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
