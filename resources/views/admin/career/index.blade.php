@extends('admin.layouts.master')
@section('title', 'Career')
@section('content')
<div class="container-fluid">
    <div class="d-flex justify-content-end">
        <a href="{{ route('admin.career.create') }}" class="btn btn-primary my-2">Add Career</a>
    </div>
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Career Lists</h3>
        </div>

        <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>S.N</th>
                        <th>Submission Date</th>
                        <th>Career Position</th>
                        <th>Career Criteria</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <?php $i = 1; ?>
                @foreach ($careers as $career)
                <tbody>
                    <tr>
                        <td>{{ $i }}</td>
                        <td>{{ $career->date }}</td>
                        <td> {{ $career->position }}</td>
                        <td>{!! $career->criteria !!}</td>
                        <td><a href="{{ route('admin.career.edit', $career->career_id) }}" class="btn text-info"><i
                                    class="fa fa-edit"></i>Edit</a> |
                            <a href="{{ route('admin.career.delete', $career->career_id) }}" class="btn text-danger"><i
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
