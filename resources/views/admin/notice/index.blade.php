@extends('admin.layouts.master')
@section('title', 'Notice')
@section('content')
<div class="container-fluid">
    <div class="d-flex justify-content-end">
        <a href="{{route('admin.notice.create')}}" class="btn btn-primary my-2">Add Notice</a>
    </div>
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Notices List</h3>
        </div>

        <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>S.N</th>
                        <th>Notice Added Date</th>
                        <th>Notice Subject</th>
                        <th>Notice Description</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <?php $i = 1; ?>
                @foreach ($notices as $notice)
                <tbody>
                    <tr>
                        <td>{{$i}}</td>
                        <td>{{$notice->created_at->format('M-d-Y')}}</td>
                        <td> {{$notice->subject}}</td>
                        <td>{!!$notice->notice_description!!}</td>
                        <td><a href="{{route('admin.notice.edit',$notice->id)}}" class="btn text-info"><i
                                    class="fa fa-edit"></i>Edit</a> | <a
                                href="{{route('admin.notice.delete',$notice->id)}}" class="btn text-danger"><i
                                    class="fa fa-trash"></i>Delete</a> | <a
                                href="{{route('admin.notice.show',$notice->id)}}" class="btn text-info"><i
                                    class="fa fa-eye"></i>View</a></td>
                    </tr>
                </tbody>
                <?php $i++; ?>
                @endforeach

            </table>
        </div>
    </div>
</div>
@endsection
