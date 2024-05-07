@extends('admin.layouts.master')
@section('title', 'Team')
@section('content')
<div class="container-fluid">
    <div class="d-flex justify-content-end">
        <a href="{{ route('admin.team.create') }}" class="btn btn-primary my-2">Add Team</a>
    </div>
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Team Lists</h3>
        </div>

        <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>S.N</th>
                        <th>Team Name</th>
                        <th>team Role</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <?php $i = 1; ?>
                @foreach ($teams as $team)
                <tbody>
                    <tr>
                        <td>{{ $i }}</td>
                        <td> {{ $team->team_name }}</td>
                        <td>{{ $team->team_role }}</td>
                        <td><a href="{{ route('admin.team.edit', $team->id) }}" class="btn text-info"><i
                                    class="fa fa-edit"></i>Edit</a>|<a
                                href="{{ route('admin.team.delete', $team->id) }}" class="btn text-danger"><i
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
