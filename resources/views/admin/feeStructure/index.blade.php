@extends('admin.layouts.master')
@section('title', 'Fee Structures')
@section('content')
<div class="container-fluid">
    <div class="d-flex justify-content-end">
        <a href="{{ route('admin.fee.create') }}" class="btn btn-primary my-2">Add Fee</a>
    </div>
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Fee Structure</h3>
        </div>

        <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>S.N</th>
                        <th>Account Name</th>
                        <th>Period</th>
                        <th>Amount</th>
                        <th>Class</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <?php $i = 1; ?>
                @foreach ($fees as $fee)
                <tbody>
                    <tr>
                        <td>{{ $i }}</td>
                        <td> {{ $fee->account_name }}</td>
                        <td>{{ $fee->period }}</td>
                        <td>{{ $fee->rate }}</td>
                        <td>{{ $fee->class_name}}</td>
                        <td><a href="{{ route('admin.fee.edit', $fee->id) }}" class="btn text-info"><i
                                    class="fa fa-edit"></i>Edit</a> | <a
                                href="{{ route('admin.fee.delete', $fee->id) }}" class="btn text-danger"><i
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
