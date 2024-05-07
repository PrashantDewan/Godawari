@extends('admin.layouts.master')
@section('title', 'Add Fee')
@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-primary">


                    <div class="card-header">
                        <h3 class="card-title">Add Fee</h3>
                    </div>
                    <form action="{{ route('admin.fee.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <div class="form-group">
                                <label for="name">Account Name</label>
                                <input type="text" class="form-control @error('name') is-invalid @enderror"
                                    value="{{ old('account_name') }}" name="account_name" placeholder="Acconut Name">
                                @error('account_name')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="admission_fee">Period</label>
                                <input type="text" class="form-control @error('period') is-invalid @enderror"
                                    value="{{ old('period') }}" name="period" placeholder="Period">
                                @error('period')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="monthly_fee">Rate</label>
                                <input type="number" step="any" class="form-control @error('rate') is-invalid @enderror"
                                    value="{{ old('rate') }}" name="rate" placeholder="Enter Rate">
                                @error('rate')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="classes_id">Class</label>
                                <select value="{{ old('classes_id') }}" name="classes_id" class="form-control" id="">
                                    <option value="">Select Class</option>
                                    @foreach($classes as $class)
                                    <option value="{{$class->class_id}}">{{$class->class_name}}</option>
                                    @endforeach
                                </select>
                                @error('classes_id')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
