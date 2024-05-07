@extends('admin.layouts.master')
@section('title', 'Administrator')
@section('content')
<div class="container-fluid">
    <div class="d-flex justify-content-end">
        <a href="{{ route('admin.administrator.create') }}" class="btn btn-primary my-2">Add Administrator</a>
    </div>
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Administrator Lists</h3>
        </div>

        <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>S.N</th>
                        <th>Administrator Name</th>
                        <th>Phone Number</th>
                        <th>Administrator Role</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <?php $i = 1; ?>
                @foreach ($teams as $team)
                <tbody>
                    <tr>
                        <td>{{ $i }}</td>
                        <td> {{ $team->admin_name }}</td>
                        <td>{{ $team->phone }}</td>
                        <td>{{ $team->admin_role }}</td>
                        <td><a href="{{ route('admin.administrator.edit', $team->id) }}" class="btn text-info"><i
                                    class="fa fa-edit"></i>Edit</a>|<a
                                href="{{ route('admin.administrator.delete', $team->id) }}" class="btn text-danger"><i
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
