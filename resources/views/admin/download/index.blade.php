@extends('admin.layouts.master')
@section('title', 'File Download')
@section('content')
<div class="container-fluid">
    <div class="d-flex justify-content-end">
        <a href="{{route('admin.download.create')}}" class="btn btn-primary my-2">Add File</a>
    </div>
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">File List</h3>
        </div>

        <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>S.N</th>
                        <th>File Name</th>
                        <th>File</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <?php $i = 1; ?>
                @foreach ($files as $file)
                <tbody>
                    <tr>
                        <td>{{$i}}</td>
                        <td>{{$file->file_name}}</td>
                        <td><iframe style="height: 150px; width:60%; " src="{{asset($file->file)}}" alt=""></iframe>
                        </td>
                        <td><a href="{{route('admin.download.edit',$file->id)}}" class="btn text-info"><i
                                    class="fa fa-edit"></i>Edit</a>|<a
                                href="{{route('admin.download.delete',$file->id)}}" class="btn text-danger"><i
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
