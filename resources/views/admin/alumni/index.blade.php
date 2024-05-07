@extends('admin.layouts.master')
@section('title', 'Alumni')
@section('content')
<div class="container-fluid">
    <div class="d-flex justify-content-end">
        <a href="{{route('admin.alumni.create')}}" class="btn btn-primary my-2">Add Alumni</a>
    </div>
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Alumni List</h3>
        </div>

        <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>S.N</th>
                        <th>Alumni Name</th>
                        <th>Alumni Batch</th>
                        <th>Alumni Image</th>
                        <th>Alumni Testimonial</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <?php $i = 1; ?>
                @foreach ($alumnis as $alumni)
                <tbody>
                    <tr>
                        <td>{{$i}}</td>
                        <td>{{$alumni->alumni_name}}</td>
                        <td>{{$alumni->batch}}</td>
                        <td><img style="height: 150px; width:60%; " src="{{asset($alumni->alumni_image)}}" alt="">
                        </td>
                        <td> {{$alumni->alumni_testimonial}}</td>
                        <td><a href="{{route('admin.alumni.edit',$alumni->id)}}" class=" btn text-info"><i
                                    class="fa fa-edit"></i>Edit</a>|<a
                                href="{{route('admin.alumni.delete',$alumni->id)}}" class="btn text-danger"><i
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
