@extends('admin.layouts.master')
@section('title', 'Career Application')
@section('content')
<div class="container-fluid">
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Career Application Lists</h3>
        </div>

        <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>S.N</th>
                        <th>Position</th>
                        <th>Name</th>
                        <th>CV</th>
                        <th>Description</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <?php $i = 1; ?>
                @foreach ($applications as $application)
                <tbody>
                    <tr>
                        <td>{{ $i }}</td>
                        <td>{{ $application->position}}</td>
                        <td> {{ $application->name }}</td>
                        <td> <a href="/{{ $application->cv }}" class="btn btn-success" target="_blank">Download
                                CV</a></td>
                        <td>{{ $application->description }}</td>
                        <td>
                            <a href="{{ route('admin.career.application.delete',$application->id) }}"
                                class="btn text-danger"><i class="fa fa-trash"></i>Delete</a>
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
