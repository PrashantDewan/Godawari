@extends('admin.layouts.master')
@section('title', 'Add Team')
@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Add Team</h3>
                    </div>
                    <form action="{{ route('admin.team.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <div class="form-group">
                                <label for="team_name">Team Name</label>
                                <input type="text" class="form-control @error('team_name') is-invalid @enderror"
                                    value="{{ old('team_name') }}" name="team_name" placeholder="Team Name">
                                @error('team_name')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="team_role">Team Role</label>
                                <textarea type="text"
                                    class="form-control @error('team_role') is-invalid @enderror"
                                    name="team_role"
                                    placeholder="Team Role">{{ old('team_role') }}</textarea>
                                @error('team_role')
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
