@extends('admin.layouts.master')
@section('title', 'Edit Fee')
@section('content')
<section class="content">
    <div class="d-flex justify-content-end">
        <a class="btn btn-primary" href="{{route('admin.fee.index')}}">Back</a>
    </div>
    <div class="container-fluid mt-2">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Edit Fee</h3>
                    </div>


                    <form action="{{ route('admin.fee.update', $fee->id) }}" method="post"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <div class="form-group">
                                <label for="account_name">Account Name</label>
                                <input type="text" class="form-control @error('account_name') is-invalid @enderror"
                                    value="{{$fee->account_name}}" placeholder="Account Name" name="account_name">
                                @error('name')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="Period">Period</label>
                                <input type="text" class="form-control @error('period') is-invalid @enderror"
                                    value="{{$fee->period}}" placeholder="Period" name="period">
                                @error('admission_fee')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="monthly_fee">Rate</label>
                                <input type="text" class="form-control @error('rate') is-invalid @enderror"
                                    value="{{$fee->rate}}" name="rate" placeholder="Rate">
                                @error('monthly_fee')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="classes_id">Class</label>
                                <select name="classes_id" class="form-control" id="">
                                    <option value="">Select Class</option>
                                    @foreach($classes as $class)
                                    <option value="{{$class->class_id}}" {!! old('classes_id'),$fee->classes_id ==
                                        $class->class_id ? 'selected="selected"' : ''
                                        !!}>{{$class->class_name}}</option>
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
