@extends('admin.layouts.master')
@section('title','Contact')
@section('content')
<div class="container-fluid">
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">DataTable with default features</h3>
        </div>

        <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>S.N</th>
                        <th> Name</th>
                        <th> Email</th>
                        <th> Phone</th>
                        <th> Subject</th>
                        <th> Action</th>

                    </tr>
                </thead>
                <?php $i = 1; ?>
                @foreach ($contacts as $contact)
                <tbody>
                    <tr>
                        <td>{{ $i }}</td>
                        <td>{{ $contact->name }}</td>
                        <td>{{ $contact->email }}</td>
                        <td> {{ $contact->phone }}</td>
                        <td>{{ $contact->subject }}</td>
                        <td><button type="button" class="btn btn-info" data-toggle="modal"
                                data-target="#modal-default-{{ $contact->id }}">
                                <i class="fa fa-eye"></i>view description
                            </button>|
                            <a href="{{route('admin.contact.delete',$contact->id)}}" class="btn text-danger"><i
                                    class="fa fa-trash"></i>Delete</a>
                        </td>

                    </tr>
                    <div class="modal fade" id="modal-default-{{ $contact->id }}">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title">Description</h4>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="container">
                                    <textarea cols="63" rows="10">{{ $contact->contact_description }}</textarea>
                                </div>
                                <div class="modal-footer justify-content-between">
                                    <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>

                                </div>
                            </div>

                        </div>

                    </div>
                </tbody>
                <?php $i++; ?>
                @endforeach

            </table>

        </div>
    </div>
</div>
@endsection
